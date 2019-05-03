<?php
$m=new Mongo();
$db=$m->hospital;
$coll=$db->test;

$doc2=array("pid"=>$_POST['PatientID'],"pname"=>$_POST['PatientName'],"Amount"=>$_POST['Amount'],"testname"=>$_POST['TestName'],"gender"=>$_POST['gender'],"date"=>$_POST['date']);

$coll->insert($doc2);

echo "Doc inserted..!!";
include("test1.php");
?>