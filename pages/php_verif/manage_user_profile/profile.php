<?php
class profile extends User
{
    use location;
    use social;
    private $birthday;
    private $Curr_sale;
    private $Exp_sale;
    private $lang;
    private $categorie;
    private $job;
    private $dscrpt;
    private $gender;
    private $id;
    function echo__()
    {
        parent::echo__();
        echo 'birth: '.$this->birthday.' c_sale:'.$this->Curr_sale.' e_sale:'.$this->Exp_sale.' Lang:'.$this->lang;
    }
    function sql_inj_escape()
    {
      global $con;
        parent::sql_inj_escape();
        $this->birthday=mysqli_real_escape_string($con,$this->birthday);
        $this->Curr_sale=mysqli_real_escape_string($con,$this->Curr_sale);
        $this->Exp_sale=mysqli_real_escape_string($con,$this->Exp_sale);
        $this->lang=mysqli_real_escape_string($con,$this->lang);
        $this->job=mysqli_real_escape_string($con,$this->job);
        $this->categorie=mysqli_real_escape_string($con,$this->categorie);
        $this->gender=mysqli_real_escape_string($con,$this->gender);
    }
    function user_finder($id)
    {
      global $con;
      $sql="SELECT canid FROM Candidat where id='$id'";
      $sql=$con->query($sql);
      return $sql;
    }
function get_by_id($id)
{
   global $con;
   parent::get_by_id($id);
   $sql="SELECT id,birthday,Curr_sale,Exp_sale,lang,job_name,categorie,dscrpt,gender FROM Candidat where canid='$id'";
   $sql=$con->query($sql);
   $sql=mysqli_fetch_array($sql,MYSQLI_ASSOC);
   $this->birthday=$sql["birthday"];
   $this->id=$sql["id"];
   $this->Curr_sale=$sql['Curr_sale'];
   $this->Exp_sale=$sql['Exp_sale'];
   $this->lang=$sql['lang'];
   $this->job=$sql['job_name'];
   $this->categorie=$sql['categorie'];
   $this->dscrpt=$sql["dscrpt"];
   $this->gender=$sql["gender"];
   $sql="SELECT fb,twitter,linked,Gplus FROM social where soc_id='$id'";
   $sql=$con->query($sql);
   $sql=mysqli_fetch_array($sql,MYSQLI_ASSOC);
   $this->fb=$sql['fb'];
   $this->twitter=$sql['twitter'];
   $this->linked=$sql['linked'];
   $this->google=$sql['Gplus'];
   $sql="SELECT country,region,city,post_code FROM location where loc_id='$id'";
   $sql=$con->query($sql);
   $sql=mysqli_fetch_array($sql,MYSQLI_ASSOC);
   $this->country=$sql['country'];
   $this->region=$sql['region'];
   $this->city=$sql['city'];
   $this->post_code=$sql['post_code'];
}
function set_birth($birthday)
{
  global $con;
  $this->birthday=mysqli_real_escape_string($con,$birthday);
  $this->save_sql2($this->birthday,'birthday');
}
function set_c_sale($Curr_sale)
{
  global $con;
  $this->Curr_sale=mysqli_real_escape_string($con,$Curr_sale);
  $this->save_sql2($this->Curr_sale,'Curr_sale');
}
function set_e_sale($Exp_sale)
{
  global $con;
  $this->Exp_sale=mysqli_real_escape_string($con,$Exp_sale);
  $this->save_sql2($this->Exp_sale,'Exp_sale');
}
function set_job($job)
{
  global $con;
  $this->job=mysqli_real_escape_string($con,$job);
  $this->save_sql2($this->job,'job_name');
}
function set_categorie($categorie)
{
  global $con;
  $this->categorie=mysqli_real_escape_string($con,$categorie);
  $this->save_sql2($this->categorie,'categorie');
}
function set_lang($lang)
{
  global $con;
  $this->lang=mysqli_real_escape_string($con,$lang);
  $this->save_sql2($this->lang,'lang');
}
function set_dscrpt($dscrpt)
{
  global $con;
  $this->dscrpt=mysqli_real_escape_string($con,$dscrpt);
  $this->save_sql2($this->dscrpt,'dscrpt');
}
function get_dscrpt()
{
    return $this->dscrpt;
}
function set_gender($gender)
{
  global $con;
  $this->gender=mysqli_real_escape_string($con,$gender);
  $this->save_sql2($this->gender,'gender');
}
function get_gander()
{
    return  $this->gender;
}
function get_birth()
{
    return $this->birthday;
}
function get_birth_array()
{
  return explode('-',$this->birthday);
}
function get_id()
{
  return $this->id;
}
function get_age()
{
  $date = new DateTime();
  $date = $date->format('Y-m-d');
  return (int)(explode('-',$date)[0])-(int)(explode('-',$this->birthday)[0]);
}
function get_c_sale()
{
    return $this->Curr_sale;
}
function get_e_sale()
{
    return $this->Exp_sale;
}
function get_lang()
{
  return $this->lang;
}
function get_job()
{
  return $this->job;
}
function get_categorie()
{
  return $this->categorie;
}
function save_sql2($str,$var)
{
  global $id;
  global $con;
  $sql="UPDATE candidat SET $var='$str' where canid='$id'";
  $sql=$con->query($sql);
}

}
?>