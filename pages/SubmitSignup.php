 <?php 
    include '../include/DbConnect.php';
    
if(!empty($_POST['RFirstName']) && !empty($_POST['RLastName'])&&!empty($_POST['RPhone']) && !empty($_POST['RPassword']) &&!empty($_POST['REmail'])  )
{
	

		// Create connection
		$first=$_POST['RFirstName'];
		$last=$_POST['RLastName'];
		$phone=$_POST['RPhone'];
		$pass=$_POST['RPassword'];
		$email=$_POST['REmail'];
		

		//Escaping
		$Efirst=mysqli_real_escape_string($conn , $first);
		$Elast=mysqli_real_escape_string($conn , $last);
		$Ephone=mysqli_real_escape_string($conn , $phone);
		$Epass=mysqli_real_escape_string($conn , $pass);
		$Eemail=mysqli_real_escape_string($conn , $email);

		$sql = "INSERT INTO users( First, Last, Email, Password, privellegeLevel, Phone) VALUES ('$Efirst','$Elast','$Eemail','$Epass', 300,'$Ephone')";
	
      
		$result = mysqli_query($conn, $sql);

		if (mysqli_affected_rows($conn) > 0) {
		      header("Location: ../index.php");
		      
		  }
		 else {
		    header("Location: Login.php?Error='something went wrong'");
		}

		mysqli_close($conn);


}else{
	header("Location: Login.php?Error='Empty'");
    die();
}
?> 