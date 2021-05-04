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
            <div class="cardPack">
            
            <div class="newCard" id="home">
                <div class="content">
                    <h2>Welcome to Clockout</h2>
                    <h3>The web's best retirement toolbox</h3>
                    <p>Clockout provides a complete toolset for planning for your retirement. Start with the basic retirement calculator below to determine how much money you will need to save to retire by your target retirement date. On click, the screen should scroll to the next card.</p>
                    <a href="https://codewithawa.com/posts/check-if-user-already-exists-without-submitting-form" target="_blank">Password reset</a>
                    <a href="#introForm" class="cardButton">Get Started</a>
                </div>
            </div>

            <div class="newCard" id="introForm">
                <div class="content">
                    <h2>Retirement Calculator</h2>
                    <h3>When Can You Retire?</h3>
                    <div id="intro-collapse">
                        <div id="intro-form">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint repellat recusandae corrupti odit voluptatibus voluptas aliquid eaque ullam consectetur corporis nihil accusamus reprehenderit qui, quia obcaecati quos tempora suscipit nostrum ducimus minima, mollitia nesciunt commodi repudiandae debitis! Veritatis quo quia sunt. Velit quo magnam aliquam saepe dolore laudantium sed, id eaque dicta commodi, vitae laborum non quam cupiditate nemo consequuntur iste nesciunt ipsam maiores dolorum suscipit quibusdam quos esse? Unde nulla soluta veniam! Hic, cumque?</p>
                            <div id="form-container">
                            <div>
                                <label for="intro-sex">Gender:</label>
                                <input class="" type="radio" name="intro-sex" id="intro-sex-male" value="male">
                                <label class="" for="intro-sex-male">Male</label>
                                <input class="" type="radio" name="intro-sex" id="intro-sex-female" value="female">
                                <label class="" for="intro-sex-female">Female</label>
                            </div>
                            <label for="intro-age">How Old Are You?</label>
                            <input type="number" name="intro-age" id="intro-age" placeholder="Current Age">

                            <label for="intro-retireAge">When Do You Want To Retire? </label>
                            <input type="number" name="intro-retireAge" id="intro-retireAge" placeholder="Retirement Age">

                            <label for="intro-targetIncome">What Is Your Target Retirement Income? 
                                <span id="intro-subdue">(In Today's Dollars)</span>
                            </label>
                            <input type="number" name="intro-targetIncome" id="intro-targetIncome" placeholder="Annual Retirement Income"> 

                            <label for="intro-principal">How Much Have You Already Saved? <span id="intro-subdue">(Optional)</span></label>
                            <input type="number" name="intro-principal" id="intro-principal" placeholder="Current Savings & Investments">

                            <label for="intro-estate">Do You Want To Leave An Estate? <span id="intro-subdue">(Optional)</span></label>
                            <input type="number" name="intro-estate" id="intro-estate" placeholder="For The Kids">
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
                            <p id="intro-results-hook">With Social Security, pensions, and other accounts, you may not even need to save that. Clockout can help you sort out the specifics, so you can retire earlier than you thought.</p>
                            <div class="intro-btn-group">
                                <a href="#register" class="cardButton">Register</a>
                                <a href="#planner-tool" class="cardButton">Start Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <input type="submit" class="cardButton" name="intro-submit" id="intro-submit" value="Calculate">
                </div>
            </div>

            <div class="newCard" id="planner-tool">
                <div class="content">
                    <h2>Retirement Planner</h2>
                    <h3>text</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, officia? Corrupti blanditiis fugit magni amet.</p>
                </div>
            </div>

            <div class="newCard" id="about">
                <div class="content">
                    <h2>About</h2>
                    <h3>text</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, officia? Corrupti blanditiis fugit magni amet.</p>
                </div>
            </div>

            <div class="newCard">
                <div class="content">
                    <h2>Login</h2>
                    <h3>text</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, officia? Corrupti blanditiis fugit magni amet.</p>
                </div>
            </div>

            <div class="newCard">
                <div class="content">
                    <h2>Register</h2>
                    <h3>text</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, officia? Corrupti blanditiis fugit magni amet.</p>
                </div>
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
    


    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="js/nav.js"></script>
    <script type="module" src="js/data.js"></script>
    <script type="module" src="js/forecast.js"></script>
</body>
</html>