<?php 
if(!isset($_SESSION))
{
  session_start();
}
?>
<?php
$ptr=new User();
if(isset($_POST['save_resume']))
{
    if(isset($_SESSION['mail'])&&$_SESSION['type']=="emp")
    {
      $id=$_SESSION['id'];
      $id=(int)$id;
      $id=$ptr->get_empid($id);
      $us=$_REQUEST['user'];
      $us=(int)$us;
      $us=$ptr->get_canid($us);
      $candid=new save_resume($id,$us);

    }
    else
    {
        header('Location: http://localhost/recrutment/pages/log.php');
    }
}
?>
<?php
class save_resume
{
    private $user=array();
    private $id;
    private $us;
    function __construct()
{
  $a = func_get_args(); 
  $i = func_num_args();
  if (method_exists($this,$f='__construct'.$i)) { 
  call_user_func_array(array($this,$f),$a); 
  } 
}
    function __construct2($id,$us)
    {
        $this->id=$id;
        $this->us=$us;
    }
    function __construct1($id)
    {
        $this->id=$id;
    }
    function get_resume()
    {
        global $con;
        $sql="SELECT canid from resume where empid='$this->id'";
        $sql=$con->query($sql);
        $i=0;
        while($row=mysqli_fetch_assoc($sql))
        {
         $this->user[$i]=new profile();
         $this->user[$i]->get_by_id($row["canid"]);
         $i++;
        }
        return $this->user;
    }
    function set_resume()
    {
        global $con;
        if($this->count_resume()<21&&$this->test_value())
        {
        $sql="INSERT INTO resume (empid,canid) values ('$this->id','$this->us')";
        $sql=$con->query($sql);  
        return '<script>alert("Saved")</script>'; 
        }
        elseif ($this->count_resume()>20)
        { 
          return '<script>alert("You cant save more")</script>';
        }
        else
       {
        return '<script>alert("Value is Exist")</script>';
       }
    }
    function test_value()
    {
        global $con;
        $sql="SELECT id from resume where empid='$this->id' AND canid='$this->us'";
        $sql=$con->query($sql);
        return empty($sql);
    }
    function count_resume()
    {
        global $con;
        $sql="SELECT count(id) from resume where empid='$this->id'";
        $sql=$con->query($sql);
        $sql=mysqli_fetch_array($sql);
        return $sql[0];
    }
    function get_id()
    {
        return $this->us;
    }
}
?>