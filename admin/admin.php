<?php require_once '../db.php';?>

<?php 
$login=$_POST["login"];
$password=$_POST["password"];

$sql = $induction->prepare("SELECT id FROM user WHERE login=:login AND password=:password");
$sql->execute(array('login' =>$login, 'password'=>$password));

print_r($sql);