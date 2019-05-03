<?php
$m=new Mongo();
$db=$m->hospital;
$coll=$db->patient;

$doc=array("pid"=>$_POST['PatientID'],"pname"=>$_POST['PatientName'],"Address"=>$_POST['adds'],"mobile"=>$_POST['MobileNo'],"gender"=>$_POST['gender'],"age"=>$_POST['Age'],"date"=>$_POST['date']);

$coll->insert($doc);

echo "Doc inserted..!!";
include("patient1.php");
?>