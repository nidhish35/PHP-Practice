<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $salaries = array(
        "John" => 30000,
        "Jane" => 40000,
        "Doe" => 50000
    );
    echo"Salary of john is ". $salaries["John"] ."<br />";
    echo"Salary of jane is ". $salaries["Jane"] ."<br />";
    echo"Salary of doe is ". $salaries["Doe"] ."<br />";


    $salaries['John'] = "high";
    $salaries['Jane'] = "medium";
    $salaries['Doe'] = "low";

    echo"Salary of john is ". $salaries["John"] ."<br />";
    echo"Salary of jane is ". $salaries["Jane"] ."<br />";
    echo"Salary of doe is ". $salaries["doe"] ."<br />";
    
    ?>
</body>
</html>