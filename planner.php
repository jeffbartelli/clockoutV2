<div class="tab" id="demographics">
    <div class="survey-content">
    <div id="personalDetails" class="">
        <div class="personalDetails-format">
        <div class="dob">
            <label for="dob" data-value="Enter Your Date of Birth">Date of Birth: <br><input type="date" name="dob" id="dob" class="data" tabindex="0" oninput="$(this).removeClass('invalid')" value=""></label>
        </div>
        <div class="gender">
            <label for="gender" data-value="A Binary Gender Is Needed for Life Expectancy Projections">Sex: <br><select name="gender" id="gender" oninput="$(this).removeClass('invalid')" data-value="Gender is needed for life expectancy projections" class="data" >
                <option value="" selected disabled></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            </label>
        </div>
        <!-- <div class="married">
            <label for="married" data-value="Anticipated Tax Filing Status in Retirement">Married: <br><select name="married" id="married" class="data" oninput="$(this).removeClass('invalid')">
                <option value="single" selected>Single</option>
                <option value="married">Married</option>
                <option value="married">Married Filing Separately</option>
                <option value="headOfHousehold">Head of Household</option>
            </select>
            </label>
        </div> -->
        <div class="salary">
            <label for="salary" data-value="Enter Your Current, Total Annual Income">Current Annual Income: <br><input type="number" name="salary" id="salary" min="0" value="" class="data" oninput="$(this).removeClass('invalid')"></label>
        </div>
        <div class="retSal">
            <label for="retSal" data-value="Total Anticipated Annual Retirement Expenses, in Today's Dollars">Annual Retirement Expenses: <br><input type="number" name="retSal" id="retSal" class="data" min="0" value="" oninput="$(this).removeClass('invalid')"></label><span id="calcLineBreak"><img src="https://img.icons8.com/material-outlined/24/FFFFFF/calculator--v2.png" id="calculator" onclick="$('#retSalCalc').toggle();document.getElementById('housing').focus();" title="Total Budget Calculator." tabindex="0"/>(Click to build a budget)</span>
        </div>
        <div class="retAge">
            <label for="retAge" data-value="Target Retirement Age">Target Retirement Age: <br><input type="number" name="retAge" maxlength="2" id="retAge" class="data" oninput="$(this).removeClass('invalid')" value=""></label>
        </div>
        <!-- <div class="retState">
            <label for="state" data-value="The State Where You Will Retire">Retirement State:</label></p>
            <><select name="state" id="retState" class="data" oninput="$(this).removeClass('invalid')"></select>
        </div> -->
        </div>
    </div>
    <div class="investmentSelect">
    </div>
    </div>
</div>
<input type="button" value="Begin" class="cardButton">
