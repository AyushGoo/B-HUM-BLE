<html>

<head>
<style>
nav{
    position:fixed;
	top:0;
	left:0;
	width:100%;
	height:100px;
	padding:10px 90px;
	box-sizing:border-box;
	background:rgba(0,0,0,0.3);
	border-bottom:1px solid #fff;
    z-index:1
}


nav .logo{
         
          position:fixed;
		  top:-8%;
		   

}

nav ul{
   list-style:none;
   flot:right;
   margin:0;
   margin-left:40%;
   padding:0;
   display:flex;
   
}
 nav ul li a{
   line-height:80px;
   color:#fff;
   padding:12px 30px;
   text-decoration:none;
   font-size:14px;
   font-weight:bold;
   text-transform:uppercase;
   
}

nav ul li a:hover{
  background:rgba(0,0,0,0.7);
  border-radius:6px;
}
table{
	text-align:center;
	
	margin-top:3%;
	width:100%;
	height:50%
}
img{
	height:200px;
	width:250px;
	padding:20px;
		border-radius:50px;

}
 img:hover {
	transition: transform .5s ease;
  transform: scale(1.5);
}
 #list {
   
  display: none; 

 }
nav ul #l:hover ul {
     display:block;
	 background: #555;
	 width:105px
}
h1{
	 text-align:center;
	 margin-top:10%;
	  text-shadow: 2px 2px;
      font-size:50px;
}

p{
	padding:4px;
  text-align: centers;
	background-color:#377368;
	font-family:bold;
  color:white;
}
td{
	
		background-color:#9bcfc6;

	
}

</style>
<title>Found Item</title>

</head>
<body>
<nav>
    <div class="logo"><a href="Final1.html"><img src="logo2.png"></a></div>
	<ul>
	        <li><a href="Final1.html">Home</a></li>
			<li id="l"><a href="#">Category</a>
			<ul id="list">
		<li><a href="things3.php">Things</a></li>
        <li><a href="lost2.php">Lost </a></li>
        <li><a href="found2.php">Found</a></li>
	
		   </ul>
		   </li>
 </nav>

<h1>FOUND THINGS</h1>

<table>
  
<?php
include "db.php";
$i=0;
$records = mysqli_query($conn,"SELECT * FROM `data3` WHERE 1"); // fetch data from database

while($data = mysqli_fetch_assoc($records))
{
if($i%3 == 0){
	echo"<tr>";
	
}
echo "<td><img src='{$data['image']}'><br>
           <p>Location: '{$data['location']}'
	           <br>
			   FounderName: '{$data['name']}'
			   <br>
			 MobileNo.: '{$data['mobile']}'
			 <br>
               
		   </p></div></td>";

   if($i%3==2){
	   echo"</tr>";
	   
   }
   $i++;
}
?>

</table>
</body>
</html>