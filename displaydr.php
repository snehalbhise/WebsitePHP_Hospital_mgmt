<?php
try{
    $conn=new mongo("localhost");
    $dbname=$conn->selectDb("hospital");
    $coll=$dbname->selectCollection("doctor");
    $doctor=$coll->find();
     echo"<td>"."<a href=doctor1.php>"."<input type=submit value=Back name=back>"."</a>"."</td>";
    echo "<table border=2px bgcolor=#fcfcfc align=center>";
   
   
echo "<tr>";
         echo "<th>"."Doctor ID"."</th>";
         echo "<th>"."Doctor Name"."</th>";
         echo "<th>"."Specialization"."</th>";
         
         echo "<th>"."Qualification"."</th>";
         echo "<th>"."Mobile No"."</th>";
         echo "<th>"."Gender"."</th>";
         echo "<th>"."Date of Joining"."</th>";
         
         echo "</tr>";
        
    foreach($doctor As $doctor)
    {
        
          echo "<tr>".
            "<td>".$doctor['did']."</td>".  
            "<td>".$doctor['dname']."</td>".        
           "<td>".$doctor['Specialization']."</td>".
           "<td>".$doctor['qualification']."</td>".
          "<td>".$doctor['mobile']."</td>".
          "<td>".$doctor['gender']."</td>".
          "<td>".$doctor['date']."</td>";
        echo"</tr>";
       
        
    }
    echo "</table>";
    $conn->close();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
<body style="background-image: url(dct.JPG);">
</body>
