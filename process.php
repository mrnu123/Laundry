<?php 
  $servername = "localhost";
  $usernamedb = "root";
  $passworddb = "";
  $dbname = "laundrydb";
  $conn = new mysqli($servername, $usernamedb, $passworddb, $dbname);
  if (isset($_POST['username_check'])) {
  	$username = $_POST['username'];
  	$sql = "SELECT * FROM tb_user WHERE username='$username'";
  	$results = mysqli_query($conn, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "taken";	
  	}else{
  	  echo 'not_taken';
  	}
  	exit();
  }
  if (isset($_POST['email_check'])) {
  	$email = $_POST['email'];
  	$sql = "SELECT * FROM tb_user WHERE email='$email'";
  	$results = mysqli_query($conn, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "taken";	
  	}else{
  	  echo 'not_taken';
  	}
  	exit();
}
?>