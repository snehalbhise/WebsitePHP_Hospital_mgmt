<?php
$m=new Mongo();
$db=$m->hospital;
$coll=$db->bill;
$coll->remove(array("pid"=>$_POST['PatientID']));



echo "Doc deleted..!!";
include("bdelete1.php");
?>