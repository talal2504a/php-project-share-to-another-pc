<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
     <label for="number"  class="number"> enter ur role number</label>
     <input type="number" name="number" id="number">
 <button type="submit" name="submit">submit ur role number</button>

</form>

</body>
</html>






<?php

if(isset ($_POST ["submit"])){
    $name = $_POST ["number"];
}


// $name = "1";



switch($name){
    case "1":
        echo "yes maaz is here ";
        break;
        case "2":
            echo "ali is here";
            break;
            case "3":
                echo "safwan is here";
                break;
                 case "4":
                echo "hamza is here";
                break;
                 case "5":
                echo "afsan is here";
                break;
                 case "6":
                echo "sufiyn is here";
                break;
                 case "7":
                echo "osama is here";
                break;
                case "8":
                    echo "moiz is here";
                    break;
                    default:
                    echo "pls enter the role number 1-8";
                    break;
}






?>