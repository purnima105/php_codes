<?php
session_start();

$_SESSION['name']="purnima";
$_SESSION['password']=1111;

header("Location:/web2/project_format/dashboard.php");  //sir le lekhako

?>