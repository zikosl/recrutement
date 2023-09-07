<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recherche</title>
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
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
    <link rel="stylesheet" href="../css/checkbox.css">
    <link rel="stylesheet" href="../css/radio.css">
    <link rel="stylesheet" href="../css/view_style.css">
    <link rel="shortcut icon" href="/recrutment/icon.png">
    <style>
      .recherch-bar
      {
        width: 75%;
        margin: auto;
        margin-top: -70px;
      }
     .recherch-bar input
     {
      border: 2px solid #f2f2f2 !important;
      box-shadow: none !important;
      font-family: 'Quicksand', sans-serif;
      font-weight: 500;
     } 
     .recherch-bar button
     {
       background: #fff !important;
       background-image: none !important;
       border:  2px solid #f2f2f2 !important
     }
     .recherch-bar button i
     {
       color: #9733ee
       
     }
    .recherch-bar>.display-4
    {
      display: none;
    }
    .recherch-bar>h5
    {
      display: none
    }
    .bg-white-costum
    {
      background: white;
      border-radius: 0 !important;
      box-shadow:2px 2px 0.25rem 0.125rem rgba(0, 0, 0,.1);
    }
    .container>.row>.col-lg-4
    {
      padding-top: 57px !important
    }
    .container>.row>.col-lg-8
    {
      padding-top: 25px !important
    }
    .linear
    {
       color: white;
    }
    .linear::after,.linear::before
    {
      background: white
    }
#answers {
    position: absolute;
    top: 60px;
    background: #ffffffee;
    z-index: 22;
    height: 150px;
    overflow-y: auto;
    border-radius: 8px;
    padding: 20px;
    text-align: center;
    width: 100%;
    display: none;
}
#answers>p
{
  padding: 13px 3px;
  margin: 0 auto;
  transition: all .4s;
  color: #888;
  cursor: pointer;
  font-size: 15px;
  letter-spacing:.7px;
}
#answers>hr
{
  transition: all .4s;
}
#answers>p:hover
{
  color: #f55;
  box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)
}
#answers p.active~#answers hr
{
  border-top-color: #ff5555cc;
}
#answers::-webkit-scrollbar {
  width: 8px;
}

#answers::-webkit-scrollbar-button {
  display: none;
}
#answers::-webkit-scrollbar-thumb {
  background: #c99df0;
  border-radius: 8px;
}
#answers::-webkit-scrollbar-track-piece {
  background: 0 0;
}
    </style>
</head>
<body  style="overflow-x:hidden">
<?php 
        $cbr="Recrut Lorsim";
        $x=false; ?>
        <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/nav.php";?>
        <div class="jumbotron jumbotron-fluid m-0 bg-dark" style="height:270px">
            <div class="display-4 text-white text-center f-quick f-500">Find Job</div>
            <div class="linear"><i class="slimi-icon slimi-star"></i></div>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/recherche.php";?>
