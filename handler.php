<html>
<head>
<meta name = "viewport" content="width=device-width, initial-scale=1">
     <title>Transaction</title>
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
    $id1 = $_POST['sender'];
    $id2 = $_POST['receiver'];
    $amount = $_POST['amount'];
    $balance = 0;
    
    $username = "root";
    $password = "";
    $database = "spark database";
    $mysqli = new mysqli("localhost",$username,$password,$database);

    if($result = $mysqli->query("SELECT * FROM customers WHERE ID = $id1")){
        while($row = $result->fetch_assoc()){
            $balance1 = $row['Balance'];
            $Name1 = $row['Name'];
        }
        $result->close();
    }

    if( $result = $mysqli->query( "SELECT * FROM customers WHERE ID = $id2" ) ) {
        while( $row = $result->fetch_assoc() ) {
            $balance2 = $row['Balance'];
            $name2 = $row['Name'];
        }
        $result->close();
    }

    if($id1 == $id2){
        $message = 'ERROR : The selected SENDER and RECEIVER are the same! ';
    }
   
    else if($amount > $balance1){
        $message = 'ERROR : Insuffient balance! ';
    }

    else{
        $newbalance1 = $balance1 - $amount;
        $newbalance2 = $balance2 +  $amount;

        $query2 = "INSERT INTO transactions (Name1, Name2, Amount) VALUES ('$Name1','$name2', $amount)";
        $query3 = "UPDATE customers SET Balance = $newbalance1 WHERE ID =$id1";
        $query4 = "UPDATE customers SET Balance = $newbalance2 WHERE ID = $id2";    
        if($result = $mysqli->query($query2)){
           $mysqli->query($query3);
           $mysqli->query($query4);
           $message = 'Success! The transaction is processed ';
        }

        else{ 
            $message = 'Database error, Try again!';
        } 
    }
    echo '<div class = "transaction-details">';
    echo '<h2>Transaction Details </h2><br><br><br>';
    echo '<b>Sender : </b>'.$Name1.'<br><br>';
    echo '<b>Receiver : </b>'.$name2.'<br><br>';
    echo '<b>Amount transferred : </b>'.$amount.'<br><br><br>';
    echo '<b>Message : </b><br>';
    echo $message;
    echo'<br><br><br>';
?>
</div>
</body>
</html>

