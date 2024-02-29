<?php

         $servername='localhost';
         $username='root';
         $password='';
         $dname='order';

         $conn=new mysqli($servername, $username, $password, $dname);

         if($conn -> connect_errno){
         echo "Failed to connect" . $mysqli -> connect_error;
         exit();
         }
         else{
         echo "connected to dbms";
         $name=$_POST['name'];
         $address=$_POST['address'];
         $email=$_POST['email'];
         $pnumber=$_POST['phone'];
         $dob=$_POST['date'];
         $user=$_POST['user'];
         $paswd=$_POST['password'];

         // echo $name;
         // echo $address;
         // echo $email;
         // echo $phone;
         // echo $date;
         // echo $user;
         // echo $password;

         $query="INSERT INTO `customer`(`name`, `address`, `Email`, `phone_no`, `DOB`, `password`, `customer_id`) VALUES ('$name', '$address', '$email', '$pnumber','$dob', ' $paswd', '$user');";
         echo $query;

         if($conn->query($query)===TRUE){

           echo "<script>
           alert('Data added succesfully');
           window.location.href='sig.html';
           </script>";
         }
         else{
           echo "<script>
           alert('Data adding failed');
           window.location.href='sign.html';
           </script>";
         }
      }


?>
