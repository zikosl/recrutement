<?php 
if(!isset($_REQUEST['user'])) 
{
    header("Location: http://localhost/recrutment/");
}
?>
<?php 
require_once 'php_verif/manage_log_register/register.php';
require_once 'php_verif/manage_user_profile/location.php';
require_once 'php_verif/manage_user_profile/social.php';
?>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'\recrutment\pages\php_verif\manage_company_profile\profile.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\recrutment\pages\php_verif\manage_user_profile\profile.php';
?>
<?php
$id=(int)$_REQUEST['user'];
if(is_integer($id))
{
 $user=new empolyer();
 $id2=$id;
 $id=$user->user_finder($id);
 if(empty($id))
 {
    header("Location: http://localhost/recrutment/");
 }
 else
 {
    $id=mysqli_fetch_assoc($id);
    $id=$id['empid'];
    $user->get_by_id($id);
 } 
}
else
{
    header("Location: http://localhost/recrutment/");
}
 ?>
 <?php
 require_once 'php_verif/attachment/test_folow.php';
 require_once 'php_verif/attachment\save_resume.php';
 require_once 'php_verif\manage_user_profile\experience.php';
 ?>
 <?php
 $rsm=new save_resume($id);
 $rsm=$rsm->get_resume();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $user->get_first().' '.$user->get_last();?></title>
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../line-awesome/css/line-awesome.css">
    <link rel="stylesheet" href="../sl_fonts/sl_font.css">
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="shortcut icon" href="/recrutment/icon.png">
    <style>
      ul
       {
           list-style-type: none;
       }
       .container
    {
        padding: 60px 0;
    }
        #nav
    {
        background:linear-gradient(to left,#9733ee,#da77ff) !important;
        position: relative !important;
    }
    .emplo-detail
    {
     padding-top: 10px;
     padding-bottom: 10px;
    }
    .emplo-detail ul
    {
        list-style-type: none;
        padding-left: 0;
        margin-top: 18px
    }
    .emplo-detail ul li
    {
        display: inline-block;
        margin-right:19px
    }
    .emplo-img
    {
     width: 25%;
     padding: 3px;
     text-align: center;
    }
    .emplo-img img
    {
        border: 2px solid #e8ecec;
        width: 180px;
        height: 144px;
        border-radius: 8px;
        margin: auto;
    }
    .emplo-info
    {
     width: 75%;
     margin: auto;
     margin-left: 20px
    }
    .emplo-info>h3
    {
        font-size: 20px;
        margin-top: 8px;
        margin-bottom: 14px;
        color: #202020
    }
    .job-full
{
color: #8b91dd;border:1px solid #8b91dd;
}
.job-tem
{
color: #26ae61;border:1px solid #26ae61;
}
.job-part
{
border:1px solid #7dc246;color:#7dc246;
}
.job-free
{
color: #fb236a;border:1px solid #fb236a;
}
.job-volun
{
color: #18f0f8;border:1px solid #18f0f8;
}
.job-inter
{
color: #f831e3;border:1px solid #f831e3;
}
[class*='job-']
{
margin: 0;
border-radius: 30px;
background: none;
display: inline-block;
border-top: 1px solid #eaeeee;
vertical-align: middle;
font-size: 14px;
border: 1px solid;
padding: 7px 0;
width: 108px;
text-align: center;
margin-left: 12px
}
.emplo-info .map,.emplo-detail ul li
{
    color: #888;
    font-family: 'Open Sans', sans-serif;
    font-size: 13px
}
.emplo-detail ul li i,.emplo-info .map i
{
color: #9733ee;
font-size: 23px;
margin-right: 8px;
vertical-align: sub;
}
.slimi-placeholder
{
color: #26ae61 !important;
}
.slimi-briefcase-1
{
color: var(--primary) !important;
}
.slimi-time
{
color: var(--info) !important;
}
.slimi-view
{
    color: var(--orange) !important;
}
.emplo-info>h3>span
{
    float: right;
    margin-right: 15px;
    color: var(--gray-dark);
    font-size: 18px;
    letter-spacing: .7px;
}
.emplo-info>h3>span>span
{
margin-left: 20px;
font-size: 20px;
}
.emplo-info>h3>span>span>i
{
    margin-right: 5px;
    color: var(--yellow);
}
/******2nd col*******/
.share-bar.circle
    {
    vertical-align: middle;
    border: none;
    padding: 0;
    text-align: right;
    }
    .share-bar.circle a
    {
    border-radius: 50%;
    width: 45px;
    height: 45px;
    line-height: 41px;
    border: 2px solid;
    float: none;
    display: inline-block;
    margin-top: 6px;
    text-align: center;
    font-size: 18px;
    margin: 0 5px;
    text-decoration: none !important;
    -webkit-transition: background-color 0.4s ease 0s, color .4s linear .4s;
    -moz-transition: background-color 0.4s ease 0s, color .4s linear .4s;
    -ms-transition: background-color 0.4s ease 0s, color .4s linear .4s;
    -o-transition: background-color 0.4s ease 0s, color .4s linear .4s;
    transition: background-color 0.4s ease 0s, color .4s linear .4s;
    }

    .share-bar a.share-google {
    color: #fb236a;
    border-color: #fb236a;
    }
    .share-bar a.share-google:hover {
    background: #fb236a;
    color: #ffffff;
}
    .share-bar a.share-fb {
    color: #3b5998;
    border-color: #3b5998;
}
.share-bar a.share-fb:hover {
    background: #3b5998;
    color: #ffffff;
}
.share-bar a.share-twitter {
    color: #1da1f2;
    border-color: #1da1f2;
}
.share-bar a.share-twitter:hover {
    background: #1da1f2;
    color: #ffffff;
}
/*****************************/
@media (max-width: 992px)
    {
     /*.d-cv {
      float: left;
      width: 100%;
      margin-top: 30px;
      text-align: center;
    display: inline-block;
     }
    .d-cv > a {
    float: none !important;
    display: inline-block;
    }*/
      }
.d-cv
{
    margin-top: 12px;
    margin-bottom: 12px;
    margin-right:26px;
}

.d-cv button
{
    float: right;
    background: #ffffff;
    border: 1.4px solid #ad73bbcc;
    color: #ad73bb;
    font-size: 16px;
    padding: 8px 20px;
    letter-spacing: .7px;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    -ms-border-radius: 8px;
    -o-border-radius: 8px;
    border-radius: 8px;
    -webkit-transition: background-color 0.4s ease 0s, color .4s linear .4s;
    -moz-transition: background-color 0.4s ease 0s, color .4s linear .4s;
    -ms-transition: background-color 0.4s ease 0s, color .4s linear .4s;
    -o-transition: background-color 0.4s ease 0s, color .4s linear .4s;
    transition: background-color 0.4s ease 0s, color .4s linear .4s;
    text-decoration: none !important;
    outline: none !important;
}
.d-cv button:hover,.d-cv button.active {
    background-color: #ad73bb;
    color: #FFF;
}
.d-cv a i {
    margin-left: 0px;
    font-size: 20px;
    font-weight: bold;
    vertical-align: middle;
}
   </style>
   <style>
   .jobs-view
         {
            border: 2px solid #e8ecec;
            border-radius: 8px;
         }
         .jobs-view ul
         {
             padding-left: 10px;
         }
         .jobs-view ul li
         {
             margin: 20px 0;
             padding-left: 73px;
             font-size: 13px;
             position: relative;
             cursor: pointer;
         }
         .jobs-view ul li i
         {
                  position: absolute;
                  font-size: 32px;
                  left: 16px;
                  top: 5px;
                  color: #9733ee;
                  transition: all .25s
         }
         .jobs-view ul li:hover i
         {
             color: #f42cff
         }
         .jobs-view ul li h6
         {
            font-size: 14px;
            font-weight: bold;
            letter-spacing: .7px
         }
         .jobs-view ul li span
         {
             color: #888;
         }
         .container h4
         {
             font-size: 22px
         }
         .jobs-view ul li:first-child i
         {
          color: var(--orange);
         }
         .jobs-view ul li:nth-child(2) i
         {
            color: var(--cyan);
         }
         .jobs-view ul li:nth-child(3) i
         {
            color: var(--green);
         }
         .jobs-view ul li:nth-child(4) i
         {
            color: var(--indigo);  
         }
         .jobs-view ul li:nth-child(5) i
         {
            color: var(--danger) !important;
         }
         .jobs-view ul li:nth-child(6) i
         {
            color: var(--yellow);
         }
         .jobs-view ul li:nth-child(7) i
         {
            color: var(--blue);
         }
         .jobs-view ul li:nth-child(8) i
         {
            color: var(--pink);
         }
   </style>
   <style>
        @media (max-width:760px)
       {
        .emplo-img
        {
            width: 100%;
            text-align: center;
            margin-top: 7px;
            margin-bottom: 20px;
        }
        .emplo-detail
        {
            display: block !important;
        }
        .emplo-info
        {
            text-align: center;
            width: 100%;
            margin: 0;
        }
        .emplo-info>h3>span
        {
            display: block;
            float: none;
            margin-top: 20px;
            margin-right: 0;
        }
        .emplo-info>ul>li
        {
            display: block;
            margin-top: 16px;
            margin-bottom: 16px
        }
        .share-bar.circle
        {
            text-align: center;
        }
        .d-cv
        {
            text-align: center;
            margin-top: 2rem;
            margin-bottom: 0px;
            margin-right: 0;
        }
        .d-cv a
        {
            float: none;
        }
       }
       .btn-outline-indigo
    {
        border:  2px solid #9733ee;
        background: #9733ee;
        transition: background .7s;
        border-radius: 60px;
        padding: 1rem 3rem;
        font-size: 22px;
        color: #FFF;
        margin-bottom: 22px;
        letter-spacing: .8px
    }
    .btn-outline-indigo:hover
    {
        background: #fff;
        color: #9733ee
    }
    .custom-in
    {
      border:2px solid #88888855;
      padding: 15px;
      height: 3.5rem;
      margin:2rem auto;
      border-radius: 7px;
      transition: all .5s
    }
    .custom-in:hover,.custom-in:focus
    {
            border:2px solid #88888855;
            box-shadow: none;
    }
    .form-group
    {
      position: relative;
    }
    .form-group i
{
  position: absolute;
  top: 15px;
  right: 20px;
  font-size: 19px;
}
/********************/
.company-about
{
    font-size: 14px;
    letter-spacing: .5px;
    line-height: 2.2rem;
}
.company-about>ul li i
{
margin-right: 5px;
color: #9733ee;
}
.company-team .card .card-body .jb
{
color: #9733ee;  
letter-spacing: .5px;  
}
.company-team .card .card-body img
{
margin-top: 0rem;
margin-bottom: .5rem;
}
.company-team .card .card-body p
{
font-size: 15px;
margin-top: .7rem;
margin-bottom: .7rem;
}
.company-team .card .card-body p span
{
color: #999;
}
.company-team .card .card-footer i
{
    margin-right: 4px;
    font-size: 22px
}
.company-team .card .card-footer i:last-child
{
    margin-right: 0;
}
.slimi-google-plus-logo-button
{
    color: #e24046;
}
.slimi-facebook-logo
{
    color: #375d93;
}
.slimi-twitter-logo
{
    color: #43afe9;
}
.slimi-linkedin-button
{
    color: #007eb3; 
}
#contact
{
    text-align: center;
    margin: auto;
}
#contact li
{
    display: inline-block;
    margin-right: 3rem;
    color: #666;
}
#contact li i
{
    margin-right: 8px;
    font-size: 20px;
    vertical-align: text-bottom;
    color: #f831e3;
}
#contact li:last-child
{
    margin-right: 0;
}
a
{
    text-decoration: none !important;
}
   </style>
</head>
<body>
    <!--
        <div class="emplo-info">
                    <h3 class="f-500 f-quick">Tera Planner</h3>
                    <span class="map"><i class="la la-map-marker"></i> Place</span>
                    <span class="job-full">full time</span>
                    <ul>
                        <li><i class="la la-file-text"></i> Applications 1</li>
                        <li><i class="la la-calendar-o"></i> Post Date: July 29, 2017</li>
                        <li><i class="la la-eye"></i> Views 5683</li>
                    </ul>
              </div>
    -->
<?php 
$cbr="Recrut Lorsim";
$x=false; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/nav.php";?>
<div class="container">
  <div class="row m-auto">
      <div class="col-lg-9">
        <div class="emplo-detail d-flex justify-content-between">
              <div class="emplo-img">
                  <img src="../images/sdf.png" alt="" srcset="">
              </div>
              <div class="emplo-info">
                    <h3 class="f-500 f-quick"><?php echo $user->get_first().' '.$user->get_last();?>
                       <span>
                        <form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post">
                         <div class="d-cv rounded">
                             <button class="f-quick f-500 shadow-sm <?php if($flw){echo'active';}?>" href="#" title="" type="submit" name="follow">Fullow <i class="la la-plus"></i></button>
                          </div>
                        </form>
                       </span>
                    </h3>
                    <span class="map"><i class="slimi-icon slimi-placeholder"></i><?php echo ucfirst($user->get_region()).', '.ucfirst($user->get_country());?></span>
                    <span class="job-full">Full time</span>
                    <ul>
                        <li><i class="slimi-icon slimi-briefcase-1"></i> Applications 1</li>
                        <li><i class="slimi-icon slimi-time"></i><?php echo $user->get_f_date();?></li>
                        <li><i class="slimi-icon slimi-view"></i> Views 5683</li>
                    </ul>
              </div>
        </div>
      </div>
      <div class="col-lg-3 m-auto">
            <div class="share-bar circle">
                    <a href="http://<?php echo $user->get_google();?>" title="" class="share-google"><i class="la la-google"></i></a>
                    <a href="http://<?php echo $user->get_fb();?>" title="" class="share-fb"><i class="fab fa-facebook-f"></i></a>
                    <a href="http://<?php echo $user->get_twitter();?>" title="" class="share-twitter"><i class="fab fa-twitter"></i></a>
            </div>
      </div>
  </div>
  <div class="row">
     <div class="col-lg-12 my-4">
         <ul id="contact" class="f-quick">
            <li><i class="slimi-icon slimi-internet"></i><?php echo $user->get_site();?></li>
            <li><i class="slimi-icon slimi-envelope"></i><?php echo $user->get_mail();?></li>
            <li><i class="slimi-icon slimi-technology"></i><?php echo $user->get_phone();?></li>
         </ul>
     </div>
     <div class="col-lg-12 mb-5 px-5">
            <div class="dropdown-divider w-75 mx-auto "></div>
     </div>
  </div>
  <div class="row m-auto">
      <div class="col-lg-8">
          <div class="company-about">   
           <h4 class="text-dark f-quick f-500 mt-2 mb-3">About Company</h4>  
           <p class="f-open">
               <?php echo $user->get_dscrpt();?>
           </p>    
      </div>
      <div class="company-team">
          <h4 class="text-dark f-quick f-500 mt-5 mb-3">Our Team Members</h4>
          <div class="row m-auto">
             <?php foreach($rsm as $e)
             {?>
               <div class="col-lg-4">
                   <div class="card text-center rounded-0 shadow-sm f-source">
                     <div class="card-body">
                         <img src="<?php echo $e->get_pic();?>" class="rounded-circle shadow-sm" alt="">
                         <h4 class="f-quick f-500"><?php echo $e->get_first().' '.$e->get_last();?></h4>
                          <p class="jb"><?php echo $e->get_job();?></p>
                          <p><small>Experience: <span><?php $exp=new expert(); echo $exp->get_experience($e->get_id());?> Years</span></small></p>
                     </div>
                     <div class="card-footer">
                         <a href="<?php echo $e->get_google();?>"><i class="slimi-icon slimi-google-plus-logo-button"></i></a>
                         <a href="<?php echo $e->get_fb();?>"><i class="slimi-icon slimi-facebook-logo"></i></a>
                         <a href="<?php echo $e->get_twitter();?>"><i class="slimi-icon slimi-twitter-logo"></i></a>
                         <a href="<?php echo $e->get_linked();?>"><i class="slimi-icon slimi-linkedin-button"></i></a>
                     </div>
                   </div>
               </div>
             <?php } ?>
               <div class="col-lg-4"></div>
               <div class="col-lg-4"></div>
          </div>
      </div>
    </div>
      <div class="col-lg-4">
            <h4 class="text-dark f-quick f-500 mt-2 mb-3">Company Overview</h4>
            <div class="jobs-view f-quick">
                <ul>
                    <li>
                          <i class="slimi-icon slimi-view"></i>
                          <h6>Viewed</h6>
                          <span>164</span>
                    </li>
                    <li>
                        <i class="slimi-icon slimi-briefcase"></i>
                        <h6>Posted Jobs</h6>
                        <span><?php echo $user->get_job($id2);?></span>
                    </li>
                    <li>
                        <i class="slimi-icon slimi-map-location"></i>
                        <h6>Location</h6>
                        <span><?php echo ucfirst($user->get_region()).', '.ucfirst($user->get_country());?></span>
                    </li>
                    <li>
                        <i class="slimi-icon slimi-design-skills"></i>
                        <h6>Categories</h6>
                        <span><?php echo $user->get_cate_list();?></span>
                    </li>
                    <li>
                        <i class="slimi-icon slimi-time"></i>
                        <h6>Founded</h6>
                        <span><?php echo $user->get_f_date()?></span>
                    </li>
                    <li>
                        <i class="slimi-icon slimi-credit-card"></i>
                        <h6>Revenue</h6>
                        <span>$5 billion (USD)</span>
                    </li>
                    <li>
                        <i class="slimi-icon slimi-company-workers"></i>
                        <h6>Team Size</h6>
                        <span><?php echo $user->get_team();?></span>
                    </li>
                    <li>
                        <i class="slimi-icon slimi-discuss-issue"></i>
                        <h6>Followers</h6>
                        <span><?php echo $s_f;?></span>
                    </li>
                </ul>
            </div>
            <h4 class="text-dark f-quick f-500 mt-5 mb-3">Company Contact</h4>
         <div class="jobs-view f-quick px-4">
             <form action="">
                 <div class="form-group">
                    <input  class="form-control custom-in"  type="text" placeholder="Enter name*" name="" id="">
                    <i class="slimi-icon slimi-user"></i>
                 </div>
                <div class="form-group">
                    <input  class="form-control custom-in" type="email" placeholder="Enter Email*"  name="" id="">
                <i class="slimi-icon slimi-mail"></i>
                </div>
                <div class="form-group">
                    <input class="form-control custom-in"  type="tel" placeholder="Enter Phone" name="" id="">
                <i class="slimi-icon slimi-technology"></i>
                </div>
                <div class="form-group">
                    <textarea class="form-control custom-in" placeholder="Write Something To Condidat" name="" id="" cols="30" rows="7"></textarea>
                </div>
                 <button class="btn btn-outline-indigo btn-block mx-auto f-cairo">
                         Send Email
                 </button>
             </form>
         </div>
      </div>
  </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/footer.html";?>
<script>
/*$(document).ready(function(){
})*/
$('.d-cv').children().on('click',function(){
$(this).toggleClass('active');
})
</script>
</body>
</html>