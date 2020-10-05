<?php
include("server.php");
error_reporting(0);
$quer="SELECT * FROM details";
$res=mysqli_query($db,$quer);

$count=mysqli_num_rows($res);


?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button3 {background-color: #f44336;} 
table, th, td {
  border: 1px solid black;
}
th, td {
  padding: 15px;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: orange;
  color: white;
}
h1 { text-align: center; } 
</style>
</head>
<h1 >Vehicle Details</h1>
<table id ="t01"style="width:100%">

  
  
  <tr>

    <th>Vehicle Number</th>

    <th>Company</th>
    <th>Modal</th>
    <th>Last Service Date</th>
    <th>Next Service Date</th>
    <th>Driver Name</th>
    <th colspan=2>Actions</th>

    
  </tr>
 <?php
 
           while($str=mysqli_fetch_assoc($res)){

    echo"<tr >

             <td>".$str['vnum']."</td>
             <td>".$str['vcname']."</td>
             <td>".$str['vname']."</td>
             <td>".$str['lsd']."</td>
             <td>".$str['nsd']."</td>
             <td>".$str['dname']."</td>
            <td><a href='delete.php?vnum=$str[vnum]'>Delete</a></td>
             <td><a href='update.php?vn=$str[vnum]&vc=$str[vcname]&vm=$str[vname]&lsd=$str[lsd]&nsd=$str[nsd]&dn=$str[dname]'>Update</a></td>
            
        </tr>";
            
           }
 ?>
 
</table>
<br><br>
<div>
<button class = "btn"><a href ="login.php">Log Out</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
<button class = "btn"><a href ="details.php">Add New Detail</a></button>
</div>
</html>