<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input php</title>
</head>

<body>
    <form action="get.php" method="get">
        Name : <input type="text" name="name" placeholder="Your name" autocomplete="off"> <br>
        <br>
        Age : <input type="number" name="age" placeholder="Your age"> <br>
        <br>
        <input type="submit">
    </form>
    <br>
    Your name is : <?php echo $_GET["name"]  ?> <br>
    Your age : <?php echo $_GET["age"]  ?>
</body>

</html>