<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
      
 <HEAD>
  <TITLE>Patient Registration </TITLE>
  </head>
  
    <style>
        span
        {
            color:red;

        }
        </style>

        <?php
        $iErr=$nErr=$mErr=$aErr=$gErr="";

        if($_SERVER["REQUEST_METHOD"]=='POST')
            {

        $PatientID=$_POST['PatientID'];
        $PatientName=$_POST['PatientName'];
        $MobileNo=$_POST['MobileNo'];
        $Age=$_POST['Age'];
        $gender=$_POST['gender'];

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
        
        if(empty($Age))
            {
            $aErr="Patient ID is Required";
            }
        else if(!filter_var($Age,FILTER_VALIDATE_INT))

        {
            $aErr="Patient ID must be number";

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
            if($iErr==""&&$nErr==""&&$mErr==""&&$aErr==""&&$gErr=="")
            {
                
                header("Location:insert.php");
                
            }*/
            }
        ?>

    
  
  
  

  <a href="home.html"><input name="HOME" value="HOME" type="submit"></a>
 <body style="background-image: url(green1.JPG);">
     <form method="post" action="insert.php" name="HOME">
     <p><span class="Err">*Required field</span></p>
<table align='center' bgcolor='#00FFFF' height='400px' width='450px'>
<center>
<tr bgcolor='black'><td align=center><font SIZE=6 width="300px" color=white><i><u>HOSPITAL MANAGEMENT SYSTEM</font></td></tr>

<tr bgcolor='#FF0066'><td align=center><font size=5 color=white>PATIENT INFORMATION</font></td></tr>

<tr><td><table width=500 >






<tr>
<td>Patient ID</td>
<td><input type="text" name="PatientID"></td><td><span>*<?php echo $iErr ;?></span></td>
</tr>


<tr>
<td>Patient Name</td>
<td><input type="text" name="PatientName"></td><td><span>*<?php echo $nErr ;?></span></td>
</tr>

<tr>
<td>Address</td>
<td><textarea rows="5" cols="20" name="adds"></textarea>
</tr>

<tr>
<td>Mobile No</td>
<td><input type="text" name="MobileNo"></td><td><span>*<?php echo $mErr ;?></span></td>
</tr>

<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="male">Male<input type="radio" name="gender" value="female">Female</td><td><span>*<?php echo $gErr ;?></span></td>
</tr>

<tr>
<td>Age</td>
<td><input type="text" name="Age">yrs</td><td><span>*<?php echo $aErr ;?></span></td>
</tr>

<tr>
<td> Registration Date</td>
<td><input type="date" name="date">

</td>
</tr>

<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr>
<td><a href="insert.php"><input type="submit" value="Add" name="Add"></a></td>
<td><a href="delete1.php"> <input type="button" value="Delete"  name="del" ></a></td>
<td><a href="update.php"><input type="button" value="Update"  name="up"></a></td>
<td><input type="reset" value="Reset"  name="reset"></a></td>
<td><a href="display.php">Display</a></td>
</tr>

</table>

</form>

 </BODY>
</HTML>
