<?php
$m=new Mongo();
$db=$m->hospital;
$coll=$db->room;

$doc1=array("pid"=>$_POST['PatientID'],"pname"=>$_POST['PatientName'],"Roomno"=>$_POST['roomno'],"Bedno"=>$_POST['b'],"RoomType"=>$_POST['rt'],"gender"=>$_POST['gender'],"adate"=>$_POST['adate'],"ddate"=>$_POST['ddate']);
$coll->insert($doc1);

echo "Doc inserted..!!";
include("room1.php");
?>