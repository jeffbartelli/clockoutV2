<?php include 'controllers/authController.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css">
  <title>ClockOut 2021 - User Registration</title>
</head>
<body>
  <?php include('headers/header2.php'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-wrapper auth">
        <h3 class="text-center form-title">Register</h3>

        <!-- PHP if statement for displaying error messages -->
        <?php if (count($errors) > 0): ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error): ?>
            <li>
            <?php echo $error; ?>
            </li>
            <?php endforeach; ?>
        </div>
        <?php endif;?>

        <form action="register.php" method="post">
            <label>Username <span id="usernameError"></span></label>
            <input type="text" name="username" id="username" class="form-control form-control-lg mb-2" value="<?php echo $username; ?>">
            
            <label>Email <span id="emailError"></span></label>
            <input type="text" name="email" id="email" class="form-control form-control-lg mb-2" value="<?php echo $email; ?>">
            
            <label>Password</label>
            <input type="password" id="password" name="password" class="form-control form-control-lg mb-2">
            <label>Confirm Password <span id="passwordConfError"></span></label>
            <input type="password" id="passwordConf" name="passwordConf" class="form-control form-control-lg">
            <button type="submit" id="signupBtn" name="signup-btn" class="btn btn-lg btn-block my-2" disabled>Sign Up</button>
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