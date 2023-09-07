<?php
class skill
{
    private $title;	
    private $prsnt;	
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
    function __construct2($title,$prsnt)
   {
    $this->title=$title;
    $this->prsnt=$prsnt;
   }
   
   function get_by_id($id)
   {
     global $con;
     $sql="SELECT * FROM skill where skilid='$id'";
     $sql=$con->query($sql);
     return $sql;
   }
   function get_max_id($id)
   {
    global $con;
    $sql="SELECT count(id) FROM skill where skilid='$id'";
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
    $sql=$con->prepare("INSERT INTO skill (title,prsnt,skilid) VALUES (?,?,?)");
    $sql->bind_param("ssi",$this->title,$this->prsnt,$id);
    return $sql->execute();
    }
  }
    function echo__()
   {
     echo $this->title.'  '.$this->prsnt;
   }
   function sql_inj_escape()
   {
       global $con;
       $this->title=mysqli_real_escape_string($con,$this->title);
       $this->prsnt=mysqli_real_escape_string($con,$this->prsnt);
   }
    function set_title($title)
    {
      global $con;
      $this->title=mysqli_real_escape_string($con,$title);
      $this->save_sql_skill($this->title,'title');
    }
    function set_prsnt($prsnt)
    {
      global $con;
      $this->prsnt=mysqli_real_escape_string($con,$prsnt);
      $this->save_sql_skill($this->prsnt,'prsnt');
    }
    function get_title()
   {
       return $this->title;
   }
   function get_prsnt()
   {
       return $this->prsnt;	
   }
   function save_sql_skill($str,$var)
{
  global $id;
  global $con;
  $sql="UPDATE skill SET $var='$str' where awrdid='$id'";
  $sql=$con->query($sql);
}
}
?>