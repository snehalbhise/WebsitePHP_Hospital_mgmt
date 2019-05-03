<?php
$m=new Mongo();
$db=$m->hospital;
$coll=$db->doctor;
$coll->remove(array("did"=>$_POST['DoctorID']));



echo "Doc deleted..!!";
include("deletedr1.php");
?>