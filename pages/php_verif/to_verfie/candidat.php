<?php
class candidat
{
    private $name;
    private $birth;
    private $c_sale;
    private $e_sale;
    
    function update_name()
    {
         
    }
    function update_birth()
    {  
    }
    function update_c_sale()
    {
        $this->c_sale=(int)$this->c_sale;
    }
    function update_e_sale()
    {
        $this->e_sale=(int)$this->e_sale;
    }
}
?>