<?php

require_once("DatabaseConnection.php");
$email = $_SESSION['userEmail'];

$sql = "SELECT * FROM users WHERE Email = '$email'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
$UserName= $row['UserName'];
$email= $row['Email'];
$fullName= $row['FullName'];



mysqli_close($connect);
echo '<img src="public/image/DP.png" class="img-fluid rounded" alt="">';
echo '<h5 style="margin-top: 20px"><i class="fas fa-bullhorn"></i> Details</h5>';
echo '<h6>' . $fullName. '</h6>';
echo '<h6>' . $UserName . '</h6>';
echo '<h6>AUST</h6>';
echo '<h6>'. $email.'</h6>';
echo '<h6>Dhaka,Bangladesh</h6>';
echo '<h6 > <a href="https://github.com/piru72" >piru72 </a></h6>';
echo '<h6>Last Seen 5 minutes ago</h6>';
echo '<h6>Joined on 1 Jan 2023</h6>';
