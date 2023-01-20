<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case Example</title>
</head>
<body>
        <?php
         $age = 20;

        $status = ($age >= 18) ? "eligible" : "not eligible";
        echo "Your are $status For Voting";
        echo "<br>Switch Using Number Values :<br>";
           
        $country_code = 91;

            switch($country_code)
            {
                case 44:
                    echo "CANADA";
                    break;
                case 81:
                    echo "JAPAN";
                    break;
                case 91:
                    echo "INDIA";
                    break;
                case 98:
                    echo "IRAN";
                    break;
                default:
                    echo "Not Avalible in Asia Regions";
            }

            echo "<br><br>switch statement with character<br>";

            $char = "A";
          
            switch($char)
            {
                case 'A' || 'E' || 'I' || 'O' || 'U' || 'a' || 'e' || 'i' || 'o' || 'u':
                    echo $char ." is VOVEl";
                    break;
                default:
                    echo $char ." is Consonent";
            }

            echo "<br><br>switch statement with String<br>";

            $department = "MCA";
            $semester = 3;

            switch($department)
            {
                case "MCA":
                    switch($semester)
                    {
                        case 1:
                            echo "You are 1st semester MCA Student";
                            break;
                        case 2:
                            echo "You are 2nd semester MCA Student";
                            break;
                        case 3:
                            echo "You are 3rd semester MCA Student";
                            break;
                        default:
                            echo "Invalid Semester";
                    }
                    break;
                case "BCA":
                    switch($semester)
                    {
                        case 1:
                            echo "You are 1st semester BCA Student";
                            break;
                        case 2:
                            echo "You are 2nd semester BCA Student";
                            break;
                        case 3:
                            echo "You are 3rd semester BCA Student";
                            break;
                        default:
                            echo "Invalid Semester";
                    }
                    break;
                default:
                    echo "No Department Found!!!";
            }
        ?>
</body>
</html>