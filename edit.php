<?php
include("connection.php");

$id_1 = intval($_GET["id"]);

$sql = "SELECT * FROM data WHERE id = $id_1";
$query = mysqli_query($yo, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Batman Kitty Form</title>
</head>
<body>

<h1>🐱‍👤 🦇</h1>

<?php while($result = mysqli_fetch_assoc($query)) { ?>

<form action="process.php" method="post">

<label>ID:</label>
<input type="number" name="id" value="<?php echo $result['id']; ?>"> <br>

<label>First Name:</label>
<input type="text" name="first_name" value="<?php echo $result['first_name']; ?>"> <br>

<label>Last Name:</label>
<input type="text" name="last_name" value="<?php echo $result['last_name']; ?>"> <br>

<label>City:</label>
<input type="text" name="city" value="<?php echo $result['city']; ?>"> <br>

<input type="submit" name="submit">

</form>

<?php } ?>

</body>
</html>