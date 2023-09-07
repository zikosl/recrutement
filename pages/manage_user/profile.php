<?php
require_once '../php_verif/manage_user_profile/save.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/fonts.css">
    <link rel="stylesheet" href="../../sl_fonts/sl_font.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <link rel="stylesheet" href="../../line-awesome/css/line-awesome.css">
    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/left_user_bar.css">
    <link rel="shortcut icon" href="/recrutment/icon.png">
    <style>
        #nav
        {
            position: relative !important;
            background: linear-gradient(to right,#9733ee,#DA22FF) !important;
        }
    </style>
     <style>
        .custom-in
        {
          border:1px solid;
          border-color: #f4f4f4 !important;
          padding: 15px;
          height: 3.5rem;
          margin:.5rem auto;
          font-weight: 500;
          border-radius: 6px;
          transition: all .5s;
          font-size: 15px !important;
          position: relative;
          box-shadow: 0 .125rem .25rem #efefef77!important;
          cursor: text ;
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
    .qst:after
    {
    content: "\e964";
    font-family: icomoon;
    color: #aaaaaa;
    right: 15px;
    top: 25px;
    position: absolute;
    pointer-events: none;
    }
    select
    {
        -moz-appearance: window;
    -webkit-appearance: none;
    cursor: pointer !important;
    }
    .custom-in input
    {
      color: #495057      
    }
        </style>
</head>
  <body>
      <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/nav.php";?>
    <div class="container-fuild  mx-lg-5">
        <div class='row mx-auto'>
           <div class="col-lg-4 menus pl-lg-4 pr-lg-5">
               <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/left_user_bar.php";?>
               <div class="my-5 text-center position-relative">
                <div class="h2 f-quick f-500">Skills</div>
                <div class="h4 f-quick f-500" style="position: absolute;left: 151px;top: 108px;">85%</div>
                <div class="second circle" data-size="155" data-thickness="10">
                </div>
               </div>
            </div>
            <div class="col-lg-8">
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="p-3 comp-info mt-5">
                  <div class="h2 f-quick f-500 text-indigo"><i class="slimi-icon slimi-user font-weight-bold"></i>My Profile</div>
                  <div class="dropdown-divider mt-4"></div>
                  <div class="row my-5">
                      <div class="col-lg-6">
                                  <div class="form-group f-quick">
                                              <label class="f-open f-15">First Name</label>
                                              <input type="text" name="f_name" class="form-control custom-in" placeholder="Alfred Romane" value="<?php echo $exp->get_first();?>">
                                  </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group f-quick">
                                    <label class="f-open f-15">Last Name</label>
                                    <input type="text" name="l_name" class="form-control custom-in" placeholder="Alfred Romane" value="<?php echo $exp->get_last();?>">
                        </div>
                      </div>
                  </div>
                  <div class="row my-5">
                      <div class="col-lg-6">
                          <div class="form-group f-quick">
                                      <label class="f-open f-15">Email</label>
                                      <input type="text" name="user_mail" class="form-control custom-in" placeholder="user@exemple.com" value="<?php echo $exp->get_mail();?>">
                          </div>
                        </div>
                      <div class="col-lg-6">
                                  <div class="form-group f-quick">
                                              <label class="f-open f-15">Phone</label>
                                              <input type="text" name="user_phone" class="form-control custom-in" placeholder="0687122036" value="<?php echo $exp->get_phone();?>">
                                  </div>
                     </div>   
                  </div>
                  <div class="row my-5">
                      <div class="col-lg-6">
                          <div class="form-group f-quick f-500">
                              <label class="f-robot f-15">Date Of Birth:</label>
                          <div class="row mx-auto">
                            <script>
                              var x=30;
                              var f=0;
                              $(document).ready(function(){
                                $('#y').on('change',function(){
                                if (parseInt($(this).val())%4==0){
                                  f=0;
                                  }
                                  else
                                  {
                                    f=1;
                                  }
                              })
                              $('#m').on('change',function(){
                                var a=parseInt($(this).val());
                                if (a==2){
                                  if(f==0)
                                  {
                                    x=28;
                                  }
                                  else
                                  {
                                   x=29;
                                  }
                                 }
                              else if (a==1||a==3||a==5||a==7||a==8||a==10||a==12)
                              {
                                 x=31;
                              }
                              else
                              {
                                x=30;
                              }
                              $('#d').html('');
                                        for (var i=1;i<=x;i++)
                                        {
                                          $('#d').append("<option>"+i+"</option>");
                                        }
                              })
                              })
                              
                            </script>
                              <div class="col-sm-4 px-1 qst">
                                     <select id='d' name="d" class="form-control custom-in">
                                        <script>
                                        for (var i=1;i<=31;i++)
                                        {
                                          if(i==<?php echo $exp->get_birth_array()[1];?>)
                                          {
                                            document.writeln("<option selected>"+i+"</option>");
                                          }
                                          else
                                          {
                                            document.writeln("<option>"+i+"</option>");
                                          }
                                        }
                                        </script>
                                     </select>
                             </div>
                               <div class="col-sm-4 px-1 qst">
                                       <select id='m' name="m" class="form-control custom-in">
                                       <script>
                                        for (var i=1;i<=12;i++)
                                        {
                                          if(i==<?php echo $exp->get_birth_array()[2];?>)
                                          {
                                            document.writeln("<option selected>"+i+"</option>");
                                          }
                                          else
                                          {
                                            document.writeln("<option>"+i+"</option>");
                                          }
                                        }
                                        </script>
                                       </select>
                               </div>
                               <div class="col-sm-4 px-1 qst">
                                     <select id='y' name="y" class="form-control custom-in">
                                     <script>
                                        for (var i=1960;i<=2010;i++)
                                        {
                                          if(i==<?php echo $exp->get_birth_array()[0];?>)
                                          {
                                            document.writeln("<option selected>"+i+"</option>");
                                          }
                                          else
                                          {
                                            document.writeln("<option>"+i+"</option>");
                                          }
                                        }
                                        </script>
                                     </select>
                             </div>
                          </div>
                          </div>
                        </div>
                   <div class="col-lg-6">
                      <div class="form-group f-quick">
                                  <label class="f-open f-15">Job Title</label>
                                  <input type="text" name="user_job" class="form-control custom-in" value="<?php echo $exp->get_job();?>">
                      </div>
                    </div>
                </div>
                  <div class="row my-5">
                      <div class="col-lg-12">
                               <div class="form-group f-quick">
                                         <label class="f-open f-15" for="skill">Categorie</label>
                                           <ul class="form-control  custom-in tag-list">
                                             <?php 
                                                 $x=explode("|",$exp->get_categorie());
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
                        <!--<button id='re'>zz</button>
                        <script>
                        $('#re').on('click',function(){
                          x=$(".tag-list").children('li').text();
                          x=x.split('x');
                          alert(x[0]);
                        })
                        </script>-->
                 </div>
                 <!--<div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="form-group f-quick">
                              <label for="dscrpt" class="f-open f-15">Description</label>
                              <textarea class="form-control custom-in" style="padding:30px" id="dscrpt" rows="7"></textarea>
                        </div>
                    </div>
                  </div>
                  -->
              </div>
              <div class="p-3 comp-info mt-5">
                <div class="h2 f-quick f-500 text-indigo"><i class="slimi-icon slimi-network"></i>User Contact</div>
                <div class="dropdown-divider mt-4"></div>
                <div class="row my-5">
                    <div class="col-lg-6">
                                <div class="form-group f-quick">
                                            <label class="f-open f-15">Country</label>
                                            <input type="text" name="country" class="form-control custom-in" value="<?php echo $exp->get_country();?>" placeholder="<?php echo $exp->get_country();?>">
                                </div>
                   </div>
                   <div class="col-lg-6">
                      <div class="form-group f-quick">
                                  <label class="f-open f-15">Region</label>
                                  <input type="text" name="region" class="form-control custom-in" value="<?php echo $exp->get_region();?>" placeholder="<?php echo $exp->get_region();?>">
                      </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="form-group f-quick">
                                    <label class="f-open f-15">City / Town</label>
                                    <input type="text" name="city" class="form-control custom-in" value="<?php echo $exp->get_city();?>" placeholder="<?php echo $exp->get_city();?>">
                        </div>
                      </div>
                    <div class="col-lg-6">
                                <div class="form-group f-quick">
                                            <label class="f-open f-15">Postcode</label>
                                            <input type="text" name="post" class="form-control custom-in" value="<?php echo $exp->get_post_code();?>" placeholder="<?php echo $exp->get_post_code();?>">
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
                                                <input type="text" class="w-75 f-500" name="fb" value="<?php echo $exp->get_fb();?>" placeholder="<?php echo $exp->get_fb();?>">
                                                <i class="fab fa-facebook-f"></i>
                                            </div>
                                </div>
                   </div>
                   <div class="col-lg-6">
                      <div class="form-group f-quick">
                                  <label class="f-open f-15">Google+</label>
                                  <div class="custom-in">
                                      <input type="text" class="w-75 f-500" name="google" value="<?php echo $exp->get_google();?>" placeholder="<?php echo $exp->get_google();?>">
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
                                                  <input type="text" class="w-75 f-500" name="twitter" value="<?php echo $exp->get_twitter();?>" placeholder="<?php echo $exp->get_twitter();?>">
                                                  <i class="fab fa-twitter"></i>
                                              </div>
                                  </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group f-quick">
                                    <label class="f-open f-15">LinkedIn</label>
                                    <div class="custom-in">
                                        <input type="text" class="w-75 f-500" name="linked" value="<?php echo $exp->get_linked();?>" placeholder="<?php echo $exp->get_linked();?>">
                                        <i class="fab fa-linkedin-in"></i>
                                    </div>
                        </div>
                     </div>
                </div>
              </div>
              <div class="p-3 comp-info mt-5">
                  <div class="h2 f-quick f-500 text-indigo"><i class="slimi-icon slimi-star-1"></i>Other Information</div>
                  <div class="dropdown-divider mt-4"></div>
                  <div class="row mt-5 mb-3">
                      <div class="col-lg-6">
                          <div class="form-group f-quick f-500 oth">
                              <label class="f-robot f-15">Experience</label>
                              <div class="custom-in">
                                        <input type="text" class="w-100" name="" placeholder="5 Years" value="">
                              </div>
                          </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group f-quick f-500 oth">
                            <label class="f-robot f-15">Age</label>
                            <div class="custom-in">
                                        <input type="text" class="w-100" name="" placeholder="<?php echo $exp->get_age()." years";?>" value="<?php echo $exp->get_age()." years";?>">
                            </div>
                        </div>
                     </div>
                  </div>
                     <div class="row mt-5 mb-3">
                        <div class="col-lg-6">
                            <div class="form-group f-quick f-500 oth">
                                <label class="f-robot f-15">Current Salary($)</label>
                                <div class="custom-in">
                                        <input type="text" name="c_sale" class="w-100" placeholder="<?php echo $exp->get_c_sale(); ?>" value="<?php echo $exp->get_c_sale(); ?>">
                                </div>
                            </div>
                       </div>
                       <div class="col-lg-6">
                          <div class="form-group f-quick f-500 oth">
                              <label class="f-robot f-15">Expected Salary($)</label>
                              <div class="custom-in">
                                        <input type="text" name="e_sale" class="w-100" placeholder="<?php echo $exp->get_e_sale(); ?>" value="<?php echo $exp->get_e_sale(); ?>">
                              </div>
                          </div>
                       </div>
                  </div>
                  <div class="row mt-5 mb-3">
                        <div class="col-lg-6">
                            <div class="form-group f-quick f-500 oth">
                                <label class="f-robot f-15">Languages</label>
                                <select class="form-control custom-in" name="lang">
                                    <option value="0" <?php if($exp->get_lang()==0){echo 'selected';}?>>Arabe</option>
                                    <option value="1" <?php if($exp->get_lang()==1){echo 'selected';}?>>Franch</option>                                    
                                    <option value="2" <?php if($exp->get_lang()==2){echo 'selected';}?>>English</option>
                                 </select>
                            </div>
                       </div>
                       <div class="col-lg-6">
                           <div class="form-group f-quick f-500 oth">
                                <label class="f-robot f-15">Gander</label>
                                <select class="form-control custom-in" name="gender">
                                    <option value="1" <?php if($exp->get_gander()==1){echo 'selected';?>>Male</option>
                                    <option value="0" <?php } else{echo 'selected';}?>>Female</option>                                    
                                 </select>
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
        <script src="../../js/left_user_bar.js"></script>
    <script src="../../js/circle-progress.min.js"></script>
    <script>
    $('form').on('keyup keypress', function(e) {
     var keyCode = e.keyCode || e.which;
      if (keyCode === 13) { 
        e.preventDefault();
        return false;
      }
      });
    </script>
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
</body>
</html>