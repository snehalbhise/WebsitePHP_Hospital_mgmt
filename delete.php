<?php
$m=new Mongo();
$db=$m->hospital;
$coll=$db->patient;
$coll->remove(array("pid"=>$_POST['PatientID']));



echo "Doc deleted..!!";
include("delete1.php");
?>