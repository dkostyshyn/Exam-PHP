<?php require_once "header.php" ?>

<?php if ($loggedin) { ?>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="admin.php">Admin</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
<?php } else { ?>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
    </ul>
<?php } ?>