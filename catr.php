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

  $sql = "select * from category;";
  $result = $conn->query($sql);
  if($result->num_rows>0){
    echo "<table border=1>";
    echo "<tr><th>category_id</th><th>category_name</th><th>date</th><th>time</th>";
      while($row=$result->fetch_assoc()){
        echo"<tr><td>";
      $id=$row['category_id'];
    //   echo $id; echo "</td><td>";
      echo $row['category_id']; echo "</td><td>";
      echo $row['category_name']; echo "</td><td>";
      echo $row['date']; echo "</td><td>";
      echo $row['time']; echo "</td><td>";
      echo "<button><a href='catau.php?id=$id'>Edit</a></button>";echo "</td><td>";
      echo "<button><a href='catd.php?id=$id'>Delete</a></button>"; 
      echo "\t\t";
      echo "</tr>";
      }
      echo "</table>";
}
}


?>
