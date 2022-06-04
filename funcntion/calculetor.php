<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator php</title>
</head>

<body>

    <form action="calculetor.php" method="POST">
        First Value : <input type="number" step="0.0001" name="nam1"> <br> <br>
        Second Value : <input type="number" step="0.0001" name="nam2"> <br> <br>
        Oparetor : <input type="text" name="oparetor" autocomplete="off"> <br> <br>
        <input type="submit"> <br> <br>

    </form>

    <?php
    $nam1 = $_POST["nam1"];
    $nam2 = $_POST["nam2"];
    $oparetor = $_POST["oparetor"];

    if ($oparetor == "+") {
        echo  $nam1 + $nam2;
    } elseif ($oparetor == "-") {
        echo  $nam1 - $nam2;
    } elseif ($oparetor == "*") {
        echo $nam1 * $nam2;
    } elseif ($oparetor == "/") {
        echo $nam1 / $nam2;
    } elseif ($oparetor == "%") {
        echo $nam1 % $nam1;
    } else {
        echo "No Results Found...";
    }
    ?>

</body>

</html>