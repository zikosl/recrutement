<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Alert</title>
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/fonts.css">
    <link rel="stylesheet" href="../../sl_fonts/sl_font.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <link rel="stylesheet" href="../../line-awesome/css/line-awesome.css">
    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/popper.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/left_user_bar.css">
    <link rel="shortcut icon" href="/recrutment/icon.png">
    <style>
    </style>
</head>
  <body>
        <script>
                $(document).ready(function(){
                  $('#info').children('.card').eq(1).children().children().removeClass("active");
                  $('#info').children('.card').eq(7).children().children().addClass("active");
                })
        </script>
      <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/nav.php";?>
    <div class="container-fuild mx-lg-5">
        <div class='row mx-auto'>
           <div class="col-lg-4 menus pl-lg-4 pr-lg-5">
               <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/left_company_bar.php";?>
            </div>
            <div class="col-lg-8">
             </div>
        </div>
    </div>
        <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/footer.html";?>
        <script src="../../js/left_user_bar.js"></script>
  </body>
</html>