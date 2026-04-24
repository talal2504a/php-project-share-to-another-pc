<?php

$yo = ["talal","ali","maaz","hamza","afsan","sufiyn","osama","moiz","talal","ali","maaz","hamza","afsan","sufiyn","osama","moiz"];


// echo $yo [0];


// for($i=0; $i<count($yo);$i++){
//     echo $yo [$i]."<br>";
// }



// foreach($yo as $x){
//     echo "<h1>" . $x . "</h1><br>";
//     if ($x == "osama"){
//         break;
//     }
// }


foreach($yo as $x){
    echo "<h1>" . $x . "</h1><br>";
    if ($x == "osama" || $x == "hamza"){
        break;
    }
}
?>