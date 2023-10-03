<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <?php
        include_once 'header.php';
        include_once 'menu.php';
        ?>
        <br/>
        <div class="row">
            <div class="col-md-3"><?php include_once 'sidebar.php' ?></div>
            <div class="col-md-9">
               <?php
               //tangkap request di URL
               $hal = $_REQUEST['hal'];
               //tempatkan halaman sesuai request di URL 
               if(!empty($hal)){
                    include_once $hal.'.php';
               }
               else{
                    include_once 'home.php';
               }
               ?>
            </div>
        </div>
        <br/>
        <?php include_once 'footer.php' ?>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>