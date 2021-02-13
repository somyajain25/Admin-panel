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
 $qul = $_POST['qul'];
 $exp = $_POST['exp'];
	 $addr = $_POST['addr'];
	 $con1 = $_POST['con1'];
	 $cont2 = $_POST['cont2'];
	 $spl = $_POST['spl'];
	 $dis=$_POST['dis'];
	 $pre1=$_POST['pre1'];
	 $pre2=$_POST['pre2'];
$sql = "INSERT INTO doctor (first_name, qul,exp,addr,con1,cont2,spl,dis,pre1,pre2)
VALUES ('$first_name','$qul','$exp','$addr','$con1','$cont2','$spl','$dis','$pre1','$pre2')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>