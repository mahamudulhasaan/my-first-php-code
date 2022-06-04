<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chackBox</title>
</head>

<body>

    <form action="chackBox.php" method="POST">

        Apple : <input type="checkbox" name="fruits[]" value="Apple"> <br>
        Benana : <input type="checkbox" name="fruits[]" value="Benana"> <br>
        Orange : <input type="checkbox" name="fruits[]" value="Orange"> <br>
        Jaekfruits : <input type="checkbox" name="fruits[]" value="Jekfruits"> <br><br>
        <input type="submit"> <br> <br>

    </form>
    <?php
     $name = $_POST["fruits"] ;
     echo $name [0] ;
    ?>
</body>

</html>