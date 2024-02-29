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

  $sql = "select * from food;";
  $result = $conn->query($sql);
  if($result->num_rows>0){
    echo "<table border=1>";
    echo "<tr><th>order_no</th><th>name</th><th>qty</th><th>specification</th><th>food_id</th>";
      while($row=$result->fetch_assoc()){
        echo"<tr><td>";
      $id=$row['order_no'];
    //   echo $id; echo "</td><td>";
      echo $row['order_no']; echo "</td><td>";
      echo $row['name']; echo "</td><td>";
      echo $row['qty']; echo "</td><td>";
      echo $row['specification']; echo "</td><td>";
      echo $row['food_id']; echo "</td><td>";
      echo "<button><a href='foodu.php?id=$id'>Edit</a></button>";echo "</td><td>";
      echo "<button><a href='deletf.php?id=$id'>Delete</a></button>"; 
      echo "\t\t";
      echo "</tr>";
      }
      echo "</table>";
}
}


?>
