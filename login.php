<?php include 'controllers/authController.php' ?>

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
    <input type="text" name="username" value="<?php echo $username; ?>">
    <label>Password</label>
    <input type="password" name="password">
    <button type="submit" name="login-btn" class="cardButton">Login</button>
</form>
<p>Forgot your password? Reset it <a href="#">Here</a></p>
<p>Don't yet have an account? <a href="#register">Sign up</a></p>      