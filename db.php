 <?php 
 $server = "localhost";
		   $user = "root";
		   $pass = "";
		   $dbname = "mphp";
		   
		   $conn = mysqli_connect($server , $user , $pass , $dbname);
		   
		   if(!$conn){
			   
			   die("connection failed". mysqli_connect_error());
		   }
		   
		?>