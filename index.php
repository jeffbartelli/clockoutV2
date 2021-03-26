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
    <div id="home" class="container-fluid mt-5">
        <h4>Welcome to ClockOut</h4>
        <a href="https://codewithawa.com/posts/check-if-user-already-exists-without-submitting-form" target="_blank">Password reset</a>

        <div class="d-flex flex-row justify-content-center">
            <div class="card p-3" id="intro" style="width: 40vw;">
                <div>
                    <span id="intro-retireAgeWarning" style="visibility: hidden;">Retirement Age Must Be Greater Than Your Current Age</span>
                </div>
                <p>Content/Instructions...</p>
                <div class="form-group">
                    <label for="intro-age">How Old Are You?</label>
                    <input type="number" class="form-control" name="intro-age" id="intro-age" placeholder="Current Age">
                </div>
                <div class="form-group">
                    <label for="intro-retireAge">When Do You Want To Retire? </label>
                    <input type="number" class="form-control" name="intro-retireAge" id="intro-retireAge" placeholder="Retirement Age">
                    Test to make sure retirement age is greater than current age
                </div>
                <div class="form-group">
                    <label for="intro-targetIncome">What Is Your Target Annual Income? <span id="intro-subdue">(In Today's Dollars)</span></label>
                    <input type="number" class="form-control" name="intro-targetIncome" id="intro-targetIncome" placeholder="Annual Income">            
                </div>
                <div class="form-group">
                    <label for="intro-principal">How Much Have You Already Saved? <span id="intro-subdue">(Optional)</span></label>
                    <input type="number" class="form-control" name="intro-principal" id="intro-principal" placeholder="Current Savings">
                </div>
                <div class="form-group">
                    <label for="intro-estate">Do You Want To Leave An Estate? <span id="intro-subdue">(Optional)</span></label>
                    <input type="number" class="form-control" name="intro-estate" id="intro-estate" placeholder="For The Kids">
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-outline-primary" name="intro-submit" id="intro-submit" value="Calculate">            
                </div>
            </div>
            <div class="card p-3" id="intro" style="width: 40vw;">
                <p>Show the Amount Needed at Retirement. Then show the amount to save per year and per month to get there.</p>
            </div>
        </div>

    </div>
    <div id="demo" class="mt-5">
        <h4>See It In Action</h4>
    </div>
    <div id="planner" class="mt-5">
        <h4>Plan To Clock Out</h4>
    </div>
    <div id="about" class="mt-5">
        <h4>About ClockOut Online</h4>
    </div>
    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="#"></script>
</body>
</html>