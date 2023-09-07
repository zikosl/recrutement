<?php require_once $_SERVER['DOCUMENT_ROOT']."/recrutment/pages/manage_user/logout.php"; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT']."/recrutment/pages/php_verif/attachment/upload_img.php"; ?>
<div class="accordion f-raleway shadow-sm" id="info">
    <div class="card border-0 my-3 crt_up text-center">
         <form id='up' action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
           <div class="profile">
                <img src="<?php echo $exp->get_pic();?>" alt="">
            <div class="upload">
            <label for="us_im" class="btn btn-upload rounded"><span class="fas fa-plus"></span></label>
            <input type="file" name="us_im" id="us_im"  style="display:none;">
            </div>
           </div>
          </form> 
       <script>
       $("#us_im").on('change',function() {
          $("#up").submit();
       });
       </script>
        <div class="h2 f-saira l-spac-1 mt-3 text-center"><?php echo $exp->get_first().' '.$exp->get_last();?></div>
        <div class="ty_can"><?php echo $exp->get_job();?></div>
        <div class="linear mt-3"><i class="slimi-icon slimi-star"></i></div>
    </div>
    <div class="card border-0 my-3">
        <!--slimi-icon slimi-summary-->
         <a href="/recrutment/pages/manage_user/profile.php"><p class="manage active" >
         <i class="slimi-icon slimi-user"></i> Profile
         </p></a>
    </div>
    <div class="card border-0 my-3">
            <a href="/recrutment/pages/manage_user/resume.php"><p class="manage" >
            <i class="slimi-icon slimi-briefcase"></i> My Resume
            </p></a>
    </div>
    <div class="card border-0 my-3">
         <a href="/recrutment/pages/manage_user/shortlist.php"><p class="manage" >
         <i class="slimi-icon slimi-heart"></i> Shorlisted Job
         </p></a>
    </div>
    <div class="card border-0 my-3">
            <a href="/recrutment/pages/manage_user/applied.php"><p class="manage" >
            <i class="slimi-icon slimi-handshake"></i> Applied Job
            </p></a>
    </div>
    <div class="card border-0 my-3">
            <a href="/recrutment/pages/manage_user/job_alert.php"><p class="manage" >
            <i class="slimi-icon slimi-fax"></i> Job Alerts
            </p></a>
    </div>
    <div class="card border-0 my-3">
               <a><p class="manage" >
               <i class="slimi-icon slimi-pen"></i> Cv & Cover Letter
               </p></a>
    </div>
    <div class="card border-0 my-3">
               <a href="/recrutment/pages/manage_user/password.php"><p class="manage" >
               <i class="slimi-icon slimi-multimedia"></i> Change Password
               </p></a>
    </div>
    <div class="card border-0 my-3">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
                <a id='log_out'><p class="manage" >
               <i class="slimi-icon slimi-logout"></i> Logout
               </p></a></a>
               <button type="submit" style="position:absolute;opacity:0;" name="log_out"></button>
           </form>
    </div>
    <script>
    $("#log_out").on('click',function(){
            $(this).next().trigger("click");
    })
    </script>
</div>