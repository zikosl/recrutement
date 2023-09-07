<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/recrutment/icon.png">
    <title>Recrutment</title>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="line-awesome/css/line-awesome.css">
    <link rel="stylesheet" href="sl_fonts/sl_font.css">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <script src="js/wow.min.js"></script>
    <style>
      .f-test
      {
        font-family: 'Saira Semi Condensed', sans-serif;
      }
    .badge-pink {
    color: #fff;
    background-color: #DA22FF;
    }
    .badge-indigo {
    color: #fff;
    background-color: #9733ee;
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
    .close-cstm
    {
      background: #DA22FF !important;
      opacity: 1 !important;
      margin: -3rem -2rem -1rem auto !important;
      border-radius: 50%;
      outline: none !important;
      padding: 0 !important;
      padding-bottom: 8px !important;
      width: 50px;
      height: 50px;
    }
    .close-cstm:focus
    {
      border: none !important; 
      box-shadow: none !important;
    }
    .close-cstm span
    {
      color: white;
      font-size: 39px;
      font-weight: normal;
    }
    @media screen and (min-width:600px)
    {
     .px-6
{
  padding-right: 4rem !important;
  padding-left: 4rem !important;
}
}
   .link_cus
{
  color: #DA22FF !important;
  line-height: 30px;
  float: right;
  font-size: 13px;
  text-decoration: underline !important;
}
.form-group i
{
  position: absolute;
  top: 15px;
  right: 20px;
  font-size: 19px;
}
.users-chois
{
  width: 100%;
  text-align: center;
  margin-top: 10px;
}
.active_choix
{
  border-color: #DA22FF !important;
}
.users-chois> span {
    float: none;
    display: inline-block;
    font-family: Open Sans;
    font-size: 13px;
    color: #202020;
    border: 2px solid;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    border-radius: 5px;
    padding: 9px 29px;
    margin: 0 5px;
    margin-top: 0px;
    margin-top: 5px;
    cursor: pointer;
}
.btn-ind-pin
{
  border: none;
  color:white !important;
  background: #9733ee;
  transition: all 1s;
  margin: 12px auto;
  padding-top: 15px ;
  padding-bottom: 15px ;

}
.btn-ind-pin:hover,.btn-ind-pin:focus
{
background: #DA22FF;
}
.btn-outline-ind-pin
{
  color:#fff;
  border:2px solid rgb(255, 3, 200);
  background: rgb(255, 3, 200);
  transition: all .5s;
  margin: 16px auto;
  padding: 10px 45px;
  border-radius:80px; 
  outline: none !important;
  font-size: 18px

}
.btn-outline-ind-pin:hover,.btn-outline-ind-pin:focus
{
  background:#fff;
  color:rgb(255, 3, 200);
box-shadow: none !important;
}
/* Base for label styling */
[type="checkbox"]:not(:checked),
[type="checkbox"]:checked {
  position: absolute;
  left: -9999px;
}
[type="checkbox"]:not(:checked) + label,
[type="checkbox"]:checked + label {
  position: relative;
  padding-left: 1.95em;
  cursor: pointer;
}

/* checkbox aspect */
[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before {
  content: '';
  position: absolute;
  left: 0; top: 0;
  width: 1.4em; height: 1.4em;
  border: 2px solid #ccc;
  background: #fff;
  border-radius: 4px;
}
/* checked mark aspect */
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  content: '\2713\0020';
  position: absolute;
  top: .34em; left: .24em;
  font-size: 1.1em;
  line-height: 0.8;
  color: #202020;
  transition: all .2s;
  font-family: 'Lucida Sans Unicode', 'Arial Unicode MS', Arial;
}
/* checked mark aspect changes */
[type="checkbox"]:not(:checked) + label:after {
  opacity: 0;
  transform: scale(0);
}
[type="checkbox"]:checked + label:after {
  opacity: 1;
  transform: scale(1);
}
/* disabled checkbox */
[type="checkbox"]:disabled:not(:checked) + label:before,
[type="checkbox"]:disabled:checked + label:before {
  box-shadow: none;
  border-color: #bbb;
  background-color: #ddd;
}
[type="checkbox"]:disabled:checked + label:after {
  color: #999;
}
[type="checkbox"]:disabled + label {
  color: #aaa;
}
@media screen and (max-width:500px)
{
  .modal-dialog
  {
   width: 94% !important
  }
}
.inner-hero::after ,.get-started::after {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    content: "";
    background-image: url(images/lines.png);
    z-index: 0;
    opacity: 0.14;
}
.get-started
{
background-image: linear-gradient(#ff4bd8aa, #c341ffaa),url(images/hero_imge.jpg);
background-size: cover;
background-attachment: scroll;
height: auto;
position: relative;
padding: 5rem;
margin:0rem auto;
text-align: center;
height: 550px

}
.get-started a
{
  border-radius: 10px;
 position: relative;
 z-index: 14;
 color: white;
 padding: 1.2rem 2rem;
 border: 1.5px solid white;
 font-size: 30px;
 transition: all .5s;
}
@media screen and (min-width:478px)
{
.get-started
{
  padding: 1.2rem 5rem !important;
}  
}

.get-started a:hover,.get-started a:focus
{
  background: white
}
#nav
{
transition: all 1s;
}
.cards h3
{
   display: table;
    font-size: 15px;
    font-family: Open Sans;
    margin: 0;
    margin-bottom: 0px;
    margin-bottom: 7px;
    margin-top: 3px;
}
.cards span
{
  font-size: 15px
}
.card-url
{
  text-decoration: none !important;
  outline: none !important;
  color:#222 !important;
}
.cards
{
  border-bottom:1px solid #88888833;
  transition: all .2s;
  border-left: 2px solid transparent;
}
.cards .logo
{
  float: left;width: 130px;text-align: center;
}
.cards img
{
  float:none;display:inline-block;max-width:100%
}
.cards:last-child
{
  border-bottom:none;
}
.cards:hover
{
    box-shadow: 0px 0px 30px rgba(0,0,0,0.1);
    z-index: 1;
    position: relative;
    border-left-color: #9733ee;
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
[class*=' job-']
{
  padding:7px 4px;
  width:108px
}

.text-mute~.active
{
  color: #fb23a1;
}
.btn-outline-job
{
  color: white !important;
  background: #fb23a1;
  border: 1px solid #fb23a1;
  padding: 8px 13px;
  border-radius: 20px;
  font-weight: bold;
  transition: all .2s;
  letter-spacing: 1px;
}
.categorie
{
  transition: all .5s;
  background: #ffffff;
  cursor: pointer;
  float: left;
  width: 100%;
  z-index: 1;
  position: relative;
}
@keyframes mymove {
    0%   {transform: scale(1)}
    50%  {transform: scale(0.96)}
    100% {transform: scale(1)}
}
@keyframes myopac {
    0%   {opacity: 1}
    50%  {opacity: 0}
    100% {opacity: 1}
}
.categorie:hover
{
  box-shadow: 0px 0px 25px rgba(0,0,0,0.1);
  border-radius: 8px;
    width: 104%;
    margin-left: -2%;
    height: 102%;
    z-index: 10;
}
.categorie:hover i
{
  color: #fb23a1;
}
.text-indigo-2
{
  color:#c15bff;
}
.myclass
{
  animation-name: mymove;
  animation-duration:.5s;
  animation-timing-function: ease;
}
.db
{
  border:none !important;
  background: #fbfbfb;
  margin-top: 10px;
  width: 95%;
  font-size: 15px;
  left:8px !important;

}
.db .dropdown-item
{
  transition: all .25s;
  background: transparent;
  box-shadow: none !important;
  outline: none !important;
  border: none !important;
  padding-top:.5rem ;
  padding-bottom:.5rem;
  font-weight: bold
}
.db .dropdown-item:hover
{
  color: #9733ee;
  padding-left: 2rem;
}
.hightlight
{
  color: #9733ee;
  padding-left: 2rem;
}
#jobs,#categorie
{
padding-top: 50px;
}
#jobs .display-4,#categorie .display-4
{
  color: #444;
}
#start
{
  margin-top: 7rem;
}
#starte
{
  padding-top: 73px;
}
.get-started h1
{
  margin-top: 4rem !important
}
.get-started h5
{
  margin-top: 4rem !important
}
.more
{
  margin-top: 4rem;
}
    </style>
<style>
.line:before, .line:after {
    background-color: #e5e5e5;
    content: "";
    height: 1px;
    left: 100%;
    margin-left: 50px;
    position: absolute;
    top: 50%;
    width: 999em;
}
.line:after {
    left: auto;
    right: 100%;
    margin-left: 0px;
    margin-right: 50px;
}
#answers,#loc {
  position: absolute;
    top: 109px;
    left: 7px;
    background: white;
    box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.095);
    /* background: transparent; */
    z-index: 22;
    height: 150px;
    overflow-y: auto;
    border-radius: 8px;
    padding: 20px;
    text-align: center;
    width: 97%;
    display: none;
}
#loc
{
  top: 242px;
}
#answers>p,#loc>p
{
  padding: 13px 3px;
  margin: 0 auto;
  transition: all .4s;
  color: #888;
  cursor: pointer;
  font-size: 15px;
  letter-spacing:.7px;
  border-radius: 60px;
}
#answers>hr,#loc>hr
{
  display: none
}
#answers>p:hover,#loc>p:hover
{
  color: #f55;
  box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)
}
#answers p.active~#answers hr,#loc p.active~#loc hr
{
  border-top-color: ##f55;
}
#answers::-webkit-scrollbar,#loc::-webkit-scrollbar {
  width: 4px;
  cursor: pointer;
}

