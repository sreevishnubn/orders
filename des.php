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
         $q1=$_POST['1q'];
         // echo $name;
         // echo $address;
         // echo $email;
         // echo $phone;
         // echo $date;
         // echo $user;
         // echo $password;

         $query="insert into category(specification) values('$q1');";
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
           window.location.href='specification.html';
           </script>";
         }
      }


?>
