<?php
require_once $_SERVER['DOCUMENT_ROOT'].'\recrutment\pages\php_verif\manage_log_register\db.php';
require_once 'job.php';
?>
<?php
$msg1=$msg2=$msg3=$msg4=$msg5=$msg6=$msg7=$msg8=$msg9=$msg10=$msg11="";
if(isset($_POST['save_job']))
{
$title=$_POST['title'];
$title=test_input($title);
if(!empty($title))
{ 
     if(!preg_match("/^[a-zA-Z ]*$/",$title)) 
    {
      $msg1='Job Title must containe only letter and White Spaces';
      $title="";
    }
}
else
{
$msg1="Job title Required *";
}
$dscrpt=$_POST['dscrpt'];
$dscrpt=test_input($dscrpt);
if(empty($dscrpt))
{ 
     $msg2='Descrition Required *';
}
else
{
    $dscrpt="<p>".$dscrpt."</p>";
    $dscrpt=test_input($dscrpt);
}
$type=$_POST['type'];
$type=(int)$type;
if(!empty($type)||$type===0)
{ 
 if($type<0){$type=0;}
 else if($type>5){$type=5;}
}
else
{
    $msg3='Job Type Required *';
    $type="";
}
$cate=$_POST['cate'];
$cate=test_input($cate);
if(!empty($cate))
{ 
     if(!preg_match("/^[a-zA-Z ]*$/",$cate)) 
    {
      $msg4='Job Categorie must containe only letter and White Spaces';
      $cate="";
    }
}
else
{
   $msg4='Job Categorie Required *';
}
$sale=$_POST['sale'];
$sale=(int)$sale;
if(empty($sale)||$sale<0)
{ 
   $msg5='Job Salery Required *';
}
$career=$_POST['career'];
$career=(int)$career;
if(!empty($career)||$career===0)
{ 
 if($career<0){$career=0;}
 else if($career>3){$career=3;}
}
else
{
    $msg6='Career Level Required *';
}
$exprt=$_POST['expert'];
$exprt=(int)$exprt;
if(empty($exprt))
{
    $msg7='Experience Required *';
}
$lang=$_POST['lang'];
$lang=(int)$lang;
if(!empty($lang)||$lang===0)
{ 
 if($lang<0){$lang=0;}
 else if($lang>2){$lang=2;}
}
else
{
    $msg8='Language Required *';
}
$gender=$_POST['gender'];
$gender=(int)$gender;
if(!empty($gender)||$gender===0)
{ 
 if($gender<0){$gender=0;}
 else{$gender=1;}
}
else
{
    $msg9='Gander Required *';
}
$qual=$_POST['qual'];
$qual=test_input($qual);
if(!empty($qual))
{ 
     if(!preg_match("/^[a-zA-Z ]*$/",$qual)) 
    {
      $msg10='Qualification must containe only letter and White Spaces';
      $qual="";
    }
}
else
{
    $msg10='Qualification Required *';
}
if(isset($_POST['tags']))
{
$tags=$_POST['tags'];
foreach ($tags as $key) {
    if(!preg_match("/^[a-zA-Z]*$/",$key)) 
    {
      $msg11='Skill must containe only letter';
      $tags="";
      break;
    }
}
if(!empty($tags))
{
    $tags=implode("|",$tags);
}  
}
else
{
    $tags="";
}
if(!empty($title)&&!empty($dscrpt)&&(!empty($type)||$type==0)&&!empty($cate)&&!empty($sale)&&(!empty($career)||$career==0||$gender==0||$lang==0)&&!empty($exprt)&&!empty($lang)&&!empty($qual)&&!empty($tags)&&!empty($gender))
{
    $post_date=date('Y/m/j');
    $job=new job($title,$cate,$dscrpt,$tags,$post_date,$post_date,$sale,$exprt,$gender,$qual,$lang,$career,$type);
    $job->add_job($var);
}
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>