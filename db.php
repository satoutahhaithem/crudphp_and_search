<?php
$dsn = 'mysql:host=localhost;dbname=company';
$username='root';
$password ='';
$option=[];

try{
    $connection = new PDO($dsn,$username,$password,$option);
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    // echo "connection successfull";
}catch( PDOException $e){

}
?>