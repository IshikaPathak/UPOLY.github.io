<?php
include('db.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width,initial-scale=1.0">
        <title>LOGIN</title>
        <script src="https://kit.fontawesome.com/8533c91442.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <div class="Container">
            <form action="#" method="POST">
                <div class="title">
                    LOGIN FORM
                </div>
                <div class="form">
                <div class="input_field">
                    <label>Userame</label>
                    <input type="text" class="input" name="Username" required>
                </div>
                <div class="input_field">
                    <label>Password</label>
                    <input type="text" class="input" name="Pass" required>
                </div>
                <div class="input_field">
                    <input type="Submit" class="btn" value="Login" name="Login">
                </div>
            </div>
        </form>
        <p style="color:red; font-family:cursive; font-size:22px; position:relative; left:10px;align-items:center">Doesn't have an account?? <a href="Registration.php" style="color:orange; text-decoration:none">Register Now </a></p>
        <a href="#" id="ForgotPW" Style="position: relative; color: white; font-size: 15px; font-family: 'Roboto',sans-serif; left: 114px; text-decoration: none;">FORGOT PASSWORD?</a>
    </div>
    </body>
</htmL>
<?php
session_start();
if (isset($_POST['Login']))
{
$UN= $_POST['Username'];
$Pwd= $_POST['Pass'];

$data= "SELECT * FROM signup WHERE Username='$UN' && Pass='$Pwd'";
$query= mysqli_query($conn,$data);
$result= mysqli_num_rows($query);
if($result != 0){
      header ('location:App1.php');
    }else{
        echo '<script>alert("Incorrect Username or Password")</script>';
      }
    }
?>


