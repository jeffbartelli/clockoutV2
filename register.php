<?php include 'controllers/authController.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/background.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/access.css">
  <link rel="stylesheet" href="css/style.css">
  <title>ClockOut 2021 - Register </title>
</head>
<body>
    <?php include('headers/header2.php'); ?>

    <div id="background">
        <ul class="circle">
            <li class="one"></li>
            <li class="two"></li>
            <li class="three"></li>
            <li class="four"></li>
        </ul>
    </div>

    <div id="container">
        <div class="newCard">
            <div class="content">
                <h2>Register</h2>
                <p>Enter your information below. You'll receive an email with a link to validate your account.</p>
                <!-- PHP if statement for displaying error messages -->
                <?php if (count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li>
                            <?php echo $error; ?>
                            </li>
                            <?php endforeach; ?>
                    </ul>                  
                </div>
                <?php endif;?>


                <form action="register.php" method="post" autocomplete="off">
                    <label>Username <span id="usernameError"></span></label>
                    <input type="text" name="username" id="username" value="<?php echo $username; ?>" autofocus>

                    <label>Email <span id="emailError"></span></label>
                    <input type="text" name="email" id="email" value="<?php echo $email; ?>">

                    <label>Password</label>
                    <input type="password" id="password" name="password">
                    <label>Confirm Password <span id="passwordConfError"></span></label>
                    <input type="password" id="passwordConf" name="passwordConf">
                    <button type="submit" id="signupBtn" name="signup-btn" class="cardButton" disabled>Sign Up</button>
                </form>
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
        </div>
    </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script src="js/register.js"></script>
</body>
</html>