<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative array</title>
</head>

<body>

    <form action="assositiveArray.php" method="POST">
        <input type="text" name="student"> <br>
        <input type="submit">
    </form>
    <?php
    $grat = array("Hasan" => "A+", "Rakib" => "A", "Dawen" => "C", "Bijoy" => "F");

    echo $grat[$_POST["student"]] ;

    //$grat ["Hasan"] = "F" ;
    //echo   $grat["Hasan"];
    //echo $grat[$_POST["student"]];
    ?>

</body>

</html>