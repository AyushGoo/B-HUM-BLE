<?php


//database connectivity and insertion
		    if($_SERVER['REQUEST_METHOD'] === 'POST'){
		  
		     $name = $_POST['u'];
			 
			 $mob = $_POST['e'];
			 
			 $email = $_POST['deg'];
			 
		     $gen = $_POST['gen'];
			 
			 $dept = $_POST['Department'];
			 
			 $item = $_POST['add'];
			 
			 $image = $_POST['img'];
			 
			 
		   
		   $server = "localhost";
		   $user = "root";
		   $pass = "";
		   $dbname = "mphp";
		   
		   $conn = mysqli_connect($server , $user , $pass , $dbname);
		   
		   if(!$conn){
			   
			   die("connection failed". mysqli_connect_error());
		   }
		  
		   $sql = "INSERT INTO data2(name,mobile,email,gender,department,itemdetail,image)
		           values ('$name', '$mob' , '$email' , '$gen', '$dept','$item','$image')";
				   
			if( mysqli_query($conn , $sql)){
				
				    echo "<script> alert('Data saved successfully!')</script> ";
                       header('Location:Final.html');
			}else{
				
				   echo "Something isn't Right".$sql."<br>".mysqli_error($conn);
			}
			
			 mysqli_close($conn);

			}


?>