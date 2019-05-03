<html>
      
 <HEAD>
  <TITLE>Test Information </TITLE>
  </head>
  
    <style>
        span
        {
            color:red;

        }
        </style>

        <?php
        $iErr=$nErr=$gErr="";

        if($_SERVER["REQUEST_METHOD"]=='POST')
            {

        $PatientID=$_POST['PatientID'];
        $PatientName=$_POST['PatientName'];
         
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
        
        
        
            
            
        
        

         if(empty($gender))
            {
            $gErr="gender is Required";
            }
            /*
            if($iErr==""&&$nErr==""&&$gErr=="")
            {
                
                header("Location:home.html");
                
            }*/
            }
        ?>

        
      
 <a href="home.html"><input name="HOME" value="HOME" type="submit"></a>
 <body style="background-image: url(r4.JPG);">
<form method="post" action="rinsert.php" name="HOME">
<table align='center' bgcolor="#00FFFF" height="400px" width="450px">
<center>
<form method="POST" action="rinsert.php">
<tr bgcolor=black><td align=center><font SIZE=6 width="300px" color=white><i><u>HOSPITAL MANAGEMENT SYSTEM</font></td></tr>

<tr bgcolor=#FF0066><td align=center><font size=5 color=white>ROOM INFORMATION</font></td></tr>

<form method="POST" action="rinsert.php">
<tr><td><table width=500 >
     <p><span class="Err">*Required field</span></p>

<tr>
<td>Patient ID</td>
<td><input type="text" name="PatientID"></td><td><span>*<?php echo "$iErr" ;?></span></td>
</tr>


<tr>
<td>Patient Name</td>
<td><input type="text" name="PatientName"></td><td><span>*<?php echo "$nErr" ;?></span></td>
</tr>









<tr>
<td>Room No</td>
<td><input type="text" name="roomno"></td>
<td><a href="ava.php"><input type="button" value="Availability"></a></td>
</tr>

<tr>
<td>Bed No</td>
<td>
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


<tr>
<td>Room Type</td>
<td>
<select name="rt">
 <option></option>
   	<option>ICU</option>
	 <option>Semi Special</option>
	 <option>General ward</option>
	 <option>Special ward</option>
	 </select></td>

</tr> 

<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="male">Male<input type="radio" name="gender" value="female">Female</td><td><span>*<?php echo "$gErr" ;?></span></td>
</tr>

<tr>
<td>Date of Admit</td>
<td><input type="date" name="adate">
</tr>


<tr>
<td>Date of Discharge</td>
<td><input type="date" name="ddate">
</tr>


<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr>
    <td><a href="rinsert.php"><input type="submit" value="submit" name="submit"></a></td>
<td><a href="rupdate.php"><input type="button" name="update" value="update" ></td>
<td><a href="rdelete1.php"><input type="button" name="delete" value="delete" ></a></td>
<td><a href="rdisplay.php">Display</a></td>
</tr>

</table>
</table>



 </BODY>
</HTML>
