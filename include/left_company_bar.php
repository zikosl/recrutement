<div class="accordion f-raleway shadow-sm" id="info">
<?php require_once $_SERVER['DOCUMENT_ROOT'].'\recrutment\pages\manage_user\logout.php';?>
<?php require_once $_SERVER['DOCUMENT_ROOT']."/recrutment/pages/php_verif/attachment/upload_img.php"; ?>        
        <div class="card border-0 my-3 text-center">
        <form id='up' action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
            <div class="profile">
                    <img src="<?php echo $exp->get_pic();?>" alt="">
                <div class="upload">
                <label for="co_im" class="btn btn-upload rounded"><span class="fas fa-plus"></span></label>
                <input type="file" name="co_im" id="co_im" style="display:none;">
                </div>
                <script>
       $("#co_im").on('change',function() {
          $("#up").submit();
       });
       </script>
            </div>
            </form>
            <div class="h2 mt-3 text-center f-quick f-500 text-secondary"><?php echo ucfirst($exp->get_first()).' '.ucfirst($exp->get_last());?></div>
            <div class="linear"><i class="slimi-icon slimi-star"></i></div>
        </div>
        <div class="card border-0 my-3">
            <!--slimi-icon slimi-summary-->
             <a href="/recrutment/pages/manage_company/setting.php"><p class="manage active" >
             <i class="slimi-icon slimi-office2"></i> Company Profile
             </p></a>
        </div>
        <div class="card border-0 my-3">
                <a href="/recrutment/pages/manage_company/job_manage.php"><p class="manage" >
                <i class="slimi-icon slimi-briefcase"></i> Manage Jobs
                </p></a>
        </div>
        <div class="card border-0 my-3">
                <a href="/recrutment/pages/manage_company/resume.php"><p class="manage" >
                <i class="slimi-icon slimi-resume"></i> Resumes
                </p></a>
        </div>
        <div class="card border-0 my-3">
                <a><p class="manage" >
                <i class="slimi-icon slimi-fax"></i> Packages
                </p></a>
        </div>
        <div class="card border-0 my-3">
                   <a href="/recrutment/pages/manage_company/add_job.php"><p class="manage" >
                   <i class="slimi-icon slimi-resume-1"></i> Post a New Job
                   </p></a>
        </div>
        <div class="card border-0 my-3">
                <a href="/recrutment/pages/manage_company/job_alert.php"><p class="manage" >
                <i class="slimi-icon slimi-alarm"></i> Notification
                </p></a>
        </div>
        <div class="card border-0 my-3">
                   <a href="/recrutment/pages/manage_company/password.php"><p class="manage" >
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