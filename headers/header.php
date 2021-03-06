<?php include 'controllers/authController.php' ?>

<nav>
    <div class="logo">
        <h4>CLOCKOUT</h4>
    </div>

    <ul class="nav-links">
        <li><a href="#home" class="nav-animate">Home</a></li>
        <li><a href="#introForm" class="nav-animate">Calculator</a></li>
        <li><a href="#planner-tool" class="nav-animate">Planner</a></li>
        <li><a href="#about" class="nav-animate">About</a></li>
        <?php if (isset($_SESSION['username'])): ?>
            <li><span>Hi, <?php echo ucwords($_SESSION['username']); ?></span></li>
            <li><a href="logout.php" class="nav-animate" id="nav-logout">Logout</a></li>
        <?php else: ?>
            <li><a href="login.php" id="nav-login" class="nav-animate">Login</a></li>
            <li><a href="register.php" id="nav-register" class="nav-animate">Register</a></li>
        <?php endif; ?>
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>