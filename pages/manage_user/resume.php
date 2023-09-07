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
<?php
require_once('../php_verif/manage_user_profile/resume/resume.php');
?>
<?php
require_once '../php_verif/manage_user_profile/resume/about.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Resumes</title>
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/fonts.css">
    <link rel="stylesheet" href="../../sl_fonts/sl_font.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <link rel="stylesheet" href="../../line-awesome/css/line-awesome.css">
    <script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../../js/popper.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/left_user_bar.css">
    <link rel="stylesheet" href="../../css/checkbox.css">
    <link rel="shortcut icon" href="/recrutment/icon.png">
    <!--<link rel="stylesheet" href="/recrutment/wyswyg/pell.css">-->
    <style>
    .pell {
  box-sizing: border-box; }

.pell-content {
  box-sizing: border-box;
  height: 300px;
  outline: 0;
  overflow-y: auto;
  padding: 10px; 
  border-bottom: 1px solid #fefefe;
  box-shadow: 0 .125rem .25rem rgba(0,0,0,.035);
  margin-top: 10px
}

.pell-actionbar {
  background-color: #FFF;
   }

.pell-button {
  background-color: transparent;
  border: none;
  cursor: pointer;
  color: #c98cfd;
  height: 40px;
  outline: none !important;
  width: 40px;
  vertical-align: bottom; 
  margin: 4px;
  border: 1px solid #c98cfd;
  box-shadow: 0 .125rem .25rem rgba(0,0,0,.055);
  border-radius: 100%
}

