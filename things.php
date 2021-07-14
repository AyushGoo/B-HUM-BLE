<?php


//database connectivity and insertion
		    if($_SERVER['REQUEST_METHOD'] === 'POST'){
		  
		     $username = $_POST['name'];
			 
			 $mob= $_POST['mobile'];
			 
			 $gen = $_POST['gender'];
			 
		     $dept = $_POST['department'];
			 
		     $item = $_POST['itemdetail'];
			 
			 $pic = $_POST['image'];
			 
			 
		   
		   $server = "localhost";
		   $user = "root";
		   $pass = "";
		   $dbname = "mphp";
		   
		   $conn = mysqli_connect($server , $user , $pass , $dbname);
		   
		   if(!$conn){
			   
			   die("connection failed". mysqli_connect_error());
		   }
		  
		   $sql = "INSERT INTO data(name,mobile,gender,department,itemdetail,image)
		           values ('$username', '$mob', '$gen' , '$dept' , '$item', '$pic')";
				   
			if( mysqli_query($conn , $sql)){
				
				    echo "<script> alert('Data saved successfully!')</script> ";
                       header('Location:Final.html');
			}else{
				
				   echo "Something isn't Right".$sql."<br>".mysqli_error($conn);
			}
			
			 mysqli_close($conn);

			}


?>