#answers::-webkit-scrollbar-button,#loc::-webkit-scrollbar-button {
  display: none;
}
#answers::-webkit-scrollbar-thumb,#loc::-webkit-scrollbar-thumb {
  background: #f55;
  border-radius: 4px;
}
#answers::-webkit-scrollbar-track-piece,#loc::-webkit-scrollbar-track-piece {
  background: 0 0;
}
</style>
</head>
<body class="w-100 o-hidden">
            <script>
                  $(document).ready(function () {
            $('button').on("click",function(){
              $(this).addClass("myclass");
              x=setInterval(function(){
                $('button').removeClass('myclass');
                clearInterval(x);
              },1200)

            })})
            </script>
          <!--  <nav id="nav" class="py-sl-3 navbar navbar-expand-xl navbar-dark position-absolute bg-trans px-2 p-3 w-100 animated fadeIn faster m-auto" style="z-index:66">
                <a class="navbar-brand" href="#">
                            recruit<span>me</span>
                </a>
               <button class="navbar-toggler shadow-sm py-1" type="button" data-toggle="collapse" data-target="#navContent" >
                 <span id='menu' class="fas fa-bars " style="font-size:28px"></span>
               </button>
              <div class="collapse navbar-collapse text-center" id="navContent">
                 <ul class="navbar-nav text-center mx-auto f-open">
                     <li class="nav-item mx-2"><a class="nav-link px-4 n-l" href="#">Home</a><hr class="nav-hr"></li>
                     <li class="nav-item mx-2"><a class="nav-link n-l  px-4" href="#categorie">Categorie</a><hr class="nav-hr"></li>
                     <li class="nav-item mx-2"><a class="nav-link n-l  px-4" href="#jobs">Recent</a><hr class="nav-hr"></li>
                     <li class="nav-item mx-2"><a class="nav-link n-l  px-4" href="#starte">Enterprise</a><hr class="nav-hr"></li>
                     <li class="nav-item mx-2"><a class="nav-link px-4 n-l" href="#">Job</a><hr class="nav-hr"></li> 
                </ul>
                <a role="button" href="pages/manage_company/add_job.php" class="btn btn-outline-job text-left shadow-sm f-robot mx-2 my-2"><i class="la la-plus"></i>&nbsp;Add Job</a>
                <button type="button" class="btn btn-outline-get-started text-left shadow-sm f-raleway mx-2 my-2" data-toggle="modal" data-target="#login"><i class="la la-user"></i>&nbsp;Log-in</button>
                <button type="button" class="btn btn-outline-get-started text-left shadow-sm f-raleway mx-2 my-2" data-toggle="modal" data-target="#signup"><i class="la la-user-plus"></i>&nbsp;Register</button>
                </div>
              </nav>-->
              <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/nav.php";?>
              <!--navigateur-->
              <div class="inner-hero f-raleway">
                  <div class="inner-hero-body row text-center w-100 m-auto">
                     <div id='p-6' class="col-xl-6 p-6 m-auto text-left text-white animated fadeInLeft f-quick" style="z-index:55">
                        <h1 class="display-4 f-500">Discover a new career designed for you.</h1>
                        <p class="display-5">Search over 3,875 open position from multiple disciplines of life all over the world.</p>
                        <button class="btn btn-success-custom btn-block btn-lg w-75 f-robot">View-more <i class="fas fa-caret-right"></i><i class="fas fa-caret-right"></i></button>
                     </div>
                     <div class="col-xl-6 m-auto text-left text-center p-7 pt-5 px-2 animated fadeInRight" style="z-index:22">
                         <div class="p-4 bg-white-costum f-quick my-4 my-md-0">
                             <form action="pages/view.php" method="post" >
                                     <div class="card py-4">
                                        <div class="c-head px-4 pb-3">
                                             <p>KEYWORDS</p>
                                             <input type="text" name="key" id="show" autocomplete="off" class="custom-input w-100" placeholder="Keyword">
                                             <div id="answers" class="f-robot f-300">
                                             </div>
                                             <script>
                                              $("#show").on("keyup",function(){
                                              $("#answers").css('display','block');
                                                  var x=$(this).val();
                                                  $.ajax({
                                                  url:'pages/php_verif/to_verfie/find_title.php?q='+x,
                                                  type:'get',
                                                  success: function(response) {
                                                  $('#answers').html(response);
                                                  }
                                                })
                                              })
                                              </script>
                                              <script>
                                              $(document).ready(function(){
                                              $("#answers").on("click",'p',function(){
                                              $("#show").val($(this).text());
                                              $("#answers").css('display','none');
                                              })
                                              $('body').not("#answers").on('click',function()
                                                 {
                                              $("#answers").css('display','none');
                                               })
                                              }) 
                                              </script>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <div class="c-foot px-4 pt-3">
                                              <p>LOCATION</p>
                                              <input type="text" id="get_loc" name="loc" class="custom-input w-92" placeholder="Location">
                                              <i class="slimi-icon slimi-location"></i>
                                              <div id="loc" class="f-robot f-300">
                                              </div>
                                              <script>
                                               $(document).ready(function(){
                                               $("#loc").on("click",'p',function(){
                                               $("#get_loc").val($(this).text());
                                               $("#loc").css('display','none');
                                                  })
                                               $('body').not("#loc").on('click',function()
                                                 {
                                                 $("#loc").css('display','none');
                                                   })
                                                 }) 
                                               </script>
                                                <script>
                                                $("#get_loc").on("keyup",function(){
                                                $("#loc").css('display','block');
                                                var x=$(this).val();
                                                $.ajax({
                                                url:'pages/php_verif/to_verfie/find_loc.php?q='+x,
                                                type:'get',
                                                success: function(response) {
                                                $('#loc').html(response);
                                                     }
                                                  })
                                                })
                                            </script>
                                        </div>
                                      
                                    </div> 
                                    <button type="submit" value="Find" name="find" class="btn btn-success-custom btn-block my-3">Find Job</button>  
                                  </form>
                         </div>
                    </div>
                  </div>
                </div>    
             <!--end navigateur-->
             <!--model-->
             <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal animated fadeIn faster"  style="background:#da22ff10;transition: all .5s" id="login" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="width: 460px;">
    <div class="modal-content border-0 shadow-sm" style="border-radius: 8px">
      <div class="modal-header text-center border-0">
        <button type="button" class="close close-cstm" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body border-0 px-6 px-3 pt-0 f-open">
          <h2 class="f-raleway font-weight-bold text-center mx-auto my-4" >User Login</h2>
          <p class="text-muted text-center" style="font-size:18px"><small>Click To Login To Your Account</small></p>
        <form>
          <div class="users-chois">
            <span>Employer</span>
            <span>Candidat</span>
          </div>
          <div class="form-group">
            <input type="email" class="form-control custom-in" aria-describedby="emailHelp" placeholder="Enter email">
            <i class="la la-key text-pink"></i>
          </div>
          <div class="form-group">
            <input type="password" class="form-control custom-in" placeholder="*********">
            <i class="la la-user text-pink"></i>
          </div>
          <div class="row m-auto text-center">
            <div class="col-6">
           <div class="form-group form-check  float-left p-0 mt-1">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label f-open" style="font-size: 13px;" for="exampleCheck1">Remembre Me</label>
          </div>
            </div>
            <div class="col-6">
              <a href="#" class="link_cus">Forget password</a>
            </div>
          </div>
          <button type="submit" class="btn btn-ind-pin btn-block btn-lg">Submit</button>
          <div class="linear f-raleway my-4">Or</div>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
  $('.db').children('.dropdown-item').on('click',function(){
  var x=$(this).parent().prev().html();
  x=x.slice(x.indexOf("<i"));
  $(this).parent().prev().html($(this).text()+x);
  $('.db').children('.dropdown-item').removeClass("hightlight");
  $(this).addClass("hightlight");
})
})

