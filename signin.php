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
         else {
            echo 'connected to db';
            $userid=$_POST['user'];
            $passwd = $_POST['password'];
            $sql = "select password from customer where customer_id=$userid;";
            $result = $conn->query($sql);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                $pass = $row['password'];
                }
            }
            if(" ".$passwd==$pass){
           
                echo "<script>
                alert('Login succesfull, Your owner ID is $pass');
                window.location.href='tables.html';
                </script>";

            }
            else{
                echo "<script>
                alert('incorrect login info');
                window.location.href='sign.html';
                </script>";
            }

}

?>
