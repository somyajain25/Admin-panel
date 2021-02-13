<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

 $first_name = $_POST['first_name'];
  $age=$_POST['age'];
     $last_name = $_POST['last_name'];
  
   $email = $_POST['email'];
$sql = "INSERT INTO studentdat (first_name, age,last_name, email)
VALUES ('$first_name','$age,'$last_name','$email')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>