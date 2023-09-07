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
require_once $_SERVER['DOCUMENT_ROOT'].'\recrutment\pages\php_verif\manage_user_profile\location.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\recrutment\pages\php_verif\manage_user_profile\social.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\recrutment\pages\php_verif\manage_company_profile\profile.php';
$x=$_SESSION['mail'];
$id=$_SESSION['id'];
$emp=new empolyer();
$emp->get_by_id($id);
$var=$emp->get_empid($id);
$exp=$emp;
require_once $_SERVER['DOCUMENT_ROOT'].'\recrutment\pages\php_verif\manage_company_profile\job.php';
$job=new job();
$arr=$job->get_job_array($var);
$job=array();
$i=0;
$id_aar=array();
while($row=mysqli_fetch_assoc($arr))
{
$job[$i]=new job();
$job[$i]->get_by_id($row["id"]);
$id_aar[$i]=$row["id"];
$i++;
}
?>
<?php
if(isset($_POST['del']))
{
    $x=$_POST['id'];
    $x=(int)$x;
    $mysql="DELETE FROM job WHERE id='$x'";
    $con->query($mysql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Manage</title>
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
     .mng-job
     {
        border-spacing: 0 15px;
        border-collapse: separate;
     }
                .mng-job th
        {
            background: #efefef;
        }
        .mng-job tbody tr:nth-child(even)
        {
            background: #f9f2ff;
        } 
        .mng-job thead tr th
        {
            font-size: 14px;
            padding: 16px 20px;
            font-weight: 500;
            font-family: 'Raleway','sans sarif';
        }
        .mng-job tbody tr td
        {
            padding-top: 24px;
            padding-bottom: 24px;
        }
        .mng-job tbody tr
        {
            border-bottom: 1px solid #efefef;
        }
        .mng-job tbody tr td i
        {
             font-size: 12px;
             margin-right: 7px;
             vertical-align: middle;
        }
        .job-info
        {
            font-size: 13.8px;
        }
        .job-info h5
        {
            color: #333;
          letter-spacing: 1.5px;
          margin-bottom: .4rem;
          font-size: 22px
        }
        .job-info p
        {
            margin-bottom: .8rem;
            color: #999;
            font-family: "Roboto",'sans sarif';
        }
        .job-info p .dat
        {
            color: #555;
        }
        .job-info p span
        {
            margin-right: 12px;
        }
        .job-info p span:last-child
        {
            margin-right: 0;
        }
        .job-info p i
        {
            font-size: 15px;
            margin-right: 7px;
            color:#fb23a1;
        }
        .mng-job td
        {
            vertical-align: middle;
        }
        .mng-job .job-app
        {
            color: #9733ee;
            font-size: 14px;
            letter-spacing: .7px;
            font-family: 'Open Sans','sans sarif';
        }
        .job-act
        {
         color: #0a0;
        }
        .statu 
        {
            font-size: 16px;
            letter-spacing: .7px;
            font-weight: 500;
            font-family: 'Quicksand','sans sarif';
        }
        .job-pan
        {
         color: rgb(223, 243, 47);
        }
        .job-exp
        {
            color:#f55;
        }
        .job-act i
        {
            font-size: 12px;
            margin-right: 5px
        }
        .mng-job-link a
        {
            font-size: 17px;
            text-decoration: none !important;
            margin-right: 7px;
        }
        .slimi-rubbish
        {
            color: #f66 !important;
            margin-right: 0 !important;
        }
        .slimi-edit
        {
           color: #28f !important
        }
        .slimi-view
        {
           color: rgb(255, 196, 0) !important
        }
        .table
        {
            min-width: 820px;
        }
        .id_elm
        {
         background: none;
         border: none;
        }
        .pages ul
        {
          list-style-type: none;
          text-align: center;
          margin-top: 3rem;
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
        </style>
        
</head>
<body>
        <script>
                $(document).ready(function(){
                  $('#info').children('.card').eq(1).children().children().removeClass("active");
                  $('#info').children('.card').eq(2).children().children().addClass("active");
                })
</script>
<?php 
$cbr="Recrut Lorsim";
$x=false; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/header.php";?>
<div class="container-fuild mx-lg-5">
    <div class='row mx-auto'>
        <div class="col-lg-4 menus pl-lg-4 pr-lg-5">
        <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/left_company_bar.php";?>
        </div>
        <div class="col-lg-8 px-lg-2">
        <div class="job mt-5">
        <div class="row mx-auto">
            <div class="col-lg-7 pl-3">
                <div class="h3 f-quick f-500 text-indigo"><i class="slimi-icon slimi-briefcase"></i>Manage job</div>
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
                <div class="table-responsive mt-5">
                    <table class="table table-borderless mng-job">
                            <thead>
                                    <tr>
                                      <th>Job Title</th>
                                      <th>Applications</th>
                                      <th>Featured</th>
                                      <th>Status</th>
                                      <th></th>
                                    </tr>
                            </thead>
                            <tbody>
                                <?php foreach($job as $key=>$j)
                                {
                                    ?>
                                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                    <tr>
                                      <td>
                                          <div class="job-info f-saira">
                                                <h5><?php echo $j->get_title(); ?></h5>
                                                <div class="dropdown-divider w-75 mx-auto mb-3"></div>
                                                <p><span><i class="slimi-icon slimi-placeholder"></i><?php echo ucfirst($emp->get_region()).', '.ucfirst($emp->get_country()); ?></span><span><i class="slimi-icon slimi-design-skills"></i><?php echo $j->get_categorie();?></span></p>
                                          </div>
                                          </td>
                                      <td><p class="job-app">(3+) Applied</p></td>
                                      <td>
                                        <div class="job-info f-quick">
                                          <p><i class="slimi-icon slimi-time"></i>Creat: <span class="dat"><?php echo $j->get_post_date(); ?></span></p>
                                          <p><i class="slimi-icon slimi-time"></i>Expir: <span class="dat"><?php echo $j->get_last_view(); ?></span></p>
                                        </div>
                                      </td>
                                      <td class="statu job-act"><i class="fas fa-circle"></i>Active</td>
                                      <td><div class="mng-job-link">
                                            <a target="_blank" href="/recrutment/pages/job.php?job=<?php echo $id_aar[$key];?>" class="slimi-icon slimi-view"></a>
                                            <input type="hidden" name="id" value="<?php echo $id_aar[$key];?>">
                                            <button class="id_elm" type="submit" name="del"><a id='rub' class="slimi-icon slimi-rubbish"></a></button>
                                        </div>
                                      </td>
                                    </tr>
                                    </form>
                                    <?php
                                    } ?>
                            </tbody>
                    </table>
                    <script>
                    $('#rub').on('click', function() {
                           alert('click');
                           $(this).closest("form").submit();
                       });
                    </script>
                    <!--<div class="pages">
                        <ul>
                            <li><i class="la la-angle-left"></i></li>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li><i class="la la-angle-right"></i></li>
                        </ul>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/footer.html";?>
<script src="../../js/left_user_bar.js"></script>
</body>
</html>