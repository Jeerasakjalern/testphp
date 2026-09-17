<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writing PHP Function with parameters</title>
</head>
<body>
    <h2>PHP with two parameters</h2>
    <?php
        /* Defining a PHP function */
        function addfunction($sum1, $sum2): void{
            $sum = $sum1 + $sum2;
        echo "Sum of the two numbers is : $sum";
        }
        /* calling function */
        addfunction(10,20);
    ?>
</body>
</html>