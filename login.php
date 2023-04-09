<?php 
include("conn.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="style.css">
	
</head>
<body>
	<div class="container">
		<form>
        <div class ="input_field">
       
        <label> Handle Name:</label>
        
        <input type="text" class="input" name="hname">
</div>
<div class ="input_field">
        <label> Password:</label>
        
        <input type="password" class="input" name="pass">
</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>

<?php 
if(isset($_POST['hname'])){
    
    $hname = $_POST['hname'];
    $pass = $_POST['pass'];

    $sql="SELECT * FROM form WHERE hname='".$hname."' && pass='".$pass."' limit 1";
    
    $result=mysql_query($sql,$conn);
    
    if($result){
        echo " You Have Successfully Logged in";
        header('location:form.php');
       
    }
    else{
        echo " You Have Entered Incorrect Password";
      
    }
        
}
?>