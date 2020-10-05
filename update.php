<html>
<head><style>
.center {
  margin: auto;
  width: 10%;
 
  padding: 10px;
}
h1 { text-align: center; } 
</style>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Update Details</h1><br><br>
<form action="" method="get"class ="content">

Vehical Number
    <input type="text" name="vnum" value="<?php error_reporting(0); echo $_GET['vn']; ?>"><br><br>
    Vehical Comapny Name<input type="text"name="vcname"value="<?php  error_reporting(0);echo $_GET['vc']; ?>"><br><br>
    Vehical Model <input type="text" name='vname'value="<?php error_reporting(0); echo $_GET['vm']; ?>"><br><br>
    Last Service Date <input type="text" name="lsd"value="<?php error_reporting(0); echo $_GET['lsd']; ?>" ><br><br>
    Next Service Date <input type="text" name="nsd"value="<?php error_reporting(0); echo $_GET['nsd']; ?>" ><br><br>
    Driver Name <input type="text" name="dname"value="<?php error_reporting(0); echo $_GET['dn']; ?>" ><br><br>

 <input class ="btn"type="submit" name="submit"value="Update">
    <button class ="btn"><a href="display.php">View Details</a></button>
    <button class ="btn"><a href="login.php">Log Out</a></button>

    
    
    </form>
   
</body>
</html>
<?php
include("server.php");

if(isset($_GET['submit'])){
    $vname=$_GET['vname'];
    $vcname=$_GET['vcname'];
    $dname=$_GET['dname'];
    $lsd=$_GET['lsd'];
    $nsd=$_GET['nsd'];
    $vnum=$_GET['vnum'];
    
    

    
$quer="UPDATE  details set vname ='$vname', vcname ='$vcname', dname='$dname',nsd='$nsd',vnum='$vnum',lsd='$lsd' Where vnum ='$vnum'";
#$quer="INSERT INTO details VALUES ('$vname','$vcname','$dname','$nsd','$vnum','$lsd')";
$res = mysqli_query($db,$quer);

if(res)
echo"<font  color='green'>Updated";
else 
echo"<font  color='red'>NOT Updated";
}

?>