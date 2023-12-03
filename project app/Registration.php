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
        <title>Registration</title>
        <script src="https://kit.fontawesome.com/8533c91442.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <div class="Container">
            <form action="" method="POST">
                <div class="title">
                    REGISTRATION FORM
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
                    <label>Confirm Password</label>
                    <input type="text" class="input" name="con_pass" required>
                </div>
                <div class="input_field">
                    <label>Gender</label>
                <div class="custom_select">
                    <select name="Gender">
                    <option value="not selected">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
                </div>
                </div>
                <div class="input_field">
                    <label>E-mail</label>
                    <input type="text" class="input" name="E-mail" required>
                </div>
                <div class="input_box">
                    <label>phone</label>
                    <input type="text" class="input" name="Mobile" required>
                </div>
                <div class="input_field">
                    <input type="Submit" class="btn" value="Register" name="Register">
                </div>
            </div>
        </form>
         <p style="color:white; font-family:cursive; font-size:25px; position:relative; left:10px;">Already have an account??<a href="Login.php" style="color:orange; text-decoration:none">Login Now </a></p>
        </div>
        
    </body>
</htmL>
<?php
if (isset($_POST['Register']))
{
$UN= $_POST['Username'];
$Pwd= $_POST['Pass'];
$Cpwd= $_POST['con_pass'];
$Gd= $_POST['Gender'];
$Em= $_POST['E-mail'];
$Mb= $_POST['Mobile'];


$select = " SELECT * FROM signup WHERE Username='$UN' AND Pass='$pwd' ";

$result = mysqli_query($connection, $select);
$none = mysqli_num_rows($result);
if($none != 0){

    echo '<script>alert("User already exist")</script>';

}else{

   if($Pwd != $Cpwd){
      echo '<script>alert("password not matched!")</script>';
   }else{
      $insert = "INSERT INTO signup VALUES ('$UN','$Pwd','$Cpwd','$Gd','$Em','$Mb')";
      $data = mysqli_query($conn, $insert);
      if($data){
          header('location:Login.php');
      }else{
        echo '<script>alert("Something Went wrong!! Wrong Entry or User already exist")</script>';
      }
   }
}

};


?>
