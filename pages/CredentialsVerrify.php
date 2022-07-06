 <?php session_start();
    include '../include/DbConnect.php';
    
if(!empty($_POST['LName']) && !empty($_POST['LPassword']))
{
	

		// Create connection
		$User=$_POST['LName'];
		$UserPass=$_POST['LPassword'];
		$Euser=mysqli_real_escape_string($conn , $User);
		$EUserPass=mysqli_real_escape_string($conn , $UserPass);

		$sql = "SELECT * FROM users where Email='$Euser' AND Password='$EUserPass'";
		
      
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		      $row = mysqli_fetch_assoc($result); 
		      $_SESSION["UserName"]= $row["UserName"];
		      $_SESSION["PASSWORD"]= $row["Password"];
		      $_SESSION["Level"]=$row["privellegeLevel"];
		      header("Location: ../index.php");
		      
		  }
		 else {
		    header("Location: Login.php?Error='Invalid-Credentials'");
		}

		mysqli_close($conn);


}else{
	header("Location: Login.php?Error='Empty'");
    die();
}
?> 