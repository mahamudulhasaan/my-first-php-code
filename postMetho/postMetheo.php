<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Methos</title>
</head>

<body>
    <form action="postMetheo.php" method="POST">
        Password : <input type="password" name="password"> <br><br>
        <input type="submit"> <br> <br>

        <?php
        echo  $_POST["password"]
        ?>

    </form>
</body>

</html>