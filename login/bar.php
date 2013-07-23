<?php
include '../header.php';
echo '<link rel="stylesheet" charset="utf-8" type="text/css" href="bar.css" />';
echo '<div class="bar" >';
echo '<span class="panel" id="welcome">Welcome ,'.$email.'</span>';
echo '<span class="panel" id="home"><a href="./" />Home</a></span>';
echo '<span class="panel" id="recent">My Recent Forms</span>';
echo '<span class="panel" id="change"><a href="changepassword.php">Change Password</a></span>';
echo '<span class="panel" id="logout"><a href="logout.php">Logout</a></span>';
echo '</div>';
?>