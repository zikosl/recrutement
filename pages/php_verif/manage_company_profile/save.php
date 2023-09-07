<?php
require_once '../php_verif/manage_log_register/register.php';
require_once '../php_verif/manage_user_profile/location.php';
require_once '../php_verif/manage_user_profile/social.php';
require_once '../php_verif/manage_company_profile/profile.php';
$exp=new empolyer();
$exp->get_by_id($id);
?>
<?php
if(isset($_POST['save']))
{
$first=$_POST['c_name'];
$last=explode(" ",$first);
if(sizeof($last)!==2)
{
    $first=$last="";
}
else
{
    $first=$last[0];
    $last=$last[1];
}
$first=test_input($first);
$last=test_input($last);
$name=true;
if(!$exp->get_first()===$first&&!empty($first))
{ 
     if(!preg_match("/^[a-zA-Z]*$/",$first)) 
    {
      $msg1='Company Name must containe only letter';
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
        $msg1='Company Name must containe only letter';
    }
    else
    {
        $exp->set_last($last);
    }
}
$allow=$_POST['allow'];
$allow=test_input($allow);
$allow=(int)$allow;
if(!empty($allow)&&$allow!=$exp->get_alow())
{
if($allow==0)
{
$exp->set_alow(0);
}
else
{
    $exp->set_alow(1);
}
}
$team=$_POST['team'];
$team=(int)$team;
if($exp->get_team()!=$team&&!empty($team))
{
    if($team>9999||$team<0)
    {
        $msg3='Enter Valid team number 0-9999';
    }
    else
    {
        $exp->set_team($team);
    }
}
$founded=$_POST['founded'];
$founded=test_input($founded);
if(strcmp($exp->get_f_date(),$founded)&&!empty($founded))
{
    $int = (int) filter_var($founded, FILTER_SANITIZE_NUMBER_INT);
    if(strlen((string)$int)<4)
    {
        $msg3='Check Your Date';
    }
    else
    {
        $exp->set_f_date($founded);
    }
}
$dscrpt=$_POST['dscrpt'];
if(strcmp($exp->get_dscrpt(),$dscrpt)&&!empty($dscrpt))
{
        $exp->set_dscrpt($dscrpt);
}
$tags=$_POST['tags'];
$tags=implode("|",$tags);
if(strcmp($exp->get_cate(),$tags))
{
$exp->set_cate($tags);
}
$site=$_POST['site'];
$site=test_input($site);
if(strcmp($exp->get_site(),$site)&&!empty($site))
{
     if(!filter_var($site,FILTER_VALIDATE_URL))
      {
          $msg6="Invalid website format";
      }
    else
    {
        $exp->set_site($site);
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
//echo $first.' '.$last.' '.$mail.' '.$phone.' '.$day.' '.$month.' '.$year.' '.$job.' '.$curr.' '.$ex.' '.$site;
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>