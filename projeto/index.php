<?php 
  session_start();
  include_once("lib/configs.php");
  require_once "lib/mercadopago.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <base href="<?php echo url_site;?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css"/>

    <title><?php echo titulo_site;?></title>
  </head>
  <body>

  <div id="content-all">
    <div class="row">
      <?php
        $url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'inicio';
        $explode = explode('/', $url);
        $dir = "pags/";
        $ext = ".php";

        if(file_exists($dir.$explode['0'].$ext)){
          include($dir.$explode['0'].$ext);
        }else{
          echo "<div class='col-sm-5 offset-md-3 alert alert-danger'>Página não encontrada!</div>";
        }

      ?>
    </div>
  </div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  </body>
</html>