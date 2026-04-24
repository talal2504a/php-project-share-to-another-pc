<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batman Kitty Form</title>
    <style>
        body {
            background-color: #1a1a2e;
            color: #ffffff;
            font-family: 'Arial', sans-serif;
            text-align: center;
        }
        form {
            background-color: #16213e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px #0f3460;
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #0f3460;
            border-radius: 5px;
            background-color: #e94560;
            color: #ffffff;
        }
        input[type="submit"] {
            background-color: #0f3460;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #e94560;
        }
        h1 {
            color: #e94560;
        }
    </style>
</head>
<body>
    

<h1>🐱‍👤   🦇</h1>

<form action="process.php" method="post">

<label for="id">ID:</label>
<input type="number" id="id" name="id"> <br>

<label for="first_name">First Name:</label>
<input type="text" id="first_name" name="first_name"> <br>

<label for="last_name">Last Name:</label>
<input type="text" id="last_name" name="last_name"> <br>

<label for="city">City:</label>
<input type="text" id="city" name="city"> <br>

<input type="submit" id="submit" name="submit"> 
</form>

</body>
</html>