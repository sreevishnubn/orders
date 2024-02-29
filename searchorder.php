<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search orders</title>
</head>
<center>
<body>
    <h1>Search avaliable orders</h1>
    <form method="post">
        <input type="text" name="searchdata">
        <input type="submit" name="filterbutton">
    </form>
    <table border="1">
        <tr>
            <th>date</th>
            <th>order_no</th>
            <th>time</th>
            <th>floor</th>
            <th>order_type</th>
            <th>cphone</th>
        </tr>
        <?php
            
         $servername='localhost';
         $username='root';
         $password='';
         $dname='order';

         $conn=new mysqli($servername, $username, $password, $dname);

        if ($conn->connect_errno) {
            echo "Failed to connect" . $mysqli->connect_error;
            exit();
        }else{
            if(isset($_POST['filterbutton']))
            {
                $value = $_POST['searchdata'];
                $query = "select * from orders where concat(order_type,floor) like '%$value%'";
                $result = $conn->query($query);
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        echo "<tr><td>";
                        echo $row['date']; echo"</td><td>";
                        echo $row['order_no'];  echo"</td><td>";
                        echo $row['time']; echo"</td><td>";
                        echo $row['floor']; echo"</td><td>";
                        echo $row['order_type']; echo"</td><td>";
                        echo $row['cphone']; echo"</td><td>";
                        echo "</tr>";
                    }
                }
                else{
                    echo "<tr>";
                    echo "<td>no record found</td>";
                    echo "</tr>";
                }
            }
        }
        ?>
    </table>
</body>
</center>
</html>