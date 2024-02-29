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

  $sql = "select * from payment;";
  $result = $conn->query($sql);
  if($result->num_rows>0){
    echo "<table border=1>";
    echo "<tr><th>payment_id</th><th>netprice</th><th>cash paid</th><th>payment_id</th><th>payment_type</th>";
      while($row=$result->fetch_assoc()){
        echo"<tr><td>";
      $id=$row['payment_id'];
    //   echo $id; echo "</td><td>";
      echo $row['payment_id']; echo "</td><td>";
      echo $row['netprice']; echo "</td><td>";
      echo $row['cash paid']; echo "</td><td>";
      echo $row['payment_id']; echo "</td><td>";
      echo $row['payment_type']; echo "</td><td>";
      echo "\t\t";
      echo "</tr>";
      }
      echo "</table>";
}
}


?>
