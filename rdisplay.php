<?php
try{
    $conn=new mongo("localhost");
    $dbname=$conn->selectDb("hospital");
    $coll=$dbname->selectCollection("room");
    $room=$coll->find();
     echo"<td>"."<a href=room1.php>"."<input type=submit value=Back name=back>"."</a>"."</td>";
     echo "<table border=2px bgcolor=#fcfcfc align=center>";
   
   
echo "<tr>";
         echo "<th>"."Patient ID"."</th>";
         echo "<th>"."Patient Name"."</th>";
         echo "<th>"."Room Type"."</th>";
         echo "<th>"."Room No"."</th>";
         
         
         echo "<th>"."Bed No"."</th>";
         echo "<th>"."Gender"."</th>";
         echo "<th>"."Date of Admit"."</th>";
         echo "<th>"."Date of Discharge"."</th>";
         
         echo "</tr>";
        
    foreach($room As $room)
    {
        
          echo "<tr>".
            "<td>".$room['pid']."</td>".  
            "<td>".$room['pname']."</td>".
             "<td>".$room['RoomType']."</td>".
           "<td>".$room['Roomno']."</td>".
           "<td>".$room['Bedno']."</td>".
          
          "<td>".$room['gender']."</td>".
          "<td>".$room['adate']."</td>".
          "<td>".$room['ddate']."</td>";
        echo"</tr>";
       
        
    }
    echo "</table>";
    $conn->close();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
<body style="background-image: url(r4.JPG);">
</body>