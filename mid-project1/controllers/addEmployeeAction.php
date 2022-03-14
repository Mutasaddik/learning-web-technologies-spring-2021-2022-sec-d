 <?php
  session_start();
   if (count($_SESSION)===0)
   {
     header("Location:adminLogout.php");
   }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Add Employee</title>
</head>
     <?php
       include "header.php";
    ?>
<body>
    
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST">
     <fieldset>
        <legend><h1>Add Employee</h1></legend>
        <fieldset>
         <center><h2>Basic Information:</h2></center>
         <p><b>First Name:&nbsp &nbsp &nbsp</b><input type="text"name="firstName"placeholder="First Name"></p>
         <p><b>Last Name: &nbsp &nbsp &nbsp</b><input type="text"name="lastName"placeholder="Last Name"></p>
         <b>Gender: &nbsp &nbsp &nbsp</b><input type="radio"name="gender"value="Male">Male
                       <input type="radio"name="gender"value="Female">Female
                       <input type="radio"name="gender"value="Others">Others
         <p><b>Date of Birth:&nbsp &nbsp &nbsp</b><input type="date"name="dateOfBirth"Placeholder="Date of Birth"></p>
         <b>Religion:&nbsp &nbsp &nbsp</b>
         <select name="religion">
             <option>Hindu</option>
             <option>Islam</option>
             <option>Others</option>
         </select>  
         </fieldset>
         <br>
         <fieldset>
         <center><h2>Contact Information:</h2></center>
         <p><b>Present Address:</b></p>
         <textarea name="presentAddress"></textarea>
         <p><b>Permanent Address:</b></p>
         <textarea name="permanentAddress"></textarea>
         <p><b>Phone:&nbsp &nbsp &nbsp</b><input type="tel"name="phone"Placeholder="Phone Number"></p>
         <p><b>Email:&nbsp &nbsp &nbsp</b><input type="email"name="email"Placeholder="Email"></p>
         <p><b>Personal website Link:&nbsp &nbsp &nbsp</b><input type="url"name="personalWebsiteLink"Placeholder="Personal Website Link"></p>
       
         <label for="employee">Employee Category:</label>

         <select name="employee">
         <option value="Doctor">Doctor</option>
         <option value="Diagnostician">Diagnostician</option>
          <option value="Staff">Staff</option>
         
         </select>
         


        </fieldset>  
        
        
        <br>
        <button type="submit">Save</button> 

          </fieldset>
    </form>   
   
</body>
    <?php
       include "footer.php";
    ?>
</html>