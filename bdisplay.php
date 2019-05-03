<?php
try{
    $conn=new mongo("localhost");
    $dbname=$conn->selectDb("hospital");
    $coll=$dbname->selectCollection("bill");
    $bill=$coll->find();
     echo"<td>"."<a href=bill1.php>"."<input type=submit value=Back name=back>"."</a>"."</td>";
    echo "<table border=2px bgcolor=#fcfcfc align=center>";
   
   
echo "<tr>";
         echo "<th>"."Patient ID"."</th>";
         echo "<th>"."Patient Name"."</th>";
         echo "<th>"."Doctor Fees"."</th>";
         
         echo "<th>"."X-Ray Fees"."</th>";
         echo "<th>"."Lab Test"."</th>";
         echo "<th>"."Room Charge"."</th>";
         
         echo "<th>"."In Number"."</th>";
         echo "<th>"."In Words"."</th>";
         
         echo "</tr>";
        
    foreach($bill As $bill)
    {
        
          echo "<tr>".
            "<td>".$bill['pid']."</td>".  
            "<td>".$bill['pname']."</td>".        
           "<td>".$bill['df']."</td>".
           "<td>".$bill['xf']."</td>".
          
          "<td>".$bill['lf']."</td>".
          "<td>".$bill['rc']."</td>".
          "<td>".$bill['in']."</td>".
          "<td>".$bill['iw']."</td>";
          
        echo"</tr>";
       
        
    }
    echo "</table>";
    $conn->close();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
<body style="background-image: url(b4.JPG);">
</body>
