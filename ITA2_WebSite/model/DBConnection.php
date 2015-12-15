<?php

$dsn='mysql:host=localhost;dbname=ita2';
$uname='root';
$password=''; 


try{
    $conn= new PDO($dsn, $uname, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e)
{
    echo 'Connection failed: '.$e->getMessage();
}

$sql="SELECT * FROM itausers";
$rows=$conn->query($sql);
foreach($rows as $r){
    echo $r["email"].",   ".$r["password"];
}
?>

