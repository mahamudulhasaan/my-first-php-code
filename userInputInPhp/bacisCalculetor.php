<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic calculetor in php</title>
</head>
<body>

<form action="bacisCalculetor.php" method="get">
    First valu :  <input type="number" name="num1"><br>
    Secount valu :  <input type="number" name="num2"> <br>
    <input type="submit"> <br>
</form>
<br>

Ans.. <?php echo $_GET ['num1'] + $_GET ['num2'] ?>
</body>
</html>