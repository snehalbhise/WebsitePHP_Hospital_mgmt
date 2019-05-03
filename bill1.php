<html>
      
 <HEAD>
  <TITLE>Bill Information</TITLE>
  </head>
  
    <style>
        span
        {
            color:red;

        }
        </style>

        <?php
        $iErr=$nErr=$inErr=$wErr="";

        if($_SERVER["REQUEST_METHOD"]=='POST')
            {

        $PatientID=$_POST['PatientID'];
        $PatientName=$_POST['PatientName'];
        $InNumber=$_POST['InNumber'];
        $InWords=$_POST['InWords'];
       

        if(empty($PatientName))
            {
            $nErr=" Patient Name is Required";
            }
        else if(!preg_match("/^[a-z A-Z]*$/",$PatientName))
        {
            $nErr="Not valid  patient name";

        }

        if(empty($PatientID))
            {
            $iErr="Patient ID is Required";
            }
        else if(!filter_var($PatientID,FILTER_VALIDATE_INT))

        {
            $iErr="Patient ID must be number";

        }
        
        if(empty($InNumber))
            {
            $inErr="Total bill in Number is Required";
            }
        else if(!filter_var($InNumber,FILTER_VALIDATE_INT))

        {
            $inErr="Bill must be in number";

        }


         if(empty($InWords))
            {
            $wErr="Total Bill in words is Required";
            }
        else if(!preg_match("/^[a-z A-Z]*$/",$InWords))
        {
            $wErr="Bill must be in words";

        }
        
        
            
            /*if($iErr==""&&$nErr==""&&$inErr==""&&$wErr=="")
            {
                
                header("Location:home.html");
                
            }*/
            }
        ?>

    
   <a href="home.html"><input name="HOME" value="HOME" type="submit"></a>
  <body style="background-image: url(b4.JPG);">
    
     <form method="post" action="binsert.php" name="HOME">
       <p><span class="Err">*Required field</span></p>
<table align='center' bgcolor="#00FFFF" height=400 width=500>
<center>
<form method="POST">
<tr bgcolor=black><td align=center><font size=6  color=white><i><u>HOSPITAL MANAGEMENT SYSTEM</font></td></tr>

<tr bgcolor=#FF0066><td align=center><font size=5 color=white>BILL INFORMATION</font></td></tr>

<form method="POST">
<tr><td><table bgcolor="#ff66ff" width=500><h2>Patient Details</h2>


<tr>
<td>Patient ID</td>
<td><input type="text" name="PatientID"></td><td><span>*<?php echo "$iErr" ;?></span></td>
</tr>


<tr>
<td>Patient Name</td>
<td><input type="text" name="PatientName"></td><td><span>*<?php echo "$nErr" ;?></span></td>
</tr>

</table>

<table bgcolor="#ff66ff" width=500><h2>Fees</h2>

<tr>
<td>Doctor Fees</td>
<td><input type="text" name="DoctorFees">
<td>X-Ray Fees</td>
<td><input type="text" name="X-rayFees">

</tr>



<tr>
<td>Lab Test Fees</td>
<td><input type="text" name="LabFees">
</tr>

<tr>
<td>Room Charges</td>
<td><input type="text" name="RoomCharges">
</tr>

</table>

<table bgcolor="#ff66ff" width=500><h2>Total fees</h2>

<tr>
<td>In Number</td>
<td><input type="text" name="InNumber"></td><td><span>*<?php echo "$inErr" ;?></span></td>
</tr>


<tr>
<td>In Words</td>
<td><input type="text" name="InWords"></td><td><span>*<?php echo "$wErr" ;?></span></td>
</tr>

</table>





<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr>
    <td><a href="binsert.php"><input type="submit" value="submit" name="submit"></a></td>
<td><a href="bdelete1.php"><input type="button" value="delete"  name="delete" ></a></td>
<td><a href="bdisplay.php">Display</a></td>
</tr>

</table>
</table>



 </BODY>
</HTML>