</script>
<!--end model-->
<!-----------------sign-up------------------->
<div class="modal animated fadeIn faster"  style="background:#da22ff10;transition: all .5s" id="signup" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="width: 460px;">
    <div class="modal-content border-0 shadow-sm" style="border-radius: 8px">
      <div class="modal-header text-center border-0">
        <button type="button" class="close close-cstm" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body border-0 px-6 px-3 pt-0 f-quick">
          <h2 class="f-raleway font-weight-bold text-center mx-auto my-4" >User Register</h2>
          <p class="text-muted text-center" style="font-size:18px"><small>Click To Create New Account</small></p>
        <form>
          <div class="users-chois">
            <span>Employer</span>
            <span>Candidat</span>
          </div>
          <div class="form-group">
            <input type="text" class="form-control custom-in" placeholder="User name">
            <i class="la la-key text-pink"></i>
          </div>
          <div class="form-group">
            <input type="password" class="form-control custom-in" placeholder="*********">
            <i class="la la-user text-pink"></i>
          </div>
          <div class="form-group">
            <input type="email" class="form-control custom-in" placeholder="Enter email">
            <i class="la la-envelope text-pink"></i>
          </div>
          <div class="form-group">
            <div class="form-control custom-in"  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Job Name
             <i class="la la-arrow text-pink"></i>
            </div>
            <div class="dropdown-menu border db animated fadeIn"  aria-labelledby="dropdownMenu2">
             <button class="dropdown-item" type="button">Job 1</button>
             <button class="dropdown-item" type="button">Job 2</button>
             <button class="dropdown-item" type="button">Job 3</button>
             </div>
           </div>
           <div class="form-group">
              <input type="text" class="form-control custom-in" placeholder="Phone">
              <i class="la la-phone-square text-pink"></i>
            </div>
          <button type="submit" class="btn btn-ind-pin btn-block btn-lg">Register</button>
          <div class="linear f-raleway my-4">Or</div>
        </form>
      </div>
    </div>
  </div>
