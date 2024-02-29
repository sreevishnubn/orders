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
$sql="select * from customer where phone_no=$id";
$result = $conn->query($sql);
$row=$result->fetch_assoc();
$name=$row['name'];
$address=$row['address'];
$Email=$row['Email'];
$phone_no=$row['phone_no'];
$DOB=$row['DOB'];
$password=$row['password'];
$customer_id=$row['customer_id'];
$review=$row['review'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $add=$_POST['add'];
  $email=$_POST['email'];
  $ph=$_POST['ph'];
  $dob=$_POST['dob'];
  $pass=$_POST['pass'];
  $cid=$_POST['cid'];
  $rew=$_POST['rew'];
  $sql ="update customer set name='$name',address='$add',Email='$email',phone_no='$ph',DOB='$dob',password='$pass',customer_id='$cid',review='$rew' where phone_no='$id'";
  $result = $conn->query($sql);
  if($result){
   //echo "Data updated sucessfully";
   header('location:adcre.php');
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
        <h2>CUSTOMER DETAILS</h2>
        
    </head> 
    <body>
        <br>
        <br>
        This is a page to update the details about the Customers..
        <form method="post">
            <table>
                <tr>
                    <td><h4>Customer name :</h4></td>
                    <td><input type="text" name="name" value=<?php echo $name;?>></td><br>
                </tr><br>
                <tr>
                    <td><h4>ADDRES :</h4></td>
                    <td><input type="text" name="add"  value=<?php echo $address;?>></td><br>
                </tr><br>
                
                <tr>
                    <td><h4>EMAIL :</h4></td>
                    <td><input type="email" name="email"  value=<?php echo $Email;?>></td>
                </tr>
                <tr>
                    <td><h4>PHONE NUMBER :</h4></td>
                    <td><input type="number" name="ph"  value=<?php echo $phone_no;?>></td>
                </tr>
                <tr>
                    <td><h4>DOB :</h4></td>
                    <td><input type="date" name="dob"  value=<?php echo $DOB;?>></td>
                </tr>
                <tr>
                    <td><h4>PASSWORD :</h4></td>
                    <td><input type="password" name="pass"  value=<?php echo $password;?>></td>
                </tr>
                <tr>
                    <td><h4>CUSTOMER_ID :</h4></td>
                    <td><input type="number" name="cid"  value=<?php echo $customer_id;?>></td>
                </tr>
                <tr>
                    <td><h4>REVIEW :</h4></td>
                    <td><input type="text" name="rew"  value=<?php echo $review;?>></td>
                </tr>
                
                <tr>
                    <!-- <td><button type="submit" name="submit">update</button></td> -->
                    <td><input type="submit" name="submit"></td>
                </tr>
            </table>
</form>
    </center>
    </body>

</html>
