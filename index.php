<?php 
include("conn.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link   rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <title>Resister form</title>
<link rel="stylesheet" href="style.css">
    
</head>

    <div class="Register-Now" >
        <form action="#" method="POST">
   
        <p style="font-size: 30px;color: rgb(26, 173, 129);text-transform: uppercase;text-align: center;">Register Now</p>

        
<div class="form">
       
        <p class="first-txt" style="font-size:xx-large"><br><br> WELCOME!! TO OUR    <br><br> WEB PAGE!     
         </p>
         
        <i class="fa-solid fa-file-signature fa-bounce"></i>
       <div class ="input_field">
        <label> First Name:</label>
        <input type="text" class="input" name="fname">
</div>

<div class ="input_field">
        <i class="fa-solid fa-file-signature fa-bounce"></i>
        <label> Second Name:</label>
        
        <input type="text" class="input" name="sname">
</div>
<div class ="input_field">
        <i class="fa-solid fa-id-card-clip fa-beat-fade"></i>
        <label> Handle Name:</label>
        
        <input type="text" class="input" name="hname">
</div>
<div class ="input_field">
        <i class="fa-solid fa-lock fa-beat"></i>
        <label> Password:</label>
        
        <input type="password" class="input" name="pass">
</div>

<div class ="input_field">
        <i class="fa-solid fa-lock fa-beat"></i>
        <label> Confirm password:</label>
        <input type="password" class="input" name="conpass">
</div>
<div class ="input_field">
        <i class="fa-sharp fa-solid fa-person-half-dress fa-beat-fade fa-xl"></i>

        <label> Gender:</label>
        <select name="gender">
        <option>Select </option>
        <option>Male </option>
        <option>Female</option>
        </select>
</div>
<div class ="input_field">
        <i class="fa-solid fa-envelope fa-bounce"></i>
        <label>  Email:</label>
         
        <input type="text" class="input" name="email">
</div>
<div class ="input_field">
        <i class="fa-solid fa-phone fa-beat"></i>
        <label> Phone:</label>
        <input type="text" class="input" name="phone">
</div>


<div class ="input_field terms">
        <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
             </label>
             <p>Agree  to term and conditions</p>

</div>
<div class="input_field" >
    
   <br> <input type="submit" value="Create a account"class="btn" name="register" >
   <p>already have an account? <a href="login.php">login now</a></p>


</form>
</div>
</body>
</html>

     <?php
if($_POST['register']){

    $First_name = $_POST['fname'];
    $Second_name = $_POST['sname'];
    $hname = $_POST['hname'];
    $pass = $_POST['pass'];
    $conpass = $_POST['conpass'];
    $gender = $_POST['gender'];
    $mail = $_POST['email'];
    $phone= $_POST['phone']; 
$query = "INSERT INTO form VALUES('$First_name', '$Second_name','$hname','$pass', '$conpass',' $gender' ,'$mail', '$phone')";

$data=mysqli_query($conn,$query);
if($data){
    echo "data inserted successfully";
}
else{
    echo "failed";
}
}
?> 