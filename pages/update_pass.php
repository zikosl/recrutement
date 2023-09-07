<?php require_once "php_verif/manage_log_register/update_pass.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Forget Password</title>
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/fonts.css">
  <link rel="stylesheet" href="../sl_fonts/sl_font.css">
  <link rel="stylesheet" href="../fontawesome/css/all.css">
  <link rel="stylesheet" href="../line-awesome/css/line-awesome.css">
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/checkbox.css">
  <link rel="shortcut icon" href="/recrutment/icon.png">
  <style>
    #nav
    {
      background: linear-gradient(to left,#9733ee,#da22ff) !important;
      position: relative !important;
    }
  .divider
  {
    border: 1px solid var(--dark)
  }
  .form-group i
{
  position: absolute;
      top: 32px;
      right: 17px;
      font-size: 22px;
}
.users-chois
    {
      width: 100%;
      text-align: center;
      margin: 1rem auto;
    }
    .active_choix
    {
      border-color: #DA22FF !important;
    }
    .users-chois> label {
        float: none;
        display: inline-block;
        font-size: 14px;
        letter-spacing: .7px;
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
    .users-chois> label> input
    {
      display: none;
    }
.custom-in
    {
      border:2px solid #88888855;
      padding: 15px;
      height: 3.5rem;
      margin:1rem auto;
      border-radius: 7px;
      transition: all .5s;
      letter-spacing: .9px
    }
    .custom-in:hover,.custom-in:focus
    {
            border:2px solid #88888855;
            box-shadow: none;
    }
    .form-group
    {
      position: relative;
      margin: 1.2rem 0;
    }
    .link_cus
{
  color: #DA22FF !important;
  line-height: 30px;
  float: right;
  font-size: 14px;
  text-decoration: underline !important;
}
button
{
  outline: none !important;
  box-shadow: none !important;
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
.pi
{
  --z:#DA22FF
}
.form-check-label::after
{
  top: .25em !important;
    left: .31em !important;
}
.ls-1
    {
      letter-spacing: .8px;
    }
</style>
    <style>
    .rec-box-title {
    float: left;
    overflow: hidden;
    position: relative;
    width: 100%;
    text-align: center;
    margin-bottom: 33px;
    line-height: 25px;
}
.rec-box-title:before, .rec-box-title:after {
    content: '';
    position: absolute;
    left: 0px;
    bottom: 2px;
    width: 1px;
    height: 10px;
    background-color: #e5e5e5;
}
.rec-box-title:after {
    left: auto;
    right: 0px;
}
.rec-box-title span:before, .rec-box-title span:after {
    background-color: #e5e5e5;
    content: "";
    height: 1px;
    left: 100%;
    margin-left: 8px;
    position: absolute;
    top: 12px;
    width: 999em;
}
.rec-box-title span:after {
    left: auto;
    right: 100%;
    margin-left: 0px;
    margin-right: 8px;
}
.rec-box-title span {
    display: inline-block;
    font-size: 14px;
    color:  #9733ee;
    position: relative;
}
@media (min-width:992px)
{
  .form-log
    {
    margin-left: 11rem;
    margin-right: 11rem;
    }
}
  </style>
<style>
.form-group~p
    {
      position: absolute;
    bottom: -15px;
    left: 12px;
    color:rgb(255, 68, 84);
    }
    .gol-g
    {
      position: relative;
      display: grid;
    }
</style>
</head>
<body class="bg-img w-100" style="overflow-x:hidden">
<?php include $_SERVER['DOCUMENT_ROOT'].'/recrutment/include/nav.php'  ?>
<!----<div class="jumbotron">
<div class="container text-center">
 <div class="display-4 text-center f-quick f-500">
   Login Form
 </div>
 <div class='divider mt-4 w-75 mx-auto'></div>
 <div class="h5 f-open text-center mt-4">Dont Have Account ? Register For Free now</div>
 <a href="#" class="btn btn-outline-info rounded-pill f-quick f-500 px-5 py-2 btn-lg mt-5">Register</a>
</div>
</div>-->
<div class="jumbotron">
  <div class="container">
    <h2 class="f-raleway font-weight-bold text-center mx-auto my-4 ls-1" >Forget Password</h2>   
    <p class="text-muted text-center" style="font-size:18px"><small>Enter Your Email</small></p>
  </div>
</div>
<div class="container my-5">
<div class="f-quick form-log"> 
  <form action='<?php echo $_SERVER["PHP_SELF"];?>' method="post">
    <div class="gol-g">
    <div class="form-group">
      <input type="email" name='mail_re' class="form-control custom-in f-500" aria-describedby="emailHelp" placeholder="Enter email">
      <i class="slimi-icon slimi-user text-pink"></i>
    </div>
    <p class="f-cairo"><?php echo $msg1;?></p>
    </div>
    <button type="submit" name="valid" class="btn btn-ind-pin btn-block btn-lg f-500">Submit</button>
    <div class="linear f-raleway my-4">Or</div>
  </form>
</div>
</div>
<script>
$(".users-chois label").on("click",function(){
                      $(".users-chois label").removeClass("active_choix");
                      $(this).addClass("active_choix");
                    })
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/recrutment/include/footer.html'  ?>
</body>
</html>