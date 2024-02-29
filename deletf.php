<?php

$servername='localhost';
$username='root';
$password='';
$dname='order';

$conn=new mysqli($servername, $username, $password, $dname);

if($conn -> connect_errno){
  echo "Failed to connect" . $mysqli -> connect_error;
  exit();
}else{
    $id=$_GET['id'];
    echo "<script>
    alert('Do you really want to delete');
    </script>";
    $sql ="delete from food where order_no=$id;";
    $result = $conn->query($sql);
    if($result){
        header('location:foodr.php');
    }else{
        die(mysqli_error($conn));
}
}
