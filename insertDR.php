<?php
$m=new Mongo();
$db=$m->hospital;
$coll=$db->doctor;

$doc1=array("did"=>$_POST['DoctorID'],"dname"=>$_POST['DoctorName'],"Specialization"=>$_POST['Specialization'],"qualification"=>$_POST['qualification'],"mobile"=>$_POST['MobileNo'],"gender"=>$_POST['gender'],"date"=>$_POST['date']);

$coll->insert($doc1);

echo "Doc inserted..!!";
include("doctor1.php");
?>