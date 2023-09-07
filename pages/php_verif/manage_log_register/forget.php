<?php include_once('register.php')?>
<?php session_start();?>
<?php
$msg1="";
if(isset($_POST['valid'])&&isset($_POST['mail_re']))
{
$mail=$_POST['mail_re'];
$mail=mail_v($mail,$msg1);
if(!empty($mail))
{
    $user=new User(null,$mail,null);
   if ($user->mail_used())
    {
        $str=creat_str();
        echo $str;
        $sql="UPDATE Register SET token='$str',tokenExp=DATE_ADD(NOW(),INTERVAL 5 MINUTE) Where mail='$mail'";
        $sql=$con->query($sql);
        $url="localhost/recrutment/pages/php_verif/manage_log_register/user_verified.php";
        mailer($mail,$str,"User",$url);
    }
}
}
function mail_v(&$x,&$m)
{
    if (empty($x)) {
        $m = "Email is required *";
      } 
      else {
        $x = test_input($x);
        // check if name only contains letters and whitespace
        if (!filter_var($x, FILTER_VALIDATE_EMAIL)) {
            $m = "Invalid email format"; 
          }
        else
        {
            return $x;
        }
      }
      return "";
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>