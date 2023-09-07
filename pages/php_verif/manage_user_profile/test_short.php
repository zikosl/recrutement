<?php require_once 'shortlist.php';?>
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
  $id=(int)$_REQUEST['job'];
  $shortlist=new shortlist($can,$id);
  $s_f=$shortlist->count_shortlist();
  $flw=$shortlist->test_shortlist();
}
else
{
  $id=(int)$id;
  $fll=new shortlist(null,$id);
  $s_f=$fll->count_shortlist();
}
if(isset($_POST['shortlist']))
{
    if(!empty($shortlist))
    {
      print_r($shortlist);
      if(!$flw)
      {
          $shortlist->set_shortlist();
      }
      else
      {
          $shortlist->del_shortlist();
      }
      header("Location: ".$_SERVER['REQUEST_URI']);
    }
    else
    {
        header("Location: http://localhost/recrutment/pages/log.php");
    }
    
}
?>