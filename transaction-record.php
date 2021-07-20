<html>
<head>
    <meta charset="utf-8">
    <title>Transaction Records</title>
    <link rel="stylesheet" href="style.css">
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

    $query = "SELECT * FROM transactions";

    echo '<table>
          <caption><b>Transaction Records</b></caption>
          <thead>
          <tr>
              <th> <font face="Arial">S. No.</font> </th> 
              <th> <font face="Arial">Sender</font> </th> 
              <th> <font face="Arial">Receiver</font> </th> 
              <th> <font face="Arial">Amount</font> </th> 
              <th> <font face="Arial">Time</font> </th> 
          </tr>
          </thead>';
    echo '<tbody>';

    if($result = $mysqli->query($query)){
        while($row = $result->fetch_assoc()){
            $fieldname1 = $row["Sno"];
            $fieldname2 = $row["Name1"];
            $fieldname3 = $row["Name2"];
            $fieldname4 = $row["Amount"];
            $fieldname5 = $row["Time"];
       
            echo '<tr>';
            echo '<td>'.$fieldname1.'</td>';
            echo '<td>'.$fieldname2.'</td>';
            echo '<td>'.$fieldname3.'</td>';
            echo '<td>'.$fieldname4.'</td>';
            echo '<td>'.$fieldname5.'</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        $result->free();
    }    
    echo '</table>';
?>
</div>
<div style="display : block; text-align : center; margin : auto auto 20px auto">
    <a href="transfer-money.php" class="t-button">Transfer Money</a>
</div>
</body>
</html>        