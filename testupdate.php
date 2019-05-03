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
         $coll=$db->test;
        $PatientID=$_POST['PatientID'];
        if(empty($PatientID))
{ $idErr="IDis required..";}
 else if(!filter_var($PatientID,FILTER_VALIDATE_INT))
   {$idErr="Invalid ID";}
 else 
     {
 
     $coll->update(array("pid"=>$_POST['PatientID']),array('$set'=>array("testname"=>$_POST['TestName'])));
     $coll->update(array("pid"=>$_POST['PatientID']),array('$set'=>array("Amount"=>$_POST['Amount'])));
    $coll->update(array("pid"=>$_POST['PatientID']),array('$set'=>array("date"=>$_POST['date'])));     
      
     }
}
        ?>
        <a href="test1.php"><input type="submit" value="back" name="back"></a>
    <center>      
<table bgcolor='#00ffff' height="400px" width="450px">
  <body style="background-image: url(ht.JPG);">  
        <form method="POST" action="<?php echo$_SERVER['PHP_SELF'];?>" >
            <tr bgcolor=black><td align=center><font SIZE=6 width="300px" color=white><i><u>HOSPITAL MANAGEMENT SYSTEM</font></td></tr>

<tr bgcolor=#ff0066><td align=center><font size=5 color=white>TEST INFORMATION</font></td></tr>

<tr><td><table width=450 height="200" >
            
       
                  <p>Enter the patient ID you want to update</p>
                  <tr><th>Patient ID</th><th>:</th><th><input type="text" name="PatientID"></th>
                                   <th><span>*<?php echo"$idErr";?></span></th>
                  <tr><th>Test Name:</th><th>:</th><th><input type="text" name="TestName"></a></th>
                  <tr><th>Amount:</th><th>:</th><th><input type="text" name="Amount"></a></th> 
                       <tr><th>Date of Test:</th><th>:</th><th><input type="date" name="date"></a></th> 
                      
                   
                   
                  <tr> <th><input type="submit" name="update" value="UPDATE"></th>
                      <td><a href="testdisplay.php"><input type="button" name="display" value="DISPLAY"></tr>
         </table>
            </form>
            </center>
 
    
    </body>
</html>


