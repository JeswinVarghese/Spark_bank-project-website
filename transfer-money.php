<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transfer Money</title>
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
     $mysqli = new mysqli("localhost",$username,$password,$database);
     
     $query = "SELECT * FROM customers";

     echo '<form method = "post" action = "handler.php">';
     echo '<br><h1 style = "font-family: Trebuchet MS,Lucida Sans Unicode,Lucida Grande,Lucida Sans, Arial, sans-serif;color: black;">Transfer Money</h1><br>';

     echo '<select name = "sender" required>';
     echo '<option selected disabled value = "">Choose Sender</option>';
     if($result = $mysqli->query($query)){

         while($row = $result->fetch_assoc()){
            $fieldname1 = $row["ID"];
            $fieldname2 = $row["Name"];
            $fieldname3 = $row["Email"];
            $fieldname4 = $row["Phone"];
            $fieldname5 = $row["Balance"];
            echo '<option value = '.$fieldname1.'>'.$fieldname2.' </option>';
         }
     $result->free();    
     }
     echo'</select>';
  
     echo '<select name = "receiver" required>';
     echo '<option selected disabled value = "">Choose Receiver</option>';
     if($result = $mysqli->query($query)){

         while($row = $result->fetch_assoc()){
            $fieldname1 = $row["ID"];
            $fieldname2 = $row["Name"];
            $fieldname3 = $row["Email"];
            $fieldname4 = $row["Phone"];
            $fieldname5 = $row["Balance"];
            echo '<option value = '.$fieldname1.'>'.$fieldname2.' </option>';
         }
     $result->free();    
     }
     echo '</select>';
     echo '<br>';

     echo '<label for = "amount"> Enter amount : </label><br>';
     echo '<input name = "amount" type = "number" required >';
     echo '<br>';

     echo '<input type = "submit" name="send" class="t-button">';
     echo'</form>';
?>;
</div>
</body>
</html>

