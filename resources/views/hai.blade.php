<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ini merupakan halaman {{ trim($_SERVER['REQUEST_URI'], '/'); }}</title>
</head>
<body>
    <p>Ini merupakan halaman {{ trim($_SERVER['REQUEST_URI'], '/'); }}</p>
    
</body>
</html>