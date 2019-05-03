<html>
<form method="POST">
<?php
$m=new mongo();
$db=$m->hospital;
$coll=$db->room;
$result=$coll->find();
$flag=0;
$a=$_POST["roomno"];
 echo"<body background=r4.jpg>";
 echo"<a href=ava.php><input type=button value=back></a>";
foreach($result as $doc)
{
  if($doc['Roomno']==$a)
   {
     $flag=1;
	 break;
	}
	
}

if($flag==1)
{
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<br>";
    echo"<center>";
   echo " <h1><i>Sorry!!!!!!!!!!!</i></h1>";
    echo"<br>";
	echo"<br>";
   echo"<h1><i>Room Not Available.</i></h1>";
   echo"</center>";

}

else
{
   echo"<br>";
   echo"<br>";
   echo"<br>";
   echo"<br>";
   echo"<br>";
   echo"<center>";
   echo "<h1><i>Room Available.</i></h1>";
   echo"<br>";
   
   echo"</center>";
}
   ?>
   