<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>
        p
        {
            color:blue;
            font-size:20px;
        }
    </style>
    <body>
        <?php
        $idErr="";
        if($_SERVER["REQUEST_METHOD"]=='POST')
{
         $m=new mongo();
         $db=$m->hospital;
         $coll=$db->room;
        $PatientID=$_POST['PatientID'];
        if(empty($PatientID))
{ $idErr="IDis required..";}
 else if(!filter_var($PatientID,FILTER_VALIDATE_INT))
   {$idErr="Invalid ID";}
 else 
     {
 
     $coll->update(array("pid"=>$_POST['PatientID']),array('$set'=>array("Roomno"=>$_POST['r'])));
     $coll->update(array("pid"=>$_POST['PatientID']),array('$set'=>array("Bedno"=>$_POST['b'])));
    $coll->update(array("pid"=>$_POST['PatientID']),array('$set'=>array("RoomType"=>$_POST['rt']))); 
     //$coll->update(array("enroll"=>$_POST['enroll']),array('$set'=>array("address"=>$_POST['address'])));     
      
      
     }
}
        ?>
        <a href="room1.php"><input type="submit" value="back" name="back"></a>
    <center>      
<table bgcolor='#00ffff' height="400px" width="450px">
  <body style="background-image: url(r4.JPG);">  
        <form method="POST" action="<?php echo$_SERVER['PHP_SELF'];?>" >
            <tr bgcolor=black><td align=center><font SIZE=6 width="300px" color=white><i><u>HOSPITAL MANAGEMENT SYSTEM</font></td></tr>

<tr bgcolor=#ff0066><td align=center><font size=5 color=white>Room INFORMATION</font></td></tr>

<tr><td><table width=450 height="200" >
            
       
                  <p>Enter the patient ID you want to update</p>
                  <tr><th>Patient ID</th><th>:</th><th><input type="text" name="PatientID"></th>
                                   <th><span>*<?php echo"$idErr";?></span></th></tr>
                  <tr><th>Room no</th><th>:</th><td>
<select name="r">
    <option></option>
    <option>1</option>
	<option>2</option>
	 <option>3</option>
	 <option>4</option>
	 <option>5</option>
	  <option>6</option>
     <option>7</option>
    <option>8</option>
	<option>9</option>
	 <option>10</option>
	 <option>11</option>
	 <option>12</option>
	  <option>13</option>
	  <option>14</option>
	  <option>15</option>
</select></td></tr>
                  
                  
 <tr><th>Bedno</th><th>:</th><td>
<select name="b">
 <option></option>
    <option>1</option>
	<option>2</option>
	 <option>3</option>
	 <option>4</option>
	 <option>5</option>
	  <option>6</option>
	 </select></td>
 </tr> 
 
 <tr><th>RoomType</th><th>:</th>
<td>
<select name="rt">
 <option></option>
	<option>ICU</option>
	 <option>Semi Special</option>
	 <option>General ward</option>
	 <option>Special ward</option>
	 </select></td>

</tr> 

 <tr> <th><input type="submit" name="update" value="UPDATE"></th>
<td><a href="rdisplay.php"><input type="button" name="display" value="DISPLAY"></tr>
     </table>
     </form>
      </center>
 
    
    </body>
</html>


