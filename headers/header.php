<?php include 'controllers/authController.php' ?>

<nav class="navbar navbar-expand-lg fixed-top">
    <a class="navbar-brand h1" href="#">
        <!-- <img src="img/timeclock-removebg-preview.png" height="30" class="d-inline-block align-top" alt=""> -->
        <span class="brand">ClockOut</span> 
    </a>
    <span class="navbar-text brand h6">
        <?php if (isset($_SESSION['username'])): ?>
            Welcome, <?php echo ucwords($_SESSION['username']); ?>
        <?php endif; ?>
    </span>
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end mr-sm-2" id="navbarSupportedContent">
        <div class="navbar-nav">
            <a href="#home" class="nav-link active">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#demo">Demo</a>
            <a class="nav-link" href="#planner">Planner</a>
            <a class="nav-link" href="#about">About</a>
            <?php if (isset($_SESSION['username'])): ?>
                <a class="nav-link" href="logout.php">Logout</a>
            <?php else: ?>
                <a class="nav-link" href="login.php">Login</a>
                <a class="nav-link" href="register.php">Register</a>
            <?php endif; ?>
        </div>
    </div>
</nav>