</div>
<!----------------------------------------------->
                  <script>
                    $(".users-chois span").on("click",function(){
                      $(".users-chois span").removeClass("active_choix");
                      $(this).addClass("active_choix");
                    })
                    $(".custom-input-2").on('click',function(){
                      $(".custom-label").css({"top":'','color':'','font-size':""})
                      $(this).prev().css({'top':'-1.3rem',"color":"#9733ee","font-size": "16px"})
                    })
                      $(document).on("click", function (event) {
                        if(!(event.target.nodeName=="INPUT"))
                           {
                             $(".custom-label").css({"top":'','color':'','font-size':""})
                           }
                         });
                         $(document).on("click",'label', function () {  
                                $(this).next().click().click();
                            })
                   </script>
             <!--end model-->
             <!--<div class="text-center mb-3">
                <p class="display-4 font-weight-bold pt-3 f-major"><span class="text-indigo">R</span>ecent <span class="text-indigo">L</span>isting<p>
                        <div class="dropdown-divider mb-3 w-50 mx-auto"></div>
             </div>-->
             
            <!------------------------------------------------------>
            <div id="categorie" class="text-center">
              <p class="display-4 f-400 f-saira l-spac-2 pt-3"><span class="text-indigo">M</span>ost Categorie<p>
            <p class="pl-2 h6 text-mute f-robot mb-3">37 jobs live - 0 added today.</p>
            </div>
            
          <div class="container">
            <div class="row no-gape border-bottom mx-1">
              <div class="col-md-3 col-sm-6 p-0 m-0">
                <div class="f-cairo text-center py-4 categorie">
                   <i class="slimi-icon slimi-user text-indigo-2 my-2" style="font-size:4rem"></i>
                   <h4 class="f-raleway mt-4 mb-2">Hummen</h4>
                  <p class="text-pink my-2">(6 open position)</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 p-0 m-0">
                 <div class="f-cairo text-center py-4 categorie">
                   <i class="slimi-icon slimi-business text-indigo-2 my-2" style="font-size:4rem"></i>
                   <h4 class="f-raleway mt-4 mb-2">Sales & Marketing</h4>
                  <p class="text-pink my-2">(12 open position)</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 p-0 m-0">
                <div class="f-cairo text-center py-4 categorie">
                   <i class="slimi-icon slimi-accounting text-indigo-2 my-2" style="font-size:4rem"></i>
                   <h4 class="f-raleway mt-4 mb-2">Finance</h4>
                  <p class="text-pink my-2">(22 open position)</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 p-0 m-0">
                <div class="f-cairo text-center py-4 categorie">
                   <i class="slimi-icon slimi-books text-indigo-2 my-2" style="font-size:4rem"></i>
                   <h4 class="f-raleway mt-4 mb-2">Education</h4>
                  <p class="text-pink my-2">(31 open position)</p>
                </div>
              </div>
            </div>
            <div class="row no-gape mx-1">
                <div class="col-md-3 col-sm-6 p-0 m-0">
                  <div class="f-cairo text-center py-4 categorie">
                     <i class="slimi-icon slimi-antenna text-indigo-2 my-2" style="font-size:4rem"></i>
                     <h4 class="f-raleway mt-4 mb-2">Communication</h4>
                    <p class="text-pink my-2">(4 open position)</p>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 p-0 m-0">
                   <div class="f-cairo text-center py-4 categorie">
                     <i class="slimi-icon slimi-hospital text-indigo-2 my-2" style="font-size:4rem"></i>
                     <h4 class="f-raleway mt-4 mb-2">Health</h4>
                    <p class="text-pink my-2">(11 open position)</p>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 p-0 m-0">
                  <div class="f-cairo text-center py-4 categorie">
                     <i class="slimi-icon slimi-engineer text-indigo-2 my-2" style="font-size:4rem"></i>
                     <h4 class="f-raleway mt-4 mb-2">Building</h4>
                    <p class="text-pink my-2">(10 open position)</p>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 p-0 m-0">
                  <div class="f-cairo text-center py-4 categorie">
                     <i class="slimi-icon slimi-fast-food text-indigo-2 my-2" style="font-size:4rem"></i>
                     <h4 class="f-raleway mt-4 mb-2">Resturent &amp; Food</h4>
                    <p class="text-pink my-2">(31 open position)</p>
                  </div>
                </div>
              </div>
            </div>
            <!-------------------------------------------------->
            <div id="starte">
            <div class="get-started">
                <h1 class="text-white f-quick my-4">Make a Difference with Your Online Resume!</h1>
                <h5 class="text-white f-raleway mt-5 mb-4">Your resume in minutes with JobHunt resume assistant is ready!</h5>
              <div id="start">
               <a href="pages/sign.php" class="btn btn-lg f-saira f-500 l-spac-2 mx-auto mt-3 mb-5" role="button">Get started</a>
              </div>
            </div>
            </div>
      <!------------------------card-------------------------------->
      <div id="jobs" class="row recent-job m-auto">
                <div class="text-center py-4 m-auto col-lg-12 mx-4">
                     <p class="display-4 f-400 f-saira l-spac-2 "><span class="text-indigo">R</span>ecent Listing<p>
                     <p class="pl-2 h6 text-secondary f-robot mb-3"> Some of the jobs posted recently by employers</p>                       <!--card-->
                                
                        <!--end_card-->
                        <div class="py-4 px-3 row mx-md-5 mx-2 my-md-0 my-2 cards">
                          <div class="col-lg-6">
                            <div class="logo">
                                <img src="images/l1.png" alt=""></div>
                                <h3><a href="#" class="card-url mx-2 f-quick f-500" title="">Social Media and Public Relation Executive </a></h3>
                                <span class="text-indigo float-left mx-2 f-raleway">MediaLab</span>
                          </div>
                          <div class="col-lg-4 px-3 d-flex align-items-center justify-content-between">
                              <span class="text-mute f-quick float-left align-middle"><i class="fas fa-map-marker-alt"></i> Willaya,baladia</span>
                                 <span class="la la-heart-o text-mute float-right align-middle" style="font-size: 29px"></span>
                           </div>
                          <div class="col-lg-2 d-flex align-items-center justify-content-around">
                            <span class="align-middle rounded-pill f-raleway job-full">Full Time</span>
                          </div>
                        </div>
                        <div class="py-4 px-3 row mx-md-5 mx-2 my-md-0 my-2 cards">
                            <div class="col-lg-6">
                              <div class="logo">
                                  <img src="images/l2.png" alt=""></div>
                                  <h3><a href="#" class="card-url mx-2 f-quick font-500" title="">Social Media and Public Relation Executive </a></h3>
                                  <span class="text-indigo float-left mx-2 f-raleway">Tix Dog</span>
                            </div>
                            <div class="col-lg-4 px-3 d-flex align-items-center justify-content-between">
                                <span class="text-mute f-quick float-left align-middle"><i class="fas fa-map-marker-alt"></i> Willaya,baladia</span>
                                   <span class="la la-heart-o text-mute float-right align-middle" style="font-size: 29px"></span>
                             </div>
                            <div class="col-lg-2 d-flex align-items-center justify-content-around">
                              <span class="align-middle rounded-pill f-raleway job-tem">Temporary</span>
                            </div>
                          </div>
                          <script>
                          if ($(window).width()<570)
                          {
                            $('.card').css('position','relative');
                            $('.logo').css('width','100%')
                            $('.logo').next().next().addClass('my-4 d-block');
                            $('.logo').next().next().removeClass('float-left');
                            $('.col-lg-4').children().addClass('mb-4');
                            $(".la-heart-o").css({'position':'absolute','top':'-171px','right':'-9px'})
                          }
                          </script>
                </div>
              </div>
                <div class="text-center mb-3 mx-auto w-75 position-relative o-hidden more">
                    <button class="btn btn-outline-ind-pin f-quick f-500 l-spac-0 position-relative">More Listing...</button>
                </div>

