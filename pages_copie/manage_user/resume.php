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
    <style>
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
                            <div class="dscr f-quick mt-5">
                                 <h4 class="f-open"><i class="slimi-icon slimi-curriculum"></i>Candidates About</h4>
                                <p> my name is Mark William Connor and I’m a Web Designer & Web Developer from Melbourne, Australia. In pharetra orci dignissim, blandit mi semper, ultricies diam. Suspendisse malesuada suscipit nunc non volutpat. Sed porta nulla id orci laoreet tempor non consequat enim. Sed vitae aliquam velit. Aliquam ante erat, blandit at pretium et, accumsan ac est. Integer vehicula rhoncus molestie. Morbi ornare ipsum sed sem condimentum, et pulvinar tortor luctus. Suspendisse condimentum lorem ut elementum aliquam.
                                </p>
                                <p> Mauris nec erat ut libero vulputate pulvinar. Aliquam ante erat, blandit at pretium et, accumsan ac est. Integer vehicula rhoncus molestie. Morbi ornare ipsum sed sem condimentum, et pulvinar tortor luctus. Suspendisse condimentum lorem ut elementum aliquam. Mauris nec erat ut libero vulputate pulvinar.</p>
                            </div>
                            <div class="dropdown-divider mx-auto w-75 my-5"></div>
                          <div class="edu-ni f-quick">
                               <div class="d-flex justify-content-between carte">
                                   <h4 class="f-open text-left mx-0"><i class="slimi-icon slimi-mortarboard"></i>Education</h4>
                                     <div class="my-auto">
                                       <button class="btn btn-info f-saira btn-block"><i class="fas fa-plus"></i> Add Education</button>
                                       <div class="add-info shadow-sm">
                                            <div class="row my-1">
                                                    <div class="col-lg-12">
                                                                <div class="form-group f-quick">
                                                                            <label class="f-open f-15" for="user">Title</label>
                                                                            <input type="text" id="user" class="form-control custom-in" placeholder="Computer Sience">
                                                                </div>
                                                   </div>
                                            </div>
                                            <div class="row my-1">
                                                   <div class="col-lg-6">
                                                      <div class="form-group f-quick">
                                                                  <label class="f-open f-15" for="user">From Date</label>
                                                                  <input type="text" id="user" class="form-control custom-in" placeholder="10/8/2008">
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                                <div class="form-group f-quick">
                                                                            <label class="f-open f-15" for="user">To Date</label>
                                                                            <input type="text" id="user" class="form-control custom-in" placeholder="11/5/2009">
                                                                </div>
                                                   </div>
                                            </div>
                                            <div class="row my-1">
                                                   <div class="col-lg-12">
                                                      <div class="form-group f-quick">
                                                                  <label class="f-open f-15" for="user">Institute</label>
                                                                  <input type="text" id="user" class="form-control custom-in" placeholder="University">
                                                      </div>
                                                    </div>
                                            </div>
                                            <div class="row my-1">
                                                    <div class="col-lg-12">
                                                        <div class="form-group f-quick">
                                                              <label for="dscrpt" class="f-open f-15">Description</label>
                                                              <textarea class="form-control custom-in" style="padding:20px" id="dscrpt" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-lg-12 text-right">
                                                        <button class="btn btn-indigo f-saira">Save</button>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <div class="edu-history my-4">
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
                                    </div>
                                    <div class="edu-history my-4">
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
                                        </div>
                          </div> 
                          <div class="dropdown-divider mx-auto w-75 my-5"></div>  
                          <div class="edu-ni f-quick">
                                <div class="d-flex justify-content-between carte">
                                        <h4 class="f-open text-left mx-0"><i class="slimi-icon slimi-social-media"></i>Work &amp; Experience</h4>
                                          <div class="my-auto">
                                            <button class="btn btn-info f-saira btn-block"><i class="fas fa-plus"></i> Add Experience</button>
                                            <div class="add-info shadow-sm">
                                                    <div class="row my-1">
                                                            <div class="col-lg-12">
                                                                        <div class="form-group f-quick">
                                                                                    <label class="f-open f-15" for="user">Title</label>
                                                                                    <input type="text" id="user" class="form-control custom-in" placeholder="Computer Sience">
                                                                        </div>
                                                           </div>
                                                    </div>
                                                    <div class="row my-1">
                                                           <div class="col-lg-5">
                                                              <div class="form-group f-quick">
                                                                          <label class="f-open f-15" for="user">From Date</label>
                                                                          <input type="text" id="user" class="form-control custom-in" placeholder="10/8/2008">
                                                              </div>
                                                            </div>
                                                            <div class="col-lg-5">
                                                                        <div class="form-group f-quick">
                                                                                    <label class="f-open f-15" for="user">To Date</label>
                                                                                    <input type="text" id="user" class="form-control custom-in" placeholder="11/5/2009">
                                                                        </div>
                                                           </div>
                                                           <div class="col-lg-2 mt-5">
                                                                <div class="form-group form-check  float-left p-0 mt-1 checkbox pi">
                                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                                    <label class="form-check-label f-500" style="font-size: 14px;" for="exampleCheck1">Present</label>
                                                                </div>
                                                           </div>
                                                    </div>
                                                    <div class="row my-1">
                                                           <div class="col-lg-12">
                                                              <div class="form-group f-quick">
                                                                          <label class="f-open f-15" for="user">Company</label>
                                                                          <input type="text" id="user" class="form-control custom-in" placeholder="University">
                                                              </div>
                                                            </div>
                                                    </div>
                                                    <div class="row my-1">
                                                            <div class="col-lg-12">
                                                                <div class="form-group f-quick">
                                                                      <label for="dscrpt" class="f-open f-15">Description</label>
                                                                      <textarea class="form-control custom-in" style="padding:20px" id="dscrpt" rows="5"></textarea>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="row mt-1">
                                                        <div class="col-lg-12 text-right">
                                                                <button class="btn btn-indigo f-saira">Save</button>
                                                        </div>
                                                    </div>
                                               </div>
                                        </div>
                                     </div>
                                  <div class="edu-history my-4 work py-1">
                                      <i></i>
                                          <div class="edu-info">
                                              <h3>University <i>Computer Science</i></h3>
                                              <i>2008 - 2012</i>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                              <i class="text-right rsm-act">
                                                <i class="slimi-icon slimi-edit"></i>
                                                <i class="slimi-icon slimi-rubbish"></i>
                                            </i>
                                          </div>
                                      </div>
                                      <div class="edu-history my-4 work py-1">
                                          <i></i>
                                              <div class="edu-info">
                                                  <h3>University <i>Computer Science</i></h3>
                                                  <i>2008 - 2012</i>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                                  <i class="text-right rsm-act">
                                                    <i class="slimi-icon slimi-edit"></i>
                                                    <i class="slimi-icon slimi-rubbish"></i>
                                                </i>
                                               </div>
                                          </div>
                            </div> 
                            <div class="dropdown-divider mx-auto w-75 my-5"></div>  
                            <div class="edu-ni f-quick">
                                <div class="d-flex justify-content-between carte">
                                        <h4 class="f-open text-left mx-0"><i class="slimi-icon slimi-briefcase"></i>Portfolio</h4>
                                          <div class="my-auto">
                                            <button class="btn btn-info f-saira btn-block"><i class="fas fa-plus"></i> Add Portfolio</button>
                                            <div class="add-info shadow-sm">
                                                    <div class="row my-5">
                                                           <div class="col-lg-4">
                                                              <div class="form-group f-quick">
                                                                          <label class="custom-file" class="f-open f-15" for="user">
                                                                              <i class="slimi-icon slimi-upload"></i>
                                                                              <span>Upload Image</span>
                                                                          </label>
                                                                          <input type="file" id="user"  placeholder="10/8/2008">
                                                              </div>
                                                            </div>
                                                            <div class="col-lg-8 mt-3">
                                                                        <div class="form-group f-quick">
                                                                                    <label class="f-open f-15" for="user">Title</label>
                                                                                    <input type="text" id="user" class="form-control custom-in" placeholder="11/5/2009">
                                                                        </div>
                                                           </div>
                                                    </div>
                                                    <div class="row mt-1">
                                                        <div class="col-lg-12 text-right">
                                                                <button class="btn btn-indigo f-saira">Save</button>
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
                           <div class="dropdown-divider mx-auto w-75 my-5"></div>
                            <div class="f-cairo pro-skil">
                                <div class="d-flex justify-content-between carte">
                                        <h4 class="f-open text-left mx-0"><i class="slimi-icon slimi-design-skills"></i>Professional Skills</h4>
                                          <div class="my-auto">
                                            <button class="btn btn-info f-saira btn-block"><i class="fas fa-plus"></i> Add Skills</button>
                                            <div class="add-info shadow-sm">
                                                    <div class="row my-3">
                                                            <div class="col-lg-12 mt-3">
                                                                    <div class="form-group f-quick">
                                                                                <label class="f-open f-15" for="user">Skill Title</label>
                                                                                <input type="text" id="user" class="form-control custom-in" placeholder="HTML">
                                                                    </div>
                                                           </div>
                                                            <div class="col-lg-12 mt-3">
                                                                        <div class="form-group f-quick">
                                                                                    <label class="f-open f-15" for="user">Percentage %</label>
                                                                                    <input type="text" id="user" class="form-control custom-in" placeholder="50%">
                                                                        </div>
                                                           </div>
                                                    </div>
                                                    <div class="row mt-1">
                                                        <div class="col-lg-12 text-right">
                                                                <button class="btn btn-indigo f-saira">Save</button>
                                                        </div>
                                                    </div>
                                               </div> 
                                        </div>
                                     </div>
                                <div class="skil">
                                <h5>PHP / MySQL</h5>
                                <div class="progress rounded-pill">
                                    <div class="progress-bar bg-pink rounded-pill" role="progressbar" style="width: 55%" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <i>
                                    <i class="slimi-icon slimi-edit"></i>
                                    <i class="slimi-icon slimi-rubbish"></i>
                                </i>
                                </div>
                                <div class="skil">
                                <h5>Web Development</h5>
                                <div class="progress rounded-pill">
                                    <div class="progress-bar bg-pink rounded-pill" role="progressbar" style="width: 88%" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <i>
                                    <i class="slimi-icon slimi-edit"></i>
                                    <i class="slimi-icon slimi-rubbish"></i>
                                </i>
                                </div>
                                <div class="skil">
                                <h5>Javascript</h5>
                                <div class="progress rounded-pill">
                                    <div class="progress-bar bg-pink rounded-pill" role="progressbar" style="width: 90%" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <i>
                                    <i class="slimi-icon slimi-edit"></i>
                                    <i class="slimi-icon slimi-rubbish"></i>
                                </i>
                                </div>
                            </div> 
                            <div class="dropdown-divider mx-auto w-75 my-5"></div>  
                            <div class="edu-ni f-quick">
                                    <div class="d-flex justify-content-between carte">
                                            <h4 class="f-open text-left mx-0"><i class="slimi-icon slimi-trophy"></i>Honors &amp; Awards</h4>
                                              <div class="my-auto">
                                                <button class="btn btn-info f-saira btn-block"><i class="fas fa-plus"></i> Add Awards</button>
                                                <div class="add-info shadow-sm">
                                                        <div class="row my-1">
                                                                <div class="col-lg-12">
                                                                            <div class="form-group f-quick">
                                                                                        <label class="f-open f-15" for="user">Award Title</label>
                                                                                        <input type="text" id="user" class="form-control custom-in" placeholder="Computer Sience">
                                                                            </div>
                                                               </div>
                                                        </div>
                                                        <div class="row my-1">
                                                               <div class="col-lg-6">
                                                                  <div class="form-group f-quick">
                                                                              <label class="f-open f-15" for="user">From Date</label>
                                                                              <input type="text" id="user" class="form-control custom-in" placeholder="10/8/2008">
                                                                  </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                            <div class="form-group f-quick">
                                                                                        <label class="f-open f-15" for="user">To Date</label>
                                                                                        <input type="text" id="user" class="form-control custom-in" placeholder="11/5/2009">
                                                                            </div>
                                                               </div>
                                                        </div>
                                                        <div class="row my-1">
                                                                <div class="col-lg-12">
                                                                    <div class="form-group f-quick">
                                                                          <label for="dscrpt" class="f-open f-15">Description</label>
                                                                          <textarea class="form-control custom-in" style="padding:20px" id="dscrpt" rows="5"></textarea>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="row mt-1">
                                                            <div class="col-lg-12 text-right">
                                                                    <button class="btn btn-indigo f-saira">Save</button>
                                                            </div>
                                                        </div>
                                                   </div> 
                                            </div>
                                         </div>  
                                    <div class="edu-history my-4 work py-1">
                                          <i></i>
                                              <div class="edu-info">
                                                  <h3>Perfect Attendance Programs</h3>
                                                  <i>2008 - 2012</i>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                              </div>
                                              <span class="rsm-act">
                                                <i class="slimi-icon slimi-edit"></i>
                                                <i class="slimi-icon slimi-rubbish"></i>
                                              </span>
                                          </div>
                                          <div class="edu-history my-4 work py-1">
                                              <i></i>
                                                  <div class="edu-info">
                                                      <h3>Top Performer Recognition</h3>
                                                      <i>2008 - 2012</i>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                                  </div>
                                                  <span class="rsm-act">
                                                    <i class="slimi-icon slimi-edit"></i>
                                                    <i class="slimi-icon slimi-rubbish"></i>
                                                  </span>
                                    </div>
                                    <div class="edu-history my-4 work py-1">
                                            <i></i>
                                                <div class="edu-info">
                                                    <h3>King LLC</h3>
                                                    <i>2008 - 2012</i>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                                </div>
                                                <span class="rsm-act">
                                                    <i class="slimi-icon slimi-edit"></i>
                                                    <i class="slimi-icon slimi-rubbish"></i>
                                                </span>
                                    </div>
                                </div>
                        <div>
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
  </body>
</html>