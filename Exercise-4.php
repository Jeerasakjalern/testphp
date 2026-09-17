<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4</title>
</head>
<body>
        <?php

            echo test("bbaaccaag")."<br />";
            echo test("jjkiaaasew")."<br />";
            echo test("JSaaakoiaa")."<br />";

            function test($s) {
            $ctr_aa = 0;
            $i = 0;

            while ($i < (strlen($s)- 1)) {
                if (substr($s,$i,2) == "aa") {
                    $ctr_aa++;
                }
                    $i++;
                }return $ctr_aa;
            }
            
        ?>
</body>
</html>