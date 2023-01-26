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
                         
                            <td><?php echo "<button id='delete_ID' data-id='{$row[0]}'>Delete</button>" ?>
                           <?php echo "<a href='DeleteData.php?id=$row[0]' id='deleteID'>DELETE</a>" ?></td>
                        </tr>
                    <?php
                }
            } else {
                echo "No Data Found!!!";
            }
            ?>
        </table>
    </div>
    <script>
       
            $(document).on("click","#delete_ID",function(e)
            {
               if(confirm("Do you want to Delete This Record")){
                var title_id = $(this).data("id"); 
                var element = this;
                $.ajax({
                    url : 'DeleteData.php',
                    type : "POST",
                    data : {id:title_id},
                    success: function(data){
                      if(data==1)
                      {
                        $(element).closest("tr").fadeOut(1000); // Just Remove a tr // table can not refrech so design remove
                      }
                      else{
                        
                      }
                    }
                });
               }
            })
      
    </script>
</body>

</html>