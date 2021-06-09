



<div class="tab" id="socialSecurity">
      <div class="survey-header">
        <h4 class="sectionHeader income">Social Security Retirement</h4>
      </div>
      <div class="survey-content">
        <div class="survey-instructions">
          <h4>Instructions</h4>          
          <p>
            Enter your estimated Social Security retirement benefit here. You can enter either the monthly or annual amount. Enter the full (100%) benefit amount.
          </p>
          <p> 
            Select the age at which you want to begin receiving Social Security benefits. You will receive 100% of your benefits if you initiate benefits at the age of 67. You will receive a reduced percentage if you begin receiving benefits before 67. You will receive an increased percentage if you begin receiving benefits after 67. The age dropdown will show you the percentage received for each age.
            </p>
          <h4>Details</h4>
          <p>There are two ways to determine your estmated monthly benefit:</p>
            <ul>
              <li>The Social Security Administration's <a href="https://www.ssa.gov/benefits/retirement/estimator.html" target="_blank">Retirement Estimator</a> (easiest option), or</li>
              <li>A detailed estimate retrieved from your <a href="https://secure.ssa.gov/RIL/SiView.action" target="_blank">Social Security account</a></li>
            </ul>
          <p>Warning: The Social Security Administration estimates that after 2035 it will only collect enough payroll taxes to provide 80% of your benefit. ClockOut adjusts your anticipated benefits accordingly.</p>
        </div>
        <div class="survey-fields">
          <div class="annAmt_ssi">
            <p><label for="annAmt_ssi">Monthly or annual Social Security retirement benefit:</label></p>
            <p>
              <input type="number" class="monthlyCalc" onchange="monthlyCalc(this)" placeholder="Monthly Amount"> x 12 = <input type="number" name="annAmt_ssi" id="annAmt_ssi" class="data" oninput="$(this).removeClass('invalid')" placeholder="Annual Amount"></p>
          </div>
          <div class="beginAge_ssi">
            <p><label for="beginAge_ssi">Begin Social Security benefits age:</label></p>
            <p>
              <select name="beginAge_ssi" id="beginAge_ssi" class="data" oninput="$(this).removeClass('invalid')">
                <option value="" disabled selected hidden>Select one</option>
                <option value="62">62 (70%)</option>
                <option value="63">63 (76%)</option>
                <option value="64">64 (82%)</option>
                <option value="65">65 (88%)</option>
                <option value="66">66 (94%)</option>
                <option value="67">67 (100%)</option>
                <option value="68">68 (108%)</option>
                <option value="69">69 (116%)</option>
                <option value="70">70 (124%)</option>
              </select>
            </p>
          </div>
        </div>
      </div>
    </div>