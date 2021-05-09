<?php 

include 'controllers/authController.php';

?>
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
  <link rel="stylesheet" href="css/style.css">
  <title>ClockOut 2021 - Login</title>
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
        <h2>Login</h2>
          <!-- PHP if statement for displaying error messages -->
          <?php if (count($errors) > 0): ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $error): ?>
                <li>
                <?php echo $error; ?>
                </li>
                <?php endforeach;?>
            </div>
          <?php endif;?>
          <!-- Login Form -->
          <form action="login.php" method="post">
              <label>Username or Email</label>
              <input type="text" name="username" class="form-control form-control-lg mb-2" value="<?php echo $username; ?>">
              <label>Password</label>
              <input type="password" name="password" class="form-control form-control-lg mb-2">
              <button type="submit" name="login-btn" class="btn btn-lg my-2 btn-block">Login</button>
          </form>
          <p>Forgot your password? Reset it <a href="#">Here</a></p>
          <p>Don't yet have an account? <a href="register.php">Sign up</a></p>
      </div>
    </div>
  </div>

  <script src="js/register.js"></script>
</body>
</html> 