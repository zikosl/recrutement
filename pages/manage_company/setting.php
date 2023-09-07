<?php 
if(!isset($_SESSION))
{
  session_start();
}
?>
<?php 
if(!isset($_SESSION['mail'])||$_SESSION['type']!="emp")
{
  header('Location: http://localhost/recrutment/pages/log.php');
}
else
{
$x=$_SESSION['mail'];
$id=$_SESSION['id'];
}
?>
<? require_once $_SERVER["DOCUMENT_ROOT"]."/recrutment/pages/manage_user/logout.php";?>
<?php
require_once '../php_verif/manage_company_profile/save.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company setting</title>
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/fonts.css">
    <link rel="stylesheet" href="../../sl_fonts/sl_font.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <link rel="stylesheet" href="../../line-awesome/css/line-awesome.css">
    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/popper.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/left_user_bar.css">
    <link rel="shortcut icon" href="/recrutment/icon.png">
    <style>
    .custom-in
    {
      border:1px solid;
      border-color: #efefef !important;
      padding: 15px;
      height: 3.5rem;
      margin:.5rem auto;
      font-weight: 500;
      border-radius: 7px;
      transition: all .5s;
      font-size: 15px !important;
      position: relative;
      box-shadow: 0 .125rem .25rem #efefef77!important;
      /* cursor: pointer; */
    }
    input
    {
      outline: none !important;
    }
    .form-group
    {
      position: relative;
    }
    .custom-in i
{
    position: absolute;
    font-size: 20px;
    color: #fb23ba;
    right: 17px;
}
.tag-list
  {
    display: inline-block;list-style-type: none;
  }
  .tag-in
  {
      background: transparent;
      border: none;
      border-left: 1px ridge #aaa;
      box-shadow: none !important;
      outline: none !important;
      padding-left: 17px
  }
  .tag-list> .addedTag{
  float: left;
    background: #f4f5fa;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    -ms-border-radius: 8px;
    -o-border-radius: 8px;
    border-radius: 8px;
    font-family: Open Sans;
    font-size: 13px;
    padding: 7px 17px;
    margin-right: 10px;
    margin-top: -4px;
    position: relative;
}
.tag-list > .addedTag > span {
    position: absolute;
    right: -6px;
    top: -5px;
    width: 16px;
    height: 16px;
    font-style: normal;
    background: #fb236a;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    color: #ffffff;
    text-align: center;
    line-height: 13px;
    font-size: 10px;
    font-family: Open Sans;
    cursor: pointer;
}
.text-indigo
  {
  color: #9733ee 
  }
  .text-pink
  {
  color: #da22ff;
  }
  .custom-in input
  {
    width: 80%;
    border: none;
    outline: none !important;
    box-shadow: none !important;
  }
  .btn-outline-rose
{
  color: #202020;
  border: 2px solid #fb23a1;
  font-size: 15px;
  padding: 11px 40px;
  border-radius: 5px;
  transition: all .2s;
  letter-spacing: 1px;
  transition: all .4s;
  box-shadow: none !important;
  outline: none !important;
}
.btn-outline-rose:hover
{
  color: white !important;
  background: #fb23a1;
}
.comp-info .h2 i {
    margin-right: 16px;
    font-size: 30px
                     
}
select {
  -webkit-appearance: none;
  cursor: pointer
}
    </style>
