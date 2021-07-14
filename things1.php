<?php
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,'mphp');
 
 if(isset($_POST['upload']))
 {
	 
$file = addslashes(file_get_contents($_FILES['image']['tmp_name']));
             $username = $_POST['name'];
			 
			 $mob= $_POST['mobile'];
			 
			 $gen = $_POST['gender'];
			 
		     $dept = $_POST['department'];
			 
		     $item = $_POST['itemdetail'];
			 
			 $pic = $_POST['image'];
			 
			 $query = "INSERT INTO 'data'('name','mobile','gender','department','itemdetail','image') VALUES('$username','$mob','$gen','$dept','$item','$pic')";
			 
			 $query_run = mysqli_query($connection,$query);
			 
			 if($query_run){
				 echo '<script>alert("hello")</script>';
				 
			 }
			 else{
				 				 echo '<script>alert("hello not")</script>';

				 
			 }
             
			 
 }

?>