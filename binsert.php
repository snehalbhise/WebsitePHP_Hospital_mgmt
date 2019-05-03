<?php
$m=new Mongo();
$db=$m->hospital;
$coll=$db->bill;

$doc=array("pid"=>$_POST['PatientID'],"pname"=>$_POST['PatientName'],"df"=>$_POST['DoctorFees'],"xf"=>$_POST['X-rayFees'],"rc"=>$_POST['RoomCharges'],"lf"=>$_POST['LabFees'],"in"=>$_POST['InNumber'],"iw"=>$_POST['InWords']);

$coll->insert($doc);

echo "Doc inserted..!!";
include("bill1.php");
?>