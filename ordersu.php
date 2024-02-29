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
$sql="select * from orders where order_no=$id";
$result = $conn->query($sql);
$row=$result->fetch_assoc();
$date=$row['date'];
$order_no=$row['order_no'];
$time=$row['time'];
$floor=$row['floor'];
$order_type=$row['order_type'];
$cphone=$row['cphone'];

if(isset($_POST['submit'])){
  $date=$_POST['date'];
  $order_no=$_POST['order_no'];
  $time=$_POST['time'];
  $floor=$_POST['floor'];
  $order_type=$_POST['order_type'];
  $cphone=$row['cphone'];

  $sql ="update orders set date='$date',order_no='$order_no',time='$time',floor=$floor,order_type='$order_type',cphone=$cphone where order_no=$id";
  $result = $conn->query($sql);
  if($result){
   //echo "Data updated sucessfully";
   header('location:foodr.php');
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
        <h2>ORDERS DETAILS</h2>
        
    </head> 
    <body>
        <br>
        <br>
        This is a page to update the details about the Customers..
        <form method="post">
            <table>
                <tr>
                    <td><h4>date :</h4></td>
                    <td><input type="date" name="date" value=<?php echo $date;?>></td><br>
                </tr><br>
                <tr>
                    <td><h4>order no :</h4></td>
                    <td><input type="number" name="order_no"  value=<?php echo $order_no;?>></td><br>
                </tr><br>
                
                <tr>
                    <td><h4>time :</h4></td>
                    <td><input type="time" name="time"  value=<?php echo $time;?>></td>
                </tr>
                <tr>
                    <td><h4>floor :</h4></td>
                    <td><input type="number" name="floor"  value=<?php echo $floor;?>></td>
                </tr>
                <tr>
                    <td><h4>order_type :</h4></td>
                    <td><input type="text" name="order_type"  value=<?php echo $order_type;?>></td>
                </tr>
                <tr>
                <tr>
                    <td><h4>cphone :</h4></td>
                    <td><input type="number" name="cphone"  value=<?php echo $cphone;?>></td>
                </tr>
                <tr>
                
                
                <tr>
                    <!-- <td><button type="submit" name="submit">update</button></td> -->
                    <td><input type="submit" name="submit"></td>
                </tr>
            </table>
</form>
    </center>
    </body>

</html>
