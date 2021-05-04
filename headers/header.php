<?php include 'controllers/authController.php' ?>

<nav>
    <!-- <div class="navBar"> -->
    <div class="logo">
        <h4>CLOCKOUT</h4>
    </div>

    <!-- </div> -->
    <ul class="nav-links">
        <?php if (isset($_SESSION['username'])): ?>
            <li>Welcome, <?php echo ucwords($_SESSION['username']); ?></li>
        <?php endif; ?>
        <li><a href="#home">Home</a></li>
        <li><a href="#introForm">Calculator</a></li>
        <li><a href="#planner-tool">Planner</a></li>
        <li><a href="#about">About</a></li>
        <?php if (isset($_SESSION['username'])): ?>
            <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        <?php endif; ?>
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>