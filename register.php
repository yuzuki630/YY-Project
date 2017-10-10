<!DOCTYPE html>
<?php
    session_start();
    if(isset($_SESSION['username'])) {
    echo "Your session is running " . $_SESSION['username'];
    
    include 'dbconnect.php';
    }
?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>register login</title>
    <link rel="icon" type="image/x-icon" href="image/Favicon.ico">
</head>
<body id="profilebg">
    <?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $companyid = $_POST["companyid"];
    
    echo $name;
    echo $email;
    echo $username;
    echo $password;
    echo $companyid;
    
    $sql = "INSERT INTO employeetable (companyid, name, username, password, email)
    VALUES ('$companyid', '$name', '$username', '$password', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    ?>
    <div class="registerdiv center">
        <h3>Register Employee</h3>
        <br><br>
        <form class="registerform center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <label for="">Name :</label>
            <input type="textbox" name="name">
            <label>Email :</label>
            <input type="email" name="email">
            <label for="">Username :</label>
            <input type="textbox" name="username">
            <label for="">Password :</label>
            <input type="password" name="password">
            <label for="">CompanyID :</label>
            <input type="textbox" name="companyid">
            <br><br>
            <center>
                <input class="button2" type="submit" value="Register"/>
                <a href="login.php"><input class="button2" type="button" value="Cancel"></a>
            </center>
        </form>
    </div>
</body>