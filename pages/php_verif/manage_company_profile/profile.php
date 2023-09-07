<?php
class empolyer extends User
{
    use location;
    use social;
    private $Fndd_date;
    private $Alow_search;
    private $team;
    private $categ;
    private $dscrpt;
    private $site;
    function echo__()
    {
        parent::echo__();
        echo 'f_date: '.$this->Fndd_date.' alow:'.$this->Alow_search.' team:'.$this->team.' cate:'.$this->categ.' dscrpt:'.$this->dscrpt;
    }
    function sql_inj_escape()
    {
      global $con;
        parent::sql_inj_escape();
        $this->Fndd_date=mysqli_real_escape_string($con,$this->Fndd_date);
        $this->Alow_search=mysqli_real_escape_string($con,$this->Alow_search);
        $this->categ=mysqli_real_escape_string($con,$this->categ);
        $this->team=mysqli_real_escape_string($con,$this->team);
        $this->dscrpt=mysqli_real_escape_string($con,$this->dscrpt);
        $this->site=mysqli_real_escape_string($con,$this->site);
    }
function get_by_id($id)
{
   global $con;
   parent::get_by_id($id);
   $sql="SELECT Fndd_date,team,Alow_search,categ,dscrpt,website FROM empolyer where empid='$id'";
   $sql=$con->query($sql);
   $sql=mysqli_fetch_array($sql,MYSQLI_ASSOC);
   $this->Fndd_date=$sql["Fndd_date"];
   $this->team=$sql["team"];
   $this->Alow_search=$sql['Alow_search'];
   $this->categ=$sql['categ'];
   $this->dscrpt=$sql['dscrpt'];
   $this->site=$sql['website'];
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
function user_finder($id)
    {
      global $con;
      $sql="SELECT empid FROM empolyer where id='$id'";
      $sql=$con->query($sql);
      return $sql;
    }
function set_f_date($Fndd_date)
{
  global $con;
  $this->Fndd_date=mysqli_real_escape_string($con,$Fndd_date);
  $this->save_sql2($this->Fndd_date,'Fndd_date');
}
function set_alow($Alow_search)
{
  global $con;
  $this->Alow_search=mysqli_real_escape_string($con,$Alow_search);
  $this->save_sql2($this->Alow_search,'Alow_search');
}
function set_team($team)
{
  global $con;
  $this->team=mysqli_real_escape_string($con,$team);
  $this->save_sql2($this->team,'team');
}
function set_cate($categ)
{
  global $con;
  $this->categ=mysqli_real_escape_string($con,$categ);
  $this->save_sql2($this->categ,'categ');
}
function set_site($site)
{
  global $con;
  $this->site=mysqli_real_escape_string($con,$site);
  $this->save_sql2($this->site,'website');
}
function set_dscrpt($dscrpt)
{
  global $con;
  $this->dscrpt=mysqli_real_escape_string($con,$dscrpt);
  $this->save_sql2($this->dscrpt,'dscrpt');
}

function get_f_date()
{
    return $this->Fndd_date;
}
function get_team()
{
    return $this->team;
}
function get_alow()
{
    return $this->Alow_search;
}
function get_cate()
{
    return $this->categ;
}
function get_cate_list()
{
    return str_replace("|",", ",$this->categ);
}
function get_dscrpt()
{
  return $this->dscrpt;
}
function get_job($id)
{
  global $con;
  $sql="SELECT count(id) FROM job where empid='$id'";
  $sql=$con->query($sql);
  $sql=mysqli_fetch_assoc($sql);
  return $sql['count(id)'];
}
function get_site()
{
  return $this->site;
}
function save_sql2($str,$var)
{
  global $id;
  global $con;
  $sql="UPDATE empolyer SET $var='$str' where empid='$id'";
  $sql=$con->query($sql);
}

}
?>