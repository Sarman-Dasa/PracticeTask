<?php
include_once('Connction.php');
include_once('/../Assignment_1/css');
    $query = "select * from todutbl where status = 0";
    $result = mysqli_query($con, $query);
?>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>

<body>
    <div class="container">
        <table class="table table-responsive table-striped ">
            <thead>
                <tr>
                    <th class="text-center text-primary active" colspan="4">BACKUP TABLE DATA</th>
                </tr>
               
            <?php
            if (mysqli_num_rows($result) > 0) {?>
             <tr class="bg-primary">
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th class="text-center">ACTION</th>
                </tr>
            </thead>
            <?php

                while ($row = mysqli_fetch_row($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row[0] ?></td>
                            <td><?php echo $row[1] ?></td>
                            <td><?php echo $row[2] ?></td>
                         
                            <td class="text-center">
                               <?php echo "<span id='restore_id' data-id='{$row[0]}'  class='btn-lg text-info glyphicon glyphicon-refresh'></span>" ?>
                                
                            </td>
                        </tr>
                    <?php
                }
            } else { ?>
                <tr>
                    <td colspan="4" class="text-center">
                        <p class="text-danger"> Nothing To Delete... </p>
                    </td>
                </tr>
           <?php }
            ?>
        </table>
    </div>
</html>