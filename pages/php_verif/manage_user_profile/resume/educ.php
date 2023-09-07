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
require_once "../educ.php";
/*$educ=array();
$educ[0]=new educ();
$educ[1]=new educ();
print_r($educ);*/
$msg1=$msg2=$msg3=$msg4=$msg5='';
$title=$_POST['title'];
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
$ser_date=$_POST['to'];
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
$ent_date=$_POST['from'];
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
$univ=$_POST['univ'];
$univ=test_input($univ);
if(!empty($univ))
{
    if(!preg_match("/^[a-zA-Z ]*$/",$univ)) 
    {
      $msg4='University Name Must containe only letter and spaces';
      $title='';
    }
}
else
{
    $msg4="University Name Required";
}
$qual=$_POST['qual'];
$qual=test_input($qual);
if(!empty($qual))
{
    if(!preg_match("/^[a-zA-Z ]*$/",$qual)) 
    {
      $msg5='Qualification Must containe only letter and spaces';
      $title='';
    }
}
else
{
    $msg5="University Name Required";
}
$dscrpt=$_POST['dscrpt'];
$dscrpt=test_input($dscrpt);
if(empty($dscrpt))
{
    $msg6='Description is Required';
}
if (!empty($title)&&!empty($ent_date)&&!empty($ser_date)&&!empty($univ)&&!empty($qual)&&!empty($dscrpt))
{
$edu=new educ($title,$univ,$ent_date,$ser_date,$qual,$dscrpt);
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
    echo json_encode(['code'=>404, 'msg1'=>$msg1,'msg2'=>$msg2,'msg3'=>$msg3,'msg4'=>$msg4,'msg5'=>$msg5,'msg6'=>$msg6]);
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>