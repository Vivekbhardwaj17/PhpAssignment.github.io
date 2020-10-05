<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Details</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Add Details</h2>
  </div>
	
  <form method="post" action="">
  	<?php include('errors.php'); ?>
	  <div class="input-group">
  	  <label>Vehical Number</label>
  	  <input type="text" name="vnum" >
  	</div>
  	<div class="input-group">
  	  <label>Vehical Comapny Name</label>
  	  <input type="text" name="vcname" >
  	</div>
  	<div class="input-group">
  	  <label>Vehical Model</label>
  	  <input type="text" name="vmodal" >
  	</div>
	  <div class="input-group">
  	  <label>Last Service Date (dd-mm-yyyy)</label>
  	  <input type="text" name="lsd">
  	</div>
  	
  	<div class="input-group">
  	  <label>Next Service Date (dd-mm-yyyy)</label>
  	  <input type="text" name="nsd" >
  	</div>
	  <div class="input-group">
  	  <label>Driver Name</label>
  	  <input type="text" name="dname">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="details_sub">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
		<button type ="logout" class ="btn" ><a href="login.php">LogOut</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
		<button type ="logout" class ="btn" ><a href="display.php">View Details</a></button>
  	</div>
  	
  </form>
</body>

</html>