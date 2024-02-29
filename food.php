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
    $veg = $_POST['VEG'];
    $fid = $_POST['fid'];
    $qty= $_POST['qty'];;
    // echo $name;
    // echo $address;
    // echo $email;
    // echo $phone;
    // echo $date;
    // echo $user;
    // echo $password;
    $query = "INSERT INTO `food`(`name`,`qty`, `order_no`)VALUES ('$veg','$qty','$fid');";
         echo $query;

         if($conn->query($query)===TRUE){

           echo "<script>
           alert('Data added succesfully');
           window.location.href='orders.html';
           </script>";
         }
         else{
           echo "<script>
           alert('Data adding failed');
           window.location.href='food.html';
           </script>";
         }
 }
 