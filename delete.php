<!DOCTYPE html>
<html>
<head>
	
    <style>
.center {
  margin: auto;
  width: 10%;
 
  padding: 10px;
}
</style>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div  class ="content"> 
	<h2><?php
include("server.php");
error_reporting(0);

    $vnum=$_GET['vnum'];
    
    $quer="DELETE FROM details WHERE vnum ='$vnum'";
$chek=mysqli_query($db,$quer);
if($chek){
   
echo"<font  color='red'>Detail Deleted";
}
else echo"<font color='green'>NOT Deleted";


?></h2>
<br><br><br><br><br><br><br><br><br>

<div>
<button class = "btn"><a href ="login.php">Log Out</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
<button class = "btn"><a href ="details.php">Add New Detail</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
<button class = "btn"><a href ="display.php">Show Details</a></button>
</div>
  	</div>
		
</body>
</html>
