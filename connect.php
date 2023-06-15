<?php
$Name = $_POST['Name'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$conn= new mysqli('localhost','root','password','vin');
if($conn->connect_error)
{
    die('connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into customers(Name, email, amount)
    value(?, ?, ?)");
    $stmt->bind_param("ssi",$Name, $email, $amount);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>