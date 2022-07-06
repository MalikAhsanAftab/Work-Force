<?php
 
 include '../include/DbConnect.php';
 if(
 isset($_POST["First"]) &&  
 isset($_POST["Last"])  && 
 isset($_POST["Phone"]) && 
 isset($_POST["Email"]) && 
 isset($_POST["Message"]) 	)
 {
 	if(	
 			empty($_POST["First"]) ||  empty($_POST["Last"])  ||  empty($_POST["Phone"]) 
 			||  empty($_POST["Email"]) || empty($_POST["Message"]) 
 	  )
 	die ("issues some empty");
 	$first=$_POST["First"];
 	$last=$_POST["Last"];
 	$phone=$_POST["Phone"];
 	$mail=$_POST["Email"];
 	$msg=$_POST["Message"];

 	$sql ="INSERT INTO mail( First, Last, Phone, Email, Message) VALUES ('".$first."' , '".$last."' , '".$phone."' , '".$mail."' , '".$msg."')";
 	if(mysqli_query($conn , $sql))
 		header("Location: ../index.php?error=success");
 	else 
 		header("Location: ../index.php?error=error occured");

}



?>