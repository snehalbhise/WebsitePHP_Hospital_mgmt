<?php
$m=new Mongo();
$db=$m->hospital;
$coll=$db->test;
//include_once 'display.php';
echo'<br>';
$coll->remove(array("pid"=>$_POST['PatientID']));



echo "Doc deleted..!!";
include("deletet1.php");
?>