<script>
   $(".la-heart-o").on('click',function(){
     $(this).toggleClass('active');
   })
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
    <div style="width:280px;position: fixed;bottom: 4px;left: 4px;display: block !important; z-index: 9999;"  class="d-inline-block ml-auto mr-1 text-center">
        <button id="msg" type="button" class="btn btn-indigo-custom rounded-circle mb-2" data-toggle="tooltip" data-placement="right" title="Send Message">
          <i class="fas fa-envelope fa-20 py-2 px-1 f-skew"></i>
        </button>
        <div id="msg_content" style="height: 0" class="bg-gray position-relative f-open">
            <div class="form-group mb-3">
                <label for="email_msg">Email address</label>
                <input type="email" class="form-control" id="email_msg" placeholder="Enter email">
              </div>
              <div class="form-group mt-3 mb-0">
                <label for="text_msg">Example textarea</label>
                <textarea class="form-control" id="text_msg" rows="3"></textarea>
              </div>
        </div>
    </div>
<script>
$("#msg").on('click',function(){
    var $msg=$(this).next();
    if($msg.hasClass('p-2'))
    {
     $msg.animate({height:0},500);
     $msg.css('box-shadow','none');
     $msg.removeClass('p-2');
    }
    else
    {
        $msg.animate({height:220},500);
        $msg.css('box-shadow','0 0 2px .25rem #DA22FF');
        $msg.addClass('p-2');
    }
    
})
</script>
<script>
new WOW().init();
</script>
    <!------------------------card---------------------------->
    <!--------------------------------------------------->
             <script>
                             i=1;
             $(".ripple").on('mouseover',function(){
               x=setInterval(function(){mynb(i);i+=3},1)
             })
             $(".ripple").on('mouseout',function(){
               clearInterval(x);
             })
             function mynb(i)
             {
              $(".nb").text(i);
             }
             </script>
             <div class="bg-dark">
              <div class="container">
                  <div class="row f-open mb-3">
                    <div class="col-md-6 f-quick text-white pb-3 pt-5">
                      <h3 class="f-sarisa font-weight-bold" style="letter-spacing:5px">Recruit<span class="text-indigo">me</span></h3>
                      <br>
                        <h3 class="f-open font-weight-normal text-pink">Address</h3>
                         <p>1234 Street Name 
                          City, AA 99999</p>
                        <h3 class="f-open font-weight-normal text-pink">Cantacts</h3>
                        <p>Email: support@recruit-me.com <br>
                          Phone: +1 (0) 000 0000 001 <br>
                          Fax: +1 (0) 000 0000 002</p>
                    </div>
                    <div class="col-md-3 py-5">
                      <h3 class="text-muted f-quick font-weight-bold">Company</h3>
                      <div>
                        <a class="text-white nav-link font-weight-normal bef-li" href="">About Us</a>
                        <a class="text-white nav-link font-weight-normal bef-li" href="">Terms of Service</a>
                        <a class="text-white nav-link font-weight-normal bef-li" href="">Privacy Policy</a>
                      </div>
                    </div>
                    <div class="col-md-3 py-5">
                        <h3 class="text-muted f-quick font-weight-bold">Browser</h3>
                        <div>
                          <a class="text-white nav-link font-weight-normal bef-li" href="">Find Job</a>
                          <a class="text-white nav-link font-weight-normal bef-li" href="">Jobs In ALger</a>
                          <a class="text-white nav-link font-weight-normal bef-li" href="">Jobs In Tebessa</a>
                        </div>
                      </div>
                  </div>
              </div>
                  <div class="container py-4 " style="border-top: 1px solid #555;">
                    <div  class="h4 text-white f-quick text-center py-0">
                      Follow Us
                    </div>
                    <div class="linear"><i class="la la-heart"></i></div>
                      <ul class="nav justify-content-center container py-3">
                          <li class="nav-item mx-sm-2 my-1" style="--w:15px">
                            <a class="nav-link fab fa-linkedin-in f-link" href="#"><i class="fab fa-linkedin-in"></i></a>
                          </li>
                          <li class="nav-item  mx-sm-2 my-1 " style="--w:18px">
                            <a class="nav-link fab fa-facebook-f f-link" href="#"><i class="fab fa-facebook-f"></i></a>
                          </li>
                          <li class="nav-item  mx-sm-2 my-1" style="--w:13px">
                            <a class="nav-link fab fa-twitter f-link" href="#"><i class="fab fa-twitter"></i></a>
                          </li>
                          <li class="nav-item mx-sm-2 my-1" style="--w:10px">
                            <a class="nav-link fab fa-google-plus-g f-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                          </li>
                        </ul>
                      <nav class="py-0  text-center">
                          <div class="f-quick text-muted pt-2">&copy; Copyright 2019 by <span class="text-white">Zakaria</span>. All Rights Reserved.</div>
                      </nav>
                  </div>
                </div>
