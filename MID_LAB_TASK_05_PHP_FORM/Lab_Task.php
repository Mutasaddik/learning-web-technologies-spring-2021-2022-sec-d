<?php	

	$nameError = "";
	$username = "";

	if(isset($_POST['submit'])){
		if($_POST['username'] == null){
			$nameError = "invalid username";
		}else{
			$username = $_REQUEST['username'];
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
				<td>Name</td>
				<td><input type="text" name="username" value="<?=$username?>"></td>
				<td><?=$nameError ?></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>