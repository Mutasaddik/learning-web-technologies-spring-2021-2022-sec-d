

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Delivery Login </title>

</head>
<?php
       include "header.php";
    ?>

<body>
    <?php

		$handle = fopen("data.json", "r");
		$data = fread($handle, filesize("data.json"));
	?>


	<?php
        
		$explode = explode("\n", $data);


	
	?>


	<?php

		$arr= array();
		for ($i = 0; $i < count($explode)-1; $i++)
		{
			$json=json_decode(($explode[$i]));
			array_push($arr, $json);
		}
	?>
	
 	<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST">
 		 <fieldset>
 		 	<legend><h1>Login Form</h1></legend>
		UserName: <input type="text" name="username"placeholder="Username">
		<br><br>
		Password: <input type="password" name="password"placeholder="Password">
		<br><br>
		<input type="submit" name="login" value="Login"><br>
		 <h3>forgotten password? <a href="forgotPassword.php"> Click here </a> for create new password</h3>
	    
		 </fieldset>
	</form>
	<?php
	include "../controllers/adminLoginAction.php";
	?>
	<br><br>
	<center><h3>Not registered yet? <a href="adminRegistration.php"> Click here </a> for registration.</h3></center>

   


	

</body>
<?php
       include "footer.php";
    ?>
</html>