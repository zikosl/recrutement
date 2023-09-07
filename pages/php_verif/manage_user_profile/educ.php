<?php
class educ
{
   private $title;	
   private $univ;	
   private $ent_date;	
   private $ser_date;	
   private $dscrpt;
   private $qual;
   function __construct()
   {
  $a = func_get_args(); 
  $i = func_num_args();
  if (method_exists($this,$f='__construct'.$i)) { 
  call_user_func_array(array($this,$f),$a); 
  } 
   }
   function __construct6($title,$univ,$ent_date,$ser_date,$qual,$dscrpt)
   {
    $this->title=$title;
    $this->univ=$univ;
    $this->ent_date=$ent_date;
    $this->ser_date=$ser_date; 
    $this->qual=$qual; 
    $this->dscrpt=$dscrpt;
   }
   function __construct0()
   {
   }
   function get_by_id($id)
   {
     global $con;
     $sql="SELECT * FROM education where eduid='$id'";
     $sql=$con->query($sql);
     return $sql;
   }
   function get_title()
   {
       return $this->title;
   }
   function get_univ()
   {
       return $this->univ;
   }
   function get_ent_date()
   {
       return $this->ent_date;	
   }
   function get_ser_date()
   {
       return $this->ser_date;	
   }
   function get_qual()
   {
       return $this->qual;	
   }
   function get_dscrpt()
   {
       return $this->dscrpt;
   }
   function get_max_id($id)
   {
    global $con;
    $sql="SELECT count(id) FROM education where eduid='$id'";
    $sql=$con->query($sql);
    $sql=mysqli_fetch_array($sql);
    return $sql[0];
   }
   function get_qualification()
   {
    global $con;
    global $id;
    $sql="SELECT qual FROM education where eduid='$id' ORDER BY ser_date DESC  LIMIT 1";
    $sql=$con->query($sql);
    $sql=mysqli_fetch_array($sql);
    return $sql["qual"];
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
    $sql=$con->prepare("INSERT INTO education (title,univ,ent_date,ser_date,dscrpt,qual,eduid) VALUES (?,?,?,?,?,?,?)");
    $sql->bind_param("ssssssi",$this->title,$this->univ,$this->ent_date,$this->ser_date,$this->dscrpt,$this->qual,$id);
    return $sql->execute();
    }
    
   }
   function echo__()
   {
     echo $this->title.' 1 '.$this->ent_date.' 2 '.$this->ser_date.' 3 '.$this->univ.' 4 '.$this->dscrpt;
   }
   function sql_inj_escape()
   {
       global $con;
       $this->title=mysqli_real_escape_string($con,$this->title);
       $this->univ=mysqli_real_escape_string($con,$this->univ);
       $this->ent_date=mysqli_real_escape_string($con,$this->ent_date);
       $this->ser_date=mysqli_real_escape_string($con,$this->ser_date); 
       $this->qual=mysqli_real_escape_string($con,$this->qual); 
       $this->dscrpt=mysqli_real_escape_string($con,$this->dscrpt); 
   }
   function set_title($title)
{
  global $con;
  $this->title=mysqli_real_escape_string($con,$title);
  $this->save_sql_edu($this->title,'title');
}
function set_univ($univ)
{
  global $con;
  $this->univ=mysqli_real_escape_string($con,$univ);
  $this->save_sql_edu($this->univ,'univ');
}
function set_ent_date($ent_date)
{
  global $con;
  $this->ent_date=mysqli_real_escape_string($con,$ent_date);
  $this->save_sql_edu($this->ent_date,'ent_date');
}
function set_ser_date($ser_date)
{
  global $con;
  $this->ser_date=mysqli_real_escape_string($con,$ser_date);
  $this->save_sql_edu($this->ser_date,'ser_date');
}
function set_dscrpt($dscrpt)
{
  global $con;
  $this->dscrpt=mysqli_real_escape_string($con,$dscrpt);
  $this->save_sql_edu($this->dscrpt,'dscrpt');
}
function set_qual($qual)
{
  global $con;
  $this->qual=mysqli_real_escape_string($con,$qual);
  $this->save_sql_edu($this->qual,'qual');
}
function save_sql_edu($str,$var)
{
  global $id;
  global $con;
  $sql="UPDATE education SET $var='$str' where eduid='$id'";
  $sql=$con->query($sql);
}
}
?>