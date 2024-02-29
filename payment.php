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
         $nprice=$_POST['nprice'];
         $cashid=$_POST['cashid'];
         $pid=$_POST['pid'];
         $c=$_POST['C'];
         // echo $name;
         // echo $address;
         // echo $email;
         // echo $phone;
         // echo $date;
         // echo $user;
         // echo $password;

    $query = "INSERT INTO `payment`(`netprice`, `cash paid`, `payment_id`, `payment_type`) VALUES ($nprice,$cashid,$pid,'$c')";
         echo $query;

         if($conn->query($query)===TRUE){

           echo "<script>
           alert('Data added succesfully');
           window.location.href='after.html';
           </script>";
         }
        //  else{
        //    echo "<script>
        //    alert('Data adding failed');
        //    window.location.href='payment.html';
        //    </script>";
        //  }
      }


?>
