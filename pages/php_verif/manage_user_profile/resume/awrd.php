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
require_once "../aword.php";
/*$educ=array();
$educ[0]=new educ();
$educ[1]=new educ();
print_r($educ);*/
$msg1=$msg2=$msg3=$msg4='';
$title=$_POST['exp_title'];
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
$ser_date=$_POST['exp_to'];
$ser_date=test_input($ser_date);
if(!empty($ser_date))
{
    //preg_match_all('!\d+!', $ser_date, $int);
    $int = (int) filter_var($ser_date, FILTER_SANITIZE_NUMBER_INT);
    if(strlen((string)$int)<4)
    {
        $msg2='Check Your Date';
        $ser_date='';
    }
}
else
{
    $msg2="To Date Required";
}
$ent_date=$_POST['exp_from'];
$ent_date=test_input($ent_date);
if(!empty($ent_date))
{
    $int = (int) filter_var($ent_date, FILTER_SANITIZE_NUMBER_INT);
    if(strlen((string)$int)<4)
    {
        $msg3='Check Your Date';
        $ser_date='';
    }
}
else
{
    $msg3="From Date Required";
}
$dscrpt=$_POST['dsc'];
$dscrpt=test_input($dscrpt);
if(empty($dscrpt))
{
    $msg4='Description is Required';
}
if (!empty($title)&&!empty($ent_date)&&!empty($ser_date)&&!empty($dscrpt))
{
$edu=new aword($title,$ent_date,$ser_date,$dscrpt);
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
    echo json_encode(['code'=>404, 'msg1'=>$msg1,'msg2'=>$msg2,'msg3'=>$msg3,'msg4'=>$msg4]);
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>