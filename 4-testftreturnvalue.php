<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writing PHP function which returns value</title>
</head>
<body>
    <h2>PHP with returns value</h2>
    <?php
        function addFunction($num1,$num2){
            $sum = $num1 + $num2;
            return $sum; /* Returning the value */
        }
        $return_value = addFunction(10,20); /* use and call the function */
        
        echo "Returned value from the Function : $return_value"; /* call the return */
    ?>
</body>
</html>