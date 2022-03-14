
<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Forget Password </title>

</head>
<?php
       include "header.php";
    ?>

<body>

	




  <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST">
    <h2>Forget Password Page:</h2>
  	<fieldset>
  		<legend><h2>Change Password</h2></legend>
  Previous Email:<input type="text"name="email"Placeholder="Email"><br>
  <br>

  New Password:<input type="text"name="newPassword"Placeholder="New Password"><br>
  <br>
  <input type="submit"value="Request For New Password">
</fieldset>
  </form>
  <?php
  include "../controllers/forgotPasswordAction.php";
  ?>
  
    
<br><br>
	
</body>
<?php
       include "footer.php";
    ?>
</html>