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
         $q1=$_POST['data'];
         $q2 = $_POST['id'];

         $query=" UPDATE `food` SET `specification`='$q1' WHERE `food_id`='$q2';";
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
           window.location.href='specification.html';
           </script>";
         }
      }


?>
