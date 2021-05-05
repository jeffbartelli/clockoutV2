<?php include 'controllers/authController.php' ?>

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
    <input type="text" name="username" id="username" value="<?php echo $username; ?>">
    
    <label>Email <span id="emailError"></span></label>
    <input type="text" name="email" id="email" value="<?php echo $email; ?>">
    
    <label>Password</label>
    <input type="password" id="password" name="password">
    <label>Confirm Password <span id="passwordConfError"></span></label>
    <input type="password" id="passwordConf" name="passwordConf">
    <button type="submit" id="signupBtn" name="signup-btn" class="cardButton" disabled>Sign Up</button>
</form>
<p>Already have an account? <a href="#login">Login</a></p>
