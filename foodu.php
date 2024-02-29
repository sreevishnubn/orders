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
$sql="select * from food where order_no=$id";
$result = $conn->query($sql);
$row=$result->fetch_assoc();
$name=$row['name'];
$qty=$row['qty'];
$specification=$row['specification'];
$order_no=$row['order_no'];
$food_id=$row['food_id'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $qty=$_POST['qty'];
  $specification=$_POST['specification'];
  $order_no=$_POST['order_no'];
  $food_id=$_POST['food_id'];

  $sql ="update food set name='$name',qty=$qty,specification='$specification',order_no=$order_no,food_id=$food_id where order_no=$id";
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
        <h2>FOOD DETAILS</h2>
        
    </head> 
    <body>
        <br>
        <br>
        This is a page to update the details about the Customers..
        <form method="post">
            <table>
                <tr>
                    <td><h4>name :</h4></td>
                    <td><input type="text" name="name" value=<?php echo $name;?>></td><br>
                </tr><br>
                <tr>
                    <td><h4>qty :</h4></td>
                    <td><input type="number" name="qty"  value=<?php echo $qty;?>></td><br>
                </tr><br>
                
                <tr>
                    <td><h4>specification :</h4></td>
                    <td><input type="text" name="specification"  value=<?php echo $specification;?>></td>
                </tr>
                <tr>
                    <td><h4>order_no :</h4></td>
                    <td><input type="number" name="order_no"  value=<?php echo $order_no;?>></td>
                </tr>
                <tr>
                    <td><h4>food_id :</h4></td>
                    <td><input type="number" name="food_id"  value=<?php echo $food_id;?>></td>
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
