<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once $_SERVER["DOCUMENT_ROOT"]."/recrutment\PHPMailer\PHPMailer.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/recrutment\PHPMailer\Exception.php";
?>
<?php
function creat_str()
{
    $str="pmnbvcxwqazertyuiolkjhgfds1234567890POIUYTREZAQSDFGHJKLMNBVCXWM";
$str=str_shuffle($str);
$str=substr($str,random_int(0,10),random_int(30,42));
return $str;
}

?>