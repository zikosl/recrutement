<?php
class aword
{
   private $title;	
   private $from_;	
   private $to_;
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
   function __construct4($title,$from_,$to_,$dscrpt)
   {
    $this->title=$title;
    $this->from_=$from_;
    $this->to_=$to_; 
    $this->dscrpt=$dscrpt;
   }
   function get_by_id($id)
   {
     global $con;
     $sql="SELECT * FROM awords where awrdid='$id'";
     $sql=$con->query($sql);
     return $sql;
   }
   function get_max_id($id)
   {
    global $con;
    $sql="SELECT count(id) FROM awords where awrdid='$id'";
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
    $sql=$con->prepare("INSERT INTO awords (title,from_,to_,dscrpt,awrdid) VALUES (?,?,?,?,?)");
    $sql->bind_param("ssssi",$this->title,$this->from_,$this->to_,$this->dscrpt,$id);
    return $sql->execute();
    }
    
   }
   function echo__()
   {
     echo $this->title.'  '.$this->from_.' '.$this->to_.'  '.'  '.$this->dscrpt;
   }
   function sql_inj_escape()
   {
       global $con;
       $this->title=mysqli_real_escape_string($con,$this->title);
       $this->from_=mysqli_real_escape_string($con,$this->from_);
       $this->to_=mysqli_real_escape_string($con,$this->to_); 
       $this->dscrpt=mysqli_real_escape_string($con,$this->dscrpt); 
   }
   function get_title()
   {
       return $this->title;
   }
   function get_from_()
   {
       return $this->from_;	
   }
   function get_to_()
   {
       return $this->to_;	
   }
   function get_dscrpt()
   {
       return $this->dscrpt;
   }
   function set_title($title)
{
  global $con;
  $this->title=mysqli_real_escape_string($con,$title);
  $this->save_sql_awrd($this->title,'title');
}
function set_from_($from_)
{
  global $con;
  $this->from_=mysqli_real_escape_string($con,$from_);
  $this->save_sql_awrd($this->from_,'from_');
}
function set_to_($to_)
{
  global $con;
  $this->to_=mysqli_real_escape_string($con,$to_);
  $this->save_sql_awrd($this->to_,'to_');
}
function set_dscrpt($dscrpt)
{
  global $con;
  $this->dscrpt=mysqli_real_escape_string($con,$dscrpt);
  $this->save_sql_awrd($this->dscrpt,'dscrpt');
}
function save_sql_awrd($str,$var)
{
  global $id;
  global $con;
  $sql="UPDATE awords SET $var='$str' where awrdid='$id'";
  $sql=$con->query($sql);
}
}
?>