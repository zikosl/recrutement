<?php 
if(!isset($_SESSION))
{
  session_start();
}
require_once('../../manage_log_register/db.php');?>
<?php 
if(!isset($_SESSION['mail']))
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
require_once "../skill.php";
/*$educ=array();
$educ[0]=new educ();
$educ[1]=new educ();
print_r($educ);*/
$msg1=$msg2='';
$title=$_POST['skl_title'];
$title=test_input($title);
if(!empty($title))
{
    if(!preg_match("/^[a-zA-Z ]*$/",$title)) 
    {
      $msg1='Title Must containe only letter and spaces';
      $title='';
    }
}
else
{
    $msg1="Title Required";
}
$prs=$_POST['skl_prs'];
$prs=test_input($prs);
$prs=(float)$prs;
if(!empty($prs))
{
    if(!($prs>-1 && $prs<101))
    {
        $msg2='Persentage Range Must be Between 0 and 100';
        $prs='';
    }
}
else
{
    $msg2="Persentage Required";
}
if (!empty($title)&&!empty($prs))
{
$edu=new skill($title,$prs);
//$edu->echo__();
if($edu->insert_edu())
{
    echo json_encode(['code'=>200]);
}
else
{
    echo json_encode(['code'=>300,'msg'=>"You Are Entred a max of element"]);
}
}
else
{
    echo json_encode(['code'=>404, 'msg1'=>$msg1,'msg2'=>$msg2]);
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>