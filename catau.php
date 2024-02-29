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
$sql="SELECT * FROM `category` WHERE category_id = $id;";
$result = $conn->query($sql);
$row=$result->fetch_assoc();
$category_name=$row['category_name'];
$category_id=$row['category_id'];
$date=$row['date'];
$time=$row['time'];

if(isset($_POST['submit'])){
  $category_name=$_POST['category_name'];
  $category_id=$_POST['category_id'];
  $date=$_POST['date'];
  $time=$_POST['time'];

  $sql ="update category set category_name='$category_name',category_id='$category_id',date='$date',time='$time' where category_id='$id'";
  $result = $conn->query($sql);
  if($result){
   //echo "Data updated sucessfully";
   header('location:catr.php');
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
        <h2>CATEGORY DETAILS</h2>
        
    </head> 
    <body>
        <br>
        <br>
        This is a page to update the details about the Customers..
        <form method="post">
            <table>
                <tr>
                    <td><h4>category name :</h4></td>
                    <td><input type="text" name="category_name" value=<?php echo $category_name;?>></td><br>
                </tr><br>
                <tr>
                    <td><h4>category id :</h4></td>
                    <td><input type="number" name="category_id"  value=<?php echo $category_id;?>></td><br>
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
