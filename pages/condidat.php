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
require_once "php_verif/manage_user_profile/profile.php";
?>
<?php
$id=(int)$_REQUEST['user'];
if(is_integer($id))
{
 $user=new Profile();
 $id=$user->user_finder($id);
 if(empty($id))
 {
    header("Location: http://localhost/recrutment/");
 }
 else
 {
    $id=mysqli_fetch_assoc($id);
    $id=$id['canid'];
    $user->get_by_id($id);
    require_once "php_verif/manage_user_profile/resume/resume.php";
 } 
}
else
{
    header("Location: http://localhost/recrutment/");
}
 ?>
 <?php require_once 'php_verif/attachment/mail.php'; ?>
 <?php require_once 'php_verif/attachment/save_resume.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Condidate</title>
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
    @media screen and (min-width:992px)
    {
     .pro-img
     {
        margin-top: -92px;
     }
     .tags.text-center
     {
         text-align: left !important
     }
    }
    @media (max-width: 992px)
    {
        .pro-img
        {
            border-color: transparent !important;
        }
     .d-cv {
      float: left;
      width: 100%;
      margin-top: 30px;
      text-align: center;
    display: inline-block;
     }
    .d-cv > a {
    float: none !important;
    display: inline-block;
    }
      }
      @media (max-width: 992px)
      
      {
          .tags-con {
              text-align: center;
            }
            .tags-con a,.tags-con button {
    float: none;
    display: inline-block;
    margin: 20px 10px;
}
.tags a:last-child
{
margin-right: 0;
}
        }
    .pro-img
    {
        border: 2px solid #fff;
        padding: 17px;
        float: none;
        display: inline-block;
        border-radius: 50%;
        width: 178px;
        height: 178px;
        z-index: 3;
    }
    .pro-img figure
    {
        display: inline-block;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.15);
    border-radius: 100%;
    }
    .pro-img img
    {
     width: 140px;
     height: 140px;
     border-radius: 50%;
     float: left;
     border: 3px solid #ffffff;
    }
    .tags a
    {
      border: 2px solid white;
      color: white;
      outline: none !important;
      text-decoration: none !important;
      text-shadow: none !important;
      border-radius: 21px;
    padding: 6px 20px;
    margin-right: 12px;
    font-size: 14px;
    }
    .tags-con a,.tags-con button
    {
      color: white;
      outline: none !important;
      text-decoration: none !important;
      text-shadow: none !important;
      border-radius: 21px;
      padding: 6px 20px;
      margin-right: 12px;
      font-size: 16px;
      float: right;
    }
    .tags-con button
    {
        border: none;
        background: transparent;
    }
    .tags-con i
    {
        float: left;
        margin-right: 7px;
        font-size: 24px;
        line-height: 19px;
    }
    #nav
    {
        background: #9733ee !important;
        position: relative !important;
    }
    .c-info span i
    {
     color: #9733ee;
     font-style: normal;
    }
    .c-info span
    {
        color: #222
    }
    .c-info p
    {
        margin:3px auto ;
    }
    .c-info span
    {
        display: block;
        margin:11px auto;
    }
    .c-info
    {
        font-size: 14px
    }
    .share-bar.circle
    {
    vertical-align: middle;
    border: none;
    padding: 0;
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
    transition: all .5s;
    }

    .share-bar a.share-google {
    color: #fb236a;
    border-color: #fb236a;
    }
    .share-bar a.share-google:hover {
    background: #fb236a;
    border-color: #fb236a;
    color: #ffffff;
}
    .share-bar a.share-fb {
    color: #3b5998;
    border-color: #3b5998;
}
.share-bar a.share-fb:hover {
    background: #3b5998;
    border-color: #3b5998;
    color: #ffffff;
}
.share-bar a.share-twitter {
    color: #1da1f2;
    border-color: #1da1f2;
}
.share-bar a.share-twitter:hover {
    background: #1da1f2;
    border-color: #1da1f2;
    color: #ffffff;
}
.d-cv a
{
    float: right;
    background: #ffffff;
    border: 2px solid #DA22FF;
    color: #DA22FF;
    font-size: 14px;
    padding: 14px 30px;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    -ms-border-radius: 8px;
    -o-border-radius: 8px;
    border-radius: 8px;
    -webkit-transition: all 0.4s ease 0s;
    -moz-transition: all 0.4s ease 0s;
    -ms-transition: all 0.4s ease 0s;
    -o-transition: all 0.4s ease 0s;
    transition: all 0.4s ease 0s;
    text-decoration: none !important;
}
.d-cv a:hover {
    background-color: #DA22FF;
    color: #FFF;
}
.d-cv a i {
    margin-left: 5px;
}
.cand-extralink {
    width: 100%;
    text-align: center;
    border: 2px solid #e8ecec;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    -ms-border-radius: 8px;
    -o-border-radius: 8px;
    border-radius: 8px;
    margin-top: 40px;
    background: #fff
}
a
{
    text-decoration: none !important;
}
ul {
    list-style: outside none none;
    margin: 0 0 30px;
    padding: 0;
}
.cand-extralink > li {
    float: none;
    display: inline-block;
    margin: 0 10px;
}

