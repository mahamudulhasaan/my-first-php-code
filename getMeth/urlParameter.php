<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulr Parameter</title>
</head>

<body>
    <form action="urlParameter.php" method="get">
        Name : <input type="text" name="name"> <br> <br>
        <input type="submit">
        <br>
        <br>
        <?php
        echo $_GET["name"];
        ?>
    </form>
</body>

</html>