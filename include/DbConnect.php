<?php
 
require 'strings.php';

 $conn = mysqli_connect
 ($server,$username,$password,$database);

 
 
if(mysqli_connect_error($conn)) 

 {   
  echo "error--".mysqli_connect_error($conn);
    die();
}

    

?>