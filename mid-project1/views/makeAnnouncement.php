<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Complain a file </title>

</head>
<?php
       include "header.php";
    ?>

<body>
    
	<h2>Make Announcement:</h2>
	<center><a href="home.php">Home</a> &nbsp &nbsp <a href="adminProfile.php">Profile</a>&nbsp &nbsp <a href="changePassword.php">Change Password</a>&nbsp &nbsp &nbsp <a href="addEmployee.php">Add Employee</a> &nbsp &nbsp<a href="#">View Employee History</a>&nbsp &nbsp <a href="#">Make Announcement</a>&nbsp &nbsp<a href="#">Hospital Accounts</a>&nbsp &nbsp<a href="#">Hospital Bill History</a>&nbsp &nbsp<a href="adminLogout.php">Logout</a></center>
    <br>
     <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST">
    	<fieldset>
    		<legend><h2>Make an Announcement</h2></legend>
		
		<p><b>Announcement Date:&nbsp &nbsp &nbsp</b><input type="date" name="announcementDate"placeholder="Announcement Date">
		<br><br>
		  <p><b>Make an Announcement:</b></p>
		 <textarea name="makeAnnouncement"></textarea><br><br>
		<input type="submit" name="announcement" value="submit">
	</fieldset>
	</form>


   <?php
          include "../controllers/makeAnnouncementAction.php";
       ?>
       

</body>
<?php
       include "footer.php";
    ?>
</html>