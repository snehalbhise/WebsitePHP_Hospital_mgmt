<?php
try{
    $conn=new mongo("localhost");
    $dbname=$conn->selectDb("hospital");
    $coll=$dbname->selectCollection("patient");
    $patient=$coll->find();
     echo"<td>"."<a href=patient1.php>"."<input type=submit value=Back name=back>"."</a>"."</td>";
    echo "<table border=2px bgcolor=#fcfcfc align=center>";
echo "<tr>";
         echo "<th>"."patient ID"."</th>";
         echo "<th>"."patient Name"."</th>";
         echo "<th>"."Address"."</th>";
         
         echo "<th>"."Mobile No"."</th>";
         echo "<th>"."gender"."</th>";
         echo "<th>"."Age"."</th>";
         echo "<th>"."Date"."</th>";
         echo "</tr>";
        
    foreach($patient As $patient)
    {
        // echo "hhh";
          echo "<tr>".
            "<td>".$patient['pid']."</td>".  
            "<td>".$patient['pname']."</td>".        
           "<td>".$patient['Address']."</td>".
           "<td>".$patient['mobile']."</td>".
          "<td>".$patient['gender']."</td>".
          "<td>".$patient['age']."</td>".
          "<td>".$patient['date']."</td>";
        echo"</tr>";
       
        
    }
    echo "</table>";
    $conn->close();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<body style="background-image: url(green1.JPG);">
</body>





				