<div class="container">
      <div class="row mx-auto no-gutters mt-0">
          <aside class="col-lg-4 column border-right">
              <div class="widget">
                <div class="search_widget_job">
                  <div class="field_w_search">
                    <input type="text" id="show" placeholder="Search Keywords">
                    <i class="la la-search"></i>
                  </div><!-- Search Widget -->
                  <div id="answers" class="shadow-sm f-robot f-300">
                   
                  </div>
                  <div class="field_w_search">
                    <input type="text" placeholder="All Locations">
                    <i class="la la-map-marker"></i>
                  </div><!-- Search Widget -->
                </div>
              </div>
              <script>
              $("#show").on("keyup",function(){
                $("#answers").css('display','block');
                   var x=$(this).val();
                $.ajax({
                  url:'php_verif/find.php?q='+x,
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
              $('body').not('.search_widget_job').not("#answers").on('click',function()
              {
                $("#answers").css('display','none');
              })
              }) 
              </script>
              <div class="widget">
                <h3 class="sb-title open">Date Posted</h3>
                <div class="posted_widget radio" style="">
                 <input type="radio" name="choose" id="232"><label for="232">Last Hour</label></p> 
                 <input type="radio" name="choose" id="wwqe"><label for="wwqe">Last 24 hours</label><br>
                 <input type="radio" name="choose" id="erewr"><label for="erewr">Last 7 days</label><br>
                 <input type="radio" name="choose" id="qwe"><label for="qwe">Last 14 days</label><br>
                 <input type="radio" name="choose" id="wqe"><label for="wqe">Last 30 days</label><br>
                 <input type="radio" name="choose" id="qweqw"><label class="nm" for="qweqw">All</label><br>
                </div>
              </div>
              <div class="widget">
                <h3 class="sb-title open">Job Type</h3>
                <div class="type_widget" style="">
                 <p class="rose checkbox"><input type="checkbox" name="choosetype" id="33r"><label for="33r">Freelance (9)</label></p>
                 <p class="indigo checkbox"><input type="checkbox" name="choosetype" id="dsf"><label for="dsf">Full Time (8)</label></p>
                 <p class="pink checkbox"><input type="checkbox" name="choosetype" id="sdd"><label for="sdd">Internship (8)</label></p>
                 <p class="vert checkbox"><input type="checkbox" name="choosetype" id="sadd"><label for="sadd">Part Time (5)</label></p>
                 <p class="green checkbox"><input type="checkbox" name="choosetype" id="assa"><label for="assa">Temporary (5)</label></p>
                 <p class="blue checkbox"><input type="checkbox" name="choosetype" id="ghgf"><label for="ghgf">Volunteer (8)</label></p>
                </div>
              </div>
              <div class="widget">
                <h3 class="sb-title open">Specialism</h3>
                <div class="specialism_widget" style="">
                 <div class="field_w_search">
                    <input type="text" placeholder="Search Spaecialisms">
                  </div><!-- Search Widget -->
                  <div class="simple-checkbox scrollbar ss-container">
                    <div class="ss-wrapper">
                      <div class="ss-content">
                   <p class="checkbox"><input type="checkbox" name="spealism" id="as"><label for="as">Accountancy (2)</label></p>
                   <p class="checkbox"><input type="checkbox" name="spealism" id="asd"><label for="asd">Banking (2)</label></p>
                   <p class="checkbox"><input type="checkbox" name="spealism" id="errwe"><label for="errwe">Charity &amp; Voluntary (3)</label></p>
                   <p class="checkbox"><input type="checkbox" name="spealism" id="fdg"><label for="fdg">Digital &amp; Creative (4)</label></p>
                   <p class="checkbox"><input type="checkbox" name="spealism" id="sc"><label for="sc">Estate Agency (3)</label></p>
                   <p class="checkbox"><input type="checkbox" name="spealism" id="aw"><label for="aw">Graduate (2)</label></p>
                   <p class="checkbox"><input type="checkbox" name="spealism" id="ui"><label for="ui">IT Contractor (7)</label></p>
                   <p class="checkbox"><input type="checkbox" name="spealism" id="saas"><label for="saas">Charity &amp; Voluntary (3)</label></p>
                   <p class="checkbox"><input type="checkbox" name="spealism" id="rrrt"><label for="rrrt">Digital &amp; Creative (4)</label></p>
                   <p class="checkbox"><input type="checkbox" name="spealism" id="eweew"><label for="eweew">Estate Agency (3)</label></p>
                   <p class="checkbox"><input type="checkbox" name="spealism" id="bnbn"><label for="bnbn">Graduate (2)</label></p>
                   <p class="checkbox"><input type="checkbox" name="spealism" id="ffd"><label for="ffd">IT Contractor (7)</label></p>
                  </div>
                </div>
                <div class="ss-scroll" style="height: 0%; top: 0%; right: -354px;"></div></div>
                </div>
              </div>
              <div class="widget">
                <h3 class="sb-title closed">Offerd Salary</h3>
                <div class="specialism_widget">
                  <div class="simple-checkbox">
                   <p class="checkbox gray"><input type="checkbox" name="smplechk" id="1"><label for="1">10k - 20k</label></p>
                   <p class="checkbox gray"><input type="checkbox" name="smplechk" id="2"><label for="2">20k - 30k</label></p>
                   <p class="checkbox gray"><input type="checkbox" name="smplechk" id="3"><label for="3">30k - 40k</label></p>
                   <p class="checkbox gray"><input type="checkbox" name="smplechk" id="4"><label for="4">40k - 50k</label></p>
                  </div>
                </div>
              </div>
              <div class="widget">
                <h3 class="sb-title closed">Career Level</h3>
                <div class="specialism_widget">
                  <div class="simple-checkbox">
                   <p class="checkbox gray"><input type="checkbox" name="smplechk" id="5"><label for="5">Intermediate</label></p>
                   <p class="checkbox gray"><input type="checkbox" name="smplechk" id="6"><label for="6">Normal</label></p>
                   <p class="checkbox gray"><input type="checkbox" name="smplechk" id="7"><label for="7">Special</label></p>
                   <p class="checkbox gray"><input type="checkbox" name="smplechk" id="8"><label for="8">Experienced</label></p>
                  </div>
                </div>
              </div>
              <div class="widget">
                <h3 class="sb-title closed">Experince</h3>
                <div class="specialism_widget">
                  <div class="simple-checkbox">
                   <p class="checkbox gray"><input type="checkbox" name="smplechk" id="9"><label for="9">1Year to 2Year</label></p>
                   <p class="checkbox gray"><input type="checkbox" name="smplechk" id="10"><label for="10">2Year to 3Year</label></p>
                   <p class="checkbox gray"><input type="checkbox" name="smplechk" id="11"><label for="11">3Year to 4Year</label></p>
                   <p class="checkbox gray"><input type="checkbox" name="smplechk" id="12"><label for="12">4Year to 5Year</label></p>
                  </div>
                </div>
              </div>
              <div class="widget">
                <h3 class="sb-title closed">Gender</h3>
                <div class="specialism_widget">
                  <div class="simple-checkbox">
                   <p class="checkbox gray"><input type="checkbox" name="smplechk" id="13"><label for="13">Male</label></p>
                   <p class="checkbox gray"><input type="checkbox" name="smplechk" id="14"><label for="14">Female</label></p>
                   <p class="checkbox gray"><input type="checkbox" name="smplechk" id="15"><label for="15">Others</label></p>
                  </div>
                </div>
              </div>
              <div class="widget">
                <h3 class="sb-title closed">Industry</h3>
                <div class="specialism_widget">
                  <div class="simple-checkbox">
                   <p class="checkbox gray"><input type="checkbox" name="smplechk" id="16"><label for="16">Meezan Job</label></p>
                   <p class="checkbox gray"><input type="checkbox" name="smplechk" id="17"><label for="17">Speicalize Jobs</label></p>
                   <p class="checkbox gray"><input type="checkbox" name="smplechk" id="18"><label for="18">Business Jobs</label></p>
                  </div>
                </div>
              </div>
              <div class="widget">
                <h3 class="sb-title closed">Qualification</h3>
                <div class="specialism_widget">
                  <div class="simple-checkbox">
                   <p class="checkbox gray"><input type="checkbox" name="smplechk" id="19"><label for="19">Matriculation</label></p>
                   <p class="checkbox gray"><input type="checkbox" name="smplechk" id="20"><label for="20">Intermidiate</label></p>
                   <p class="checkbox gray"><input type="checkbox" name="smplechk" id="21"><label for="21">Gradute</label></p>
                  </div>
                </div>
              </div>
              <div class="widget">
                <div class="subscribe_widget">
                  <h3>Still Need Help ?</h3>
                 <p>Let us now about your issue and a Professional will reach you out.</p>
                 <form>
                   <input placeholder="Enter Valid Email Address" type="text">
                   <button type="submit"><i class="la la-paper-plane"></i></button>
                 </form>
               </div>
              </div>
            </aside>

            <div class="col-lg-8 text-center">
              <div style="padding-left: 30px;">
               <div class="tags-job d-flex justify-content-between">
                        <ul class=" tag-list">
                          <li class="addedTag">
                             PhotoShop
                             <span class="tagRemove" onclick="$(this).parent().remove();">
                              x
                          </span>
                          <input type="hidden" value="photoh" name="tags[]">
                        </li>
                      </ul>
                      <div class="s-c-tag f-quick">
                        <a href=""><i class="la la-cloud-download"></i>save</a>
                        <a href=""><i class="la la-trash-o"></i>clear</a>
                      </div>
               </div>
                <div class="justify-content-between d-flex sorted">
                  <span class="btn-email f-open"><a href=""><i class="slimi-icon slimi-envelope"></i>Email Me job Like This</a></span>
                  <i>Sort By</i>
                 <div class="sorte d-flex justify-content-between  f-open">
                  <div class="dropdown">
                        <button class="btn btn-lg dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Row Number
                          <i class="la la-angle-down"></i>
                        </button>
                        <div class="dropdown-menu border border-top-0 animate fadeIn" aria-labelledby="dropdownMenu2" style="margin-top: 0;border-top-right-radius: 0;border-top-left-radius: 0;">
                          <button class="dropdown-item" type="button">Action</button>
                          <button class="dropdown-item" type="button">Another</button>
                          <button class="dropdown-item" type="button">Somethi</button>
                        </div>
                      </div>
                      <div class="dropdown">
                        <button class="btn btn-lg dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Most Resent
                          <i class="la la-angle-down"></i>
                        </button>
                        <div class="dropdown-menu border border-top-0" aria-labelledby="dropdownMenu2" style="margin-top: 0;border-top-right-radius: 0;border-top-left-radius: 0;">
                          <button class="dropdown-item" type="button">Action</button>
                          <button class="dropdown-item" type="button">Another</button>
                          <button class="dropdown-item" type="button">Somethi</button>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
                    <div class="cards f-open">
                             <div class="jobs-logo text-left">
                              <div class="logo">
                                  <img src="../images/l1.png" alt="">
                                </div>
                                  <h3><a href="#" class="card-url">Social Media and Public Relation Executive </a></h3>
                                  <span>MediaLab</span>
                                  <div class="jobs-place"><i class="la la-map-marker"></i>Sacramento, California</div>
                               </div>
                                <div class="jobs-info">
                                   <span class="job-full">Full Time</span>
                                   <span class="love-job">
                                      <i class="la la-heart-o"></i>
                                   </span>
                                   <i>5 months ago</i>
                                  </div>
                             </div>
                             <div class="cards f-open">
                                <div class="jobs-logo text-left">
                                 <div class="logo">
                                     <img src="../images/l2.png" alt="">
                                   </div>
                                     <h3><a href="#" class="card-url">C Developer (Senior) C .Net</a></h3>
                                     <span>MediaLab</span>
                                     <div class="jobs-place"><i class="la la-map-marker"></i>Sacramento, California</div>
                                  </div>
                                   <div class="jobs-info">
                                      <span class="job-tem">Temporary</span>
                                      <span class="love-job">
                                         <i class="la la-heart-o"></i>
                                      </span>
                                      <i>5 months ago</i>
                                     </div>
                                </div>                
              </div>
            </div>
      </div>       
</div>   
<?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/footer.html";?>
            <script>
            $('.sb-title').on('click',function(){
                $(this).toggleClass('closed');
            })
            </script>
            <script>
            $(document).ready(function() {
            var r=$(".ss-content")[0].scrollHeight;
            r=232/4/r;
            $('.ss-scroll').css('height',r*100+'%')
            })
              $(document).ready(function() {
             var $dragging = null;
             
             $(document.body).on("mousemove", function(e) {
              if (document.selection) {
                 document.selection.empty()
                } else { 
                  window.getSelection().removeAllRanges()
                   }
                 var r=$(".ss-content")[0].scrollHeight;
                if ($dragging) {
                var $y=$('.ss-scroll')
                 if ($y.length) {
                  $y = $y.offset().top;
                 }
                 var $x=$('.ss-content').scrollTop()
                 var $y=$('.ss-content')
                 if ($y.length) {
                  $y = $y.offset().top;
                 }
                if ((e.pageY>=$y)&&(e.pageY<=$y+232-$('.ss-scroll').outerHeight()))
                {
                  $dragging.offset({
                      top: e.pageY,
                       right: e.pageX
                   });

                $('.ss-content').scrollTop(e.pageY-$y);
                }
                   
                    }
                  });


    $(document.body).on("mousedown", ".ss-scroll", function (e) {
        $dragging = $(e.target);
    });

    $(document.body).on("mouseup", function (e) {
        $dragging = null;
    });
});

            </script>
<script>
    if ($(window).width()<570)
    {
     $(".la-heart-o").css({'position':'absolute','top':'-171px','right':'-9px'})
    }
   $(".la-heart-o").on('click',function(){
     $(this).toggleClass('active');
   })
   $('.btn-email').on('click',function(){
     $(this).toggleClass('active');
   })
   $('.dropdown-item').on('click',function(){
    var x=$(this).parent().prev().html();
    x=x.slice(x.indexOf("<i"));
    $(this).parent().prev().html($(this).text()+x);
   })
</script>
<script>
$('.sb-title.open').next().slideDown();
$('.sb-title.closed').next().slideUp();
    $('.sb-title').on('click', function(){
        $(this).next().slideToggle();
        $(this).toggleClass('active');
        $(this).toggleClass('closed');
    });
</script>
<script>
$("#skill").on('keypress',function(e) {
         if(e.which == 13) {
                       x='<li class="addedTag">'+
                                               $(this).val()+
                                               '<span class="tagRemove" onclick="$(this).parent().remove();">'
                                                +'x'
                                            +'</span>'
                                            +'<input type="hidden" value="photoh" name="tags[]">'
                                          +'</li>';
                                          $(this).val('');
             $(x).insertBefore($(this).parent());
            }
       });
</script>

</body>
</html>