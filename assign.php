<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_SERVER['HTTP_REFERER'])){
            $var = $_SERVER['HTTP_REFERER'];
            echo "<a href=\"".$var."\">Go to Referer page</a>";
            echo " and  this is the page $var";
        }
        else
            echo "<h1>Great</h1>You got the link correctly";
    ?>
</body>
</html>