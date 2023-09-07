<?php require_once 'php_verif/manage_log_register/sign_verif.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
          font-weight: 500
        }
        .custom-in:hover,.custom-in:focus
        {
                border:2px solid #88888855;
                box-shadow: none;
        }
        .form-group
        {
          position: relative;
          overflow: auto;
        }
        .link_cus
    {
      color: #DA22FF !important;
      line-height: 30px;
      float: right;
      font-size: 14px;
      text-decoration: underline !important;
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
      top: .16em !important;
        left: .2em !important;
    }
    .ls-1
    {
      letter-spacing: .8px;
    }
    .pi
{
  --z:#DA22FF
}
    button
{
  outline: none !important;
  box-shadow: none !important;
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
/* The container must be positioned relative: */
.rm-select {
  position: relative;
}

.rm-select select {
  display: none; /*hide original SELECT element: */
}

.select-selected {
  background-color: fff;
}

/* Style the arrow inside the select element: */
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/* Point the arrow upwards when the select box is open (active): */
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/* style the items (options), including the selected item: */
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  font-family: 'Cairo', sans-serif;
  color:#222;
  position: relative;
  cursor: pointer;
}
.select-selected 
{
  padding-top: 12px;
}
/* Style items (options): */
.select-items {
  position: absolute;
  background-color: #efefef;
  margin-top: 7px;
  border-radius: 7px;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/* Hide the items when the select box is closed: */
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}

</style>
</head>
<body class="o-hidden bg-img">
<?php include $_SERVER['DOCUMENT_ROOT'].'/recrutment/include/nav.php'  ?>
<div class="jumbotron">
    <div class="container">
        <h2 class="f-raleway font-weight-bold text-center mx-auto my-4 ls-1" >Register Form</h2>
        <p class="text-muted text-center" style="font-size:18px"><small>Click To Create New Account</small></p>
    </div>
  </div>
<div class="container">
<div class="f-quick form-log">
  <form action='<?php echo $_SERVER["PHP_SELF"];?>' method="post">
      <div class="rec-box-title">
          <span>Choose your Account Type</span>
      </div>
    <div class="users-chois f-source">
      <label>
        <input type="radio" name="regist" value="emp">
        Employer
      </label>
      <label class="active_choix">
      <input type="radio" name="regist" checked value="can">
      Candidat
      </label>
    </div>
    <div class="row m-auto">
      <div class="col-md-6 pl-md-0">
        <div class="form-group">
         <input type="text" class="form-control custom-in" name='f_n' placeholder="First name ">
        <i class="slimi-icon slimi-user text-pink"></i>
       </div>
       <p class="f-cairo"><?php echo $msg1;?></p>
      </div>
    <div class="col-md-6 pr-md-0">
       <div class="form-group">
        <input type="text" class="form-control custom-in" name='l_n' placeholder="Last Name">
        <i class="slimi-icon slimi-user text-pink"></i>
      </div>
      <p class="f-cairo"><?php echo $msg2;?></p>
    </div>
    </div>
    <div class="gol-g">
      <div class="form-group">
      <input type="password" id="pass" class="form-control custom-in" name='pass' placeholder="*********">
      <i class="slimi-icon slimi-multimedia text-pink"></i>
      <i class="la la-eye text-pink" style="right: 66px;font-size: 24px;" id="ps"></i>
    </div>
    <p class="f-cairo"><?php echo $msg3;?></p>
    </div>
    <div class="gol-g">
      <div class="form-group">
      <input type="email" class="form-control custom-in" name='mail' placeholder="Enter email">
      <i class="slimi-icon slimi-mail text-pink"></i>
    </div>
    <p class="f-cairo"><?php echo $msg4;?></p>
    </div>
    <div class="gol-g">
      <div class="form-group">
        <input type="text" class="form-control custom-in" name='phone' placeholder="Phone (Optional)">
        <i class="slimi-icon slimi-technology text-pink"></i>
      </div>
      <p class="f-cairo"><?php echo $msg5;?></p>
    </div>
     <!--<div class="rm-select form-group">
        <select>
          <option value="0">Job Name</option>
          <option value="1">Job 1</option>
          <option value="2">Job 2</option>
          <option value="3">Job 3</option>
        </select>
        <i class="slimi-icon slimi-portfolio text-pink"></i>
      </div>-->
    <div class="gol-g">
      <div class="form-group form-check  checkbox pi mt-4 mb-5">
      <input type="checkbox" name="acc" checked value="acc" class="form-check-input" id="acc">
      <label class="form-check-label f-500" style="font-size: 16px;" for="acc">I Read And J'accept</label>
     </div>
     <p class="f-cairo" style="bottom: 34px;right: 12px;left:unset"><?php echo $msg6;?></p>
    </div>
    <button type="submit" name="regis" class="btn btn-ind-pin btn-block btn-lg f-500">Register</button>
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
<script>
$('#ps').on('click',function() {
  $(this).toggleClass("la-eye-slash");
  if($(this).hasClass("la-eye-slash"))
  {
    $('#pass').attr('type','text');
    $('#pass').attr('Placeholder','Password')
  }
  else
  {
    $('#pass').attr('type','password')
    $('#pass').attr('Placeholder','********')
  }
})
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/recrutment/include/footer.html'?>
</body>
</html>