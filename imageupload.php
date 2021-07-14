<html>
<head>
<title>Display</title>
<style>
 body{
	 
	 background-color:#f59089;
 }

</style>
</head>
<body>

  <center>
     <form action="" method="" enctype="multipart/form-data">
          <table width="50%" border="1" cellpadding="5" cellspacing="5">
                <thead>
				  <tr>
				    <th>Image</th>
					<th>Name</th>
					<th>ItemDetails</th>
				  
                    </tr>
				  </thead>
				  
				  <?php 
				  
				     $connection = mysqli_connect("localhost","root","");
					 $db=mysqli_select_db($connection,'mphp');
					 
					 $query="SELECT * FROM `data` WHERE 1 ";
				     $query_run = mysqli_query($connection,$query);
					 
					 while($row = mysqli_fetch_array($query_run))
					 {
						 ?>
						     <tr>
							 
							   <td> <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width:100px; height:100px;">'; ?> </td>
							   <td> <?php echo $row['name']; ?> </td>
							   <td> <?php echo $row['itemdetail']; ?> </td>

							 </tr>
							 
						 <?php
						 
					 }
				  
				  ?>
           </table>
         </form>
  </center>

</body>

</html>