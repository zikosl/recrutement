<?php require_once 'folow.php';?>
<?php
if(!isset($_SESSION))
{
    session_start();
}
?>
<?php
$flw=false;

if(!empty($_SESSION)&&$_SESSION['type']==="can")
{
  $can=(int)$_SESSION['id'];
  $id=(int)$id;
  $follow=new follow($can,$id);
  $s_f=$follow->count_follow();
  $flw=$follow->test_follow();
}
else
{
  $id=(int)$id;
  $fll=new follow(null,$id);
  $s_f=$fll->count_follow();
}
if(isset($_POST['follow']))
{
    if(!empty($follow))
    {
      if(!$flw)
      {
          $follow->set_follow();
      }
      else
      {
          $follow->del_follow();
      }
      header("Location: ".$_SERVER['REQUEST_URI']);
    }
    else
    {
        header("Location: http://localhost/recrutment/pages/log.php");
    }
    
}
?>