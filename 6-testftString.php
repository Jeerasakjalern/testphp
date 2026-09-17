<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writing PHP dynamic Function call</title>
</head>
<body>
    <h2>PHP with Dynamic Function</h2>
    <?php
        function sayhello() {
            echo "Hello<br />";
        }
        $function_holder = "sayHello";
        $function_holder();
    ?>
</body>
</html>