<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculetor</title>
</head>

<body>
    <form action="cal.php" method="$_GET">
        <input type="number" name="Nam1">
        <br>
        <input type="number" name="Nam2">
        <br>
        <input type="submit">
    </form>
    AnsWer : <?php echo $_GET["Nam1"] + $_GET["Nam2"];
    
    ?>

</body>

</html>