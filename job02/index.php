<?php
session_start();
include ('user.php');
$greg = new User();
//$greg->register('fauve','greg','toto','gregory','fauvel');
//var_dump($greg);
$greg->connect('dark','greg','fauvel411@gmail.com','gregory','fauvel');
var_dump($greg);
//$greg->disconnect('fauvel','gregory','fauvel411@gmail.com','greg','titi');
//echo "vous etes déconnecté";
//var_dump($greg);
//$greg->delete('fauve','greg','toto','gregory','fauvel');
//var_dump($greg);
//$greg->update('dark','greg','fauvel411@gmail.com','gregory','fauvel');
//var_dump($greg);
//$greg->isConnected('dark','greg','fauvel411@gmail.com','gregory','fauvel');
//var_dump($greg);
//$greg->getAllInfos('dark','greg','fauvel411@gmail.com','gregory','fauvel');
//var_dump($greg);
//$greg->getLogin('dark','greg','fauvel411@gmail.com','gregory','fauvel');
//var_dump($greg);
//$greg->getEmail('dark','greg','fauvel411@gmail.com','gregory','fauvel');
//var_dump($greg);
//$greg->getFirstname('dark','greg','fauvel411@gmail.com','gregory','fauvel');
//var_dump($greg);
//$greg->getLastname('dark','greg','fauvel411@gmail.com','gregory','fauvel');
//var_dump($greg);
//$greg->refresh('dark','greg','fauvel411@gmail.com','gregory','fauvel');
//var_dump($greg);

?>


