<?php
$dsn = 'mysql:hosy=localhost;dbname=sportcentrum';
$username = 'root';
$password = '';

try{
    // connect to mysql
    $con = new PDO($dsn,$username,$password, NULL);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {
    echo 'Not Connected '.$ex->getMessage();
}
// mysql select query
$stmt = $con->prepare('SELECT * FROM shippers');
$stmt->execute();
$result = $stmt->fetchAll();

foreach ($result as $ship)
{
    echo $ship['CompanyName'].' - '.$ship['ShippingPrice'].'kr'.' - '.$ship['ShippingMethod'].'<br>';
}

?>