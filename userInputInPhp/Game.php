<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
</head>

<body>

    <!-- 2nd = This the system to difinde a echo game from valu -->

    <form action="Game.php" method="get">
        Name : <input type="text" name="name" autocomplete="off"> <br>
        Car name : <input type="text" name="car" autocomplete="off"> <br>
        Dreams : <input type="text" name="dreams" autocomplete="off"> <br>
        Conuntry : <input type="text" name="country" autocomplete="off"> <br> <br>
        <input type="submit">
    </form>
    <br>

    <?php
    //  3d = This the system to difinde a echo game user inpur valu
    $name = $_GET["name"];
    $car = $_GET["car"];
    $dreams = $_GET["dreams"];
    $country = $_GET["country"];

    //  1s = This the system to difinde a echo game valu
    echo "My name is $name ☻<br>";
    echo "I love $car car ☻<br>";
    echo " I want to be $dreams ☻<br> ";
    echo "I love $country ☻<br>";
    ?>
</body>

</html>