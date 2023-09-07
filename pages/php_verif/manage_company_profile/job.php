<?php
class job
{
    private $title;
    private $categorie;
    private $post_date;	
    private $last_view;	
    private $sale;	
    private $experience;	
    private $gender;	
    private $qual;	
    private $lang;	
    private $career;
    private $dscrpt;
    private $skill;
    private $j_type;
    function __construct()
     {
      $a = func_get_args(); 
      $i = func_num_args();
      if (method_exists($this,$f='__construct'.$i)) { 
      call_user_func_array(array($this,$f),$a); 
      } 
     }
     function __construct0()
     {} 
      function __construct13($title,$categorie,$dscrpt,$skill,$post_date,$last_view,$sale,$experience,$gender,$qual,$lang,$career,$j_type)
     {
        $this->title=$title;
        $this->categorie=$categorie;
        $this->post_date=$post_date;	
        $this->last_view=$last_view;	
        $this->sale=$sale;	
        $this->experience=$experience;	
        $this->gender=$gender;	
        $this->qual=$qual;	
        $this->lang=$lang;	
        $this->career=$career;
        $this->dscrpt=$dscrpt;	
        $this->skill=$skill;
        $this->j_type=$j_type;
      }
      function add_job($id)
      {
        global $con;
        $sql=$con->prepare("INSERT INTO job (title,j_type,categorie,dscrpt,skill,post_date,last_view,sale,experience,gender,qual,lang,career,empid) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $sql->bind_param("sisssssiiisisi",$this->title,$this->j_type,$this->categorie,$this->dscrpt,$this->skill,$this->post_date,$this->last_view,$this->sale,$this->experience,$this->gender,$this->qual,$this->lang,$this->career,$id);
        $sql->execute(); 
    }
    function test_job($id)
   {
       global $con;
       $sql="SELECT * FROM job where id='$id'";
       $sql=$con->query($sql);
       $sql=mysqli_fetch_assoc($sql);
       return !empty($sql);
   }
   function get_by_id($id)
   {
       global $con;
       $sql="SELECT * FROM job where id='$id'";
       $sql=$con->query($sql);
       $sql=mysqli_fetch_assoc($sql);
       $this->title=$sql['title'];
       $this->categorie=$sql['categorie'];
       $this->j_type=$sql['j_type'];
       $this->dscrpt=$sql['dscrpt'];
       $this->skill=$sql['skill'];
       $this->post_date=$sql['post_date'];	
       $this->last_view=$sql['last_view'];	
       $this->sale=$sql['sale'];	
       $this->experience=$sql['experience'];	
       $this->gender=$sql['gender'];	
       $this->qual=$sql['qual'];	
       $this->lang=$sql['lang'];	
       $this->career=$sql['career'];
       return $sql['empid'];
   }
   function get_job_array($id)
   {
       global $con;
       $sql="SELECT id FROM job where empid='$id'";
       $sql=$con->query($sql);
       return $sql;
   }
   function get_count_job($id)
   {
       global $con;
       $sql="SELECT count(id) FROM job where empid='$id'";
       $sql=$con->query($sql);
       $sql=mysqli_fetch_assoc($sql);
       $sql=$sql['count(id)'];
       return $sql;
   }
       function get_title()
       {
           return $this->title;
       }
       function get_post_date()
       {
        $time = strtotime($this->post_date);

        $newformat = date('M d, Y',$time);
        
        return $newformat;
           }
        function get_about_date()
        {
           $date=abs(strtotime(date("d-m-Y"))-strtotime($this->post_date));
           $a=30*60*60*24;
           if($date>$a)
           {
             return $date/$a.' months';
           }
           else
           {
            $a=60*60*24;
            echo $date/$a.' days';
           }
           //return $months; 
        }
       function get_last_view()
       {
        $time = strtotime($this->last_view);

        $newformat = date('M d, Y',$time);
        
        return $newformat;
           
           }	
       function get_sale()
       {
           return $this->sale;
           }	
       function get_experience()
       {
           return $this->experience;
           }	
       function get_gender()
       {
           return $this->gender;
           }	
       function get_qual()
       {
           return $this->qual;
           }	
       function get_lang()
       {
           return $this->lang;
           }
           function get_lang_str()
           {
              switch($this->lang)
              {
                  case 0:return "Arabe";break;
                  case 1:return "Franche";break;
                  case 2:return 'English';break;
              }
          }	
          function get_career_str()
           {
              switch($this->lang)
              {
                  case 0:return "Intermediate";break;
                  case 1:return "Normal";break;
                  case 2:return 'Special';break;
                  case 3:return 'Experienced';break;
              }
          }	
       function get_career()
       {
           return $this->career;
           }
           function get_dscrpt()
       {
           return $this->dscrpt;
           }
           function get_skill()
       {
           return $this->skill;
           }
           function get_skill_array()
       {
           return explode("|",$this->skill);
           }
           function get_categorie()
       {
           return $this->categorie;
           }
          function get_j_type()
       {
           return $this->j_type;
           }
           function get_type_j()
          {
              switch($this->j_type)
              {
               case 0:return 'Freelance';
               case 1:return 'Full Time';
               case 2:return 'Internship';
               case 3:return 'Part Time';
               case 4:return 'Temporary';
               case 5:return 'Volunteer';
              }
           }
           function get_job_css()
          {
              switch($this->j_type)
              {
               case 0:return 'job-free';
               case 1:return 'job-full';
               case 2:return 'job-inter';
               case 3:return 'job-part';
               case 4:return 'job-tem';
               case 5:return 'job-volun';
              }
           }
           function set_title($title)
           {
           global $con;
            $this->title=mysqli_real_escape_string($con,$title);
            $this->save_sql($this->title,'title');
           }
           function set_post_date($post_date)
           {
           global $con;
            $this->post_date=mysqli_real_escape_string($con,$post_date);
            $this->save_sql($this->post_date,'post_date');
           }	
           function set_last_view($last_view)
           {
           global $con;
            $this->last_view=mysqli_real_escape_string($con,$last_view);
            $this->save_sql($this->last_view,'last_view');
           }	
           function set_sale($last_view)
           {
           global $con;
            $this->sale=mysqli_real_escape_string($con,$last_view);
            $this->save_sql($this->sale,'last_view');
           }	
           function set_experience($experience)
           {
           global $con;
            $this->experience=mysqli_real_escape_string($con,$experience);
            $this->save_sql($this->experience,'experience');
           }	
           function set_gender($gender)
           {
           global $con;
            $this->gender=mysqli_real_escape_string($con,$gender);
            $this->save_sql($this->gender,'gender');
           }	
           function set_qual($qual)
           {
           global $con;
            $this->qual=mysqli_real_escape_string($con,$qual);
            $this->save_sql($this->qual,'qual');
           }	
           function set_lang($lang)
           {
           global $con;
            $this->lang=mysqli_real_escape_string($con,$lang);
            $this->save_sql($this->lang,'lang');
           }	
           function set_career($career)
           {
           global $con;
            $this->career=mysqli_real_escape_string($con,$career);
            $this->save_sql($this->career,'career');
           }
           function set_dscrpt($dscrpt)
           {
           global $con;
            $this->dscrpt=mysqli_real_escape_string($con,$dscrpt);
            $this->save_sql($this->dscrpt,'dscrpt');
           }
           function set_skill($skill)
           {
           global $con;
            $this->skill=mysqli_real_escape_string($con,$skill);
            $this->save_sql($this->skill,'skill');
           }
           function set_categorie($categorie)
           {
           global $con;
            $this->categorie=mysqli_real_escape_string($con,$categorie);
            $this->save_sql($this->categorie,'categorie');
           }
           function set_j_type($j_type)
           {
           global $con;
            $this->j_type=mysqli_real_escape_string($con,$j_type);
            $this->save_sql($this->j_type,'j_type');
           }
            function save_sql($var,$str)
            {
                global $id;
                global $con;
                $sql="UPDATE job SET '$var'='$str' where id='$id'";
                $sql=$con->query($sql);
            }
        }
?>