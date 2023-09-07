<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Job</title>
    <link rel="stylesheet" href="/recrutment/css/animate.css">
    <link rel="stylesheet" href="/recrutment/css/bootstrap.min.css">
    <link rel="stylesheet" href="/recrutment/css/fonts.css">
    <link rel="stylesheet" href="/recrutment/sl_fonts/sl_font.css">
    <link rel="stylesheet" href="/recrutment/fontawesome/css/all.css">
    <link rel="stylesheet" href="/recrutment/line-awesome/css/line-awesome.css">
    <script type="text/javascript" src="/recrutment/js/jquery.min.js"></script>
    <script type="text/javascript" src="/recrutment/js/popper.min.js"></script>
    <script type="text/javascript" src="/recrutment/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/recrutment/css/header.css">
    <link rel="stylesheet" href="/recrutment/css/footer.css">
    <link rel="stylesheet" href="/recrutment/css/left_user_bar.css">
    <link rel="shortcut icon" href="/recrutment/icon.png">
    <style>
     .comp-info .h2 i {
    display: inline-block;
    width: 53px;
    height: 53px;
    text-align: center;
    background-color: #f0f0f0;
    border: 1px solid #dedede;
    box-shadow: 0px 0px 0px 3px #ffffff inset;
    border-radius: 100%;
    color: #9733ee;
    padding-top: 8px;
    margin-right: 11px;
    }
    @media (min-width:992px)
    {
    .container
    {
         max-width: 1220px
    }
    }
    .bg-indigo
    {
        background:#9733ee99
    }
    .custom-in
    {
      border:2px solid #88888855;
      padding: 15px;
      height: 3.5rem;
      margin:.5rem auto;
      font-weight: 500;
      border-radius: 7px;
      transition: all .5s;
      font-size: 15px !important
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
  font-weight: 500
}
.custom-in i
{
    transition: all .5s;
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
.rotate
{
transform: rotate(180deg)
}
.text-indigo
  {
  color: #9733ee 
  }
  .text-pink
  {
  color: #da22ff;
  }
  .f-15
  {
      font-size: 15px
  }
  .tag-list
  {
    display: inline-block;list-style-type: none;
  }
  .tag-in
  {
      background: transparent;
      border: none;
      border-left: 1px ridge #aaa;
      box-shadow: none !important;
      outline: none !important;
      padding-left: 17px
  }
  .tag-list> .addedTag{
  float: left;
    background: #f4f5fa;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    -ms-border-radius: 8px;
    -o-border-radius: 8px;
    border-radius: 8px;
    font-size: 13px;
    padding: 7px 17px;
    margin-right: 10px;
    margin-top: -4px;
    position: relative;
}
.tag-list > .addedTag > span {
    position: absolute;
    right: -6px;
    top: -5px;
    width: 16px;
    height: 16px;
    font-style: normal;
    background: #fb236a;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    color: #ffffff;
    text-align: center;
    line-height: 13px;
    font-size: 10px;
    cursor: pointer;
}
.btn-outline-rose
{
  color: #202020;
  border: 2px solid #fb23a1;
  font-size: 15px;
  padding: 11px 40px;
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
.steps-sec {
    float: left;
    width: 100%;
    padding: 0 90px;
    text-align: center;
}
.step {
    display: inline-block;
    width: 33.334%;
    float: left;
    position: relative;
    margin-top: 50px;
    margin-bottom: 50px;
}
.step > p {
    position: relative;
    z-index: 1;
    background: #ffffff;
    float: none;
    display: inline-block;
    border: 8px solid #ffffff;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    margin: 0;
}
.step.active i {
    background: #9436ff;
    border-color: #9436ff;
    color: #ffffff;
}
.step i {
    float: none;
    display: inline-block;
    width: 70px;
    height: 70px;
    border: 2px solid #e8ecec;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    text-align: center;
    line-height: 66px;
    font-size: 32px;
    color: #888888;
}
.step.active span {
    color: #9436ff;
}
.step span {
    float: left;
    width: 100%;
    font-size: 16px;
    color: #888888;
    margin-top: 9px;
}
.step::before {
    position: absolute;
    left: 100%;
    top: 45px;
    width: 100%;
    height: 2px;
    background: #e8ecec;
    content: "";
    margin-left: -50%;
}
.step:last-child::before
{
display: none;
}

.h2 i {
    display: inline-block;
    width: 53px;
    height: 53px;
    text-align: center;
    background-color: #f0f0f0;
    border: 1px solid #dedede;
    box-shadow: 0px 0px 0px 3px #ffffff inset;
    border-radius: 100%;
    color: #9733ee;
    padding-top: 9px;
    padding-left: 8px;
    margin-right: 11px;
}
    </style>
</head>
<script>
    $(document).ready(function(){
      $('#info').children('.card').eq(1).children().children().removeClass("active");
      $('#info').children('.card').eq(6).children().children().addClass("active");
    })
</script>
<body style="margin:auto;overflow-x:hidden">
<?php 
$cbr="Recrut Lorsim";
$x=true; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/header.php";?>
<div class="container-fuild mx-lg-5">
    <div class='row'>
        <div class="col-lg-4 menus pr-lg-5 pl-lg-4">
        <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/left_company_bar.php";?>
        </div>
        <div class="col-lg-8 pl-lg-4 mt-5">
          <div class="h2 f-robot text-indigo"><i class="slimi-icon slimi-tool4"></i>Post Job</div>
          <div class="dropdown-divider mt-4"></div>
            <div class="row">
                        <div class="col-lg-12">
                                <div class="steps-sec f-quick f-500">
                                        <div class="step active">
                                            <p><i class="slimi-icon slimi-briefcase-1"></i></p>
                                            <span>Information</span>
                                        </div>
                                        <div class="step">
                                            <p><i class="slimi-icon slimi-credit-card"></i></p>
                                            <span>Package &amp; Payments</span>
                                        </div>
                                        <div class="step">
                                            <p><i class="la  la-check-circle"></i></p>
                                            <span>Done</span>
                                        </div>
                                    </div>
                        </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-12">
                            <div class="form-group f-quick">
                                        <label class="f-raleway f-15" for="user">Job Title</label>
                                        <input type="text" id="user" class="form-control custom-in" placeholder="Job Title">
                            </div>
               </div>
            </div>
            <div class="row my-5">
              <div class="col-lg-12">
                  <div class="form-group f-quick">
                        <label for="dscrpt" class="f-raleway f-15">Description</label>
                        <textarea class="form-control custom-in" style="padding:30px" id="dscrpt" rows="7"></textarea>
                  </div>
              </div>
            </div>
            <div class="row my-5">
                    <div class="col-lg-6">
                            <div class="form-group f-quick">
                                <label class="f-raleway f-15" for="user">User Name</label>
                                <input type="text" id="user" class="form-control custom-in">
                            </div>
                       </div>
                       <div class="col-lg-6">
                               <div class="form-group f-quick">
                                   <label class="f-raleway f-15" for="email">Email</label>
                                   <input type="text" id="email" class="form-control custom-in">
                               </div>
                       </div>
            </div>
            <div class="row my-5">
                    <div class="col-lg-6">
                            <div class="form-group f-quick">
                                <label class="f-raleway f-15" for="j-type">Job Type</label>
                                <div id="j-type" class="form-group" >
                                        <div class="form-control custom-in d-flex justify-content-between" id="drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         Job Type
                                         <i class="la la-angle-down text-pink"></i>
                                        </div>
                                        <div class="dropdown-menu border db animated fadeIn"  aria-labelledby="drop">
                                         <button class="dropdown-item" type="button">Job 1</button>
                                         <button class="dropdown-item" type="button">Job 2</button>
                                         <button class="dropdown-item" type="button">Job 3</button>
                                         </div>
                                </div>
                            </div>
                       </div>
                       <div class="col-lg-6">
                            <div class="form-group f-quick">
                                <label class="f-raleway f-15" for="j-type">Categories</label>
                                <div id="j-type" class="form-group" >
                                        <div class="form-control custom-in d-flex justify-content-between" id="cate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Categories
                                         <i class="la la-angle-down text-pink"></i>
                                        </div>
                                        <div class="dropdown-menu border db animated fadeIn"  aria-labelledby="cate">
                                         <button class="dropdown-item" type="button">Job 1</button>
                                         <button class="dropdown-item" type="button">Job 2</button>
                                         <button class="dropdown-item" type="button">Job 3</button>
                                         </div>
                                </div>
                            </div>
                       </div>
            </div>
            <div class="row my-5">
                    <div class="col-lg-6">
                            <div class="form-group f-quick">
                                <label class="f-raleway f-15" for="j-type">Offerd Salary</label>
                                <div id="j-type" class="form-group" >
                                        <div class="form-control custom-in d-flex justify-content-between" id="sale" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Offerd Salary
                                         <i class="la la-angle-down text-pink"></i>
                                        </div>
                                        <div class="dropdown-menu border db animated fadeIn"  aria-labelledby="sale">
                                         <button class="dropdown-item" type="button">Job 1</button>
                                         <button class="dropdown-item" type="button">Job 2</button>
                                         <button class="dropdown-item" type="button">Job 3</button>
                                         </div>
                                </div>
                            </div>
                       </div>
                       <div class="col-lg-6">
                            <div class="form-group f-quick">
                                <label class="f-raleway f-15" for="j-type">Career Level</label>
                                <div id="j-type" class="form-group" >
                                        <div class="form-control custom-in d-flex justify-content-between" id="level" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Career Level
                                         <i class="la la-angle-down text-pink"></i>
                                        </div>
                                        <div class="dropdown-menu border db animated fadeIn"  aria-labelledby="level">
                                         <button class="dropdown-item" type="button">Job 1</button>
                                         <button class="dropdown-item" type="button">Job 2</button>
                                         <button class="dropdown-item" type="button">Job 3</button>
                                         </div>
                                </div>
                            </div>
                       </div>
            </div>
            <div class="row my-5">
                    <div class="col-lg-6">
                            <div class="form-group f-quick">
                                <label class="f-raleway f-15" for="j-type">Experience</label>
                                <div id="j-type" class="form-group" >
                                        <div class="form-control custom-in d-flex justify-content-between" id="expr" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Experience
                                         <i class="la la-angle-down text-pink"></i>
                                        </div>
                                        <div class="dropdown-menu border db animated fadeIn"  aria-labelledby="expr">
                                         <button class="dropdown-item" type="button">Job 1</button>
                                         <button class="dropdown-item" type="button">Job 2</button>
                                         <button class="dropdown-item" type="button">Job 3</button>
                                         </div>
                                </div>
                            </div>
                       </div>
                       <div class="col-lg-6">
                            <div class="form-group f-quick">
                                <label class="f-raleway f-15" for="j-type">Gender</label>
                                <div id="j-type" class="form-group" >
                                        <div class="form-control custom-in d-flex justify-content-between" id="gndr" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Gender
                                         <i class="la la-angle-down text-pink"></i>
                                        </div>
                                        <div class="dropdown-menu border db animated fadeIn"  aria-labelledby="gndr">
                                         <button class="dropdown-item" type="button">Job 1</button>
                                         <button class="dropdown-item" type="button">Job 2</button>
                                         <button class="dropdown-item" type="button">Job 3</button>
                                         </div>
                                </div>
                            </div>
                       </div>
            </div>
            <div class="row my-5">
                    <div class="col-lg-6">
                            <div class="form-group f-quick">
                                <label class="f-raleway f-15" for="j-type">Industry</label>
                                <div id="j-type" class="form-group" >
                                        <div class="form-control custom-in d-flex justify-content-between" id="ind" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Industry
                                         <i class="la la-angle-down text-pink"></i>
                                        </div>
                                        <div class="dropdown-menu border db animated fadeIn"  aria-labelledby="ind">
                                         <button class="dropdown-item" type="button">Job 1</button>
                                         <button class="dropdown-item" type="button">Job 2</button>
                                         <button class="dropdown-item" type="button">Job 3</button>
                                         </div>
                                </div>
                            </div>
                       </div>
                       <div class="col-lg-6">
                            <div class="form-group f-quick">
                                <label class="f-raleway f-15" for="j-type">Qualification</label>
                                <div id="j-type" class="form-group" >
                                        <div class="form-control custom-in d-flex justify-content-between" id="qlf" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Qualification
                                         <i class="la la-angle-down text-pink"></i>
                                        </div>
                                        <div class="dropdown-menu border db animated fadeIn"  aria-labelledby="qlf">
                                         <button class="dropdown-item" type="button">Job 1</button>
                                         <button class="dropdown-item" type="button">Job 2</button>
                                         <button class="dropdown-item" type="button">Job 3</button>
                                         </div>
                                </div>
                            </div>
                       </div>
            </div>
              <div class="row my-5">
                     <div class="col-lg-12">
                              <div class="form-group f-quick">
                                        <label class="f-raleway f-15" for="skill">Skill Requirments</label>
                                          <ul class="form-control  custom-in tag-list">
                                            <li class="addedTag">
                                               PhotoShop
                                               <span class="tagRemove" onclick="$(this).parent().remove();">
                                                x
                                            </span>
                                            <input type="hidden" value="photoh" name="tags[]">
                                          </li>
                                          <li><input type="text" id="skill" class="tag-in"></li>
                                        </ul>
                            </div>
                       </div>
             </div>
             <div class="row my-5">
                    <div class="col-lg-6">
                            <div class="form-group f-quick">
                                <label class="f-raleway f-15" for="cntry">Country</label>
                                <div id="cntry" class="form-group" >
                                        <div class="form-control custom-in d-flex justify-content-between" id="cntry" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Country
                                         <i class="la la-angle-down text-pink"></i>
                                        </div>
                                        <div class="dropdown-menu border db animated fadeIn"  aria-labelledby="cntry">
                                         <button class="dropdown-item" type="button">Job 1</button>
                                         <button class="dropdown-item" type="button">Job 2</button>
                                         <button class="dropdown-item" type="button">Job 3</button>
                                         </div>
                                </div>
                            </div>
                       </div>
                       <div class="col-lg-6">
                            <div class="form-group f-quick">
                                <label class="f-raleway f-15" for="city">City</label>
                                <div id="city" class="form-group" >
                                        <div class="form-control custom-in d-flex justify-content-between" id="city" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                City
                                         <i class="la la-angle-down text-pink"></i>
                                        </div>
                                        <div class="dropdown-menu border db animated fadeIn"  aria-labelledby="city">
                                         <button class="dropdown-item" type="button">Job 1</button>
                                         <button class="dropdown-item" type="button">Job 2</button>
                                         <button class="dropdown-item" type="button">Job 3</button>
                                         </div>
                                </div>
                            </div>
                       </div>
            </div>
            <div class="row my-5">
                    <div class="col-lg-12">
                        <div class="form-group f-quick">
                              <label for="adrs" class="f-raleway f-15">Complete Address</label>
                              <textarea class="form-control custom-in" style="padding:30px" id="adrs" rows="3"></textarea>
                        </div>
                    </div>
            </div>
            <div class="row my-5">
                    <div class="col-lg-6">
                            <div class="form-group f-quick">
                                <label class="f-raleway f-15" for="find">Find On Map</label>
                                <input type="text" id="find" class="form-control custom-in">
                            </div>
                       </div>
                       <div class="col-lg-3">
                               <div class="form-group f-quick">
                                   <label class="f-raleway f-15" for="lati">Latitude</label>
                                   <input type="text" id="lati" class="form-control custom-in">
                               </div>
                       </div>
                       <div class="col-lg-3">
                            <div class="form-group f-quick">
                                <label class="f-raleway f-15" for="long">Longitude</label>
                                <input type="text" id="long" class="form-control custom-in">
                            </div>
                       </div>
            </div>
            <div class="row my-5">
                    <div class="col-lg-12">
                        <div class="form-group f-quick">
                              <label for="logo" class="f-raleway f-15">Upload logo <span style="color: #fb23a1">(Optionel)</span></label>
                              <div class="form-control custom-in p-0 position-relative">
                                <input type="file" id="logo" class="custom-file-input h-100 w-100" data-browse="Bestand kiezen">
                                <div class="h-100 position-absolute bg-indigo" style="height: 100%;width: 150px;top: 0;right: 0;border-radius: 0px 6px 6px 0px">
                                <h6 class="text-center f-cairo text-white" style="padding:12px;font-size: 24px">Browser</h6>
                                </div>
                              </div>
                        </div>
                    </div>
            </div>
            <div class="row my-5 float-right">
               <button class="btn  f-open btn-outline-rose float-right">Next</button>
            </div>
      </div>
    </div>
</div>
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
        $(document).ready(function(){
           $("#drop").on('click',function(){
               $(this).children('i').toggleClass('rotate');
           })
          $('.db').children('.dropdown-item').on('click',function(){
          var x=$(this).parent().prev().html();
          x=x.slice(x.indexOf("<i"));
          $(this).parent().prev().html($(this).text()+x);
          $('.db').children('.dropdown-item').removeClass("hightlight");
          $(this).addClass("hightlight");
        })
        })
        
        </script>
<?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/footer.html";?>
<script>
    $(document).ready(function(){
                 $(".tag-list").not(".addedTag").on('click',function(){
                      $("#skill").trigger('focus')   
                  })
                })
</script>
<script src="/recrutment/js/left_user_bar.js"></script>
</body>
</html>