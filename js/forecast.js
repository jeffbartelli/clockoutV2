import { life, growthRate, dollarFormat } from './data.js';

document.addEventListener('DOMContentLoaded', () => {

    document.getElementById('intro-retireAge').addEventListener('blur', () => {
        let age = document.getElementById('intro-age').value;
        let retireAgeField = document.getElementById('intro-retireAge');
        let retireAge = retireAgeField.value;
        if (retireAge <= age) {
            retireAgeField.value = '';
            // document.getElementById('intro-retireAgeWarning').style.visibility = "visible";
            retireAgeField.style.backgroundColor = 'rgba(29, 3, 3, 0.918)';
            retireAgeField.style.borderColor = "rgba(224, 1, 1, 0.856)";
            retireAgeField.style.color = "rgba(224, 1, 1, 0.856)";
            retireAgeField.placeholder = "Must Be Greater Than Current Age";
        } else {
            // document.getElementById('intro-retireAgeWarning').style.visibility = "hidden";
            retireAgeField.style.backgroundColor = "rgba(22, 29, 16, 0.5)";
            retireAgeField.style.color = "rgba(255,255,255,0.8)";
            retireAgeField.style.borderTop = "1px solid rgba(0,0,0,0.2)";
            retireAgeField.style.borderBottom = "1px solid rgba(255,255,255,0.5)";
            retireAgeField.style.borderLeft = "1px solid rgba(0,0,0,0.2)";
            retireAgeField.style.borderRight = "1px solid rgba(255,255,255,0.5)";
            retireAgeField.placeholder = "Retirement Age";
        }
    });

    //Form Validation with the formvalidation.io library. This will be useful across the site!

    $("#intro-submit").click(function(e){
        e.preventDefault();
        let height = $('#intro-form-result').outerHeight();
        $('#intro-form').outerHeight(height);

        $("#intro-form").animate({
            height: height + "px",
            width: "toggle"
        });
        // $("#intro-form-result").animate({width: "toggle"});

        if ($('#intro-submit').val() == "Calculate") {
            $('#intro-form-result').outerHeight(height);
            // $('#intro-form-result').toggle();
            $("#intro-form-result").animate({width: "toggle"});
            $('#intro-submit').val("Update");
        } else if ($('#intro-submit').val() == "Submit") {
            $('#intro-submit').val("Update");
            // $('#intro-form-result').toggle();
            $("#intro-form-result").animate({width: "toggle"});
        } else {
            // $('#intro-form-result').toggle();
            $("#intro-form-result").animate({width: "toggle"});
            $('#intro-submit').val("Submit");
        }
    });

    document.getElementById('intro-submit').addEventListener('click', () => {
        

        
        // let div1 = document.getElementById('intro-form');
        // let div2 = document.getElementById('intro-results');
        // div2.style.width = div1.style.width;
        // console.log(div1.offsetWidth);
        // console.log(div2.offsetWidth);
        // const slideRight = elem => elem.style.width = `${elem.scrollWidth}px`;
        // slideRight(document.getElementById("intro-results"));
        
        
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