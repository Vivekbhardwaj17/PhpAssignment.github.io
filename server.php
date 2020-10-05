<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$dl ="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'assignment');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $dl = mysqli_real_escape_string($db,$_POST['dl']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($dl)) { array_push($errors, "dl is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM register WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['dl'] === $dl) {
      array_push($errors, "dl already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  //	$password = md5($password_1);//encrypt the password before saving in the database
  $password = 1234;

  	$query = "INSERT INTO register (username, email,dl, password) 
  			  VALUES('$username', '$email','$dl', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}



if(isset($_POST['details_sub'])){
 
    $vnum=$_POST['vnum'];
    $vcname=$_POST['vcname'];
	$vmodal=$_POST['vmodal'];
	$lsd = $_POST['lsd'];
    $dname=$_POST['dname'];
    $nsd = $_POST['nsd'];  
    $que = "SELECT * FROM details WHERE vnum='$vnum'";
    $result = mysqli_query($db, $que);
    if (mysqli_num_rows($result) >0) 
    echo"<font color='red'>Details Not Added! Allready existed.";
   else if($vnum!=""&$vcname!=""&$vmodal!=""&$lsd!=""&$dname!=""&$nsd!=""){
      
     
        $quer="INSERT INTO details VALUES ('$vmodal','$vcname','$dname','$nsd','$vnum','$lsd')";
mysqli_query($db,$quer);
#$_SESSION['success'] = "Details Added Successfully";


    echo "<font color='green'>Details Added Successfully";}
    else 
    echo"<font color='red'>Details Not Added";

}

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
 // 	$password = ($password_1);
  	$query = "SELECT * FROM register WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";

  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
