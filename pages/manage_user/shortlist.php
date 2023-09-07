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
require_once $_SERVER['DOCUMENT_ROOT'].'\recrutment\pages\php_verif\manage_company_profile\job.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\recrutment\pages\php_verif\manage_company_profile\profile.php';
$exp=new profile();
$exp->get_by_id($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shortlisted jobs</title>
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
  /*  display: inline-block;
    width: 47px;
    height: 47px;
    text-align: center;
    background-color: #f0f0f0;
    border: 1px solid #dedede;
    box-shadow: 0px 0px 0px 3px #ffffff inset;
    border-radius: 100%;
    color: #9733ee;
    padding-top: 8px;*/
    font-weight: bold;
    margin-right: 16px;
    font-size: 30px
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
        .job-info p
        {
            margin-left: .7rem;
            margin-bottom: .8rem;
            font-size: 15px;
            letter-spacing: .8px;
            color: rgb(0, 157, 230);
            font-family: "Open Sans",'sans sarif';
            font-weight: 600;
        }
        .job-saved i
        {
         margin-right: 15px;
        }
        .job-saved p
        {
            color: #999;
            font-family: "Quicksand",'sans sarif';
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
            width: 55px;
            height: 55px;
            box-shadow: 0 .125rem .25rem rgba(0,0,0,.045);
            float: left;
            margin-right: 10px;
        }
        </style>
        <style>
        @media (max-width:576px)
        {
            .job-info,.job-saved,.mng-job-link
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
        }
        </style>
</head>
<body>
<script>
                $(document).ready(function(){
                  $('#info').children('.card').eq(1).children().children().removeClass("active");
                  $('#info').children('.card').eq(3).children().children().addClass("active");
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
            <div class="col-lg-7 pl-3">
                <div class="h3 f-quick f-500 text-indigo"><i class="slimi-icon slimi-heart"></i>Shortlisted jobs</div>
            </div>
            <div class="col-lg-5 px-lg-0 px-5">
                <div class="form-group f-quick">
                            <div class="custom-in">
                                    <input type="text" placeholder="Search">
                                    <i class="slimi-icon slimi-search"></i>
                            </div>
                </div>
            </div>
        </div>
        <div class="dropdown-divider my-3"></div>
                <div class="mt-5">
                    <?php 
                    $my=$exp->get_canid($id);
                    $sql="SELECT jobid FROM shortlist where canid='$my'";
                    $sql=$con->query($sql);
                    {
                        while($row=mysqli_fetch_array($sql))
                        {
                            $my=new job();
                            $j=$row['0'];
                            $row=$my->get_by_id($row[0]);
                            $me=new empolyer();
                            $row=$me->user_finder($row);
                            $row=mysqli_fetch_array($row);
                            $me->get_by_id($row['empid']);
                    ?>
                    <div class="row border-bottom py-3 job-card">
                        <div class="col-sm-7">
                                    <div class="job-info f-saira">
                                        <img src="../../images/l1.png" alt="">
                                          <h5><?php echo $my->get_title();?></h5>
                                          <p><?php echo ucfirst($me->get_first()).' '.ucfirst($me->get_last());?></p>
                                    </div>
                        </div>
                        <div class="col-sm-3 my-auto">
                            <div class="job-saved f-quick">
                                <p><i class="slimi-icon slimi-time"></i><?php echo $my->get_post_date();?></p>
                            </div>
                        </div>
                        <div class="col-sm-2 my-auto">
                            <div class="mng-job-link">
                                      <a href="/recrutment/pages/job.php?job=<?php echo $j?>" target="_blank" class="slimi-icon slimi-view mx-md-3 mx-sm-1"><span>View</span></a>
                                      <a href="#" class="slimi-icon slimi-rubbish mx-md-3 mx-sm-1"></a>
                            </div>
                        </div> 
                    </div>
                        <?php
                         }
                        }
                        ?>
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