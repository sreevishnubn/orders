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
         $nam=$_POST['name'];
         $date=$_POST['date'];
         $time=$_POST['time'];
         $id=$_POST['floor'];
         // echo $name;
         // echo $address;
         // echo $email;
         // echo $phone;
         // echo $date;
         // echo $user;
         // echo $password;

    $query = "INSERT INTO `tables`(`table_name`, `table_id`, `date`, `time`) VALUES ('$nam','$id','$date','$time');";
         echo $query;

         if($conn->query($query)===TRUE){

           echo "<script>
           alert('Data added succesfully');
           window.location.href='cetagory.html';
           </script>";
         }
         else{
           echo "<script>
           alert('Data adding failed');
           window.location.href='tables.html';
           </script>";
         }
      }


?>
