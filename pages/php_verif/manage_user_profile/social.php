<?php
trait social
{
    private $fb;
    private $twitter;
    private $google;
    private $linked;
    function set_fb($fb)
    {
      global $con;
      $this->fb=mysqli_real_escape_string($con,$fb);
      $this->save_sql4($this->fb,'fb');
    }
    function set_twitter($twitter)
    {
      global $con;
      $this->twitter=mysqli_real_escape_string($con,$twitter);
      $this->save_sql4($this->twitter,'twitter');
    }
    function set_google($google)
    {
      global $con;
      $this->google=mysqli_real_escape_string($con,$google);
      $this->save_sql4($this->google,'Gplus');
    }
    function set_linked($linked)
    {
      global $con;
      $this->linked=mysqli_real_escape_string($con,$linked);
      $this->save_sql4($this->linked,'linked');
    }
function get_fb()
{
  return $this->fb;
}
function get_twitter()
{
  return $this->twitter;
}
function get_google()
{
  return $this->google;
}
function get_linked()
{
  return $this->linked;
}
    function save_sql4($str,$var)
    {
      global $id;
      global $con;
      $sql="UPDATE social SET $var='$str' where soc_id='$id'";
      $sql=$con->query($sql);
    }}
?>