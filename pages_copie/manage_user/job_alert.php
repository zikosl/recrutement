<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Alert</title>
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
         .text-indigo
  {
  color: #9733ee 
  }
  .text-pink
  {
  color: #da22ff;
  }
  #nav
        {
            position: relative !important;
            background: linear-gradient(to right,#9733ee,#DA22FF) !important;
        }
.alrt .h3 i {
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
    .alrt-jb
    {
        border-left: 3px dashed white;
        user-select: none;
        cursor: pointer;
        padding-left: .8rem
    }
    .alrt-jb:hover
    {
        border-color: #da22ff;
        box-shadow: 0 .125rem .25rem rgba(0,0,0,.07)!important;
    }
    .alrt-jb:hover .us_op
    {
       display: block;
       text-align: center;
    }
    .alrt-jb:hover .dt
    {
        display: none;
    }
    .us_op
    {
        display: none;

    }
    .alrt-jb  h2
    {
       font-size: 17px;
       margin-top: auto;
       margin-bottom: auto;
    }
    .alrt-jb p,.alrt-jb .us_op
    {
        font-size: 13.5px;
        color: #777;
        margin-top: auto;
        margin-bottom: auto;
    }
    .alrt-jb p i,.alrt-jb .us_op button
    {
     font-size: 16px;
     margin-right: 4px;
     color: rgb(255, 61, 135)
    }
    .alrt-jb [class*='col-md-']
    {
        padding-left: .3rem;
        padding-right: .3rem;
        margin-top: auto;
        margin-bottom: auto;
    }
    .head
    {
        background: #efefef;
        padding-top: 9px;
        padding-bottom: 9px;
        font-size: 17px;
    }
    @media (max-width:768px)
    {
        .head
       {
           display: none
       }
       .alrt-jb
       {
          text-align: center;
       }
       .alrt-jb h2
       {
           font-size: 28px;
           margin-top: 8px;
           margin-bottom: 8px;
       }
       .alrt-jb p,.alrt-jb .us_op
       {
           margin-top: 8px;
           margin-bottom: 16px;
       }
       .alrt-jb .col-md-3 p,.alrt-jb .us_op
       {
           margin-bottom: 24px;
       }
    }
    </style>
    <style>
    .us_op button {
  border: none;
  cursor: pointer;
  border-radius: 100%;
background: none;
outline: none !important
}
/* Ripple magic */
.us_op button
{
  position: relative;
}

.us_op button:after {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 50px;
  height: 50px;
  border-radius: 100% !important;
  background: #efefef7a;
  z-index: -1;
  transform:translate(-50%,-50%);
  transition: all .25s;
}
.us_op button:hover::after {
  background: #cdcdcd7a;
}
/*
@keyframes ripple {
  0% {
    transform: scale(0,0);
    opacity: 1;
    border-radius: 100%;
  }
  20% {
    transform: scale(5,5);
    opacity: 1;
    border-radius: 100%;
  }
  100% {
    opacity: 0;
    transform: scale(10,10);
    border-radius: 100%;
  }
}

.us_op button:focus:not(:active)::after {
  animation: ripple 1s ease-out;
}*/
    </style>
</head>
<script>
    $(document).ready(function(){
      $('#info').children('.card').eq(1).children().children().removeClass("active");
      $('#info').children('.card').eq(5).children().children().addClass("active");
    })
</script>
  <body>
      <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/nav.php";?>
    <div class="container-fuild mx-lg-5">
        <div class='row mx-auto'>
           <div class="col-lg-4 menus pl-lg-4 pr-lg-5">
               <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/left_user_bar.php";?>
            </div>
            <div class="col-lg-8 alrt mt-5">
                <div class="row mx-auto">
                        <div class="col-lg-7 pl-3 my-auto">
                            <div class="h3 f-quick f-500 text-indigo"><i class="slimi-icon slimi-alarm"></i>Job Alert</div>
                        </div>
                        <div class="col-lg-5 px-lg-0 px-5">
                            <div class="form-group f-quick my-auto">
                                        <div class="custom-in">
                                                <input type="text" placeholder="Search">
                                                <i class="slimi-icon slimi-search"></i>
                                        </div>
                            </div>
                        </div>
                    </div>
                <div class="dropdown-divider my-5"></div>
                <div class="row f-500 f-saira head">
                 <div class="col-3">Position</div>
                 <div class="col-6">Criterias</div>
                 <div class="col-3">Created Date</div>
                </div>
                <div class="row alrt-jb f-robot f-300 my-4 py-4">
                  <div class="col-md-3 f-quick f-500">
                      <h2>Finance Accountant</h2>
                  </div>
                  <div class="col-md-6">
                     <p> Accounting Assistant, Senior, San Francisco....(10)</p>
                    </div>
                  <div class="col-md-3">
                      <p class='dt'><i class="slimi-icon slimi-time"></i>September 28, 2017</p>
                      <div class="us_op">
                            <button class='fas fa-trash'></button>
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