:not(#nav ul li) {
    color: #1e1e1e;
    margin-bottom: 15px;
    position: relative;
}
.cand-extralink > li a {
    float: left;
    font-size: 15px;
    color: #888888;
    padding: 20px 10px;
    position: relative;
    margin-bottom: -5px;
}
.cand-extralink > li:hover a {
    color: #9733ee;
    border-color: #9733ee;
}
.form-group i
{
  position: absolute;
  top: 15px;
  right: 20px;
  font-size: 19px;
}
    </style>
    <style>
        .job-view
         {
            border: 2px solid #e8ecec;
            border-radius: 8px;
         }
         .job-view ul
         {
             padding-left: 10px;
         }
         .job-view ul li
         {
             margin: 20px 0;
             padding-left: 73px;
             font-size: 13px;
             position: relative;
             cursor: pointer;
         }
         .job-view ul li i
         {
                  position: absolute;
                  font-size: 32px;
                  left: 16px;
                  top: 5px;
                  color: #9733ee;
                  transition: all .25s
         }
         .job-view ul li:hover i
         {
             color: #f42cff
         }
         .job-view ul li h6
         {
            font-size: 14px;
            font-weight: bold;
            letter-spacing: .7px
         }
         .job-view ul li span
         {
             color: #888;
         }
         .container h4
         {
             font-size: 22px
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
    .dscr h4
    { 
        font-size: 22px;
        font-weight: bold;
        margin-top: 12px;
        margin-bottom: 18px;
    }
    .dscr p
    {
      font-size: 15px;
      color: #888;
    }
    </style>
    <style>
    .edu-history
    {
        padding-left: 90px;
        position: relative;
    }
    .edu-history i.la
    {
    position: absolute;
    font-size: 55px;
    left: 12px;
    top: 50%;
    transform: translate(0,-50%);
    color: #f42cff;
    }
    .edu-info h3
    {
     font-size: 16px;
     color: #9733ee;
     font-weight: bold;
    }
    .work h3 i
    {
        margin-left: 10px;
        color: black
    }
    .edu-info i
    {
       font-style: normal;
       color: #888;
       font-size: 14px
    }
    .edu-info span
    {
        display: block;
        font-size: 16px;   
        font-weight: bold   ;
         margin: 7px auto;
    }
    .edu-info span i
    {
        font-size: 14px;   
            font-weight: normal;
    }
    .edu-info>i
    {
      display: block
    }
    .edu-info p
    {
        font-size: 14px;
        color: #888
    }
    .edu-ni h4
    {
        font-size: 22px;
        font-weight: bold;
        margin:15px auto;
        color: #343a40
    }
    .work
    {
        position: relative;
        padding-left: 45px
    }
    .work > i {
    position: absolute;
    left: 0;
    top: 0;
    width: 16px;
    height: 16px;
    /*border: 2px solid #9733ee;*/
    box-shadow: 0px 0px 0px 4px #9733ee77 inset;
    content: "";
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
}
.work::before {
    position: absolute;
    left: 7px;
    top: 20px;
    width: 2px;
    height: 100%;
    content: "";
    background: #e8ecec;
}
.work:last-child::before {
    display: none
}
.bg-pink
{
background:rgb(255, 33, 244)
}
.pro-skil h4
{
    font-weight: bold;
    margin: 15px auto;
    color: #343a40;
}
.pro-skil .progress
{
    height: 6px !important;
}
.pro-skil .skil
{
    margin: 4rem auto
} 
.pro-skil .skil h5
{
    margin-bottom: 10px;
    font-size: 17px;
   letter-spacing: .7px;
}
.pro-skil,.dscr,.edu-ni
{
    padding-top: 55px
}
.skil:last-child
{
    margin-bottom: 0;
}
.prtfl img
{
 border-radius: 15px; 
 position: relative;
 float: left;
 width: 100%;
}
.prtfl 
{
    float: left;
    position: relative;
    z-index: 0;
}
.prtfl a
{
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
z-index: 1;
text-align: center;
background: linear-gradient(45deg, #DA22FFee 0%,#9733eeee 71%,#9733eeee 100%);
opacity: 0;
border-radius: 15px;
transition: all .4s
}
.prtfl a:hover
{
    opacity: 1;
}
.prtfl a i
{
    position: absolute;
    width: 100%;
    text-align: center;
    left: 0;
    top: 50%;
    color: #ffffff;
    font-size: 30px;
    line-height: 10px;
    margin-top: -5px;
}
    </style>
    <style>
    .edu-ni h4 i,.dscr h4 i,.pro-skil h4 i {
    display: inline-block;
    width: 40px;
    height: 40px;
    text-align: center;
    background-color: #f0f0f0;
    border: 1px solid #dedede;
    box-shadow: 0px 0px 0px 3px #ffffff inset;
    border-radius: 100%;
    color: #9733ee;
    padding-top: 8px;
    margin-right: 11px;
}
.dscr
{
    font-size: 16px;
    letter-spacing: .5px;
    line-height: 2.2rem;
}
.dscr>ul li i
{
margin-right: 5px;
color: #9733ee;
}
</style>
</head>
<body>
    
        <?php 
        $cbr="Recrut Lorsim";
        $x=false; ?>
        <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/nav.php";?>
    <div>
       <div class="row bg-dark px-md-5 pb-4 f-quick mx-auto" style="padding-top:170px">
                <div class="tags text-center col-lg-6">
                    <?php
                    $cate=explode('|',$user->get_categorie());
                    foreach ($cate as $key) {
                        echo '<a href="">'.$key.'</a>';
                    }
                    ?>
                    </div>
                    <div class="tags-con col-lg-6">
                        <a href="#contact_user"><i class="la la-envelope-o"></i> Contact user</a>
                        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                        <button type="submit" name="save_resume"><i class="la la-paper-plane"></i> Save Resume</button>
                        </form>
                    </div>
           </div>
    </div>
<div class="container">
    <div class="row m-auto">
       <div class="col-lg-4 m-auto text-center py-md-0 py-4">
            <div class="share-bar circle">
                    <a href="http://<?php echo $user->get_google()?>" title="" class="share-google"><i class="la la-google"></i></a>
                    <a href="http://<?php echo $user->get_fb()?>" title="" class="share-fb"><i class="fab fa-facebook-f"></i></a>
                    <a href="http://<?php echo $user->get_twitter()?>" title="" class="share-twitter"><i class="fab fa-twitter"></i></a>
                </div>
       </div>
            <div class="text-center m-auto f-quick text-muted c-info col-lg-4">
                    <div class="pro-img">
                        <figure>
                                <img src="<?php echo $user->get_pic()?>" alt="">
                        </figure>
                    </div>
                    <h4 class="text-dark f-raleway font-weight-bold"><?php echo ucfirst($user->get_first())." ".ucfirst($user->get_last());?></h4>
                    <span><i><?php echo $expr[0]->get_work()["title"];?></i> at <?php echo $expr[0]->get_work()["company"];?></span>
                    <p><?php echo $user->get_mail()?></p>
                    <p>Member Since, <?php echo $user->get_date();?></p>
                    <p><i class="la la-map-marker"></i><?php echo $user->get_region()." / ".$user->get_country();?></p>
            </div>
        <div class="col-lg-4 m-auto f-robot">
            <div class="d-cv rounded-pill">
                <a href="#" title="">Download CV <i class="la la-download"></i></a>
            </div>
        </div>
    </div>
    <ul class="cand-extralink f-quick sticky-top">
            <li><a href="#about" title="">About</a></li>
            <li><a href="#education" title="">Education</a></li>
            <li><a href="#experience" title="">Work Experience</a></li>
            <li><a href="#portfolio" title="">Portfolio</a></li>
            <li><a href="#skills" title="">Professional Skills</a></li>
            <li><a href="#awards" title="">Awards</a></li>
    </ul>
    <div class="row m-auto">
        <div class="col-lg-8" >
            <div class="dscr f-robot f-300" id="about">
                 <h4 class="f-open"><i class="slimi-icon slimi-curriculum"></i>Candidates About</h4>
                 <?php
            $x=html_entity_decode($user->get_dscrpt());
            $x=str_replace("<p>","<p class='f-open'>",$x);
            $x=str_replace("<li>",'<li><i class="slimi-icon slimi-arrows22"></i>',$x);
            echo $x;
            //$x=t
           ?>
            </div>
          <div class="edu-ni f-quick" id="education">
              <h4 class="f-open"><i class="slimi-icon slimi-mortarboard"></i>Education</h4>
                    <?php
                        foreach ($educ as $et)
                         { 
                      ?>
                                <div class="edu-history my-4">
                                        <i class="la la-graduation-cap"></i>
                                        <div class="edu-info">
                                            <h3><?php echo ucfirst($et->get_qual());?></h3>
                                            <?php echo '<i>'.$et->get_ent_date().' - '.$et->get_ser_date().'</i>';?>
                                            <?php echo'<span class="f-500">'.$et->get_univ().' <i class="f-robot">'.$et->get_title().'</i></span>';?>
                                            <?php  echo '<p>'.$et->get_dscrpt().'</p>';?>
                                        </div>
                                    </div>
                    <?php }?>
          </div>   
          <div class="edu-ni f-quick" id="experience">
                <h4 class="f-open"><i class="slimi-icon slimi-social-media"></i>Work &amp; Experience</h4>
                <?php foreach ($expr as $ex) {          ?>
                  <div class="edu-history my-4 work py-1">
                       <i></i>
                           <div class="edu-info">
                                    <?php echo '<h3 class="f-robot">'.$ex->get_company().'<i class="f-quick f-500">'.$ex->get_title().'</i></h3>';
                                      echo '<i>'.$ex->get_ent_date().' - '.$ex->get_ser_date().'</i>';
                                      echo "<p>".$ex->get_dscrpt()."</p>";
                                    ?>
                            </div>
                 </div>
                       <?php  } ?>
            </div> 
            <div class="edu-ni f-quick" id="portfolio">
                <h4 class="f-open"><i class="slimi-icon slimi-briefcase"></i>Portfolio</h4>
                <div class="row mx-auto my-3">
                    <div class="col-lg-3">
                            <div class="prtfl">
                                    <img src="../images/p1.jpg" class="shadow-sm" alt="">
                                   <a href="">
                                    <i class="la la-search"></i>
                                   </a>
                               </div>
                    </div>
                    <div class="col-lg-3">
                            <div class="prtfl">
                               <img src="../images/p2.jpg" class="shadow-sm" alt="">
                              <a href="">
                               <i class="la la-search"></i>
                              </a>
                          </div>
                    </div>
                    <div class="col-lg-3">
                            <div class="prtfl">
                                    <img src="../images/p3.jpg" class="shadow-sm" alt="">
                                   <a href="">
                                    <i class="la la-search"></i>
                                   </a>
                               </div>
                    </div>
                    <div class="col-lg-3">
                            <div class="prtfl">
                                    <img src="../images/p4.jpg" class="shadow-sm" alt="">
                                   <a href="">
                                    <i class="la la-search"></i>
                                   </a>
                               </div>
                    </div>
                </div>
                
            </div> 
            <div class="f-cairo pro-skil" id="skills">
                <h4 class="f-open"><i class="slimi-icon slimi-design-skills"></i>Professional Skills</h4>
                <?php foreach ($skill as $sk)
                                               {
                                                ?>
                                <div class="skil">
                                <h5><?php echo$sk->get_title(); ?></h5>
                                <div class="progress rounded-pill">
                                    <div class="progress-bar bg-pink rounded-pill" role="progressbar" style="width: <?php echo$sk->get_prsnt(); ?>%" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                </div>
                                <?php }?>
            </div> 
            <div class="edu-ni f-quick" id="awards">
                    <h4 class="f-open"><i class="slimi-icon slimi-trophy"></i>Honors &amp; Awards</h4>
                    <?php foreach ($aword as $aw)
                                               {
                                                ?>  
                                    <div class="edu-history my-4 work py-1">
                                          <i></i>
                                              <div class="edu-info">
                                                  <h3><?php echo $aw->get_title();?></h3>
                                                  <i><?php echo $aw->get_from_();?> - <?php echo $aw->get_to_();?></i>
                                                  <p><?php echo $aw->get_dscrpt();?></p>
                                              </div>
                                          </div>
                                        <?php }?>
                </div>
        <div>
        </div>
        </div>
        <div class="col-lg-4">
         <h4 class="text-dark f-open font-weight-bold mt-2 mb-3">Condidat Overview</h4>
         <div class="job-view f-quick">
             <ul>
                 <li>
                       <i class="slimi-icon slimi-salary"></i>
                       <h6>Offerd Salary</h6>
                       <span><?php echo "$".$user->get_e_sale().' - $'.$user->get_c_sale();?></span>
                 </li>
                 <li>
                     <i class="slimi-icon slimi-user"></i>
                     <h6>Gender</h6>
                     <span><?php if($user->get_gander()==1) {echo "Male";} else{echo "Female";} ;?></span>
                 </li>
				 <li>
                     <i class="slimi-icon slimi-social-media"></i>
                     <h6>Language</h6>
                     <span><?php if($user->get_lang()==0) {echo "Arabe";} elseif ($user->get_lang()==1){echo "Franch";}else{echo "English";}?></span>
                 </li>
				 <li>
                     <i class="slimi-icon slimi-network"></i>
                     <h6>Industry</h6>
                     <span><?php echo $expr[0]->get_industry();?></span>
                 </li>
				 <li>
                     <i class="slimi-icon slimi-briefcase"></i>
                     <h6>Experience</h6>
                     <span><?php echo $expr[0]->get_experience($id);?> Years</span>
                 </li>
				 <li>
                     <i class="slimi-icon slimi-mortarboard"></i>
                     <h6>Qualification</h6>
                     <span><?php echo $educ[0]->get_qualification();?></span>
                 </li>
             </ul>
         </div>
         <h4 class="text-dark f-open font-weight-bold mt-5 mb-3" id="contact_user">Contact Condidat</h4>
         <div class="job-view f-quick px-4">
             <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                 <div class="form-group">
                    <input  class="form-control custom-in"  type="text" placeholder="Enter name*" name="name" id="">
                    <i class="slimi-icon slimi-user"></i>
                 </div>
                <div class="form-group">
                    <input  class="form-control custom-in" type="email" placeholder="Enter Email*"  name="mail" id="">
                <i class="slimi-icon slimi-mail"></i>
                </div>
                <div class="form-group">
                    <input class="form-control custom-in"  type="tel" placeholder="Enter Phone" name="phone" id="">
                <i class="slimi-icon slimi-technology"></i>
                </div>
                <div class="form-group">
                    <textarea class="form-control custom-in" placeholder="Write Something To Condidat" name="msg" id="" cols="30" rows="7"></textarea>
                </div>
                 <button class="btn btn-outline-indigo btn-block mx-auto f-cairo" name="mailer">
                         Send Email
                 </button>
             </form>
         </div>
        </div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/footer.html";?>
<script>
        $(document).ready(function(){
          // Add smooth scrolling to all links
          $("a").on('click', function(event) {
        
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();
        
              // Store hash
              var hash = this.hash;
        
              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function(){
        
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });
        });
        </script>
</body>
</html>