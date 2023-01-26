<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TODO Table</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <script>
        function checkData(event)
        {
            let key = event.which;
            const errorMsg = document.getElementById('TitleError');
       
            if((key>=47 && key<=57) || (key>=33 && key<=46) || (key>=58 && key<=64) || (key>=91 && key<95 || key==96) || (key>=123 && key<=126))
            {
              errorMsg.innerHTML = "Invalid Input!!!"
            }
            else{
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
          <button
            type="button"
            class="navbar-toggle collapsed"
            data-toggle="collapse"
            data-target="#bs-example-navbar-collapse-1"
            aria-expanded="false"
          >
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
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a
                href="#"
                class="dropdown-toggle"
                data-toggle="dropdown"
                role="button"
                aria-haspopup="true"
                aria-expanded="false"
                >Dropdown <span class="caret"></span
              ></a>
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
      <form>
        <div class="table table-responsive col-lg-6">
          <div class="form-group text-center">
              <h3>TODO TABLE</h3>
          </div>
          <div class="form-group">
            <label for="">Title</label>
            <input type="text" id="titleId" name="title" class="form-control" onkeypress="checkData(event)" required/>
            <span id="TitleError"></span>
          </div>
          <div class="form-group">
            <label for="">Description</label>
           <textarea name="description" id="descriptionID" name="description" cols="10" rows="5" class="form-control" required></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="save"  id="save" value="Sava Info" class="btn btn-info btn-block">
          </div>
        </div>
      </form>
    </div>
    <div id="table-container">

    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function()
      {
          function loadData()
          {
            $.ajax({
              url:"DisplayData.php",
              type:"POSt",
              success : function(data)
              {
                  $('#table-container').html(data)
              }
            });
          }
          loadData();

        $('#save').on("click",function(e)
        {
            e.preventDefault();
            var f_title = $('#titleId').val();
            var f_description = $('#descriptionID').val();
            $.ajax({
              url : "insert.php",
              type : "POST",
              data : {title:f_title,description:f_description},
              success : function(data)
              {
                loadData();
              }
            });
        })
      });
    </script>
  </body>
</html>
