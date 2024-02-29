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
         $re=$_POST['review'];
         $cst=$_POST['customer'];
         // echo $name;
         // echo $address;
         // echo $email;
         // echo $phone;
         // echo $date;
         // echo $user;
         // echo $password;

         $query=("UPDATE `customer` SET `review`='$re' WHERE `customer_id`=$cst;");
         

         if($conn->query($query)===TRUE){

           echo "<script>
           alert('Data added succesfully');
           window.location.href='alldon.html';
           </script>";
         }
         else{
           echo "<script>
           alert('Data adding failed');
           window.location.href='review.html';
           </script>";
         }
      }


?>
