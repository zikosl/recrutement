<?php
require_once $_SERVER['DOCUMENT_ROOT'].'\recrutment\pages\php_verif\manage_log_register\db.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\recrutment\pages\php_verif\manage_company_profile\job.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\recrutment\pages\php_verif/manage_log_register/register.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\recrutment\pages\php_verif/manage_user_profile/location.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\recrutment\pages\php_verif/manage_user_profile/social.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\recrutment\pages\php_verif\manage_company_profile\profile.php';
?>
<?php
$job=$emp=array();
if(isset($_POST['find'])||(isset($_POST['loc'])&&isset($_POST['key']))||isset($_COOKIE['arr']))
{
   if(isset($_POST['loc'])&&isset($_POST['key']))
   {
    $key=$_POST['key'];
    $loc=$_POST['loc'];
   }
   else
if(!isset($_POST['find']))
{
  $kr=unserialize($_COOKIE['arr']);
  if(!empty($kr))
  {
   $key=array_shift($kr);
   foreach ($kr as $k)
   {
      if($k[0]==1)
      {
         $_POST['qual'][]=str_replace("1","",$k);
      }
      else
      {
         $_POST['categorie'][]=str_replace("2","",$k);
      }
   }
  }
}

if(!empty($key))
    {
      //skill LIKE '%{$key}%'
      $sql="SELECT id from job where categorie='$key' AND";
    if(isset($_POST['date']))
    {
       $dt=$_POST['date'];
       $date=date('Y-m-d');
         switch($dt)
         {
            case 1:$sql.=" DATEDIFF('$date',post_date)<=1 AND";break;
            case 2:$sql.=" DATEDIFF('$date',post_date)<=7 AND";break;
            case 3:$sql.=" DATEDIFF('$date',post_date)<=14 AND";break;
            case 4:$sql.=" DATEDIFF('$date',post_date)<=30 AND";break;
            default:$sql.="";
         }
    }
    if(isset($_POST['job']))
    {
       $jb_=$_POST['job'];
       foreach($jb_ as $jb)
       {
         switch($jb)
         {
            case 0:$sql.=" j_type=0 OR";break;
            case 1:$sql.=" j_type=1 OR";break;
            case 2:$sql.=" j_type=2 OR";break;
            case 3:$sql.=" j_type=3 OR";break;
            case 4:$sql.=" j_type=4 OR";break;
            case 5:$sql.=" j_type=5 OR";break;
         } 
       }
       if($sql!==rtrim($sql,'OR'))
       {
           $sql=rtrim($sql,'OR');
           $sql.="AND";
       }
    }
    if(isset($_POST['career']))
    {
       $crr_=$_POST['career'];
       foreach($crr_ as $crr)
       {
         switch($crr)
         {
            case 0:$sql.=" career=0 OR";break;
            case 1:$sql.=" career=1 OR";break;
            case 2:$sql.=" career=2 OR";break;
            case 3:$sql.=" career=3 OR";break;
         } 
       }
       if($sql!==rtrim($sql,'OR'))
       {
           $sql=rtrim($sql,'OR');
           $sql.="AND";
       }
    }
    if(isset($_POST['sale']))
    {
       $sale_=$_POST['sale'];
       $s=array();
       $csa=0;
       foreach($sale_ as $sale)
       {
          $sale=explode("_",$sale);
          $s[$csa]=$sale[1];
          $s[$csa+1]=$sale[2];
          $csa+=2;
       }
       $sql.=" sale BETWEEN ".min($s)." AND ".max($s)." AND";
    }
    if(isset($_POST['exprt']))
    {
       $exp_=$_POST['exprt'];
       $e=array();
       $csa=0;
       foreach($exp_ as $exp)
       {
          $exp=explode("_",$exp);
          $e[$csa]=$exp[1];
          $e[$csa+1]=$exp[2];
          $csa+=2;
       }
       $sql.=" sale BETWEEN ".min($e)." AND ".max($e)." AND";
    }
    if(isset($_POST['gender']))
    {
       $gd=$_POST['gender'];
      if(sizeof($gd)==1)
      {
       if($gd==0)
       {
         $sql.=" gender=0 AND";
       }
       else
       {
         $sql.=" gender=1 AND";
       }
      }
    }
    if(isset($_POST['qual']))
    {
       $ql_=$_POST['qual'];
       foreach($ql_ as $ql)
       {
         $sql.=" qual='$ql' OR";
       }
       if($sql!==rtrim($sql,'OR'))
       {
           $sql=rtrim($sql,'OR');
           $sql.="AND";
       }
    }
    if(isset($_POST['categorie']))
    {
       $qt_=$_POST['categorie'];
       foreach($qt_ as $qt)
       {
         $sql.=" categorie='$qt' OR";
       }
       if($sql!==rtrim($sql,'OR'))
       {
           $sql=rtrim($sql,'OR');
           $sql.="AND";
       }
    }
    if($sql!==rtrim($sql,'AND'))
       {
           $sql=rtrim($sql,'AND');
       }
       //echo $sql;
    $sql=$con->query($sql);
    if(!$sql)
   {
      die($con->error);
   }
      $i=0;
      while($row=mysqli_fetch_assoc($sql))
         {
            $job[]=new job();
            $emp[]=new empolyer();
            $x=$job[$i]->get_by_id($row['id']);
            $x=$emp[$i]->user_finder($x);
            $x=mysqli_fetch_assoc($x);
            $emp[$i]->get_by_id($x['empid']);
            $i++;
         }
}
}
?>