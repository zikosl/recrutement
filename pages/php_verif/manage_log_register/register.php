<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once('db.php');?>
<?php include_once("manage_log.php");?>
<?php
class User
{
private $first;
private $last;
private $pass;
private $mail;
private $phone;
private $pic;
private $type;
private $date;
function __construct()
{
  $a = func_get_args(); 
  $i = func_num_args();
  if (method_exists($this,$f='__construct'.$i)) { 
  call_user_func_array(array($this,$f),$a); 
  } 
}
function __construct0()
{
}
function __construct6($first,$last,$pass,$mail,$phone,$type)
{
  $this->first=$first;
  $this->last=$last;
  $this->pass=$pass;
  $this->mail=$mail;
  $this->phone=$phone; 
  $this->type=$type; 
}
 function __construct3($pass,$mail,$type)
{
  $this->pass=$pass;
  $this->mail=$mail;
  $this->type=$type;
}
function add_user()
{
  $this->sql_inj_escape();
  $this->pass=password_hash($this->pass,PASSWORD_BCRYPT);
  global $con;
  $str=creat_str();
  $this->date=date('Y');
  $url='\recrutment\pages\u_p_p\new.svg';
  $sql=$con->prepare("INSERT INTO Register (first_n,last_n,pass,mail,pic,phone,type,since,token) VALUES (?,?,?,?,?,?,?,?,?)");
  $sql->bind_param("sssssssis",$this->first,$this->last,$this->pass,$this->mail,$url,$this->phone,$this->type,$this->date,$str);
  $sql->execute();
  if($this->type==="can")
  {
    $sql="INSERT INTO Candidat (canid) select id from Register where mail = '$this->mail'";
  }
  else
  {
    $sql="INSERT INTO Empolyer (empid) SELECT id from Register where mail = '$this->mail'";
  }
  $sql=$con->query($sql);
  $sql="INSERT INTO Location (loc_id) select id from Register where mail = '$this->mail'";
  $sql=$con->query($sql);
  $sql="INSERT INTO social (soc_id) select id from Register where mail = '$this->mail'";
  $sql=$con->query($sql);
  $url="localhost/recrutment/pages/php_verif/manage_log_register/user_verified.php";
  echo "<script>alert('".mailer($this->mail,$str,$this->first,$url)."')</script>";
}
function mail_used()
{
  global $con;
  mysqli_real_escape_string($con,$this->mail);
  $sql="SELECT id FROM Register where mail='$this->mail'";
  $sql=$con->query($sql);
  $sql=mysqli_fetch_array($sql,MYSQLI_ASSOC);
  if(!empty($sql))
  {
    return true;
  }
  return false;
}
function mail_log()
{
  global $con;
  $this->mail=mysqli_real_escape_string($con,$this->mail);
  $this->type=mysqli_real_escape_string($con,$this->type);
  $sql="SELECT id,pass,token FROM Register where mail='$this->mail' AND type='$this->type'";
  $sql=$con->query($sql);
  $sql=mysqli_fetch_array($sql,MYSQLI_ASSOC);
  return $sql;
}
function echo__()
{
  echo 'First : '.$this->first.'Last: '.$this->last.'Pass: '.$this->pass.'mail: '.$this->mail.'Phone: '.$this->phone; 
}
function echo2__()
{
  echo 'Pass: '.$this->pass.' mail: '.$this->mail.' type: '.$this->type; 
}
function get_empid($id)
{
   $id=(int)$id;
   global $con;
   $sql="SELECT id FROM empolyer where empid='$id'";
   $sql=$con->query($sql);
   $sql=mysqli_fetch_array($sql,MYSQLI_ASSOC);
   return $sql['id'];
}
function get_canid($id)
{
   $id=(int)$id;
   global $con;
   $sql="SELECT id FROM candidat where canid='$id'";
   $sql=$con->query($sql);
   $sql=mysqli_fetch_array($sql,MYSQLI_ASSOC);
   return $sql['id'];
}
function get_by_id($id)
{
  global $con;
   $id=(int)$id;
   $sql="SELECT first_n,last_n,mail,pic,phone,since FROM Register where id='$id'";
   $sql=$con->query($sql);
   $sql=mysqli_fetch_array($sql,MYSQLI_ASSOC);
   $this->first=$sql["first_n"];
   $this->last=$sql['last_n'];
   $this->mail=$sql['mail'];
   $this->pic=$sql['pic'];
   $this->phone=$sql['phone'];
   $this->date=$sql['since'];
}
 function sql_inj_escape()
{
    global $con;
    $this->first=mysqli_real_escape_string($con,$this->first);
    $this->last=mysqli_real_escape_string($con,$this->last);
    $this->pass=mysqli_real_escape_string($con,$this->pass);
    $this->mail=mysqli_real_escape_string($con,$this->mail);
    $this->phone=mysqli_real_escape_string($con,$this->phone); 
    $this->type=mysqli_real_escape_string($con,$this->type); 
}
function set_first($first)
{
  global $con;
  $this->first=mysqli_real_escape_string($con,$first);
  save_sql($this->first,'first_n');
}
function set_last($last)
{
  global $con;
  $this->first=mysqli_real_escape_string($con,$last);
  save_sql($this->last,'last_n');
}
function set_mail($mail)
{
  global $con;
  $this->first=mysqli_real_escape_string($con,$mail);
  save_sql($this->mail,'mail');
}
function set_phone($phone)
{
  global $con;
  $this->first=mysqli_real_escape_string($con,$phone);
  save_sql($this->phone,'phone');
}
function get_first()
{
  return $this->first;
}
function get_last()
{
  return $this->last;
}
function get_mail()
{
  return $this->mail;
}
function get_phone()
{
  return $this->phone;
}
function get_pic()
{
  return $this->pic;
}
function get_date()
{
  return $this->date;
}
protected function save_sql($str,$var)
{
  global $id;
  global $con;
  $sql="UPDATE Register SET '$var'='$str' where id='$id'";
  $sql=$con->query($sql);
}
}
function mailer($mail,$str,$a,$url)
{
  try {
  $mailer=new PHPMailer();
  $mailer->addAddress($mail);
  $mailer->setFrom("zakariaslimi53@gmail.com","zakaria");
  $mailer->Subject="Verfie";
  $mailer->isHTML(true);
  $ending="?email=".$mail."&token=".$str;
  $mailer->Body='<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
          body,.body
          {
              font-family: "Roboto", sans-serif !important;
              color: #333 !important;
              text-align: center !important;
          }
          h1,h4
          {
              font-weight: 600 !important;
          }
          h1
          {
              color: #f709ff !important;
              text-transform: uppercase !important;
          }
          h1 span
          {
              color: #9733ee !important;
          }
          hr
          {
              border: none !important;
              border-top: 1px solid #efefef !important;
          }
          ul
          {
              list-style-type: none !important;
              padding: 0 !important;
          }
          li
          {
              display: inline-block !important;
              margin: auto 12px !important;
          }
          .fa {
  padding: 16px !important;
    font-size: 22px !important;
    width: 22px !important;
    text-align: center !important;
    text-decoration: none !important;
    margin: 5px 2px !important;
    border-radius: 50% !important;
  }
      .fa-facebook {
    background: #3B5998 !important;
    color: white !important;
  }
  
  .fa-twitter {
    background: #55ACEE !important;
    color: white !important;
  }
  
  .fa-google {
    background: #dd4b39 !important;
    color: white !important;
  }
  
  .fa-linkedin {
    background: #007bb5 !important;
    color: white !important;
  }
      </style>
      <style>
      a
      {
          text-decoration: none !important;
          font-size: 18px !important;
          color: #9733ee !important;
      }
      .body div
      {
          margin: 20px auto
      }
      button
      {
          background: #f709ff !important;
          color: white !important;
          border: 2px solid #f709ff !important;
          outline: none !important;
          box-shadow: none  !important;
          font-size: 20px !important;
          padding: 15px 60px !important;
          margin: 2rem auto !important;
          border-radius: 60px !important;
          transition: all .4s !important;
      }
      button:hover,button:focus
      {
         color: #f709ff !important;
         background: white !important;
      }
      </style>
  </head>
  <body style="direction:ltr !important;">
      <div class="body" style=" padding: 20px 40px !important;text-align: center !important;width: 600px !important;margin: auto !important;box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;border-radius: 15px !important;">
            <div class="header">
             <h1><span>Recruit</span> Me</h1>
             <hr>
             <h2 style="text-align:center">Hallo '.$a.'</h2>
            </div>
           <div>
             <p>To Complete Email verification ,On click this button</p>
             <a href="'.$url.$ending.'"><button style="cursor: pointer !important;">Submit Email</button></a>
             <p>Or Verifie Using This Link :
             <a href="'.$url.$ending.'">'.$url.$ending.'</a></p>
             <p>If Did not Creat this account you only ignore This Email</p>
           </div>
           <div>
              <h4>Need Help ?</h4>
              <p>Cantact Me at <a href="/localhost">Recruit-Me</a></p>
           </div>
         <div>
             <hr>
             <p>All Right Reserved &copy; <a href="/localhost">Recruit-Me</a>  2019</p>
             <ul>
                 <li><a href=""><img width="40" height="40" src="http://images.epizy.com/png/001-facebook-logo.png"></a></li>
                 <li><a href=""><img width="40" height="40" src="http://images.epizy.com/png/003-twitter-social-logotype.png"></a></li>
                 <li><a href=""><img width="40" height="40" src="http://images.epizy.com/png/002-google-plus-social-logotype.png"></a></li>
                 <li><a href=""><img width="40" height="40" src="http://images.epizy.com/png/004-linkedin-logo.png"></a></li>
             </ul>
         </div>  
      </div>
  
  </body>
  </html>';
  $mailer->send();
    return "Message Sent OK\n";
  } catch (phpmailerException $e) {
    return $e->errorMessage(); //Pretty error messages from PHPMailer
  } catch (Exception $e) {
    return $e->getMessage(); //Boring error messages from anything else!
  }
}
?>