<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form method="post" action="">

<label class="fname" for="fname"> enter your email</label>
<input type="email" name="fname" id="fname">
<br><br>
<label class="pname" for="pname"> enter your password</label>
<input type="password" name="pname" id="pname">
<br><br>
<button type="submit" name="login">login</button>
</form>

<?php
if (isset($_POST["login"])){
    $email = $_POST["fname"];
    $password = $_POST ["pname"];

 
    if ($email == "ali@gmail.com" && $password == "123") {
        echo "Login Done - Ali!";
    } elseif ($email == "maaz@gmail.com" && $password == "1234") {
        echo "Login Done - Maaz!";
    } elseif ($email == "affan@gmail.com" && $password == "12345") {
        echo "Login Done - Affan!";
    } else {
        echo "Email ya Password Galat Hai!";
    }
}


?>
 



</body>
</html>