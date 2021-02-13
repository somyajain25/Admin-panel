<?php
include "db.php";

if(isset($_POST['but_submit'])){

    $name = mysqli_real_escape_string($con,$_POST['name']);
    $pass = mysqli_real_escape_string($con,$_POST['pass']);

    if ($name != "" && $pass != ""){

        $sql_query = "select count(*) as cntUser from user where name='".$name."' and pass='".$pass."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['name'] = $name;
            header('Location: chat.html');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>