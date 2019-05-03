<?php
try{
    $conn=new mongo("localhost");
    $dbname=$conn->selectDb("hospital");
    $coll=$dbname->selectCollection("test");
    $test=$coll->find();
    echo"<td>"."<a href=test1.php>"."<input type=submit value=Back name=back>"."</a>"."</td>";
    echo "<table border=2px bgcolor=#fcfcfc align=center>";
   
   
echo "<tr>";
         echo "<th>"."Patient ID"."</th>";
         echo "<th>"."Patient Name"."</th>";
         echo "<th>"."Test Name"."</th>";
         
         echo "<th>"."Gender"."</th>";
         echo "<th>"."Amount"."</th>";
         echo "<th>"."Date of Test"."</th>";
         
         echo "</tr>";
        
    foreach($test As $test)
    {
        
          echo "<tr>".
            "<td>".$test['pid']."</td>".  
            "<td>".$test['pname']."</td>".        
           "<td>".$test['testname']."</td>".
           "<td>".$test['gender']."</td>".
                  
          
          
          "<td>".$test['Amount']."</td>".
                   "<td>".$test['date']."</td>";
          
        echo"</tr>";
       
        
    }
    echo "</table>";
    $conn->close();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
<body style="background-image: url(ht.JPG);">
</body>