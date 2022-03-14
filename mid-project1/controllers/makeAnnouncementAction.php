 <?php
   

	if ($_SERVER["REQUEST_METHOD"] == "POST"and count($_REQUEST)>0) {

		
           $makeAnnouncement=$_POST['makeAnnouncement'];

		if (empty($announcementDate)||empty( $makeAnnouncement)) 
			{
				$isValid = false;
				echo "<br>";
				echo "<br>";
				echo"<center>";
				echo"<h2>";
				echo "Please fill up the form properly";
				echo"</center>";
				echo"</h2>";
				echo"<br><br>";
				$submitted=false;
			}
			else {
				$isValid = true;
				echo "<br>";
				echo "<br>";
				echo"<center>";
				echo"<h2>";
				echo "Submitted Successfully";
				echo"</center>";
				echo"</h2>";
				echo"<br><br>";
				
				$submitted=true;
			}
		


	    function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
   
    
		if ($isValid) 
		{
           
           $announcementDate=sanitize($announcementDate);
           $makeAnnouncement=sanitize($makeAnnouncement);
            
		}


	

	
		if ($isValid) { 
			
			$handle = fopen("announcementFile.json", "a");
			$arr = array('announcementDate' => $announcementDate,'makeAnnouncement' =>$makeAnnouncement);
			$encode = json_encode($arr);

			$res = fwrite($handle, $encode . "\n");
		}
		else
		{
			$res=false;
		}
	

          
           

			
    }

    ?>