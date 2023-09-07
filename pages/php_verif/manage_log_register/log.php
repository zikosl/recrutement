<?php include_once('register.php')?>
<?php session_start();?>
<?php
$msg1=$msg2="";
if(isset($_POST['valid'])&&isset($_POST['regist']))
{
$mail=$_POST['mail'];
$mail=mail_v($mail,$msg1);
$pass=$_POST['pass'];
$pass=password($pass,$msg2);
$type=$_POST['regist'];
$type=test_input($type);
$ver="";
if(!empty($pass)&&!empty($mail))
{
    $user=new User($pass,$mail,$type);
    $ver=$user->mail_log();
    $token=$ver['token'];
    $id=$ver['id'];
    $ver=$ver['pass'];
   if (!empty($ver)&&empty($token))
    {
        if(password_verify($pass,$ver))
        {
            $_SESSION["pass"] = $pass;
            $_SESSION["mail"] = $mail;
            $_SESSION["type"] = $type;
            $_SESSION["id"] = $id;
            if($type==="can")
            {
                header('Location: http://localhost/recrutment/pages/manage_user/profile.php');
            }
            else
            {
                header('Location: http://localhost/recrutment/pages/manage_company/setting.php');
            }
        }
        else
        {
          $msg2="invalid password";
        }
    }
    elseif (!empty($token))
    {
        echo "<script>alert('Check mail inbox To Complete Register')</script>";
    }
    else
    {
       $msg1="This Email Not Register    <a href='/recrutment/pages/sign.php' style='color:rgb(255, 68, 84);margin-left:1.5rem;text-decoration:underline;'>Register For Free Now</a>";
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
function password(&$x,&$m)
{
    if(!empty($x)) {
        $x = test_input($x);
        if (strlen($x) <= '6') {
            $m = "Your Password Must Contain At Least 6 Characters!";
        }
        elseif (!preg_match("/^[a-zA-Z0-9]*$/",$x))
        {
            $m = "Your Password Must Contain Only Number Capital And Lowercase Letter !";
        }
        elseif(!preg_match("#[0-9]+#",$x)) {
            $m = "Your Password Must Contain At Least 1 Number !";
        }
        elseif(!preg_match("#[A-Z]+#",$x)) {
            $m = "Your Password Must Contain At Least 1 Capital Letter !";
        }
        elseif(!preg_match("#[a-z]+#",$x)) {
            $m = "Your Password Must Contain At Least 1 Lowercase Letter !";
        }
        else
        {
            return $x;
        }
    }
    else
    {
        $m = "Password is Required *";
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