<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['username'])) {
  echo "Your session is running " . $_SESSION['username'];
}

?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Profile of employee</title>
    <link rel="icon" type="image/x-icon" href="image/Favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Londrina+Shadow" rel="stylesheet">
</head>
<body id="profilebg">
    <div class="profilediv center">
            <div class="buttonprof">
            <input class="button1" type="submit" value="Edit"/>
            <input class="button1" type="submit" value="Logout"/>
            </div>
        <div class="prof1">
            <h1>Bart Simpson</h1><br>
            <img src="image/pro.png"width="140"alt="Profile Pictutres">
            <p>CompanyID :FPH001</p>
            <p>Department :QA</p>
        </div>
        <div class="left">
            <p>Address :America</p>
            <p>Email :simpson@gmail.com</p>
            <p>Mobile Number :123456789</p>
            <p>Birthday(Age) :February,23,1979</p>
        </div>
        <div class="right">
            <p>SSS# :122-61345-1</p>
            <p>TIN# :123456789</p>
            <p>Philhelth :0987654321</p>
            <p>PAG-IBIG :6543217890</p>
        </div>
        <div class="emergency">
            <p class="para01">In Case Of Emergency<br>Name :A Simpson<br>Address :America<br>Contact :3749672947</p>
        </div>
    </div>
</body>