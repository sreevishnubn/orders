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

$id=$_GET['id'];
$sql="select * from tables where table_id=$id";
$result = $conn->query($sql);
$row=$result->fetch_assoc();
$table_name=$row['table_name'];
$table_id=$row['table_id'];
$date=$row['date'];
$time=$row['time'];

if(isset($_POST['submit'])){
  $table_name=$_POST['table_name'];
  $table_id=$_POST['table_id'];
  $date=$_POST['date'];
  $time=$_POST['time'];

  $sql ="update tables set table_name='$table_name',table_id='$table_id',date='$date',time='$time' where table_id='$id'";
  $result = $conn->query($sql);
  if($result){
   //echo "Data updated sucessfully";
   header('location:tabler.php');
  }else{
    die(mysqli_error($conn));
  }
}
}
?>





<!DOCTYPE html>
<html>
    
    <head>
        <center>
        <title>  </title>
        <h2>TABLES DETAILS</h2>
        
    </head> 
    <body>
        <br>
        <br>
        This is a page to update the details about the Customers..
        <form method="post">
            <table>
                <tr>
                    <td><h4>table_name :</h4></td>
                    <td><input type="text" name="table_name" value=<?php echo $table_name;?>></td><br>
                </tr><br>
                <tr>
                    <td><h4>table_id :</h4></td>
                    <td><input type="number" name="table_id"  value=<?php echo $table_id;?>></td><br>
                </tr><br>
                
                <tr>
                    <td><h4>date :</h4></td>
                    <td><input type="date" name="date"  value=<?php echo $date;?>></td>
                </tr>
                <tr>
                    <td><h4>time :</h4></td>
                    <td><input type="time" name="time"  value=<?php echo $time;?>></td>
                </tr>
               
                    <!-- <td><button type="submit" name="submit">update</button></td> -->
                    <td><input type="submit" name="submit"></td>
                </tr>
            </table>
</form>
    </center>
    </body>

</html>
