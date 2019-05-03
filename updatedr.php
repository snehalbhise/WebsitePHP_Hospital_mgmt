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
         $coll=$db->doctor;
        $DoctorID=$_POST['DoctorID'];
        if(empty($DoctorID))
{ $idErr="IDis required..";}
 else if(!filter_var($DoctorID,FILTER_VALIDATE_INT))
   {$idErr="Invalid ID";}
 else 
     {
 
     $coll->update(array("did"=>$_POST['DoctorID']),array('$set'=>array("mobile"=>$_POST['MobileNo'])));
     //$coll->update(array("pid"=>$_POST['PatientID']),array('$set'=>array("Address"=>$_POST['adds'])));
    //$coll->update(array("enroll"=>$_POST['enroll']),array('$set'=>array("address"=>$_POST['address'])));     
      
     }
}
        ?>
        <a href="doctor1.php"><input type="button" name="back" value="back"></a>
    <center>      
<table bgcolor='#00ffff' height="400px" width="450px">
  <body style="background-image: url(dct.JPG);">  
        <form method="POST" action="<?php echo$_SERVER['PHP_SELF'];?>" >
            <tr bgcolor=black><td align=center><font SIZE=6 width="300px" color=white><i><u>HOSPITAL MANAGEMENT SYSTEM</font></td></tr>

<tr bgcolor=#ff0066><td align=center><font size=5 color=white>Doctor INFORMATION</font></td></tr>

<tr><td><table width=450 height="200" >
            
       
                  <p>Enter the Doctor ID you want to update</p>
                  <tr><th>Doctor ID</th><th>:</th><th><input type="text" name="DoctorID"></th>
                                   <th><span>*<?php echo"$idErr";?></span></th>
                  <tr><th>Mobile No:</th><th>:</th><th><input type="number" name="MobileNo"></a></th>
                  
                      
                   
                   
                  <tr> <th><input type="submit" name="update" value="UPDATE"></th>
                      <td><a href="displaydr.php"><input type="button" name="display" value="DISPLAY"></tr>
         </table>
            </form>
            </center>
 
    
    </body>
</html>


