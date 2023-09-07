<?php require_once 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../css/fonts.css">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../sl_fonts/sl_font.css">
    <link rel="stylesheet" href="../../../fontawesome/css/all.css">
    <link rel="stylesheet" href="../../../line-awesome/css/line-awesome.css">
    <script type="text/javascript" src="../../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../../js/popper.min.js"></script>
    <script type="text/javascript" src="../../../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../../css/header.css">
    <link rel="stylesheet" href="../../../css/footer.css">
    <style>
        #nav
    {
      background: linear-gradient(to left,#9733ee,#da22ff) !important;
      position: relative !important;
    }
svg {
  width: 200px;
  display: block;
  margin: 40px auto 0;
}
.path {
  stroke-dasharray: 1000;
  stroke-dashoffset: 0;
}
.path.circle {
  -webkit-animation: dash 0.9s ease-in-out;
  animation: dash 0.9s ease-in-out;
}
.path.line {
  stroke-dashoffset: 1000;
  -webkit-animation: dash 1.8s 0.35s ease-in-out forwards;
  animation: dash 1.8s 0.35s ease-in-out forwards;
}
.path.check {
  stroke-dashoffset: -100;
  -webkit-animation: dash-check 1.8s 0.35s ease-in-out forwards;
  animation: dash-check 1.8s 0.35s ease-in-out forwards;
}
svg~p {
  text-align: center;
  margin: 45px 0 45px;
  font-size: 2.25em;
}
p.success {
  color: #73af55;
}
p.error {
  color: #d06079;
}
@-webkit-keyframes dash {
  0% {
    stroke-dashoffset: 1000;
  }
  100% {
    stroke-dashoffset: 0;
  }
}
@keyframes dash {
  0% {
    stroke-dashoffset: 1000;
  }
  100% {
    stroke-dashoffset: 0;
  }
}
@-webkit-keyframes dash-check {
  0% {
    stroke-dashoffset: -100;
  }
  100% {
    stroke-dashoffset: 900;
  }
}
@keyframes dash-check {
  0% {
    stroke-dashoffset: -100;
  }
  100% {
    stroke-dashoffset: 900;
  }
}
    </style>
</head>
<body class="f-saira">
<?php include $_SERVER['DOCUMENT_ROOT'].'/recrutment/include/nav.php'  ?>
<div class="m-5 p-5">
<?php
     $x='<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
     <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
     <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
   </svg>
   <p class="success">Sign Up Completed!</p>';
   $y=' <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
   <circle class="path circle" fill="none" stroke="#D06079" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
   <line class="path line" fill="none" stroke="#D06079" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3"/>
   <line class="path line" fill="none" stroke="#D06079" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38" x2="34.4" y2="92.2"/>
    </svg><p class="error">Hot Link Not Prefred!</p> ';
    if (isset($_GET["email"]) && !empty($_GET['token']))
    {
      $mail=$_GET["email"];
      $token=$_GET['token'];
      $sql="SELECT token FROM register WHERE mail='$mail'";
      $sql=$con->query($sql);
      $sql=mysqli_fetch_array($sql,MYSQLI_ASSOC);
      if ($sql['token']===$token)
      {
          echo $x;
          $sql="UPDATE register set token='' WHERE mail='$mail'";
          $sql=$con->query($sql);
          echo '<script>setinterval(function(){window.location.replace("http://localhost/recrutment/pages/log.php")},3000);</script>';
      }
      else
      {
        echo $y;
      }
    }
    else
    {
        echo $y;
    }
    ?>
</div>
  
<?php include $_SERVER['DOCUMENT_ROOT'].'/recrutment/include/footer.html'  ?>        
</body>
</html>