<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClockOut - 2021</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php include('headers/header.php'); ?>
    </div>
    <div class="background">
        <ul class="circle">
            <li class="one"></li>
            <li class="two"></li>
            <li class="three"></li>
            <li class="four"></li>
        </ul>
        <div class="container">
            <div class="newCard">
                <div class="content">
                    <h2>Welcome to Clockout</h2>
                    <h3>When Can You Retire?</h3>
                    <p>Explanation for why you should use this tool.</p>
                    <div style="height: 48px;">
                        <span id="intro-retireAgeWarning" style="visibility: hidden;" class="alert alert-danger">Retirement Age Must Be Greater Than Your Current Age</span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                    <!-- <label for="intro-sex">Are you:  </label> -->
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="intro-sex" id="intro-sex-male" value="male">
                        <label class="form-check-label" for="intro-sex-male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="intro-sex" id="intro-sex-female" value="female">
                        <label class="form-check-label" for="intro-sex-female">Female</label>
                    </div>
                </div>
                <label for="intro-age">How Old Are You?</label>
                <input type="number" class="form-control form-control-sm" name="intro-age" id="intro-age" placeholder="Current Age">

                <label for="intro-retireAge">When Do You Want To Retire? </label>
                <input type="number" class="form-control form-control-sm" name="intro-retireAge" id="intro-retireAge" placeholder="Retirement Age">

                <label for="intro-targetIncome">What Is Your Target Retirement Income? 
                    <span id="intro-subdue">(In Today's Dollars)</span>
                </label>
                <input type="number" class="form-control form-control-sm" name="intro-targetIncome" id="intro-targetIncome" placeholder="Annual Retirement Income"> 

                <label for="intro-principal">How Much Have You Already Saved? <span id="intro-subdue">(Optional)</span></label>
                <input type="number" class="form-control form-control-sm" name="intro-principal" id="intro-principal" placeholder="Current Savings & Investments">

                <label for="intro-estate">Do You Want To Leave An Estate? <span id="intro-subdue">(Optional)</span></label>
                <input type="number" class="form-control form-control-sm" name="intro-estate" id="intro-estate" placeholder="For The Kids">

                <input type="submit" class="form-control cardButton" name="intro-submit" id="intro-submit" value="Calculate">
                <a href="https://codewithawa.com/posts/check-if-user-already-exists-without-submitting-form" target="_blank">Password reset</a>
                </div>
            </div>

            <div class="newCard">
                <div class="content">
                    <h2>Calculator</h2>
                    <h3>How To...</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo eum est aperiam eveniet! </p>
                    <a href="#" class="cardButton">Get Started</a>
                </div>
            </div>
        </div>
    </div>


            <!-- <div class="p-3 d-flex flex-column align-items-center" id="intro-results">
                <p>To retire at:</p> 
                <p id="intro-results-retAge">XX</p>
                <p>will need to have saved</p> 
                <p id="intro-results-nestEgg">$0,000</p> 
                <p>by retirement. Based on your information you will need to save:</p> 
                <p id="intro-results-monthlySave">$0,000</p> 
                <p>per month until retirement.</p>
                <p id="intro-results-hook">With Social Security, pensions, and other accounts, you may not even need to save that. Clockout can help you sort out the specifics, so you can retire earlier than you thought.</p>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-success" name="intro-register" id="intro-register" value="Start Now">            
                </div>
            </div> -->

    <!-- <div id="demo" class="mt-5">
        <h4>See It In Action</h4>
    </div>
    <div id="planner" class="mt-5">
        <h4>Plan To Clock Out</h4>
    </div>
    <div id="about" class="mt-5">
        <h4>About ClockOut Online</h4>
    </div>
    <div id="footer" class="mt-5">
        <p>contact form as col1</p>
        <p>Sitemaps as col2</p>
        <p>Logo or something as col3</p>
    </div> -->
    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="js/nav.js"></script>
    <script type="module" src="js/data.js"></script>
    <script type="module" src="js/forecast.js"></script>
</body>
</html>