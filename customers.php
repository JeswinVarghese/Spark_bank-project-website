
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer List</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
     <section class="main-page">
         <nav class="nav-bar">
           <ul>   
            <li><a href="home.html">HOME</a></li>
            <li><a href="customers.php">CUSTOMER LIST</a></li>
            <li><a href="transaction-record.php">TRANSACTIONS</a></li>
            <li><a href="#">ABOUT</a></li>
            </ul>
         </nav>
      </section>    
<div>
<?php

    $username = "root";
    $password = "";
    $database = "spark database";
    $mysqli = new mysqli("localhost", $username, $password, $database);
    $query = "SELECT * FROM customers";

    echo '<table> 
        <caption><b> Customer List </b></caption>
        <thead>
        <tr> 
            <th> <font face="Arial">ID</font> </th> 
            <th> <font face="Arial">Name</font> </th> 
            <th> <font face="Arial">Email</font> </th> 
            <th> <font face="Arial">Phone Number</font> </th> 
            <th> <font face="Arial">Current Balance</font> </th> 
        </tr>
        </thead>';

    echo '<tbody>';

    if ($result = $mysqli->query($query)) {

        while ($row = $result->fetch_assoc()) {
            $field1name = $row["ID"];
            $field2name = $row["Name"];
            $field3name = $row["Email"];
            $field4name = $row["Phone"];
            $field5name = $row["Balance"];

            echo '<tr>';
            echo '<td>'.$field1name.'</td>';
            echo '<td>'.$field2name.'</td>';
            echo '<td>'.$field3name.'</td>';
            echo '<td>'.$field4name.'</td>';
            echo '<td>'.$field5name.'</td>';
            echo '</tr>';
        }
        echo '</tbody>';

        $result->free();
    }
    echo '</table>';
?>
</div>

<div style=" text-align : center; ">
    <a href="transfer-money.php" class="t-button">Transfer Money</a>
</div>
<br>
<br>
</body>
</html>