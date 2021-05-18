import { life, growthRate, dollarFormat } from './data.js';

document.addEventListener('DOMContentLoaded', () => {

    let genderCheck = false;
    let currentAgeCheck = false;
    let retireAgeCheck = false;
    let incomeCheck = false;
    localStorage.setItem("introComplete","false");

    function verify () {
        if (genderCheck == true && currentAgeCheck == true && retireAgeCheck == true && incomeCheck == true) {
            document.getElementById('intro-submit').disabled = false;
        }
    }

    document.querySelectorAll('input[name="intro-sex"]').forEach((elem) => {
        elem.addEventListener("change", function(event) {
          genderCheck = true;
          verify();
        });
    });

    document.getElementById('intro-age').addEventListener('keyup', function(e) {
        let invalidChars = ["-","+","e",];
        if (invalidChars.includes(e.key)) {
            this.value = '';
            this.classList.add('entryError');
            this.placeholder = 'Must be a number';
        } else {
            this.classList.remove('entryError');
        }
    })
    
    document.getElementById('intro-age').addEventListener('blur', function() {
        if (Number.isInteger(+this.value)) {
            currentAgeCheck = true;
            this.classList.remove('entryError');
            verify(); 
        } else {
            this.value = '';
            this.classList.add('entryError');
            this.placeholder = 'Must be a number';
        }
    });

    document.getElementById('intro-retireAge').addEventListener('blur', () => {
        let age = document.getElementById('intro-age').value;
        let retireAgeField = document.getElementById('intro-retireAge');
        let retireAge = retireAgeField.value;
        if (retireAge <= age) {
            retireAgeField.value = '';
            retireAgeField.classList.add('entryError');
            retireAgeField.placeholder = "Must Be Greater Than Current Age";
        } else {
            retireAgeField.classList.remove('entryError');
            retireAgeField.placeholder = "";
            retireAgeCheck = true;
            verify();
        }
    });

    document.getElementById('intro-targetIncome').addEventListener('keyup', function(e) {
        let invalidChars = ["-","+","e",];
        if (invalidChars.includes(e.key)) {
            this.value = '';
            this.classList.add('entryError');
            this.placeholder = 'Must be a number';
        } else {
            this.classList.remove('entryError');
        }
    })
    
    document.getElementById('intro-targetIncome').addEventListener('blur', function() {
        if (Number.isInteger(+this.value)) {
            incomeCheck = true;
            this.classList.remove('entryError');
            verify(); 
        } else {
            this.value = '';
            this.classList.add('entryError');
            this.placeholder = 'Must be a number';
        }
    });

    document.getElementById('intro-submit').addEventListener('click', function(e) {
        e.preventDefault();

        let introResponse = {
            "gender" : document.getElementById('intro-sex-male').checked ? "male" : "female",
            "currentAge" : document.getElementById('intro-age').value,
            "retireAge" : document.getElementById('intro-retireAge').value,
            "retireIncome" : document.getElementById('intro-targetIncome').value,
            "savings" : document.getElementById('intro-principal').value || 0,
            "estate" : document.getElementById('intro-estate').value || 0,
            "timestamp" : document.getElementById('timestamp').value,
            "formAction" : document.getElementById('form-action').value,
            "formHash" : document.getElementById('form-hash').value,
        }
        sessionStorage.setItem('intro-response', JSON.stringify(introResponse));

        console.log('before ajax call');
        console.log(localStorage.introComplete);
        if (localStorage.introComplete === "false") {
            console.log('introComplete = false');
            $.ajax({
                type: 'POST',
                url: 'introResponse.php',
                data: introResponse,
                dataType: 'json',
                encode: true,
                success: function(data){
                    alert(data);
                },
                error: function(xhr, status, error){
                    console.log(xhr, status, error);
                }
            })
            // .then((data) => {
            //     if (data == true) {
            //         localStorage.setItem("introComplete","true");
            //     }
            //     console.log(data);
            //     console.log('mission accomplished');
            // });
            console.log('end of if');
        }

        // Some code to try and make both the form and results divs the same height
        let height = $('#intro-form-result').outerHeight();
        $('#intro-form').outerHeight(height);

        $("#intro-form").animate({
            height: height + "px",
            width: "toggle"
        });

        if ($('#intro-submit').val() == "Calculate") {
            $('#intro-form-result').outerHeight(height);
            $("#intro-form-result").animate({width: "toggle"});
            $('#intro-submit').val("Update");
        } else if ($('#intro-submit').val() == "Submit") {
            $('#intro-submit').val("Update");
            $("#intro-form-result").animate({width: "toggle"});
        } else {
            $("#intro-form-result").animate({width: "toggle"});
            $('#intro-submit').val("Submit");
        }
        
        
        let sex = document.querySelector('input[name="intro-sex"]:checked').value;
        let age = document.getElementById('intro-age').value;
        let retireAge = document.getElementById('intro-retireAge').value;
        let targetIncome = document.getElementById('intro-targetIncome').value * (1+growthRate.inflation) ** (retireAge - age);
        let principal = document.getElementById('intro-principal').value == '' ? 0 : document.getElementById('intro-principal').value;
        let currentYear = new Date().getFullYear();
        let deathAge = life[currentYear - age][sex == 'male' ? 0 : 1] + life.stdev[sex == 'male' ? 0 : 1];       
        let estate = document.getElementById('intro-estate').value == '' ? 0 : document.getElementById('intro-estate').value * (1+growthRate.inflation) ** (retireAge - age);
        let retirementLength = deathAge - retireAge;
        let nestEgg = targetIncome*((1-((1+growthRate.inflation)/(1+growthRate.sp500)) ** retirementLength)/(growthRate.sp500-growthRate.inflation));
        let monthlySave = (growthRate.sp500/12)*(((nestEgg+estate)-(principal*(1+(growthRate.sp500/12))**(12*(retireAge-age))))/((1+(growthRate.sp500/12))**(12*(retireAge-age))-1));

        document.getElementById('intro-results-retAge').textContent = retireAge;
        document.getElementById('intro-results-nestEgg').textContent = dollarFormat.format(nestEgg+estate);
        document.getElementById('intro-results-monthlySave').textContent = dollarFormat.format(monthlySave);
        document.getElementById('intro-submit').value = "Update";
    });
});