</head>
<body>
<?php 
$cbr="Recrut Lorsim";
$x=false; ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/header.php";?>
<div class="container-fuild  mx-lg-5">
    <div class='row'>
        <div class="col-lg-4 menus pl-lg-4 pr-lg-5">
        <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/left_company_bar.php";?>
        </div>
        <div class="col-lg-8 pl-lg-4">
          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
          <div class="p-3 comp-info mt-5">
            <div class="h2 f-quick f-500 text-indigo"><i class="slimi-icon slimi-buildings2"></i>Welcome <?php echo $exp->get_first();?></div>
            <div class="dropdown-divider mt-4"></div>
            <div class="row my-5">
                <div class="col-lg-6">
                            <div class="form-group f-quick">
                                        <label class="f-open f-15">Company Name</label>
                                        <input type="text" name="c_name" class="form-control custom-in" value="<?php echo $exp->get_first()." ".$exp->get_last();?>">
                            </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group f-quick">
                              <label class="f-open f-15">Allow In Search</label>
                              <select class="form-control custom-in" name="allow">
                                <option value="1" <?php if($exp->get_alow()==1){echo"selected";}?>>True</option>
                                <option value="0" <?php if($exp->get_alow()==0){echo"selected";}?>>False</option>
                              </select>
                  </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-6">
                            <div class="form-group f-quick">
                                        <label class="f-open f-15" name="f_date">Founded Date</label>
                                        <input type="text" class="form-control custom-in" name="founded" value="<?php echo $exp->get_f_date();?>">
                            </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group f-quick">
                              <label class="f-open f-15">Team Number</label>
                              <input type="text" class="form-control custom-in" name="team" value="<?php echo $exp->get_team();?>">
                  </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-12">
                         <div class="form-group f-quick">
                                   <label class="f-open f-15" for="skill">Categorie</label>
                                     <ul class="form-control  custom-in tag-list">
                                     <?php 
                                                 $x=explode("|",$exp->get_cate());
                                                 for($i=0;$i<sizeof($x);$i++)
                                                 {
                                                   $sj='';
                                                   if(!empty($x[$i]))
                                                   {
                                                   $sj.='<li class="addedTag">';
                                                   $sj.=$x[$i];
                                                   $sj.='<span class="tagRemove" onclick="$(this).parent().remove();">
                                                        x
                                                       </span>';
                                                   $sj.='<input type="hidden" value="';
                                                   $sj.=$x[$i];
                                                   $sj.='" name="tags['.$i.']"></li>';
                                                   echo $sj;
                                                   }
                                                 };
                                        ?>
                                     <li><input type="text" id="skill" class="tag-in"></li>
                                   </ul>
                       </div>
                  </div>
           </div>
           <div class="row mt-5">
              <div class="col-lg-12">
                  <div class="form-group f-quick">
                        <label for="dscrpt" class="f-open f-15">Description</label>
                        <textarea class="form-control custom-in" style="padding:30px" id="dscrpt" name="dscrpt" rows="7"><?php echo $exp->get_dscrpt();?></textarea>
                  </div>
              </div>
            </div>
        </div>
        <div class="p-3 comp-info mt-5">
          <div class="h2 f-quick f-500 text-indigo"><i class="slimi-icon slimi-network"></i>Company Contact</div>
          <div class="dropdown-divider mt-4"></div>
          <div class="row mt-5 mb-3">
              <div class="col-lg-6">
                          <div class="form-group f-quick">
                                      <label class="f-open f-15">Phone Number</label>
                                      <div class="custom-in">
                                          <input type="text"  value="<?php echo $exp->get_phone();?>" name="user_phone">
                                          <i class="slimi-icon slimi-technology"></i>
                                      </div>
                          </div>
             </div>
             <div class="col-lg-6">
                <div class="form-group f-quick">
                            <label class="f-open f-15">Email</label>
                            <div class="custom-in">
                                <input type="text"  value="<?php echo $exp->get_mail();?>" name="user_mail">
                                <i class="slimi-icon slimi-mail"></i>
                            </div>
                </div>
             </div>
          </div>
          <div class="row mb-5">
              <div class="col-lg-6 offset-lg-3">
                  <div class="form-group f-quick">
                              <label class="f-open f-15">Website</label>
                              <div class="custom-in">
                                  <input type="text" value="<?php echo $exp->get_site();?>" name="site">
                                  <i class="slimi-icon slimi-internet"></i>
                              </div>
                  </div>
                </div>
          </div>
          <div class="row my-5">
              <div class="col-lg-6">
                          <div class="form-group f-quick">
                                      <label class="f-open f-15">Country</label>
                                      <input type="text" class="form-control custom-in" name="country" value="<?php echo $exp->get_country();?>">
                          </div>
             </div>
             <div class="col-lg-6">
                <div class="form-group f-quick">
                            <label class="f-open f-15">Region</label>
                            <input type="text" class="form-control custom-in" name="region"  value="<?php echo $exp->get_region();?>">
                </div>
              </div>
          </div>
          <div class="row mt-5">
              <div class="col-lg-6">
                  <div class="form-group f-quick">
                              <label class="f-open f-15">City / Town</label>
                              <input type="text" class="form-control custom-in" name="city"  value="<?php echo $exp->get_city();?>">
                  </div>
                </div>
              <div class="col-lg-6">
                          <div class="form-group f-quick">
                                      <label class="f-open f-15">Postcode</label>
                                      <input type="text" class="form-control custom-in" name="post"  value="<?php echo $exp->get_post_code();?>">
                          </div>
             </div>
          </div>
        </div>
        <div class="p-3 comp-info mt-5">
          <div class="h2 f-quick f-500 text-indigo"><i class="slimi-icon slimi-heart"></i>Social Media</div>
          <div class="dropdown-divider mt-4"></div>
          <div class="row mt-5 mb-3">
              <div class="col-lg-6">
                          <div class="form-group f-quick">
                                      <label class="f-open f-15">Facebook</label>
                                      <div class="custom-in">
                                          <input type="text" name="fb" value="<?php echo $exp->get_fb();?>">
                                          <i class="fab fa-facebook-f"></i>
                                      </div>
                          </div>
             </div>
             <div class="col-lg-6">
                <div class="form-group f-quick">
                            <label class="f-open f-15">Google+</label>
                            <div class="custom-in">
                                <input type="text" name="google"  value="<?php echo $exp->get_google();?>">
                                <i class="fab fa-google-plus-g"></i>
                            </div>
                </div>
             </div>
          </div>
             <div class="row mt-5 mb-3">
                <div class="col-lg-6">
                            <div class="form-group f-quick">
                                        <label class="f-open f-15">Twitter</label>
                                        <div class="custom-in">
                                            <input type="text" name="twitter" value="<?php echo $exp->get_twitter();?>">
                                            <i class="fab fa-twitter"></i>
                                        </div>
                            </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group f-quick">
                              <label class="f-open f-15">LinkedIn</label>
                              <div class="custom-in">
                                  <input type="text" name="linked" value="<?php echo $exp->get_linked();?>">
                                  <i class="fab fa-linkedin-in"></i>
                              </div>
                  </div>
               </div>
          </div>
        </div>
        <div class="row my-5 float-right">
            <button class="btn  f-open btn-outline-rose float-right" type="submit" name="save">Save changes</button>
         </div>
        </form>
    </div>
  </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/footer.html";?>
<script>
      var i=<?php echo sizeof($x)-1;?>;
        $("#skill").on('keypress',function(e) {
               if(e.which == 13) {
                 i++;
                             x='<li class="addedTag">'+
                                                     $(this).val()+
                                                     '<span class="tagRemove" onclick="$(this).parent().remove();">'
                                                      +'x'
                                                  +'</span>'
                                                  +'<input type="hidden" value="'+$(this).val()+'" name="tags['+i+']">'
                                                +'</li>';
                                                $(this).val('');
                   $(x).insertBefore($(this).parent());
                  }
             });
          $(document).ready(function(){
                       $(".tag-list").not(".addedTag").on('click',function(){
                            $("#skill").trigger('focus')   
                        })
                      })
</script>
<script>
    $('form').on('keyup keypress', function(e) {
     var keyCode = e.keyCode || e.which;
      if (keyCode === 13) { 
        e.preventDefault();
        return false;
      }
      });
    </script>
    <script src="../../js/left_user_bar.js"></script>
</body>
</html>