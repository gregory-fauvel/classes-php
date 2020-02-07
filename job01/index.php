<?php
session_start();
include ('user.php');
$greg = new User();
//$greg->register('fauvel','gregory','fauvel411@gmail.com','greg','titi');
//var_dump($greg);
$greg->connect('fauve','greg','toto','gregory','fauvel');
var_dump($greg);
//$greg->disconnect('fauvel','gregory','fauvel411@gmail.com','greg','titi');
//var_dump($greg);
//$greg->delete('fauvel','gregory','fauvel411@gmail.com','greg','titi');
//var_dump($greg);
//$greg->update('fauve','greg','toto','gregory','fauvel');
//var_dump($greg);
//$greg->isConnected('fauve','greg','toto','gregory','fauvel');
//var_dump($greg);
//$greg->getAllInfos('fauve','greg','toto','gregory','fauvel');
//var_dump($greg);
//$greg->getLogin('fauve','greg','toto','gregory','fauvel');
//var_dump($greg);
//$greg->getEmail('fauve','greg','toto','gregory','fauvel');
//var_dump($greg);
//$greg->getFirstname('fauve','greg','toto','gregory','fauvel');
//var_dump($greg);
//$greg->getLastname('fauve','greg','toto','gregory','fauvel');
//var_dump($greg);
$greg->refresh('fauve','greg','toto','gregory','fauvel');
var_dump($greg);


?>


