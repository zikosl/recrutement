<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job</title>
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
     width: 287px;
    }
    .emplo-img img
    {
        border: 1px solid #efefef;
        width: 100%;
        height: auto;
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
        font-size: 36px;
        margin-top: 8px;
        font-weight: bold;
        margin-bottom: 14px;
        margin-top: 14px;
        color: #fff;
        line-height: 1.2;
    }
    .job-full
{
background: #8b91dd;border:1px solid #8b91dd;
}
.job-tem
{
background: #26ae61;border:1px solid #26ae61;
}
.job-part
{
border:1px solid #7dc246;background:#7dc246;
}
.job-sall
{
    border:1px solid #542dff !important;
    background:#542dff !important;
    color: white;
    padding-right: 15px !important;
    padding-left: 15px !important;
}
.job-free
{
background: #fb236a;border:1px solid #fb236a;
}
.job-volun
{
background: #18f0f8;border:1px solid #18f0f8;
}
.job-inter
{
background: #f831e3;border:1px solid #f831e3;
}
[class*='job-']
{
margin: 0;
border-radius: 30px;
display: inline-block;
color: white;
vertical-align: middle;
font-size: 14px;
padding: 7px 0;
min-width: 108px;
text-align: center;
margin-left: 12px
}
.emplo-info .map,.emplo-detail ul li
{
    color: #fff;
    font-family: 'Roboto', sans-serif;
    font-size: 14px;
    line-height: 28px;
}
.emplo-detail ul li i,.emplo-info .map i
{
color: #fff;
font-size: 23px;
margin-right: 8px;
vertical-align: sub;
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
.d-cv a
{
    float: right;
    background: #ffffff;
    border: 2px solid var(--purple);;
    color: var(--purple);;
    font-size: 16px;
    padding: 8px 20px;
    letter-spacing: .7px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    -ms-border-radius: 30px;
    -o-border-radius: 30px;
    border-radius: 30px;
    -webkit-transition: background-color 0.4s ease 0s, color .4s linear .4s;
    -moz-transition: background-color 0.4s ease 0s, color .4s linear .4s;
    -ms-transition: background-color 0.4s ease 0s, color .4s linear .4s;
    -o-transition: background-color 0.4s ease 0s, color .4s linear .4s;
    transition: background-color 0.4s ease 0s, color .4s linear .4s;
    text-decoration: none !important;
}
.d-cv a:hover,.d-cv a.active {
    background-color: var(--purple);
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
            border: 1px solid #efefef;
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
   </style>
   <style>
        @media (max-width:760px)
       {
           .btn-warning
           {
               display: inline-block;
               margin: auto;
               display: table;
               margin: 1.5rem auto;
           }
        .jobs-listed
        {
            float:none !important;
            display: inline-block;
            margin-top: 20px;
        }
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
.slimi-google-plus-logo-button
{
    color: #e24046 !important;
}
.slimi-facebook-logo
{
    color: #375d93 !important;
}
.slimi-twitter-logo
{
    color: #43afe9 !important;
}
.slimi-linkedin-button
{
    color: #007eb3 !important; 
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
   </style>
<style>
.icon-shar
{
    display: inline;
}
.icon-shar li .fa-twitter
{
background: #55ACEE;
}
.icon-shar li .fa-facebook-f
{
 background:  #3B5998;
}
.icon-shar li .fa-linkedin-in
{
  background: #007bb5;
}
.icon-shar li .fa-google-plus-g
{
  background: #dd4b39;
}
.icon-shar li
{
    margin-right: 5px !important;
    margin-left: 5px !important;
    text-align: center;
}
.icon-shar li i
{
    margin: 0 !important;
    font-size: 15px !important;
    width: 30px;
height: 30px;
padding-top: 7px;
border-radius: 100%
}
.border-s
{
    border: 1px solid #efefef;
}
.bg-img
{
    background-image:linear-gradient(#da22ff77, #9733ee77), url('/recrutment/images/hero_imge.jpg');
    background-attachment:scroll;
    background-size: cover;
    background-repeat: no-repeat;
}
.emplo-info>div>span
{
    font-size: 15px;
}
.vtn
{
    margin-bottom: -100px;
}
.tags a
{
    outline: none !important;
    text-decoration: none !important;
border-radius: 20px;
display: inline-block;
color: #333;
background: #eee;
vertical-align: middle;
font-size: 14px;
padding: 10px 14px 10px 14px;
text-align: center;
margin: 10px 14px 0px 0px;
transition: all 0.4s;
letter-spacing: .7px;
line-height: 1;
}
.tags a:hover
{
    color: white;
    background: #a947ff;
}
.tags .h4
{
    font-size: 20px;
}
.sct
{
    vertical-align: middle;
    font-weight: bold;
    color: #fff;
}
.jobs-listed
{
    float: right;
    color: #444;
    font-family: 'Varela Round', sans-serif;
    /*border: 1px solid;*/
    border-radius: 40px;
    padding: 5px 12px;
    cursor: pointer;
    font-size: 25px;
    transition:all .4s;
}
.jobs-listed i
{
margin-right: 7px;
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
<div class=" bg-img">
<div class="container">
  <div class="row m-auto">
      <div class="col-lg-12">
        <div class="emplo-detail d-flex justify-content-between">
              <div class="emplo-img">
                  <img src="../images/sdf.png" alt="" srcset="">
              </div>
              <div class="emplo-info">
                    <span class="job-part ml-0">Part time</span> <span class="job-sall f-quick f-500">Offred Salary: 5000 $</span><span class="jobs-listed"><i class="far fa-bookmark"></i></span>
                    <h3 class="f-robot f-700">Full-Stack Web Developer with WordPress Experience</h3>
                    <ul>
                        <li><i class="slimi-icon slimi-placeholder"></i >Sacramento, California</li>
                        <li><i class="slimi-icon slimi-building"></i> Small Business</li>
                        <li><i class="slimi-icon slimi-view"></i> Views 5683</li>
                    </ul>
                    <ul>
                            <li><i class="slimi-icon slimi-time"></i> Post Date: July 01, 2017</li>
                            <li><i class="slimi-icon slimi-time"></i> Last Date: July 29, 2017</li>
                    </ul>
                    <div class="mt-4">
                       <button class="btn btn-warning text-white f-quick f-500"><i class="slimi-icon slimi-mail"></i> Email Job</button>
                    <span class="mx-2 f-source sct">Share this Job:</span>
                    <ul class="icon-shar">
                            <li><i class="fab fa-google-plus-g"></i></li>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                    </ul> 
                    </div>
                    
              </div>
        </div>
      </div>
      <script>
      $('.jobs-listed').on('click',function(){
          $(this).children().toggleClass('fas');
          $(this).children().toggleClass('far');
      })
      </script>
      <!--<div class="col-lg-3 m-auto">
            <div class="share-bar circle">
                    <a href="#" title="" class="share-google"><i class="la la-google"></i></a>
                    <a href="#" title="" class="share-fb"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" title="" class="share-twitter"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="d-cv rounded-pill">
                    <a class="f-quick f-500" href="#" title="">Fullow <i class="la la-plus"></i></a>
            </div>
      </div>-->
  </div>
</div>
</div>
  <div class="container">
  <div class="row m-auto">
      <div class="col-lg-8 px-0">
          <div class="company-about px-3 border-s shadow-sm py-4">   
           <h4 class="text-dark f-quick f-500 mt-2 mb-3">Job Descripton</h4>  
           <p class="f-open">
                Far much that one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered inset one echidna cassowary some parrot and much as goodness some froze the sullen much connected bat wonderfully on instantaneously eel valiantly petted this along across highhandedly much dog out the much alas evasively neutral lazy reset.
           </p>    
           <ul class="pl-0 f-opne">
                <li><i class="slimi-icon slimi-arrows22"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li> 
                <li><i class="slimi-icon slimi-arrows22"></i>Pellentesque augue dignissim venenatis, turpis vestibulum lacinia dignissim venenatis.</li> 
                <li><i class="slimi-icon slimi-arrows22"></i>Mus arcu euismod ad hac dui, vivamus platea netus.</li> 
                <li><i class="slimi-icon slimi-arrows22"></i>Neque per nisl posuere sagittis, id platea dui.</li> 
                <li><i class="slimi-icon slimi-arrows22"></i>A enim magnis dapibus, nullam odio porta, nisl class.</li> 
                <li><i class="slimi-icon slimi-arrows22"></i>Turpis leo pellentesque per nam, nostra fringilla id.</li>
           </ul>
           <div class="my-3 tags f-saira">
                <div class="h4 f-robot f-600 ">Required Skills</div>
                                        <a href="#">AutoCAD</a>
                                        <a href="#">Civils</a>
                                        <a href="#">food</a>
                                        <a href="#">17th edition</a>
                                        <a href="#">electrical</a>
                                        <a href="#">engineer</a>
                                        <a href="#">engineer</a>
                                        <a href="#">engineering</a>
                                        <a href="#">dairy</a>
                                        <a href="#">projects</a>
                                        <a href="#">Maintenance engineer</a>
           </div>
      </div>
    </div>
      <div class="col-lg-4">
            <div class="jobs-view f-quick rounded-0 shadow-sm mt-lg-0 mt-5">
                        <ul>
                                <li>
                                    <i class="slimi-icon slimi-salary"></i>
                                        <h6>Offerd Salary</h6>
                                        <span>£50,000+</span>
                                </li>
                                <li>
                                    <i class="slimi-icon slimi-group"></i>
                                        <h6>Career Level</h6>
                                        <span>Manager</span>
                                </li>
                                <li>
                                    <i class="slimi-icon slimi-briefcase"></i>
                                        <h6>Experience</h6>
                                        <span>7 Years</span>
                                </li>
                                <li>
                                    <i class="slimi-icon slimi-user"></i>
                                        <h6>Gender</h6>
                                        <span>Male</span>
                                </li>
                                <li>
                                    <i class="slimi-icon slimi-time"></i>
                                        <h6>Industry</h6>
                                        <span>Banking</span>
                                </li>
                                <li>
                                    <i class="slimi-icon slimi-mortarboard"></i>
                                        <h6>Qualification</h6>
                                        <span>Master’s Degree</span>
                                </li>
                            </ul>
            </div>
            <h4 class="text-dark f-quick f-500 mt-5 mb-3">Company Contact</h4>
         <div class="jobs-view f-quick px-4 border-s shadow-sm rounded-0">
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