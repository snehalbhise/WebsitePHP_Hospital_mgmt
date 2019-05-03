<?php
$m=new Mongo();
$db=$m->hospital;
$coll=$db->room;
$coll->remove(array("pid"=>$_POST['PatientID']));



echo "Doc deleted..!!";
include("rdelete1.php");
?>