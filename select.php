<?php
include "connection.php";

$sql = "SELECT * FROM `data`";


$data_receiver =  mysqli_query($yo,$sql);

echo "<center>";
echo "<h1 class='colour'> Database Read Operation  <style> .colour { color: Teal; } </style> </h1>";

    echo "<table border = '1' cellspacing = '0' cellpadding = '10'>";

echo "<td> id </td>";
echo " <td> FIRST_NAME </td>";  
echo " <td> LAST_NAME </td>";
echo " <td> CITY </td>";

    echo "<tr>";

while($result = mysqli_fetch_assoc($data_receiver)){
echo "<td>"  . $result['id'] . "</td>";
echo " <td> " . $result['first_name'] . "</td>";
echo " <td> " . $result['last_name'] . "</td>";
echo " <td> " . $result['city'] . "</td>";
echo "</tr>";
};

echo "</center>";






?>