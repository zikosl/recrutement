<?php include_once('register.php');?>
<?php
$msg1=$msg2=$msg3=$msg4=$msg5=$msg6="";
if (isset($_POST['regis']))
{
if (!empty($_POST['acc']))
{
    $first=$_POST['f_n'];
    $first=name_v($first,$msg1,'First Name');
    $last=$_POST['l_n'];
    $last=name_v($last,$msg2,'Last Name');
    $pass=$_POST['pass'];
    $pass=password($pass,$msg3);
    $mail=$_POST['mail'];
    $mail=mail_v($mail,$msg4);
    $phone=$_POST['phone'];
    $type=$_POST['regist'];
    if(!empty($first)&&!empty($last)&&!empty($pass)&&!empty($mail)&&!empty($type))
    {
        $user=new User($first,$last,$pass,$mail,$phone,$type);
        if(!$user->mail_used())
        {
            $user->add_user();
        }
        else
        {
            $msg4="Email Already existe *";
        }
    }
}
else
{
    $msg6="You Must Accepte Licence *";
}
}
function name_v(&$x,&$m,$s)
{
    if (empty($x)) {
        $m = $s." is required *";
      } 
      else {
        $x = test_input($x);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z]*$/",$x)) {
          $m = "Only letters allowed";
        }
        else
        {
            return $x;
        }
      }
      return "";
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