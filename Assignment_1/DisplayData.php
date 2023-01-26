<?php
include_once('Connction.php');
include_once('/../Assignment_1/css');
$query = "select * from TODU_TBL";
$result = mysqli_query($con, $query);
?>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <table class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th class="text-center text-primary active" colspan="4">TUDO TABLE DATA</th>
                </tr>
                <tr class="bg-primary">
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>EDIT/DELETE</th>
                </tr>
            </thead>
            <?php
            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_row($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row[0] ?></td>
                            <td><?php echo $row[1] ?></td>
                            <td><?php echo $row[2] ?></td>
                            <td><?php echo "<a href='Index.php?id=$row[0]'>EDIT</a>" ?>
                           <?php echo "<a href='Index.php?id=$row[0]'>DELETE</a>" ?></td>
                        </tr>
                    <?php
                }
            } else {
                echo "No Data Found!!!";
            }
            ?>
        </table>
    </div>
</body>

</html>