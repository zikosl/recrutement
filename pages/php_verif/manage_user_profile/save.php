<?php 
if(!isset($_SESSION))
{
  session_start();
}
?>
<?php 
if(!isset($_SESSION['mail'])||$_SESSION['type']!="can")
{
  header('Location: http://localhost/recrutment/pages/log.php');
}
else
{
$x=$_SESSION['mail'];
$id=$_SESSION['id']; 
}
?>
<?php
require_once '../php_verif/manage_log_register/register.php';
require_once '../php_verif/manage_user_profile/location.php';
require_once '../php_verif/manage_user_profile/social.php';
require_once '../php_verif/manage_user_profile/profile.php';
$exp=new profile();
$exp->get_by_id($id);
?>
<?php
if(isset($_POST['save']))
{
$first=$_POST['f_name'];
$last=$_POST['l_name'];
$first=test_input($first);
$last=test_input($last);
$name=true;
if(!$exp->get_first()===$first&&!empty($first))
{ 
     if(!preg_match("/^[a-zA-Z]*$/",$first)) 
    {
      $msg1='first name must containe only letter';
    }
    else
    {
        $exp->set_first($first);
    }
}
if(!$exp->get_last()===$last&&!empty($last))
{
     if(!preg_match("/^[a-zA-Z]*$/",$last)) 
    {
      $msg2='Last name must containe only letter';
    }
    else
    {
        $exp->set_last($last);
    }
}
$mail=$_POST['user_mail'];
$mail=test_input($mail);
if(!$exp->get_mail()===$mail&&!empty($mail))
{
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $msg3= "Invalid email format"; 
    }
    else
    {
        $exp->set_mail($mail);
    }
}
$phone=$_POST['user_phone'];
if(!$exp->get_phone()===$phone&&!empty($phone))
{
    if(!filter_var($phone,FILTER_VALIDATE_INT))
    {
            $msg4='phone must containe only Number';
    }
    elseif (strlen($phone)<11 && strlen($phone)>7)
    {
            $msg4='phone must containe 9 Or 10 number';
    }
    else
    {
        echo "<script>alert('yes')</script>";
        $exp->set_phone($phone);
    }
}
$day=$_POST['d'];
$day=test_input($day);
$month=$_POST['m'];
$month=test_input($month);
$year=$_POST['y'];
$year=test_input($year);
$date =$day.'/'.$month.'/'.$year;
$x=new DateTime($exp->get_birth());
$x=$x->format('Y/m/d');
if(strcmp($x,$date))
{
    $date = strtotime($date);
    $date = date('Y-m-d',$date);
    $exp->set_birth($date);
}
$job=$_POST['user_job'];
$job=test_input($job);
if(strcmp($exp->get_job(),$job)&&!empty($job))
{
     if(!preg_match("/^[a-zA-Z ]*$/",$job)) 
    {
      $msg5='Check Job Syntexe';
    }
    else
    {
        $exp->set_job($job);
    }
}
$curr=$_POST['c_sale'];
$curr=(int)$curr;
if(strcmp($exp->get_c_sale(),$curr)&&!empty($curr))
{
        $exp->set_c_sale($curr);
}
$ex=$_POST['e_sale'];
$ex=(int)$ex;
if(strcmp($exp->get_e_sale(),$ex)&&!empty($ex))
{
        $exp->set_e_sale($ex);
}
$lang=$_POST['lang'];
$lang=(int)$lang;
if(strcmp($exp->get_lang(),$lang)&&!empty($lang)&&$lang>0)
{
    if($lang==0)
    {
     $exp->set_lang(0);
    }
    else if($lang==1)
    {
        $exp->set_lang(1);
    }
    else
    {
        $exp->set_lang(2);
    }
}
$gender=$_POST['gender'];
$gender=(int)$gender;
if($gender!=$exp->get_gander()&&!empty($gender)&&$gender>0)
{
     if($gender==0)
      {
        $exp->set_gender(0);
      }
    else
    {
        $exp->set_gender(1);
    }
}
$tags=$_POST['tags'];
$tags=implode("|",$tags);
if(strcmp($exp->get_categorie(),$tags))
{
$exp->set_categorie($tags);
}
$country=$_POST['country'];
$country=test_input($country);
if(strcmp($exp->get_country(),$country)&&!empty($country))
{ 
     if(!preg_match("/^[a-zA-Z]*$/",$country)) 
    {
        echo "<script>alert('yes')</script>";
      $msg7='Country name must containe only letter';
    }
    else
    {
        $exp->set_country($country);
    }
}
$region=$_POST['region'];
$region=test_input($region);
if(strcmp($exp->get_region(),$region)&&!empty($region))
{ 
     if(!preg_match("/^[a-zA-Z]*$/",$region)) 
    {
      $msg8='region name must containe only letter';
    }
    else
    {
        $exp->set_region($region);
    }
}
$city=$_POST['city'];
$city=test_input($city);
if(strcmp($exp->get_city(),$city)&&!empty($city))
{ 
     if(!preg_match("/^[a-zA-Z]*$/",$city)) 
    {
      $msg9='city name must containe only letter';
    }
    else
    {
        $exp->set_city($city);
    }
}
$post=$_POST['post'];
$post=test_input($post);
if(strcmp($exp->get_post_code(),$post)&&!empty($post))
{
    $post=(int)$post;
    echo $post;
     if(!filter_var($post,FILTER_VALIDATE_INT)) 
    {
      $msg10='Post Code must containe only letter';
    }
    else
    {
        $exp->set_post_code($post);
    }
}
$fb=$_POST['fb'];
$fb=test_input($fb);
if(strcmp($exp->get_fb(),$fb)&&!empty($fb))
{
        $exp->set_fb($fb);
}
$google=$_POST['google'];
$google=test_input($google);
if(strcmp($exp->get_google(),$google)&&!empty($google))
{
    $exp->set_google($google);
}
$twitter=$_POST['twitter'];
$twitter=test_input($twitter);
if(strcmp($exp->get_twitter(),$twitter)&&!empty($twitter))
{
    $exp->set_twitter($twitter);
}
$linked=$_POST['linked'];
$linked=test_input($linked);
if(strcmp($exp->get_linked(),$linked)&&!empty($linked))
{
    $exp->set_linked($linked);
}
//echo $first.' '.$last.' '.$mail.' '.$phone.' '.$day.' '.$month.' '.$year.' '.$job.' '.$curr.' '.$ex.' '.$lang;
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>