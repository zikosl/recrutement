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
require_once '../php_verif/manage_log_register/register.php';
require_once '../php_verif/manage_user_profile/location.php';
require_once '../php_verif/manage_user_profile/social.php';
require_once '../php_verif/manage_company_profile/profile.php';
$x=$_SESSION['mail'];
$id=$_SESSION['id'];
$exp=new empolyer();
$exp->get_by_id($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Password</title>
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
            .pswd .h3 i {
             margin-right: 16px;
             font-size: 30px                
            }
    </style>
    <style>
    .custom-in
  {
    border: none;
    outline: none !important;
    box-shadow: none !important;
  }
  .form-group
    {
      position: relative;
    }
    .custom-in i
{
    position: absolute;
    font-size: 20px;
    color: #efefef;
    right: 17px;
}
.custom-in
    {
      border:1px solid #efefef !important;
      padding:10px 15px;
      height: 3.5rem; 
      margin:.5rem auto;
      border-radius: 0;
      font-weight: 500;
      transition: all .3s;
      font-size: 15px !important;
      position: relative;
      box-shadow: 0 .125rem .25rem rgba(0,0,0,.045)!important;
    }
    .qst:after
    {
    content: "\e964";
    font-family: icomoon;
    color: #aaaaaa;
    right: 10px;
    top: 56px;
    position: absolute;
    pointer-events: none;
    }
    select
    {
        -moz-appearance: window;
    -webkit-appearance: none;
    }
    select::-ms-expand {
    display: none !important; 
    }
    .btn-outline-rose
{
  color: #202020;
  border: 2px solid #fb23a1;
  font-size: 15px;
  padding: 11px 26px;
  border-radius: 5px;
  transition: all .2s;
  letter-spacing: 1px;
  transition: all .4s;
  box-shadow: none !important;
  outline: none !important;
}
.btn-outline-rose:hover
{
  color: white !important;
  background: #fb23a1;
}
    </style>
</head>
  <body>
      <script>
          $(document).ready(function(){
            $('#info').children('.card').eq(1).children().children().removeClass("active");
            $('#info').children('.card').eq(8).children().children().addClass("active");
          })
</script>
      <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/nav.php";?>
    <div class="container-fuild  mx-lg-5">
        <div class='row mx-auto'>
           <div class="col-lg-4 menus pl-lg-4 pr-lg-5">
               <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/left_company_bar.php";?>
            </div>
            <div class="col-lg-8">
                <div class="pswd mt-5">
                        <div class="h3 f-quick f-500 text-indigo"><i class="slimi-icon slimi-multimedia"></i>Change Password</div>
                        <div class="dropdown-divider my-3"></div>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <div class="form-group f-quick f-500">
                                        <label class="f-robot f-15" for="user">Old Password</label>
                                        <input type="password" id="user" class="form-control custom-in" placeholder="**********">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6">
                             <div class="form-group f-quick f-500">
                                        <label class="f-robot f-15" for="user">New Password</label>
                                        <input type="password" id="user" class="form-control custom-in" placeholder="**********">
                            </div>
                        </div>
                        <div class="col-lg-6">
                                <div class="form-group f-quick f-500">
                                           <label class="f-robot f-15" for="user">Retype Password</label>
                                           <input type="password" id="user" class="form-control custom-in" placeholder="**********">
                               </div>
                        </div>
                    </div>
                    <div class="dropdown-divider w-75 mx-auto my-5"></div>
                    <div class="row mt-4">
                            <div class="col-lg-6">
                                 <div class="form-group f-quick f-500 qst">
                                            <label class="f-robot f-15" for="user">Question No:1</label>
                                            <select class="form-control custom-in" >
                                                    <option>What is your Mother Name?</option>
                                                    <option>What is your Mother Name?</option>
                                            </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                    <div class="form-group f-quick f-500">
                                               <label class="f-robot f-15" for="user">Answer</label>
                                               <input type="password" id="user" class="form-control custom-in" placeholder="Mouther">
                                   </div>
                            </div>
                    </div>
                    <div class="row mt-4">
                            <div class="col-lg-6">
                                 <div class="form-group f-quick f-500 qst">
                                            <label class="f-robot f-15" for="user">Question No:2</label>
                                            <select class="form-control custom-in">
                                                    <option>Your place of Birth?</option>
                                                    <option>Your place of Birth?</option>
                                            </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                    <div class="form-group f-quick f-500">
                                               <label class="f-robot f-15" for="user">Answer</label>
                                               <input type="password" id="user" class="form-control custom-in" placeholder="New York">
                                   </div>
                            </div>
                    </div>
                    <div class="row mt-4">
                            <div class="col-lg-6">
                                 <div class="form-group f-quick f-500 qst">
                                            <label class="f-robot f-15" for="user">Question No:3</label>
                                            <select class="form-control custom-in">
                                                    <option>Your favorite Teacher Name?</option>
                                                    <option>Your favorite Teacher Name?</option>
                                            </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                    <div class="form-group f-quick f-500">
                                               <label class="f-robot f-15" for="user">Answer</label>
                                               <input type="password" id="user" class="form-control custom-in" placeholder="mouhamed">
                                   </div>
                            </div>
                    </div>
                    <div class="dropdown-divider w-75 mx-auto my-5"></div>
                    <div class="row mt-1 mb-5 float-right">
                        <button class="btn  f-quick f-500 btn-outline-rose float-right">Update Password</button>
                    </div>
                </div>
             </div>
        </div>
    </div>
        <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/footer.html";?>
        <script src="../../js/left_user_bar.js"></script>
  </body>
</html>