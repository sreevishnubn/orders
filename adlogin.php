<?php

$username = $_POST['user'];
$passwd = $_POST['password'];

if($passwd == '12345'){
    echo "<script>
    alert('Login successfull');
    window.location.href='after.html';
    </script>";
}else{
    echo "<script>
    alert('Login failed');
    window.location.href='adminlogin.html';
    </script>";
 }
?>
