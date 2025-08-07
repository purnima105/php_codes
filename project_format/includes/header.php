<?php
session_start();
?>

<header>
    <nav>
        <a href="/web2/project_format">Home</a>
        <a href="/web2/project_format/about.php">About Us</a>

        <?php
        if (isset($_SESSION['user'])) {
            ?>
            <a href="/web2/project_format/dashboard.php">Dashboard</a>
            <a href="/web2/project_format/logout.php">Log out</a>
            <?php
        } else {
            ?>
            <a href="/web2/project_format/register.php">Register</a>
            <a href="/web2/project_format/login.php">Log In</a>
            <?php
        }
        ?>
        
    </nav>
</header>