<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sequence count</title>
    
</head>
<body>
    <?php
     echo"<table border=\"1\" style=\'border-collapse\'";
     for($row=1;$row<=10;$row++){
         echo "<tr>";
         for($col=1;$col<=10;$col++){
             $val =$row+$col;
             echo "<td>$val</td>"
         }
         echo "</tr>";
     }
     echo "</table>";
     ?>
    

</body>
</html>