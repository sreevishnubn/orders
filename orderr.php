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

  $sql = "select * from orders;";
  $result = $conn->query($sql);
  if($result->num_rows>0){
    echo "<table border=1>";
    echo "<tr><th>order_no</th><th>date</th><th>time</th><th>floor</th><th>order_type</th><th>cphone</th>";
      while($row=$result->fetch_assoc()){
        echo"<tr><td>";
      $id=$row['order_no'];
    //   echo $id; echo "</td><td>";
      echo $row['order_no']; echo "</td><td>";
      echo $row['date']; echo "</td><td>";
      echo $row['time']; echo "</td><td>";
      echo $row['floor']; echo "</td><td>";
      echo $row['order_type']; echo "</td><td>";
      echo $row['cphone']; echo "</td><td>";
      echo "<button><a href='ordersu.php?id=$id'>Edit</a></button>";echo "</td><td>";
      echo "<button><a href='ordersd.php?id=$id'>Delete</a></button>"; 
      echo "\t\t";
      echo "</tr>";
      }
      echo "</table>";
}
}


?>
