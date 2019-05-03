<html>
<body>
    <a href="doctor1.php"><input type="button" name="back" value="back"></a>
    <center>
<table bgcolor='#00ffff' height="400px" width="450px">
  <body style="background-image: url(dct.JPG);">  
<form method="POST" action="deletedr.php">
     <tr bgcolor=black><td align=center><font SIZE=6 width="300px" color=white><i><u>HOSPITAL MANAGEMENT SYSTEM</font></td></tr>

<tr bgcolor=#ff0066><td align=center><font size=5 color=white>Doctor INFORMATION</font></td></tr>

<tr><td><table width=450 height="200" >
            <center>
                <h3>Enter Doctor ID to be deleted</h3></center>
        <tr>
            <td><b>Doctor ID</b></td>
        <td><input type="text" name="DoctorID"></td>
        </tr>
        <tr>
        <td><a href="deletedr.php"><input type="submit" value="Delete" name="submit"></a></td>
        <td><input type="reset" value="Reset"  name="reset"></td>
        <td><a href="displaydr.php">Display</a></td>
        </tr>
        </form>
        </table>
        </center>

        </body>
        </html>
        
        

