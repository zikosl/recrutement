<?php
class expert
{
   private $title;	
   private $company;	
   private $ent_date;	
   private $ser_date;	
   private $dscrpt;
   function __construct()
   {
  $a = func_get_args(); 
  $i = func_num_args();
  if (method_exists($this,$f='__construct'.$i)) { 
  call_user_func_array(array($this,$f),$a); 
  } 
   }
   function __construct0()
   {

   }
   function __construct5($title,$company,$ent_date,$ser_date,$dscrpt)
   {
    $this->title=$title;
    $this->company=$company;
    $this->ent_date=$ent_date;
    $this->ser_date=$ser_date; 
    $this->dscrpt=$dscrpt;
   }
   function get_title()
   {
       return $this->title;
   }
   function get_company()
   {
       return $this->company;
   }
   function get_ent_date()
   {
       return $this->ent_date;	
   }
   function get_ser_date()
   {
       return $this->ser_date;	
   }
   function get_dscrpt()
   {
       return $this->dscrpt;
   }
   function get_by_id($id)
   {
     global $con;
     $sql="SELECT * FROM experience where expid='$id'";
     $sql=$con->query($sql);
     return $sql;
   }
   function get_max_id($id)
   {
    global $con;
    $sql="SELECT count(id) FROM experience where expid='$id'";
    $sql=$con->query($sql);
    $sql=mysqli_fetch_array($sql);
    return $sql[0];
   }
   function insert_edu()
   {
    $this->sql_inj_escape();
    global $con;
    global $id;
    $x=$this->get_max_id($id);
    if($x>7)
    {
      return false; 
    }
    else
    {
    $sql=$con->prepare("INSERT INTO experience (title,company,ent_date,ser_date,dscrpt,expid) VALUES (?,?,?,?,?,?)");
    $sql->bind_param("sssssi",$this->title,$this->company,$this->ent_date,$this->ser_date,$this->dscrpt,$id);
    return $sql->execute();
    }
    
   }
   function echo__()
   {
     echo $this->title.'  '.$this->ent_date.' '.$this->ser_date.'  '.$this->company.'  '.$this->dscrpt;
   }
   function sql_inj_escape()
   {
       global $con;
       $this->title=mysqli_real_escape_string($con,$this->title);
       $this->company=mysqli_real_escape_string($con,$this->company);
       $this->ent_date=mysqli_real_escape_string($con,$this->ent_date);
       $this->ser_date=mysqli_real_escape_string($con,$this->ser_date); 
       $this->dscrpt=mysqli_real_escape_string($con,$this->dscrpt); 
   }
   function get_industry()
   {
    global $con;
    global $id;
    $sql="SELECT title FROM experience where expid='$id' ORDER BY ser_date DESC  LIMIT 1";
    $sql=$con->query($sql);
    if(!$sql)
    {
      die($con->error);
    }
    $sql=mysqli_fetch_array($sql);
    return $sql["title"];
   }
   function get_experience($id)
   {
    global $con;
    $sql="SELECT ent_date,ser_date FROM experience where expid='$id'";
    $sql=$con->query($sql);
    $a=0;
    while($row=mysqli_fetch_array($sql))
    {
      $i=$row['ent_date'];
      $j=$row['ser_date'];
      $i = (int) filter_var($i, FILTER_SANITIZE_NUMBER_INT);
      $j = (int) filter_var($j, FILTER_SANITIZE_NUMBER_INT);
      $i=$i%10000;
      $j=$j%10000;
      $a+=$j-$i;
    }
    return $a;
   }
   function get_work()
   {
    global $con;
    global $id;
    $sql="SELECT title,company FROM experience where expid='$id' ORDER BY id DESC LIMIT 1";
    $sql=$con->query($sql);
    $sql=mysqli_fetch_assoc($sql);
    return $sql;
   }
   function set_title($title)
{
  global $con;
  $this->title=mysqli_real_escape_string($con,$title);
  $this->save_sql_exp($this->title,'title');
}
function set_company($company)
{
  global $con;
  $this->company=mysqli_real_escape_string($con,$company);
  $this->save_sql_exp($this->company,'company');
}
function set_ent_date($ent_date)
{
  global $con;
  $this->ent_date=mysqli_real_escape_string($con,$ent_date);
  $this->save_sql_exp($this->ent_date,'ent_date');
}
function set_ser_date($ser_date)
{
  global $con;
  $this->ser_date=mysqli_real_escape_string($con,$ser_date);
  $this->save_sql_exp($this->ser_date,'ser_date');
}
function set_dscrpt($dscrpt)
{
  global $con;
  $this->dscrpt=mysqli_real_escape_string($con,$dscrpt);
  $this->save_sql_exp($this->dscrpt,'dscrpt');
}
function save_sql_exp($str,$var)
{
  global $id;
  global $con;
  $sql="UPDATE experience SET $var='$str' where expid='$id'";
  $sql=$con->query($sql);
}
}
?>