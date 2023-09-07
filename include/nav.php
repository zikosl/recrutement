<nav id="nav" class="py-sl-3 navbar navbar-expand-xl navbar-dark bg-trans px-2 p-3 w-100 animated position-absolute fadeIn faster m-auto" style="z-index:66">
<?php require_once $_SERVER['DOCUMENT_ROOT']."/recrutment/pages/php_verif/manage_log_register/db.php"; ?>       
<a class="navbar-brand" href="/recrutment/">
                    recruit<span>me</span>
        </a>
       <button class="navbar-toggler shadow-sm py-1" type="button" data-toggle="collapse" data-target="#navContent" >
         <span id='menu' class="fas fa-bars " style="font-size:28px"></span>
       </button>
      <div class="collapse navbar-collapse text-center" id="navContent">
         <ul class="navbar-nav text-center mx-auto f-open">
             <li class="nav-item mx-2"><a class="nav-link px-4 n-l" href="/recrutment/index.php">Home</a><hr class="nav-hr"></li>
             <li class="nav-item mx-2"><a class="nav-link n-l  px-4" href="/recrutment/index.php#categorie">Categorie</a><hr class="nav-hr"></li>
             <li class="nav-item mx-2"><a class="nav-link n-l  px-4" href="/recrutment/index.php#jobs">Recent</a><hr class="nav-hr"></li>
             <li class="nav-item mx-2"><a class="nav-link n-l  px-4" href="pages/entrprise.html">Enterprise</a><hr class="nav-hr"></li>
             <li class="nav-item mx-2"><a class="nav-link px-4 n-l" href="#">Job</a><hr class="nav-hr"></li> 
        </ul>
        <?php
        if(isset($_SESSION))
        {
        if(!empty($_SESSION['type'])&&$_SESSION['type']=="can")
        {
        }
        else
        {
          ?>
                  <a role="button_cj" href="/recrutment/pages/manage_company/add_job.php" class="btn btn-outline-job text-left shadow-sm f-robot mx-2"><i class="la la-plus"></i>&nbsp;Add Job</a>
          <?php
        }
        }
        else
        {
        ?>
        <a role="button" href="/recrutment/pages/manage_company/add_job.php" class="btn btn-outline-job text-left shadow-sm f-robot mx-2"><i class="la la-plus"></i>&nbsp;Add Job</a>
        <?php
        }
        if(!isset($_SESSION['id']))
        {
        ?>
        <a role="button" href="/recrutment/pages/log.php" class="btn btn-outline-get-started text-left shadow-sm f-raleway mx-2" ><i class="la la-user"></i>&nbsp;Log-in</a>
        <a role="button" href="/recrutment/pages/sign.php" class="btn btn-outline-get-started text-left shadow-sm f-raleway mx-2" ><i class="la la-user-plus"></i>&nbsp;Register</a>
        <?php
        }
        else
        {
          if(isset($exp))
         {
           $img=$exp->get_pic();
           $name_of=ucfirst($exp->get_first()).' '.ucfirst($exp->get_last());
         }
         else
         {
           $pid=$_SESSION['id'];
           $sql="SELECT pic,first_n,last_n from register where id='$pid'";
           $sql=$con->query($sql);
           $sql=mysqli_fetch_assoc($sql);
           $img=$sql['pic'];
           $name_of=ucfirst($sql['first_n']).' '.ucfirst($sql['last_n']);
         }
         {

         }
        ?>
        <a role="button" href="/recrutment/pages/manage_user/profile.php" class="btn btn-outline-get-started text-left f-raleway mx-2 border-0 my-auto rounded " > <img src="<?php echo $img;?>" class="shadow-sm m-1 rounded-circle" width="35" height="35"><span><?php echo $name_of;?></span></a>
        <a role="button" href="\recrutment\pages\manage_user\logout.php?log_out=yes" class="btn btn-outline-get-started text-left f-raleway mx-2 rounded-0 border-top-0 border-right-0 border-left-0" ><i class="slimi-icon slimi-logout"></i>&nbsp;Log-Out</a>
        <?php
        }?>
        </div>
      </nav>