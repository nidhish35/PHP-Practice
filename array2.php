<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numbers = array(1,2,3,4,5);
    foreach ($numbers as $value) {
        echo "Value is $value <br/>";
    }

    $numbers[0] = "one";
    $numbers[1] = "two";
    $numbers[2] = "three";
    $numbers[3] = "four";
    $numbers[4] = "five";
    foreach ($numbers as $value) {
        echo "Value is $value <br/>";
    }
    ?>

</body>
</html>