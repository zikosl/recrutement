<?php 
if(!isset($_SESSION))
{
  session_start();
}
?>
<?php 
if(!isset($_SESSION['mail'])||$_SESSION['type']!="can")
{
  header('Location: http://localhost/recrutment/pages/log.php');
}
else
{
$x=$_SESSION['mail'];
$id=$_SESSION['id'];
}
?>
<?php
require_once '../php_verif/manage_log_register/register.php';
require_once '../php_verif/manage_user_profile/location.php';
require_once '../php_verif/manage_user_profile/social.php';
require_once '../php_verif/manage_user_profile/profile.php';
$exp=new profile();
$exp->get_by_id($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Applied Job</title>
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
        @media (min-width: 1200px)
        {
.container {
    max-width: 1222px;
}
}
        .text-indigo
  {
  color: #9733ee 
  }
  .text-pink
  {
  color: #da22ff;
  }
.job .h3 i {
    margin-right: 16px;
    font-size: 30px;
    vertical-align: middle
                          }
                          .custom-in input
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
      border:1px solid #efefef;
      padding:10px 15px;
      /* height: 3.5rem; */
      margin:.5rem auto;
      font-weight: 500;
      border-radius: 7px;
      transition: all .3s;
      font-size: 15px !important;
      position: relative;
      box-shadow: 0 .125rem .25rem rgba(0,0,0,.045)!important;
    }
        </style>
<style>
        .job-info
        {
            font-size: 13.8px;
        }
        .job-info h5
        {
            color: #333;
          letter-spacing: 1.5px;
          margin-bottom: .8rem;
          font-size: 22px
        }
        .job-info ul
        {
            list-style-type: none;
            padding-left: 130px
        }
        .job-info li
        {
          display: inline-block;
          color: #aaa;
          padding-right: 7px;
          padding-left: 7px;
          margin-top: .4rem;
            margin-bottom: .4rem;
          border-right: 1px solid #ccc;
          font-family: 'PT Sans', sans-serif;
        }
        .job-info li i
        {
            margin-right: 7px;
        }
        .job-info li:last-child
        {
          border-right: 0;
        }
        .job-info p
        {
            margin-left: .7rem;
            margin-bottom: .8rem;
            font-size: 15px;
            letter-spacing: .8px;
            color: rgb(0, 157, 230);
            font-family: "Open Sans",'sans sarif';
        }
        .mng-job-link
        {
              text-align: center;
        }
        .mng-job-link a
        {
            font-size: 17px;
            text-decoration: none !important;
        }
        .mng-job-link a span
        {
            display: none;
            font-family: 'Saira Semi Condensed', sans-serif; 
            font-size: 17px;
            margin-left: 8px;
            color: #555;
            font-weight: 300;
        }
        .slimi-rubbish,.slimi-view
        {
           color: rgb(255, 196, 0) !important;
        }
        .pages ul
        {
          list-style-type: none;
          text-align: center;
          margin-top: 3rem;
          padding: 0;
        }
        .pages li
        {
            display: inline-block;
            font-size: 20px;
            font-family: 'Open Sans','sans sarif';
            font-weight: bold;
            height: 55px;
            width: 55px;
            color: #ac4dff;
            border-radius: 50%;
            padding: .7rem;
            border:2px solid #efefef;
            margin-right: .7rem;
            transition: all .4s;
            cursor: pointer;

        }
        .pages li i
        {
            font-weight: bold;
        }
        .pages li:hover,.pages li:focus
        {
            border-color: #ac4dff;
            color: white;
            background: #ac4dff;
        }
        .pages li:last-child
        {
            margin-right: 0 !important
        }
        .job-info img
        {
            width: 120px;
            height: 120px;
            box-shadow: 0 .125rem .25rem rgba(0,0,0,.045);
            float: left;
            margin-right: 10px;
        }
        </style>
        <style>
        @media (max-width:576px)
        {
            .job-info,.mng-job-link
            {
                text-align: center;
            }
            .mng-job-link
            {
                display: flex;
                justify-content: space-around;
            }
            .mng-job-link a
            {
               display: block;
               font-size: 22px;
            }
            .mng-job-link a span
            {
                display: inline;
            }
            .mng-job-link a:nth-child(2)
            {
                position:absolute;
                top: -213px;
                right: 30px;
            }
            .job-info img
            {
                width:50%;
                display: block;
                float: none;
                height: 50%;
                margin: auto;
                box-shadow: none;
            }
            .pages li
            {
                margin-right: 5px;
            }
            .job-info ul
            {
                padding-left: 0;
            }
            .job-info ul li
            {
                border-right: 0 !important; 
            }
        }
        </style>
</head>
<body>
<script>
                $(document).ready(function(){
                  $('#info').children('.card').eq(1).children().children().removeClass("active");
                  $('#info').children('.card').eq(4).children().children().addClass("active");
                })
</script>
<?php 
$cbr="Recrut Lorsim";
$x=false; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/header.php";?>
<div class="container-fuild  mx-lg-5">
    <div class='row mx-auto'>
        <div class="col-lg-4 menus pl-lg-4 pr-lg-5">
        <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/left_user_bar.php";?>
        </div>
        <div class="col-lg-8 px-lg-2">
        <div class="job mt-5">
        <div class="row mx-auto">
            <div class="col-lg-7 pl-3 my-auto">
                <div class="h3 f-quick f-500 text-indigo"><i class="slimi-icon slimi-handshake"></i>Applied Job</div>
            </div>
            <div class="col-lg-5 px-lg-0 px-5">
                <div class="form-group f-quick my-auto">
                            <div class="custom-in">
                                    <input type="text" placeholder="Search">
                                    <i class="slimi-icon slimi-search"></i>
                            </div>
                </div>
            </div>
        </div>
        <div class="dropdown-divider my-4"></div>
                <div class="mt-5">
                    <div class="row border-bottom py-3 job-card">
                        <div class="col-sm-9">
                                    <div class="job-info f-saira">
                                        <img src="../../images/l1.png" alt="">
                                          <p>Company</p>
                                          <h5>Computer and Information Tech</h5>
                                          <ul>
                                              <li><i class="slimi-icon slimi-maps-and-flags"></i>Netherlands,Rotterdam</li>
                                              <li><i class="slimi-icon slimi-design-skills"></i> Web Developer</li>
                                              <li><i class="slimi-icon slimi-time"></i>Sep 26, 2017</li>
                                          </ul>
                                         
                                    </div>
                        </div>
                        <div class="col-sm-3 my-auto">
                            <div class="mng-job-link">
                                      <a href="#" class="slimi-icon slimi-view mx-md-3 mx-sm-1"><span>View</span></a>
                                      <a href="#" class="slimi-icon slimi-rubbish mx-md-3 mx-sm-1"></a>
                            </div>
                        </div> 
                    </div>
                    <div class="pages">
                        <ul>
                            <li><i class="la la-angle-left"></i></li>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li><i class="la la-angle-right"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/footer.html";?>
<script src="../../js/left_user_bar.js"></script>
</body>
</html>