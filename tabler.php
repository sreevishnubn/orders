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

  $sql = "select * from tables;";
  $result = $conn->query($sql);
  if($result->num_rows>0){
    echo "<table border=1>";
    echo "<tr><th>table_id</th><th>table_name</th><th>date</th><th>time</th>";
      while($row=$result->fetch_assoc()){
        echo"<tr><td>";
      $id=$row['table_id'];
    //   echo $id; echo "</td><td>";
      echo $row['table_id']; echo "</td><td>";
      echo $row['table_name']; echo "</td><td>";
      echo $row['date']; echo "</td><td>";
      echo $row['time']; echo "</td><td>";
      echo "<button><a href='tableu.php?id=$id'>Edit</a></button>";echo "</td><td>";
      echo "<button><a href='tabled.php?id=$id'>Delete</a></button>"; 
      echo "\t\t";
      echo "</tr>";
      }
      echo "</table>";
}
}


?>
