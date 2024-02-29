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

  $sql = "select * from customer;";
  $result = $conn->query($sql);
  if($result->num_rows>0){
    echo "<table border=1>";
    echo "<tr><th>phone_no</th><th>name</th><th>address</th><th>Email</th><th>DOB</th><th>customer_id</th><th>review</th><th>password</th><th>button</th><th>button</th>";
      while($row=$result->fetch_assoc()){
        echo"<tr><td>";
      $id=$row['phone_no'];
    //   echo $id; echo "</td><td>";
      echo $row['phone_no']; echo "</td><td>";
      echo $row['name']; echo "</td><td>";
      echo $row['address']; echo "</td><td>";
      echo $row['Email']; echo "</td><td>";
      echo $row['DOB']; echo "</td><td>";
      echo $row['customer_id']; echo "</td><td>";
      echo $row['review']; echo "</td><td>";
      echo $row['password']; echo "</td><td>";
      echo "<button><a href='updatead.php?id=$id'>Edit</a></button>";echo "</td><td>";
      echo "<button><a href='delete.php?id=$id'>Delete</a></button>"; 
      echo "\t\t";
      echo "</tr>";
      }
      echo "</table>";
}
}


?>
