<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statement Example</title>
</head>
<body>
    <?php
        $traffic_ligth_status = "RED";

        if($traffic_ligth_status == "RED")
        {
            echo "Stop";
        }
        else
        {
            echo "Go...";
        }
        echo "<br>";
        $time = 10;

        if($time>=6 && $time<=12)
        {
            echo "Good Morning";
        }
        elseif($time>12 && $time<=7)
        {
            echo "Good Evening";
        }
        elseif($time>=10)
        {
            echo "Good Nigth";
        }
        else
        {
            echo "Have a Nice Day!";
        }
    ?>
</body>
</html>