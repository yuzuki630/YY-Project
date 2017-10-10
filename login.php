<!DOCTYPE html>
<?php
   ob_start();
   session_start();
   
   include 'dbconnect.php';

    $msg = '';
    
    if (isset($_POST['login']) && !empty($_POST['username']) 
     && !empty($_POST['password'])) {
         
    $username = $_POST['username'];
    $password = $_POST['password'];
         
    $sql = "SELECT * FROM employeetable WHERE username='$username' AND password='$password'";
    $login = $conn->query($sql);
    $count = mysqli_num_rows($login);
    
    echo $count;
     if ($count == 1) {
            
        $_SESSION['username'] = $username;
        header("Location: profile.php"); /* Redirect browser */
        exit();  
        
     }else {
        $msg = 'Wrong Username or Password';
     }
    }
?>


<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="image/Favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Londrina+Shadow" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700" rel="stylesheet">
</head>
<body id="profilebg">
    <div class="loginbg center">
        <div class="loginbox center">
            <h2 class="textcenter">Login Form</h2>
            <div class="formdiv">
                <div id="logindecor">
                    <div id="div1"></div>
                    <div id="div2"></div>
                    <div id="div3"></div>
                    <div id="div4"></div>
                    <div id="div5"></div>
                    <div id="div6"></div>
                    <div id="div7"></div>
                    <div id="div8"></div>
                </div>            
                <form class="para02" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    Username :<br> <input type="textbox" name="username" placeholder="Enter username"/><br>
                    Password :<br> <input type="password" name="password" placeholder="Enter password"/><br><br>
                    <input class="loginbutton" name="login" type="submit" value="Login"/>
                
                </form>
                <a class="register" href="register.php">Register</a>
                <?php echo "";echo $msg; ?>
            </div>
        </div>
    </div>
</body> 