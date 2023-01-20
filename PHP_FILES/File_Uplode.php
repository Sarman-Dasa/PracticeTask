<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uplode</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Select Your Image</td>
                <td><input type="file" name="user_dp" id="user_dp"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="Upload" value="upload file">
                </td>
            </tr>
        </table>
    </form>

    <?php
       if($_SERVER['REQUEST_METHOD']=='POST')
       {
            echo "Filename :". $_FILES['user_dp']['name'] . "<br>";
            echo "Type :". $_FILES['user_dp']['type'] . "<br>";
            echo "Size :" . $_FILES['user_dp']['size'] . "<br>";
            echo "Temp name :" . $_FILES['user_dp']['tmp_name'] . "<br>";
            echo "Error :" .$_FILES['user_dp']['error'] . "<br>" ;

            $filename = $_FILES['user_dp']['name'];
            $tempname = $_FILES['user_dp']['tmp_name'];

            $folder = "Image_file/". $filename;

            move_uploaded_file($tempname,$folder);
            echo "<img src='$folder' alt='' heigth='300px' width='300px'>";
       }
       
    ?>


</body>
</html>