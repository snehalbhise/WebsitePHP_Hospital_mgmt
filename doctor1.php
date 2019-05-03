<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
      
 <HEAD>
  <TITLE>Doctor Registration </TITLE>
  </head>
  
    <style>
        span
        {
            color:red;

        }
        </style>

        <?php
        $iErr=$nErr=$mErr=$sErr=$gErr="";

        if($_SERVER["REQUEST_METHOD"]=='POST')
            {

        $DoctorID=$_POST['DoctorID'];
        $DoctorName=$_POST['DoctorName'];
        $MobileNo=$_POST['MobileNo'];
        $Specialization=$_POST['Specialization'];
        $gender=$_POST['gender'];

        if(empty($DoctorName))
            {
            $nErr=" Doctor Name is Required";
            }
        else if(!preg_match("/^[a-z A-Z]*$/",$DoctorName))
        {
            $nErr="Not valid  Doctor name";

        }

        if(empty($DoctorID))
            {
            $nErr="Doctor ID is Required";
            }
        else if(!filter_var($DoctorID,FILTER_VALIDATE_INT))

        {
            $nErr="Doctor ID must be number";

        }
        
        if(empty($Specialization))
            {
            $sErr="Specialization is Required";
            }
      



        
         if(empty($MobileNo))
            {
            $mErr="Mobile No is Required";
            }
        else if(!preg_match("/^[789]{1}[0-9]{9}$/", $MobileNo))

        {
            $mErr="Mobile no is not valid";

        }

         if(empty($gender))
            {
            $gErr="gender is Required";
            }
            /*
            if($iErr==""&&$nErr==""&&$mErr==""&&$sErr==""&&$gErr=="")
            {
                
                header("Location:home.html");
                
            }*/
            }
        ?>

  
   <a href="home.html"><input name="HOME" value="HOME" type="submit"></a>
  <body style="background-image: url(dct.JPG);">
      
 <form method="post" action="insertDR.php" name="HOME">
<table align='center' bgcolor="#00FFFF" height="400px" width="450px">
<center>
<tr bgcolor=black><td align=center><font SIZE=6 width="300px" color=white><i><u>HOSPITAL MANAGEMENT SYSTEM</font></td></tr>

<tr bgcolor=#FF0066><td align=center><font size=5 color=white>DOCTOR INFORMATION</font></td></tr>

<tr><td><table width=500 >


<tr>
<td>Doctor ID</td>
<td><input type="text" name="DoctorID"></td><td><span>*<?php echo "$iErr" ;?></span></td>
</tr>


<tr>
<td>Doctor Name</td>
<td><input type="text" name="DoctorName"></td><td><span>*<?php echo "$nErr" ;?></span></td>
</tr>

<tr>
<td>Specialization</td>
<td><input type="text" name="Specialization"></td><td><span>*<?php echo "$sErr" ;?></span></td>
</tr>

<tr>
<td>Qualification</td>
<td>
<select name="qualification">
          <option></option>
         <option> MBBS </option>
         <option>BAMS</option>
	 <option> MD </option>
	 <option>BHMS </option>
	 <option> MS </option>
	 </select></td>

</tr>


<tr>
<td>Mobile No</td>
<td><input type="text" name="MobileNo"></td><td><span>*<?php echo "$mErr" ;?></span></td>
</tr>

<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="male">Male<input type="radio" name="gender" value="female">Female</td><td><span>*<?php echo "$gErr" ;?></span></td>
</tr>

<tr>
<td>Date of joining</td>
<td><input type="date" name="date"> 

</td>
</tr>



<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr>
<td><a href="insertDR.php"><input type="submit" value="Add" name="submit"></a></td>
<td><a href="deletedr1.php"><input type="button" value="Delete"  name="submit" ></a></td>
<td><a href="updatedr.php"><input type="button" value="Update"  name="submit"></a></td>
<td><input type="reset" value="Reset"  name="reset"></a></td>
<td><a href="displaydr.php">Display</a></td>
</tr>

</table>
</table>



 </BODY>
</HTML>
