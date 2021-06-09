<div class="tab" id="demographics">
    <!-- Insert Accordion/Card Head Here -->
    <!-- Insert Card Body Here -->
        <!-- Card Body Should have a container for 3 equally sized columns/containers, and a separate container for the button below (which should be hidden once entering the accordion). Use the bootstrap tech to build this: https://getbootstrap.com/docs/4.3/components/collapse/ -->
    <div class="tempAccordHead">

    </div>
    <div class="tempAccordBody">
        <div class="surveyContent">
            <div class="surveyDemographics">
                <div class="dob">
                    <label for="dob" data-value="Enter Your Date of Birth">Date of Birth: <br><input type="date" name="dob" id="dob" class="data" tabindex="0" oninput="$(this).removeClass('invalid')" value=""></label>
                </div>
                <div class="gender">
                    <label for="gender" data-value="A Binary Gender Is Needed for Life Expectancy Projections">Sex: <br>
                    <select name="gender" id="gender" oninput="$(this).removeClass('invalid')" data-value="Gender is needed for life expectancy projections" class="data" >
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
                    <label for="retSal" data-value="Total Anticipated Annual Retirement Expenses, in Today's Dollars">Annual Retirement Expenses: <br><input type="number" name="retSal" id="retSal" class="data" min="0" value="" oninput="$(this).removeClass('invalid')"><img src="https://img.icons8.com/material-outlined/24/FFFFFF/calculator--v2.png" id="calculator" onclick="$('#retSalCalc').toggle();document.getElementById('housing').focus();" title="Click to Build A Budget" tabindex="0"/></label>
                </div>
                <div class="retAge">
                    <label for="retAge" data-value="Target Retirement Age">Target Retirement Age: <br><input type="number" name="retAge" maxlength="2" id="retAge" class="data" oninput="$(this).removeClass('invalid')" value=""></label>
                </div>
                <!-- <div class="retState">
                    <label for="state" data-value="The State Where You Will Retire">Retirement State:</label></p>
                    <><select name="state" id="retState" class="data" oninput="$(this).removeClass('invalid')"></select>
                </div> -->
            </div>
            <div class="surveyIncome">
                <h3>Income &amp; Benefits:</h3>
                <label data-title="Social Security Retirement Benefits" class="accountItems">
                    <input type="checkbox" class="accountTypes socialSecurity">Social Security Retirement
                </label>
                <br>
                <label data-title="Enter Your Pension(s) Here" class="accountItems">
                    <input type="checkbox" class="accountTypes genPension">Generic Pension
                </label>
                <p>
                    <label data-title="Federal Employees Enter Their FERS Details Here" class="accountItems">
                        <input type="checkbox" class="accountTypes fersPension">FERS Pension
                    </label>
                </p>
                <p>
                    <label data-title="Enter Annuity or Insurance Details Here" class="accountItems">
                        <input type="checkbox" class="accountTypes annuities">Annuities/Insurance
                    </label>
                </p>
                <p>
                    <label data-title="Enter VA Disability Details Here" class="accountItems">
                        <input type="checkbox" class="accountTypes vaDisability">VA Disability
                    </label>
                </p>
                <p>
                    <label data-title="Enter Social Security Disability Details Here" class="accountItems">
                        <input type="checkbox" class="accountTypes ssiDisability">Social Security Disability Insurance
                    </label>
                </p>
                <p>
                    <label data-title="Enter Other Sources of Disability Benefits Here" class="accountItems">
                        <input type="checkbox" class="accountTypes otherDisability">Other Disability
                    </label>
                </p>
                <p>
                    <label data-title="Enter Estimated Annual Income From Job(s) You Plan to Work in Retirement Here" class="accountItems">
                        <input type="checkbox" class="accountTypes retireSal">Retirement Salary
                    </label>
                </p>
                <p>
                    <label data-title="Enter Annual Rental Profits Here" class="accountItems">
                        <input type="checkbox" class="accountTypes rents">Rental Income
                    </label>
                </p>
                <p>
                    <label data-title="Enter Any Other Income or Benefits Here" class="accountItems">
                        <input type="checkbox" class="accountTypes otherBen">Other Benefits
                    </label>
                </p>
            </div>
            <div class="surveyInvestments">
            <h3>Investment Accounts:</h3>
            <p><label data-title="Enter Your Traditional IRA Information Here" class="accountItems"><input type="checkbox" class="accountTypes tradIra">Traditional IRAs</label></p><p><label data-title="Enter Your Roth IRA Information Here" class="accountItems"><input type="checkbox" class="accountTypes rothIra">Roth IRAs</label></p><p><label data-title="Enter Information on Traditional 401k, 403b, 457, TSP, Safe Harbor 401k, and Single 401k Accounts Here" class="accountItems"><input type="checkbox" class="accountTypes tradAccts">Traditional Employee Contribution Plans</label></p><p><label data-title="Enter Information on Roth 401k, 403b, 457, and TSP Accounts Here" class="accountItems"><input type="checkbox" class="accountTypes rothAccts">Roth Employee Contribution Plans</label></p><p><label data-title="Enter Simple IRA Details Here" class="accountItems"><input type="checkbox" class="accountTypes simpleIra">Simple IRA</label></p><p><label data-title="Enter Simple 401k Details Here" class="accountItems"><input type="checkbox" class="accountTypes simple401">Simple 401k</label></p><p><label data-title="Enter Information On All Non-Tax-Advantaged Accounts Here" class="accountItems"><input type="checkbox" class="accountTypes investmentAcct">Investment Accounts</label></p><p><label data-title="Enter Information On Savings/Money Market/CD/ and Other Low Interest Rate Accounts Here" class="accountItems"><input type="checkbox" class="accountTypes saveAcct">Savings/Money Market Accounts</label></p>
            </div>
        </div>
    </div>
</div>
