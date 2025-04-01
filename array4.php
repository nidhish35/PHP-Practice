<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $marks = array("john" => array
    ("physics"=>35,
    "maths"=> 30,
    "chemistry"=>39),

    "jill"=> array
    ("physics"=>30,
    "maths"=>32,
    "chemistry"=>29),

    "zara"=> array  
    ("physics"=>31,
    "maths"=> 22,
    "chemistry"=>39));

    echo "Marks for john in physics : ";
    echo $marks ["john"]["physics"] . "<br />";

    echo "Marks for jill in maths : ";
    echo $marks ["john"]["maths"] . "<br />";

    echo "Marks for zara in chemistry : ";
    echo $marks ["john"]["chemistry"] . "<br />";
    ?>
</body>
</html>