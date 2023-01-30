<?php
// $id = $_GET['id'] ?? 0;
// include_once("Connction.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>TODO Table</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <style>
      .btn-hide
      {
        display: none;
      }
    </style>
  <script>
    function checkData(event) {
      let key = event.which;
      const errorMsg = document.getElementById('TitleError');

      if ((key >= 47 && key <= 57) || (key >= 33 && key <= 46) || (key >= 58 && key <= 64) || (key >= 91 && key < 95 || key == 96) || (key >= 123 && key <= 126)) {
        errorMsg.innerHTML = "Invalid Input!!!"
      } else {
        errorMsg.innerHTML = "";
      }
    }
  </script>
</head>

<body>
  <!-- NavBar Code  -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Brand</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="Index.php">Add New Data</a></li>
          <li><a href="backupTable.php" id="backuptable">backupData</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>

  <!-- Form Design Code -->
  <div class="container">
    <form id="myform">
      <?php
      // Get Data From DataBase base on Id and Fill to textbox
     
      ?>
      <div class="table table-responsive col-lg-6">

        <div class="form-group text-center">
          <h3>TODO TABLE</h3>
        </div>
       
        <div class="form-group">
        <div>
          <input type="hidden" name="hiddendid" id="editTitleId" value="id">
        </div>
          <label for="">Title</label>
          <input type="text" id="titleId" name="title" class="form-control" onkeypress="checkData(event)" required  />
          <span id="TitleError"></span>
        </div>
        <div class="form-group">
          <label for="">Description</label>
          <textarea name="description" id="descriptionID" name="description" cols="10" rows="5" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="insertdata" id="save" value="Save Info" class="btn btn-info btn-block">
            <input type="submit" name="updatedata" id="update" value="Update Info" class="btn-hide">
        </div>
      </div>
    </form>
  </div>
  <div id="table-container">

  </div>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })
    $(document).ready(function() {

      //alert(history.pushState());

      //---------------// Load Data Code //----------------------
      function loadData() {
        $.ajax({
          url: "DisplayData.php",
          type: "POSt",
          success: function(data) {
            $('#table-container').html(data)
          }
        });
      }
      loadData();

      //---------------// Save Data Code //----------------------
      $('#save').on("click", function(e) {
        e.preventDefault();
        var f_title = $('#titleId').val();
        var f_description = $('#descriptionID').val();
        $.ajax({
          url: "insert.php",
          type: "POST",
          data: {
            title: f_title,
            description: f_description
          },
          success: function(data) {
            if (data == 1) {
              $("#myform").trigger('reset');
              loadData();
            } else {
              $("#TitleError").text("Title Alreay Exits!!!")
            }
          }
        });
      })

      //--------------- Fill Data //-------------------

      $(document).on("click", "#editID", function(e) {
          $('#update').show();
          $('#update').addClass("btn btn-info btn-block")
          $('#save').hide();
          var title_id = $(this).data("id");
          $('#editTitleId').val(title_id);
          $.ajax({
            url: 'UpdateData.php',
            type: "POST",
            data: {
              id: title_id
            },
            success: function(data) {
              console.log(data);
              var r_Data = JSON.parse(data);
              $("#titleId").val(r_Data.title);
              $('#descriptionID').val(r_Data.description);
            }
          });
        
      })

      //---------------// Update Data Code //----------------------
      $('#update').on("click", function(e) {
        e.preventDefault();
        var f_title = $('#titleId').val();
        var f_description = $('#descriptionID').val();
        var f_id = $('#editTitleId').val();
        //alert(f_id);
        $('#update').hide();
        $('#save').show();  
        $.ajax({
          url: "UpdateData.php",
          type: "POST",
          data: {
            editid: f_id,
            title: f_title,
            description: f_description
          },
          success: function(data) {
            
           
              $("#myform").trigger('reset');
              loadData();
                       
          }
        });
      })

      //---------------// DELETE Data Code //---------------------//
      
      $(document).on("click", "#delete_ID", function(e) {
        if (confirm("Do you want to Delete This Record")) {
          var title_id = $(this).data("id");
          //var element = this;
          $.ajax({
            url: 'DeleteData.php',
            type: "POST",
            data: {
              id: title_id
            },
            success: function(data) {
              if (data == 1) {
                loadData();
                //$(element).closest("tr").fadeOut(1000); // Just Remove a tr // table can not refrech so design remove
              } else {}
            }
          });
        }
      })

      $(document).on("click","#softdelete_ID",function()
      {
          var softdeleteId = $(this).data("id");
          // alert(softdeleteId);
          $.ajax({
            url : "softDelete.php",
            type : "POST",
            data : {id:softdeleteId},
            success : function(data)
            {
              loadData();
            }
          });
      });

      // backup table filll

      function backupData()
      {
        $.ajax({
          url : "backupTable.php",
          type : "POST",
          success : function(data)
          {
            $("#table-container").html(data);
          }
        });
      }

      // open backup data table
      $("#backuptable").on("click",function(e)
      {
        e.preventDefault();
        backupData();
      });

      // restore data
      $(document).on("click","#restore_id",function(){
                var restoreid = $(this).data('id');
             
                $.ajax({
                    url : "restoreData.php",
                    type : "POST",
                    data : {id:restoreid},
                    success : function(data)
                    {
                      loadData();
                    }
                });
            });
    });
  </script>
</body>

</html>