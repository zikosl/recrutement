<?php
trait location
{
    private $country;
    private $region;
    private $city;
    private $post_code;
    function get_country()
{
  return $this->country;
}
function get_city()
{
  return $this->city;
}
function get_region()
{
  return $this->region;
}
function get_post_code()
{
  return $this->post_code;
}
function set_country($country)
{
  global $con;
  $this->country=mysqli_real_escape_string($con,$country);
  $this->save_sql3($this->country,'country');
}
function set_region($region)
{
  global $con;
  $this->region=mysqli_real_escape_string($con,$region);
  $this->save_sql3($this->region,'region');
}
function set_city($city)
{
  global $con;
  $this->city=mysqli_real_escape_string($con,$city);
  $this->save_sql3($this->city,'city');
}
function set_post_code($post_code)
{
  global $con;
  $this->post_code=mysqli_real_escape_string($con,$post_code);
  $this->save_sql3($this->post_code,'post_code');
}
function save_sql3($str,$var)
{
  global $id;
  global $con;
  $sql="UPDATE location SET $var='$str' where loc_id='$id'";
  $sql=$con->query($sql);
}
}
?>