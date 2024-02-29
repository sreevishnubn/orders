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
         $veg=$_POST['qwe'];
         $date=$_POST['date'];
         $id=$_POST['id'];
         $time=$_POST['time'];
         // echo $name;
         // echo $address;
         // echo $email;
         // echo $phone;
         // echo $date;
         // echo $user;
         // echo $password;

         $query="insert into category(category_name,category_id,date,time) values('$veg', '$id', '$date','$time');";
         echo $query;

         if($conn->query($query)===TRUE){

    
           echo "<script>
           alert('Data added succesfully');
           window.location.href='food.html';
           </script>";
         }
         else{
    
           echo "<script>
           alert('Data adding failed');
           window.location.href='cetagory.html';
           </script>";
         }
      }


?>
