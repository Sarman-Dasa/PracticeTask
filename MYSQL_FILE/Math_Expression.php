<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math expression</title>
</head>
<body>
    <?php
        echo pi();

        $arr = array(11,45,-67,45,34,89,67,56);
        echo "<br>Min Value is :". min($arr);
        echo "<br> Max Value is :".max($arr);

        echo "<br>" .abs(-67); // convert into positive value

        echo "<br>" .sqrt(64);

        echo "<br>" .round(0.64);
        echo "<br>" .round(0.45);
        echo "<br>" .round(1.4);

        echo "<br>".rand(0000,9999); // generates a random number
        
    ?>
</body>
</html>