<?php


//database connectivity and insertion
		    if($_SERVER['REQUEST_METHOD'] === 'POST'){
		  
		     $fname = $_POST['u'];
			 
			 $age = $_POST['a'];
			 
		     $mob = $_POST['m'];
			 
		     $gen = $_POST['gen'];
			 
			 $reason = $_POST['add'];
			 
			 $proof = $_POST['p'];
			 
			 $amount = $_POST['deg'];
			 
			 
		   
		   $server = "localhost";
		   $user = "root";
		   $pass = "";
		   $dbname = "mphp";
		   
		   $conn = mysqli_connect($server , $user , $pass , $dbname);
		   
		   if(!$conn){
			   
			   die("connection failed". mysqli_connect_error());
		   }
		  
		   $sql = "INSERT INTO data1(fname,email,mobile,gender,reason,image,amount)
		           values ('$fname', '$age' , '$mob' , '$gen', '$reason','$proof','$amount')";
				   
			if( mysqli_query($conn , $sql)){
				
				    echo "<script> alert('Data saved successfully!')</script> ";
                       header('Location:Final.html');
			}else{
				
				   echo "Something isn't Right".$sql."<br>".mysqli_error($conn);
			}
			
			 mysqli_close($conn);

			}


?>