<script src="js/script.js"></script>
    <!--<footer style="" class="bg-light mt-5 p-5 row mx-auto f-raleway">
        <nav class="nav flex-column col-6">
            <a class="nav-link text-dark" href="">Active</a>
            <div class="dropdown-divider"></div>
            <a class="nav-link text-dark" href="">Link</a>
            <div class="dropdown-divider"></div>
            <a class="nav-link text-dark" href="">Link</a>
            <div class="dropdown-divider"></div>
            <a class="nav-link text-dark" href="">Link</a>
          </nav>
          <nav class="nav flex-column col-6">
              <a class="nav-link text-dark" href="">Active</a>
              <div class="dropdown-divider"></div>
              <a class="nav-link text-dark" href="">Link</a>
              <div class="dropdown-divider"></div>
              <a class="nav-link text-dark" href="">Link</a>
              <div class="dropdown-divider"></div>
              <a class="nav-link text-dark" href="">Link</a>
            </nav>
    </footer>
    <footer id='foot' class="l-pink-indigo-25 p-1">
            <div class="d-flex justify-content-between align-items-center">
               <div id="logo" class="nav-item mr-auto" style="font-size:24px">
              <a class="nav-link" href="#"><span class="f-major font-weight-normal">recruit</span><span class="f-major">me</span></a>
             </div>
        <ul class="nav">
            
            <li class="nav-item mx-2 ml-auto my-1">
              <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="nav-item  mx-2 my-1">
              <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="nav-item  mx-2 my-1">
              <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item mx-2 mr-auto my-1">
              <a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
            </li>
          </ul>
            </div>
            
    </footer>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
      var x=$(hash).offset().top;
      $('html, body').animate({
        scrollTop: x
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<button class="btn btn-indigo-custom rounded-circle shadow-sm" onclick="topFunction()" id="myBtn" title="Go to top"><i class="	fas fa-arrow-up"></i></button>
<script>
  window.onscroll = function() {
    scrollFunction(document.getElementById("myBtn"),20)
    scrollFunction2()
};
window.onresize = function() {
    scrollFunction2()
};
if($(window).width()<1100)
{
  scrollFunction2();
}
function scrollFunction(x,y) {
  if (document.body.scrollTop > y || document.documentElement.scrollTop > y) {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function scrollFunction2() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80 || $(window).width()<1100){
    $("#nav").removeClass('position-absolute')
    $('#nav').removeClass('bg-trans')
    $('#nav').removeClass('p-3')
    $('#nav').addClass('fixed-top')
    $('#nav').addClass('bg-indigo')
    $('#nav').addClass('p-0')
    $('.navbar-brand').addClass('py-0')
    $('.n-l').css({'margin-top':'12px'});
    $('.nav-hr').css({'border-width':'1.7px','margin-top':'12px'}); 
  } 
  else {    
    $('#nav').removeClass('fixed-top')
    $('#nav').removeClass('bg-indigo')
    $('#nav').removeClass('p-0')
    $('.navbar-brand').removeClass('py-0')
    $('#nav').addClass('p-3')
    $("#nav").addClass('position-absolute')
    $('#nav').addClass('bg-trans')
}

}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  $("html, body").animate({scrollTop:0}, 800); // For Safari
}
</script>
</body>
</html>
