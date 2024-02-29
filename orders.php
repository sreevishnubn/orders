<?php

    $servername='localhost';
    $username='root';
    $password='';
    $dname='order';

         

         $conn=new mysqli($servername, $username, $password, $dname);

         if($conn -> connect_errno){
         echo "Failed to connect" . $mysqli -> connect_error;
         exit();
         } else {
    echo "connected to dbms";
    $date = $_POST['date'];
    $time = $_POST['time'];
    $ff = $_POST['ff'];
    $orderno= $_POST['order_no'];
    $r = $_POST['r'];
    $cphone = $_POST['cphone'];
    // echo $name;
    // echo $address;
    // echo $email;
    // echo $phone;
    // echo $date;
    // echo $user;
    // echo $password;
    $query = "INSERT INTO `orders`(`date`, `order_no`, `time`,`floor`, `order_type`, `cphone`) VALUES ('$date','$orderno','$time','$ff','$r','$cphone')";
         echo $query;

         if($conn->query($query)===TRUE){

           echo "<script>
           alert('Data added succesfully');
           window.location.href='review.html';
           </script>";
         }
         else{
           echo "<script>
           alert('Data adding failed');
           window.location.href='orders.html';
           </script>";
         }
 }
 