.pell-button-selected {
  background: #c98cfd;
  color: white; 
}
    </style>
    <style>
        b
        {
            font-weight: 500;
        }
        .rsm .h2 i
        {
            margin-right: 16px;
            font-size: 33px
        }
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
    .edu-info i,.col-lg-3>i,.rsm-act i
    {
       font-style: normal;
       color: #888;
       font-size: 14px
    }
    .edu-info span
    {
        color:#555;
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
      display: block;
    }
    .col-lg-3>i,.rsm-act
    {
      display: block;
      margin-top: 12px;
      text-align: center;
    }
    .edu-info>i i,.col-lg-3>i i,.rsm-act i
    {
        margin-right: 9px;
        font-size: 16px;
        margin-left: 9px;
    }
    .edu-info p
    {
        font-size: 14px;
        color: #888
    }
    .edu-info
     {
         position: relative;
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
.skil:last-child
{
    margin-bottom: 0;
}
.prtfl img
{
 border-radius: 15px; 
 position: relative;
 width: 100%;
}
.prtfl 
{
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
</style>
<style>
    .carte
    {
        position: relative;
    }
    .carte .add-info
    {
        background: #fff;
        padding: 7px 15px;
        position: absolute;
        border:1px solid #f4f4f4;
        width: 100%;
        left: 0;
        display: none;
        margin-top: 10px;
        z-index: 3;
    }
</style>
<style>
.custom-in
        {
          border:1px solid;
          border-color: #f4f4f4 !important;
          padding: 15px;
          height: 2.8rem;
          margin:.5rem auto;
          font-weight: 500;
          border-radius: 0;
          transition: all .5s;
          font-size: 13px !important;
          position: relative;
          box-shadow: 0 .125rem .25rem #efefef77!important;
          cursor: text ;
        }
        input
        {
          outline: none !important;
        }
        .form-group
        {
          position: relative;
        }
        .custom-in i
    {
        position: absolute;
        font-size: 20px;
        color: #fb23ba;
        right: 17px;
    }
    a
    {
        text-decoration: none !important;
    }
    .f-15
    {
        font-size: 13px;
    }
    .btn-indigo
    {
      color: #fff !important;
      background:#fb23a1;
      font-size: 16px;
      padding: 11px 40px;
      font-weight: 500;
      border-radius: 5px;
      transition: all .2s;
      letter-spacing: 1px;
      transition: all .4s;
      box-shadow: none !important;
      outline: none !important;
      letter-spacing: 1px;
    }
    .pi
{
  --z:#ddd;
}
.form-check-label::after
{
    color: #555 !important;
  top: .25em !important;
    left: .31em !important;
}
.custom-file
{
    border: 2px solid #e001fd;
    padding: 30px;
    border-radius: 10px;
    text-align: center;
    font-family: 'Open Sans','sans sarif';
    height: 100%;
}
.custom-file~input
{
    display: none;
}
.custom-file i,.custom-file span
{
color: #e001fd;
display: block;
margin-top: .5rem;
margin-bottom: .5rem;
}
.custom-file i
{
    font-size: 22px;
}
.rsm-act
{
    position: absolute;
    top:0;
    right: 0;
}
.skil
{
    padding-right:5rem;
    position: relative;
}
.skil>i
{
position: absolute;
top: 11px;
color: #888;
right: 0;
}
.skil>i>i
{
    margin-right: 5px;
    margin-left: 5px;
}
.form-group>p
{
    position: absolute;
    top: 83px;
    color: #ff0a42;
    left: 16px;
    font-size: 16px;
}
textarea~p
{
    top: unset !important;
    bottom: -46px;
}
.btn-outline-save
{
    border: 2px solid #ff2b8e;
    padding: 14px 35px;
    color: #ff2b8e;
    margin-top: 17px;
    background: white;
    border-radius: 9px;
    font-size: 17px;
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
      <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/nav.php";?>
    <div class="container-fuild mx-lg-5">
        <div class='row mx-auto'>
           <div class="col-lg-4 menus pl-lg-4 pr-lg-5">
               <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/left_user_bar.php";?>
            </div>
            <div class="col-lg-8 mt-5 rsm">
                    <div class="h2 f-quick f-500 text-indigo"><i class="slimi-icon slimi-briefcase"></i>My Resumes</div>
                  <div class="dropdown-divider mt-4"></div>
                          <form action="<?php echo$_SERVER['PHP_SELF'];?>" method="post">
                            <div class="dscr f-quick mt-5 text-right">
                                 <h4 class="f-open text-left"><i class="slimi-icon slimi-curriculum"></i>Candidates About</h4>
                                 <div id="editor" class="pell text-left"></div>
                                 <textarea style="display:none" cols="30" rows="10" id="output" name="dsc"></textarea>
                                 <button id="save" name="save_info" class="btn-outline-save f-quick f-500 ">Save State</button>
                            </div>
                         </form>
                         <script>
                             $(document).ready(function(){
                                 $(".pell-content").html("<?php echo htmlspecialchars_decode($exp->get_dscrpt())?>");
                             })
                         </script>
                            <div class="dropdown-divider mx-auto w-75 my-5"></div>
                          <div class="edu-ni f-quick">
                               <div class="d-flex justify-content-between carte">
                                   <h4 class="f-open text-left mx-0"><i class="slimi-icon slimi-mortarboard"></i>Education</h4>
                                     <div class="my-auto">
                                       <button class="btn btn-info f-saira btn-block add"><i class="fas fa-plus"></i> Add Education</button>
                                       <div class="add-info shadow-sm">
                                            <div class="row my-1">
                                                    <div class="col-lg-12">
                                                                <div class="form-group f-quick">
                                                                            <label class="f-open f-15">Title</label>
                                                                            <input type="text" id='ttl' class="form-control custom-in"  value="Computer Sience">
                                                                            <p></p>
                                                                </div>
                                                   </div>
                                            </div>
                                            <div class="row my-1">
                                                   <div class="col-lg-6">
                                                      <div class="form-group f-quick">
                                                                  <label class="f-open f-15">From Date</label>
                                                                  <input type="text" id="f_d" class="form-control custom-in" value="10/8/2008">
                                                                  <p></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                                <div class="form-group f-quick">
                                                                            <label class="f-open f-15">To Date</label>
                                                                            <input type="text" id="t_d" class="form-control custom-in" value="11/5/2009">
                                                                            <p></p>
                                                                </div>
                                                   </div>
                                            </div>
                                            <div class="row my-1">
                                                   <div class="col-lg-6">
                                                      <div class="form-group f-quick">
                                                                  <label class="f-open f-15">Institute</label>
                                                                  <input type="text" id="u_n" class="form-control custom-in" value="University">
                                                                  <p></p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                      <div class="form-group f-quick">
                                                                  <label class="f-open f-15">Qualification</label>
                                                                  <input type="text" id="qual" class="form-control custom-in" value="University">
                                                                  <p></p>
                                                      </div>
                                                    </div>
                                            </div>
                                            <div class="row my-1">
                                                    <div class="col-lg-12">
                                                        <div class="form-group f-quick">
                                                              <label for="dscrpt"  class="f-open f-15">Description</label>
                                                              <textarea class="form-control custom-in" id="dsc" style="padding:20px" id="dscrpt" rows="5">hhhhhhhhhhhhhhhhhhhhh</textarea>
                                                              <p></p>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-lg-12 text-right">
                                                        <button class="btn btn-indigo f-saira save" type="submit" id="save_edu">Save</button>
                                                </div>
                                            </div>
                                       </div>
                                       
                                    </div>
                                </div>
                                <script>
                                   /* $('#save_edu').on('click',function(){
                                        var title=$('#ttl').val();
                                        var from=$('#f_d').val();
                                        var to=$('#t_d').val();
                                        var univ=$('#u_n').val();
                                        var dscrpt=$('#dscr').val();
                                        alert(title+'     '+from+'  '+to+'  '+univ+'  '+dscrpt);
                                        $.ajax({
                                        type:'post',
                                        url:'../php_verif/manage_user_profile/resume.php',
                                        data:{title:title,from:from,to:to,univ:univ,dscrpt:dscrpt},
                                        dataType:"json",
                                        success:function(data) {
                                            alert("ok");
                                            alert(data.code)
                                            if(data.code==404)
                                            {
                                                alert(data.msg1);
                                                alert(data.msg2);
                                                alert(data.msg3);
                                                alert(data.msg4);
                                            }
                                         },
                                         
                                        }).fail(function(xhr, status, error) {
                                           alert( xhr+'     '+status+'    '+error );
                                         })
                                    })*/
                                    </script>
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
                                            <i class="text-right rsm-act">
                                              <i class="slimi-icon slimi-edit"></i>
                                              <i class="slimi-icon slimi-rubbish"></i>
                                            </i>
                                        </div>
                                    </div>
                                    <?php 
                                             }
                                             ?>
                                    <!--<div class="edu-history my-4">
                                            <i class="la la-graduation-cap"></i>
                                            <div class="edu-info">
                                                <h3>University</h3>
                                                <i>2008 - 2012</i>
                                                <span>Middle East Technical University <i>Computer Science</i></span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                                
                                                <i class="text-right rsm-act">
                                                    <i class="slimi-icon slimi-edit"></i>
                                                    <i class="slimi-icon slimi-rubbish"></i>
                                                </i>
                                            </div>
                                        </div>-->
                          </div> 
                          <div class="dropdown-divider mx-auto w-75 my-5"></div>  
                          <div class="edu-ni f-quick">
                                <div class="d-flex justify-content-between carte">
                                        <h4 class="f-open text-left mx-0"><i class="slimi-icon slimi-social-media"></i>Work &amp; Experience</h4>
                                          <div class="my-auto">
                                            <button class="btn btn-info f-saira btn-block add"><i class="fas fa-plus"></i> Add Experience</button>
                                            <div class="add-info shadow-sm">
                                                    <div class="row my-1">
                                                            <div class="col-lg-12">
                                                                        <div class="form-group f-quick">
                                                                                    <label class="f-open f-15">Title</label>
                                                                                    <input type="text" class="form-control custom-in" id="exp_ttl" value="Computer Sience">
                                                                                    <p></p>
                                                                        </div>
                                                           </div>
                                                    </div>
                                                    <div class="row my-1">
                                                           <div class="col-lg-6">
                                                              <div class="form-group f-quick">
                                                                          <label class="f-open f-15">From Date</label>
                                                                          <input type="text" class="form-control custom-in" id="exp_f_d" value="10/8/2008">
                                                                          <p></p>
                                                              </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                        <div class="form-group f-quick">
                                                                                    <label class="f-open f-15">To Date</label>
                                                                                    <input type="text" class="form-control custom-in" id="exp_t_d" value="11/5/2009">
                                                                                    <p></p>
                                                                        </div>
                                                           </div>
                                                    </div>
                                                    <div class="row my-1">
                                                           <div class="col-lg-12">
                                                              <div class="form-group f-quick">
                                                                          <label class="f-open f-15">Company</label>
                                                                          <input type="text" class="form-control custom-in" id='c_p' value="University">
                                                                          <p></p>
                                                              </div>
                                                            </div>
                                                    </div>
                                                    <div class="row my-1">
                                                            <div class="col-lg-12">
                                                                <div class="form-group f-quick">
                                                                      <label for="dscrpt" class="f-open f-15">Description</label>
                                                                      <textarea class="form-control custom-in" style="padding:20px" id="exp_dsc" rows="5"></textarea>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="row mt-1">
                                                        <div class="col-lg-12 text-right">
                                                                <button class="btn btn-indigo f-saira save" id='save_exprt'>Save</button>
                                                        </div>
                                                    </div>
                                               </div>
                                        </div>
                                     </div>
                                     <?php foreach ($expr as $ex)
                                               {
                                                ?>
                                  <div class="edu-history my-4 work py-1">
                                      <i></i>
                                          <div class="edu-info">
                                              <?php echo '<h3 class="f-robot">'.$ex->get_company().'<i class="f-quick f-500">'.$ex->get_title().'</i></h3>';
                                                 echo '<i>'.$ex->get_ent_date().' - '.$ex->get_ser_date().'</i>';
                                                 echo "<p>".$ex->get_dscrpt()."</p>";
                                                 ?>
                                          </div>
                                      </div>
                                      <?php   
                                              }
                                           ?>
                            </div> 
                            <div class="dropdown-divider mx-auto w-75 my-5"></div>  
                            <div class="edu-ni f-quick">
                                <div class="d-flex justify-content-between carte">
                                        <h4 class="f-open text-left mx-0"><i class="slimi-icon slimi-briefcase"></i>Portfolio</h4>
                                          <div class="my-auto">
                                            <button class="btn btn-info f-saira btn-block add"><i class="fas fa-plus"></i> Add Portfolio</button>
                                            <div class="add-info shadow-sm">
                                                    <div class="row my-5">
                                                           <div class="col-lg-4">
                                                              <div class="form-group f-quick">
                                                                          <label class="custom-file" class="f-open f-15">
                                                                              <i class="slimi-icon slimi-upload"></i>
                                                                              <span>Upload Image</span>
                                                                              <input type="file" style="display:none" value="10/8/2008">
                                                                          </label>
                                                              </div>
                                                            </div>
                                                            <div class="col-lg-8 mt-3">
                                                                        <div class="form-group f-quick">
                                                                                    <label class="f-open f-15">Title</label>
                                                                                    <input type="text" class="form-control custom-in" value="11/5/2009">
                                                                        </div>
                                                           </div>
                                                    </div>
                                                    <div class="row mt-1">
                                                        <div class="col-lg-12 text-right">
                                                                <button class="btn btn-indigo f-saira save">Save</button>
                                                        </div>
                                                    </div>
                                               </div>
                                        </div>
                                     </div>
                                <div class="row mx-auto my-3">
                                    <div class="col-lg-3">
                                            <div class="prtfl">
                                                    <img src="../../images/p1.jpg" class="shadow-sm" alt="">
                                                   <a href="">
                                                    <i class="la la-search"></i>
                                                   </a>
                                               </div>
                                        <i class="">
                                           <i class="slimi-icon slimi-edit"></i>
                                           <i class="slimi-icon slimi-rubbish"></i>
                                        </i>
                                    </div>
                                    <div class="col-lg-3">
                                            <div class="prtfl">
                                               <img src="../../images/p2.jpg" class="shadow-sm" alt="">
                                              <a href="">
                                               <i class="la la-search"></i>
                                              </a>
                                              </div>
                                              <i class="">
                                                <i class="slimi-icon slimi-edit"></i>
                                                <i class="slimi-icon slimi-rubbish"></i>
                                               </i>
                                    </div>
                                    <div class="col-lg-3">
                                            <div class="prtfl">
                                                    <img src="../../images/p3.jpg" class="shadow-sm" alt="">
                                                   <a href="">
                                                    <i class="la la-search"></i>
                                                   </a>
                                            </div>
                                                   <i class="">
                                                    <i class="slimi-icon slimi-edit"></i>
                                                    <i class="slimi-icon slimi-rubbish"></i>
                                                   </i>                   
                                    </div>
                                    <div class="col-lg-3">
                                            <div class="prtfl">
                                                    <img src="../../images/p4.jpg" class="shadow-sm" alt="">
                                                   <a href="">
                                                    <i class="la la-search"></i>
                                                   </a>
                                            </div>
                                                   <i class="">
                                                    <i class="slimi-icon slimi-edit"></i>
                                                    <i class="slimi-icon slimi-rubbish"></i>
                                                   </i>
                                    </div>
                            </div>
                            </div>
                           <div class="dropdown-divider mx-auto w-75 my-5"></div>
                            <div class="f-cairo pro-skil">
                                <div class="d-flex justify-content-between carte">
                                        <h4 class="f-open text-left mx-0"><i class="slimi-icon slimi-design-skills"></i>Professional Skills</h4>
                                          <div class="my-auto">
                                            <button class="btn btn-info f-saira btn-block add"><i class="fas fa-plus"></i> Add Skills</button>
                                            <div class="add-info shadow-sm">
                                                    <div class="row my-3">
                                                            <div class="col-lg-12 mt-3">
                                                                    <div class="form-group f-quick">
                                                                                <label class="f-open f-15">Skill Title</label>
                                                                                <input type="text" class="form-control custom-in" id="skill_ttl" value="HTML">
                                                                                <p></p>
                                                                    </div>
                                                           </div>
                                                            <div class="col-lg-12 mt-3">
                                                                        <div class="form-group f-quick">
                                                                                    <label class="f-open f-15">Percentage %</label>
                                                                                    <input type="text" class="form-control custom-in" id='skill_prs' value="50%">
                                                                                    <p></p>
                                                                        </div>
                                                           </div>
                                                    </div>
                                                    <div class="row mt-1">
                                                        <div class="col-lg-12 text-right">
                                                                <button class="btn btn-indigo f-saira save" id="save_skill">Save</button>
                                                        </div>
                                                    </div>
                                               </div>
                                               
                                        </div>
                                     </div>
                                <?php foreach ($skill as $sk)
                                               {
                                                ?>
                                <div class="skil">
                                <h5><?php echo$sk->get_title(); ?></h5>
                                <div class="progress rounded-pill">
                                    <div class="progress-bar bg-pink rounded-pill" role="progressbar" style="width: <?php echo$sk->get_prsnt(); ?>%" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <i>
                                    <i class="slimi-icon slimi-edit"></i>
                                    <i class="slimi-icon slimi-rubbish"></i>
                                </i>
                                </div>
                                <?php }?>
                            </div> 
                            <div class="dropdown-divider mx-auto w-75 my-5"></div>  
                            <div class="edu-ni f-quick">
                                    <div class="d-flex justify-content-between carte">
                                            <h4 class="f-open text-left mx-0"><i class="slimi-icon slimi-trophy"></i>Honors &amp; Awards</h4>
                                              <div class="my-auto">
                                                <button class="btn btn-info f-saira btn-block add"><i class="fas fa-plus"></i> Add Awards</button>
                                                <div class="add-info shadow-sm">
                                                        <div class="row my-1">
                                                                <div class="col-lg-12">
                                                                            <div class="form-group f-quick">
                                                                                        <label class="f-open f-15">Award Title</label>
                                                                                        <input type="text" class="form-control custom-in" id="aw_ttl" value="Computer Sience">
                                                                                        <p></p>
                                                                            </div>
                                                               </div>
                                                        </div>
                                                        <div class="row my-1">
                                                               <div class="col-lg-6">
                                                                  <div class="form-group f-quick">
                                                                              <label class="f-open f-15">From Date</label>
                                                                              <input type="text" class="form-control custom-in" id="aw_f_d" value="10/8/2008">
                                                                              <p></p>
                                                                  </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                            <div class="form-group f-quick">
                                                                                        <label class="f-open f-15">To Date</label>
                                                                                        <input type="text" class="form-control custom-in" id="aw_t_d" value="11/5/2009">
                                                                                        <p></p>
                                                                            </div>
                                                               </div>
                                                        </div>
                                                        <div class="row my-1">
                                                                <div class="col-lg-12">
                                                                    <div class="form-group f-quick">
                                                                          <label for="dscrpt" class="f-open f-15">Description</label>
                                                                          <textarea class="form-control custom-in" style="padding:20px" id="aw_dsc" rows="5"></textarea>
                                                                          <p></p>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="row mt-1">
                                                            <div class="col-lg-12 text-right">
                                                                    <button class="btn btn-indigo f-saira save" id="save_awrd">Save</button>
                                                            </div>
                                                        </div>
                                                   </div>
                                            </div>
                                         </div>
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
                                              <span class="rsm-act">
                                                <i class="slimi-icon slimi-edit"></i>
                                                <i class="slimi-icon slimi-rubbish"></i>
                                              </span>
                                          </div>
                                        <?php }?>
                                </div>
             </div>
        </div>
    </div>
</div>
        <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/footer.html";?>
        <script src="../../js/left_user_bar.js"></script>
        <script>
        $(".carte").children('.my-auto').children('button').on('click',function(){
            $(this).next().slideToggle();
        })
        </script>
        <script src="../profile_js/resume.js"></script>
        <script src="/recrutment/wyswyg/pell.js"></script>
        <script>
      pell.init({
        element: document.getElementById('editor'),
        onChange: html => {document.getElementById('output').textContent = html},
        defaultParagraphSeparator: 'p'
      })
    </script>
  </body>
</html>