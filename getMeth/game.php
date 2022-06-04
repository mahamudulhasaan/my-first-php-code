<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php fun game</title>
</head>

<body>
    <form action="game.php" method="get">
        Color : <input type="text" name="black"> <br> <br>
        Car : <input type="text" name="car"> <br> <br>
        Live in : <input type="text" name="dhaka"> <br> <br>
        <input type="submit">
    </form>
    <br>
    <br>
    <?php
    $black = $_GET["black"];
    $car = $_GET["car"];
    $dhaka = $_GET["dhaka"];

    echo "I like $black color <br>";
    echo "I have a $car car<br>";
    echo "I live in $dhaka <br>";
    ?>

</body>

</html>