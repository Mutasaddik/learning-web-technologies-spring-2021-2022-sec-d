<?php	

	$emailError = "";
	$email = "";

	if(isset($_REQUEST['submit'])){
		if($_POST['email'] == null){
			$nameError = "invalid username";
		}else{
			$email = $_REQUEST['email'];
		}
	}

?>

<html>
<head>
	<title>Login form</title>
</head>
<body>
	<form method="POST" action="">
		<table>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?=$email?>"></td>
				<td><?=$emailError ?></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>