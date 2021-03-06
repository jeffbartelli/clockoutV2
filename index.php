<?php

require('connection.php');
$time = time();
$action = 'submit_form';
$str = sprintf('%s_%s_%s', $action, $time, NONCE_SALT);
$hash = hash('sha512', $str);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClockOut - 2021</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/accordion.css">    
</head>
<body>
    <div>
        <?php include('headers/header.php'); ?>
    </div>
    <div id="background">
        <ul class="circle">
            <li class="one"></li>
            <li class="two"></li>
            <li class="three"></li>
            <li class="four"></li>
        </ul>
    </div>

    <div id="container">
        
        <div class="newCard" id="home">
            <div class="content">
                <h2>Welcome to Clockout</h2>
                <h3>The web's best retirement toolbox</h3>
                <p>Clockout provides a complete toolset for planning for your retirement. Start with the basic retirement calculator below to determine how much money you will need to save to retire by your target retirement date.</p>
                <a href="https://codewithawa.com/posts/check-if-user-already-exists-without-submitting-form" target="_blank">Password reset</a>
                <input type="button" class="cardButton" onclick="location.href='#introForm'" value="Get Started" />
            </div>
        </div>

        <div class="newCard" id="introForm">
            <div class="content">
                <h2>Retirement Calculator</h2>
                <h3>When Can You Retire?</h3>
                <div id="intro-collapse">
                    <div id="intro-form">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint repellat recusandae corrupti odit voluptatibus voluptas aliquid eaque ullam consectetur corporis nihil accusamus reprehenderit qui, quia obcaecati quos tempora suscipit nostrum ducimus minima,  </p>
                        <div id="form-container">
                        <div>
                            <label for="intro-sex">Gender:</label>
                            <label class="" for="intro-sex-male">Male</label>
                            <input class="" type="radio" name="intro-sex" id="intro-sex-male" value="male">
                            <label class="" for="intro-sex-female">Female</label>
                            <input class="" type="radio" name="intro-sex" id="intro-sex-female" value="female">
                        </div>
                        
                        <label for="intro-age">How Old Are You?</label>
                        <input type="number" name="intro-age" id="intro-age">

                        <label for="intro-retireAge">At What Age Do You Want To Retire? </label>
                        <input type="number" name="intro-retireAge" id="intro-retireAge">

                        <label for="intro-targetIncome">What Is Your Target Retirement Income? 
                            <span id="intro-subdue">(In Today's Dollars)</span>
                        </label>
                        <input type="number" name="intro-targetIncome" id="intro-targetIncome"> 

                        <label for="intro-principal">How Much Have You Already Saved? <span id="intro-subdue">(Optional)</span></label>
                        <input type="number" name="intro-principal" id="intro-principal">

                        <label for="intro-estate">Do You Want To Leave An Estate? <span id="intro-subdue">(Optional)</span></label>
                        <input type="number" name="intro-estate" id="intro-estate">

                        <input type="hidden" name="timestamp" id="timestamp" value="<?php echo $time; ?>">
                        <input type="hidden" name="form_action" id="form-action" value="<?php echo $action ?>">
                        <input type="hidden" name="form_hash" id="form-hash" value="<?php echo $hash ?>">
                        </div>
                    </div>
                    <div id="intro-form-result">
                        <h3>To retire at</h3> 
                        <h2 id="intro-results-retAge">XX</h2>
                        <h3>will need to have saved</h3> 
                        <h2 id="intro-results-nestEgg">$0,000</h2> 
                        <h3>To hit that target you must save</h3> 
                        <h2 id="intro-results-monthlySave">$0,000</h2> 
                        <h3>every month until retirement.</h3>
                        <p id="intro-results-hook">ALTER THE FUNCTION TO INCLUDE CAPITAL GAINS TAX? PAYROLL TAX? REDUCE THE GROWTHRATE TO ACCOUNT FOR TAXES? CHECK HEIGHT OF THIS DIV WHEN MOBILE: IT'S CUTTING OFF A BUTTON. With Social Security, pensions, and other accounts, you may not even need to save that. Clockout can help you sort out the specifics, so you can retire earlier than you thought.</p>
                        <div class="intro-btn-group">
                            <a href="register.php" class="cardButton register">Register</a>
                            <a href="#planner-tool" class="cardButton">Start Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <input type="button" class="cardButton" name="intro-submit" id="intro-submit" value="Calculate" disabled>
            </div>
        </div>

        <div class="newCard" id="planner-tool">
            <div class="content">
                <h2>Retirement Planner</h2>
                <h3>Basic Information</h3>
                <p>BEGIN ENTERING PERSONAL INFORMATION HERE. THEN CHECK THE BOX FOR EACH TYPE OF ACCOUNT AND ASSET THAT YOU HAVE. YOU WILL THEN ENTER BASIC INFORMATION ABOUT EACH OF YOUR SELECTIONS. HAVE YOUR SAVINGS AND RETIREMENT INFORMATION ON HAND BEFORE YOU BEGIN. IF YOU HAVE YOUR INFORMATION, EACH SECTION CAN BE COMPLETED IN ABOUT A MINUTE. SOON YOU'LL KNOW WHEN YOU CAN RETIRE AND HOW TO SPEND FROM YOUR ACCOUNTS OVER TIME TO ENSURE YOU NEVER RUN OUT OF MONEY.</p>
                <div class="content">
                    <?php include('content/planner.php'); ?>
                </div>
            </div>
            <div class="content">
                <input type="button" value="Begin" class="cardButton">
            </div>
        </div>

        <div class="newCard">
            <!-- Source Code: https://codepen.io/codiesbugs/pen/zYqzvZW -->
        <div class="accordion-wrapper">
            <div class="accordion">
                <input type="radio" name="radio-a" id="check1" class="accordion-radio" checked>
                <label class="accordion-label" for="check1">Accordion 1</label>
                <div class="accordion-content">
                <p>Hey there, you are watching codiesbugs &#128522;</p>
                </div>
            </div>
            <div class="accordion">
                <input type="radio" name="radio-a" id="check2" class="accordion-radio">
                <label class="accordion-label" for="check2">Accordion 2</label>
                <div class="accordion-content">
                <p>I hope you are enjoing the video, don't forget to give your feedback in comment section</p>
                </div>
            </div>
            <div class="accordion">
                <input type="radio" name="radio-a" id="check3" class="accordion-radio">
                <label class="accordion-label" for="check3">Accordion 3</label>
                <div class="accordion-content">
                <p>If you liked then don't forget to subscribe the channel for latest videos. </p>
                </div>
            </div>
        </div>
        </div>

        <div class="" id="about">
            <div class="content">
                <h2>About</h2>
                <h3>text</h3>
                <p>I want to have links to my other pages here, presented as glass tiles?, A contact form, header links, a brief about paragraph, and links to my various socials.</p>
            </div>
        </div>
    </div>   

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="js/nav.js"></script>
    <script type="module" src="js/data.js"></script>
    <script type="module" src="js/forecast.js"></script>
</body>
</html>