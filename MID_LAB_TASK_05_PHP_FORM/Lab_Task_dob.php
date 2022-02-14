<?php	

	$dateError = "";
	$date= "";

	if(isset($_POST['submit'])){
		if($_POST['date'] == null){
			$dateError = "invalid date";
		}else{
			$date = $_REQUEST['date'];
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
					<td>Date Of Birth: </td>
					<td><input type="date" name="date" value="<?=$date?>"></td>
					<td><?=$dateError ?></td>
				</tr>


				<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>

		</table>
	</form>
</body>
</html>