<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> </title>

    
    
</head>
<body>
    <?php
    $color = $_GET['color'];
    if ($color == 'red') {
        printf("<div id='val1'>Rose</div>");
        printf("<div id='val2'>Apple</div>");
    }
    else if ($color == 'blue') {
        printf("<div id='val1'>Berry</div>");
        printf("<div id='val2'>Sky</div>");
    }

    ?>
</body>
</html>
