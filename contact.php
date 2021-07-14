<?php


//database connectivity and insertion
		    if($_SERVER['REQUEST_METHOD'] === 'POST'){
		  
		     $name = $_POST['n'];
			 
			 $email = $_POST['e'];
			 
		    $mob = $_POST['p'];
			 
			$msg = $_POST['m'];
			 
			 
		   
		   $server = "localhost";
		   $user = "root";
		   $pass = "";
		   $dbname = "mphp";
		   
		   $conn = mysqli_connect($server , $user , $pass , $dbname);
		   
		   if(!$conn){
			   
			   die("connection failed". mysqli_connect_error());
		   }
		  
		   $sql = "INSERT INTO contact(name,email,mobile,message)
		           values ('$name','$email','$mob','$msg')";
				   
			if( mysqli_query($conn , $sql)){
				
				    echo "<script> alert('Data saved successfully!')</script> ";
                       header('Location:Final.html');
			}else{
				
				   echo "Something isn't Right".$sql."<br>".mysqli_error($conn);
			}
			
			 mysqli_close($conn);

			}


?>