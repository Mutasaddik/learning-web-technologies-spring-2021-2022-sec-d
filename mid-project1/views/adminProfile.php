
<?php
    session_start();
    if (count($_SESSION)===0)
    {
      header("location:adminLogout.php");
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Profile</title>
</head>
<?php
       include "header.php";
    ?>
<body>

    <form method="POST">
    <h2>Profile Page:</h2>
  <center><a href="home.php">Home</a> &nbsp &nbsp <a href="adminProfile.php">Profile</a>&nbsp &nbsp <a href="changePassword.php">Change Password</a>&nbsp &nbsp &nbsp <a href="addEmployee.php">Add Employee</a> &nbsp &nbsp<a href="#">View Employee History</a>&nbsp &nbsp <a href="makeAnnouncement.php">Make Announcement</a>&nbsp &nbsp<a href="#">Hospital Accounts</a>&nbsp &nbsp<a href="#">Hospital Bill History</a>&nbsp &nbsp<a href="adminLogout.php">Logout</a></center>
    <br>
    <h2>Profile of <?php echo $_SESSION['username'] ?></h2> 
    <br>
        <fieldset>
         <center><h2>Basic Information:</h2></center>
         <p><b>First Name:&nbsp &nbsp <?php echo $_SESSION['firstName'] ?></p>
         <p><b>Last Name:&nbsp &nbsp <?php echo  $_SESSION['lastName'] ?> </p>
          <p><b>Gender:&nbsp &nbsp <?php echo    $_SESSION['gender'] ?></b></p> 
         <p><b>Date of Birth:&nbsp &nbsp<?php echo $_SESSION['dateOfBirth'] ?></b></p>
         <p><b>Religion: &nbsp &nbsp  <?php echo $_SESSION['religion'] ?></b></p>
        
         </fieldset>
         <br>
         <fieldset>
         <center><h2>Contact Information:</h2></center>
         <p><b>Present Address:&nbsp &nbsp<?php echo $_SESSION['presentAddress'] ?></b></p>
         <p><b>Permanent Address: &nbsp &nbsp<?php echo $_SESSION['permanentAddress'] ?></b></p>
        
         <p><b>Phone:&nbsp &nbsp <?php echo $_SESSION['phone'] ?></b></p>
         <p><b>Email:&nbsp &nbsp<?php echo $_SESSION['email'] ?></b></p>
         <p><b>Personal website Link: &nbsp &nbsp <?php echo $_SESSION['personalWebsiteLink'] ?></b></p>

         


        </fieldset>  
        
         <br>

        <input type="submit"value="Update Profile">


    </form>   
   
</body>
<?php
       include "footer.php";
    ?>
</html>