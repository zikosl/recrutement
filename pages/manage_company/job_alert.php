<?php 
if(!isset($_SESSION))
{
  session_start();
}
?>
<?php 
if(!isset($_SESSION['mail'])||$_SESSION['type']!="emp")
{
  header('Location: http://localhost/recrutment/pages/log.php');
}
?>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'\recrutment\pages\php_verif\manage_log_register\register.php';
$x=$_SESSION['mail'];
$id=$_SESSION['id'];
$var=new User();
$var=$var->get_empid($id);
?>
<?php
require_once '../php_verif/manage_user_profile/location.php';
require_once '../php_verif/manage_user_profile/social.php';
require_once '../php_verif/manage_company_profile/profile.php';
$exp=new empolyer();
$exp->get_by_id($id);
?>
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
      #nav
      {
        position: relative !important;
        background: linear-gradient(to right,#9733ee,#DA22FF) !important;
      }
      .text-indigo
            {
              color: #9733ee 
            }
             .text-pink
            {
             color: #da22ff;
            }
            .jb_al .h3 i {
             margin-right: 16px;
             font-size: 30px                
            }
            .ntf
            {
              cursor: pointer;
              transition: all .4s
            }
            .ntf a
            {
              color: #9529f7;
              text-decoration:none;
              font-size: 17px;
              margin-right: 7px
            }
            .ntf:hover
            {
              box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
              border-bottom-color: transparent !important;
            }
    </style>
</head>
  <body>
        <script>
                $(document).ready(function(){
                  $('#info').children('.card').eq(1).children().children().removeClass("active");
                  $('#info').children('.card').eq(6).children().children().addClass("active");
                })
        </script>
      <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/nav.php";?>
    <div class="container-fuild mx-lg-5">
        <div class='row mx-auto'>
           <div class="col-lg-4 menus pl-lg-4 pr-lg-5">
               <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/left_company_bar.php";?>
            </div>
            <div class="col-lg-8 pt-4">
            <div class="jb_al mt-5">
                        <div class="h3 f-quick f-500 text-indigo"><i class="slimi-icon slimi-alarm"></i>Notification</div>
                        <div class="dropdown-divider my-3"></div>
                        <div>
                          <div class="bg-light px-4 py-3 my-2">
                           <div class="f-quick f-500"> Notification</div>
                          </div>
                          <?php 
                           $sql="SELECT c.id,r.pic,r.first_n,r.last_n,TIMESTAMPDIFF(MINUTE,f.date,NOW()) as dt FROM follow f join candidat c on(f.canid=c.id) join register r on (c.canid=r.id) where empid=$var";
                           $sql=$con->query($sql);
                           if(!$sql)
                           {
                             die($con->error);
                           }
                           while ($row = mysqli_fetch_assoc($sql))
                           { ?> 
                          <div class=" px-4 py-3 my-2 border-bottom row ntf position-relative">
                            <div class="f-saira text-secondary" style="width:40px;height:40px;position:absolute;right:5px;top:12px">
                             <small><?php echo $row['dt'];?> Min</small>
                            </div>
                            <div class="col-3 m-auto text-center">
                                 <img src="<?php echo $row['pic']?>" width="100" height="100" alt="" srcset="">
                            </div>
                            <div class="col-9 my-auto">
                              <div class="f-quick f-500"> <a class="f-cairo" href="/recrutment/pages/condidat.php?user=<?php echo $row['id']?>"><?php echo ucfirst($row['first_n']).' '.ucfirst($row['last_n']);?></a> Started Following You</p></div>
                            </div>
                          </div>
                          <?php
                           }
                          ?>
                        </div>
                      
            </div>
             </div>
        </div>
    </div>
        <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/footer.html";?>
        <script src="../../js/left_user_bar.js"></script>
  </body>
</html>