<?php require_once $_SERVER['DOCUMENT_ROOT'].'\recrutment\pages\php_verif\attachment\find.php';?>
<?php 
if(!isset($_SESSION))
{
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recherche</title>
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../line-awesome/css/line-awesome.css">
    <link rel="stylesheet" href="../sl_fonts/sl_font.css">
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/checkbox.css">
    <link rel="stylesheet" href="../css/radio.css">
    <link rel="stylesheet" href="../css/view_style.css">
    <link rel="shortcut icon" href="/recrutment/icon.png">
    <style>
      .recherch-bar
      {
        width: 75%;
        margin: auto;
        margin-top: -70px;
      }
     .recherch-bar input
     {
      border: 2px solid #f2f2f2 !important;
      box-shadow: none !important;
      font-family: 'Quicksand', sans-serif;
      font-weight: 500;
     } 
     .recherch-bar button
     {
       background: #fff !important;
       background-image: none !important;
       border:  2px solid #f2f2f2 !important
     }
     .recherch-bar button i
     {
       color: #9733ee
       
     }
    .recherch-bar>.display-4
    {
      display: none;
    }
    .recherch-bar>h5
    {
      display: none
    }
    .bg-white-costum
    {
      background: white;
      border-radius: 0 !important;
      box-shadow:2px 2px 0.25rem 0.125rem rgba(0, 0, 0,.1);
    }
    .container>.row>.col-lg-4
    {
      padding-top: 57px !important
    }
    .container>.row>.col-lg-8
    {
      padding-top: 25px !important
    }
    .linear
    {
       color: white;
    }
    .linear::after,.linear::before
    {
      background: white
    }
#answers,#loc {
    position: absolute;
    top: 60px;
    background: #ffffffee;
    z-index: 22;
    height: 150px;
    overflow-y: auto;
    border-radius: 8px;
    padding: 20px;
    text-align: center;
    width: 100%;
    display: none;
}
#loc
{
  top: 133px
}
#answers>p,#loc>p
{
  padding: 13px 3px;
  margin: 0 auto;
  transition: all .4s;
  color: #888;
  cursor: pointer;
  font-size: 15px;
  letter-spacing:.7px;
}
#answers>hr,#loc>hr
{
  transition: all .4s;
}
#answers>p:hover,#loc>p:hover
{
  color: #f55;
  box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)
}
#answers p.active~#answers hr,#loc p.active~#loc hr
{
  border-top-color: #ff5555cc;
}
#answers::-webkit-scrollbar,#loc::-webkit-scrollbar {
  width: 8px;
}

#answers::-webkit-scrollbar-button,#loc::-webkit-scrollbar-button {
  display: none;
}
#answers::-webkit-scrollbar-thumb,#loc::-webkit-scrollbar-thumb {
  background: #c99df0;
  border-radius: 8px;
}
#answers::-webkit-scrollbar-track-piece,#loc::-webkit-scrollbar-track-piece {
  background: 0 0;
}
.pile_link
{
  padding: 7px 12px;
  text-align: center;
  background: #8b91dd;
  box-shadow: 0 .125rem .25rem rgba(0,0,0,.075);
  border-top: 2px solid white;
  border-bottom: 2px solid white;
  font-family: "Roboto",sans-serif;
  font-size: 18px;
 
}
.pile_link a
{
  padding: 20px 25px ;
  margin: auto 30px;
  color: white;
  text-decoration: none;
}
.pile_link i
{
  color: white;
}
    </style>
</head>
<body  style="overflow-x:hidden">
<?php 
        $cbr="Recrut Lorsim";
        $x=false; ?>
        <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/nav.php";?>
        <div class="jumbotron jumbotron-fluid m-0 bg-dark" style="height:270px">
            <div class="display-4 text-white text-center f-quick f-500">Find Job</div>
            <div class="linear"><i class="slimi-icon slimi-star"></i></div>
        </div>
        <div class="pile_link"><a href="">Home</a><i class="slimi-icon slimi-arrow-right2"></i><a href="#">View</a></div>
        <?php #include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/recherche.php";?>
<div class="container">
      <div class="row mx-auto no-gutters mt-0">
          <aside class="col-lg-4 column border-right">
            <form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post" autocomplete="off">
              <div class="widget">
                <div class="search_widget_job">
                  <div class="field_w_search">
                    <input type="text" id="show" name="key" value="<?php if(isset($_POST['key'])){echo $_POST['key'];}?>" placeholder="Search Keywords">
                    <i class="la la-search"></i>
                  </div><!-- Search Widget -->
                  <div id="answers" class="shadow-sm f-robot f-300">
                  </div>
                  <div class="field_w_search">
                    <input type="text" id="get_loc" name="loc" value="<?php if(isset($_POST['loc'])){echo $_POST['loc'];}?>"  placeholder="All Locations">
                    <i class="la la-map-marker"></i>
                  </div><!-- Search Widget -->
                  <div id="loc" class="shadow-sm f-robot f-300">
                  </div>
                  <div class="field_w_search w-75 ml-lg-5">
                    <input type="submit" class="f-500 f-quick" style="font-size:17px;letter-spacing:.8px;color: #ff43d0;" value="Find" name="find">
                  </div><!-- Search Widget -->
                </div>
              </div>
              <script>
              $("#show").on("keyup",function(){
                $("#answers").css('display','block');
                   var x=$(this).val();
                $.ajax({
                  url:'php_verif/to_verfie/find_title.php?q='+x,
                  type:'get',
                  success: function(response) {
                  $('#answers').html(response);
                  }
                })
              })
              </script>
              <script>
              $("#get_loc").on("keyup",function(){
                $("#loc").css('display','block');
                   var x=$(this).val();
                $.ajax({
                  url:'php_verif/to_verfie/find_loc.php?q='+x,
                  type:'get',
                  success: function(response) {
                  $('#loc').html(response);
                  }
                })
              })
              </script>
              <script>
              $(document).ready(function(){
               $("#answers").on("click",'p',function(){
                $("#show").val($(this).text());
                $("#answers").css('display','none');
              })
              $('body').not('.search_widget_job').not("#answers").on('click',function()
              {
                $("#answers").css('display','none');
              })
              }) 
              </script>
               <script>
              $(document).ready(function(){
               $("#loc").on("click",'p',function(){
                $("#get_loc").val($(this).text());
                $("#loc").css('display','none');
              })
              $('body').not('.search_widget_job').not("#loc").on('click',function()
              {
                $("#loc").css('display','none');
              })
              }) 
              </script>
              <div class="widget">
                <h3 class="sb-title open">Date Posted</h3>
                <div class="posted_widget radio" style="">
                 <input type="radio" name="date" value="1" <?php if(isset($_POST['date'])&&$_POST['date']==1){echo "checked";}?> id="wwqe"><label for="wwqe">Last 24 hours</label><br>
                 <input type="radio" name="date" value="2" <?php if(isset($_POST['date'])&&$_POST['date']==2){echo "checked";}?> id="erewr"><label for="erewr">Last 7 days</label><br>
                 <input type="radio" name="date" value="3" <?php if(isset($_POST['date'])&&$_POST['date']==3){echo "checked";}?> id="qwe"><label for="qwe">Last 14 days</label><br>
                 <input type="radio" name="date" value="4" <?php if(isset($_POST['date'])&&$_POST['date']==4){echo "checked";}?> id="wqe"><label for="wqe">Last 30 days</label><br>
                 <input type="radio" name="date" value="5" <?php if(isset($_POST['date'])&&$_POST['date']==5){echo "checked";}?> id="qweqw"><label class="nm" for="qweqw">All</label><br>
                </div>
              </div>
              <div class="widget">
                <h3 class="sb-title open">Job Type</h3>
                <div class="type_widget" style="">
                 <p class="rose checkbox"><input type="checkbox" name="job[]" <?php if(isset($_POST['job'])&&in_array(0,$_POST['job'])){echo "checked";}?> value="0" id="33r"><label for="33r">Freelance (9)</label></p>
                 <p class="indigo checkbox"><input type="checkbox" name="job[]" <?php if(isset($_POST['job'])&&in_array(1,$_POST['job'])){echo "checked";}?> value="1" id="dsf"><label for="dsf">Full Time (8)</label></p>
                 <p class="pink checkbox"><input type="checkbox" name="job[]" <?php if(isset($_POST['job'])&&in_array(2,$_POST['job'])){echo "checked";}?> value="2" id="sdd"><label for="sdd">Internship (8)</label></p>
                 <p class="vert checkbox"><input type="checkbox" name="job[]" <?php if(isset($_POST['job'])&&in_array(3,$_POST['job'])){echo "checked";}?> value="3" id="sadd"><label for="sadd">Part Time (5)</label></p>
                 <p class="green checkbox"><input type="checkbox" name="job[]" <?php if(isset($_POST['job'])&&in_array(4,$_POST['job'])){echo "checked";}?> value="4" id="assa"><label for="assa">Temporary (5)</label></p>
                 <p class="blue checkbox"><input type="checkbox" name="job[]" <?php if(isset($_POST['job'])&&in_array(5,$_POST['job'])){echo "checked";}?> value="5" id="ghgf"><label for="ghgf">Volunteer (8)</label></p>
                </div>
              </div>
              <div class="widget">
                <h3 class="sb-title <?php if(isset($_POST['categorie']))echo'open';else echo'closed';?>">Specialism</h3>
                <div class="specialism_widget" style="">
                 <div class="field_w_search">
                    <input type="text" id='spl_tt' placeholder="Search Spaecialisms">
                  </div><!-- Search Widget -->
                  <div class="simple-checkbox scrollbar ss-container">
                    <div class="ss-wrapper">
                      <div class="ss-content">
                      <?php
                     $requet="SELECT categorie,count(id) from job GROUP BY categorie";
                     $requet=$con->query($requet);
                     while($val=mysqli_fetch_array($requet))
                     {$x=str_replace(" ","",$val['0']);
                      $x=str_shuffle($x);
                      $x=substr($x,0,3);
                      $x=strtolower($x);
                    ?>
                       <p class="checkbox"><input type="checkbox" name="categorie[]"  <?php if(isset($_POST['categorie'])&&in_array($val['0'],$_POST['categorie'])){echo "checked";}?> id="<?php echo $x;?>" value="<?php echo $val[0];?>"><label for="<?php echo $x;?>"><?php echo $val[0].' ('.$val[1].')';?></label></p>
                     <?php }?>
                     </div>
                </div>
                <script>
                  $('#spl_tt').on('keyup',function(){
                    $("[name=splism]").parent().show();
                    var tt_s=$(this).val();
                        var spm=$("[name=splism]").next();
                        spm.each(function( i,val ) {
                          var gh=$(this).text();
                        if(gh.toLowerCase().indexOf(tt_s.toLowerCase())==-1)
                        {
                          $(this).parent().hide();  
                        }
                      }); 
                  })        
                </script>
                <div class="ss-scroll" style="height: 0%; top: 0%; right: -354px;"></div></div>
                </div>
              </div>
              <div class="widget">
                <h3 class="sb-title <?php if(isset($_POST['sale']))echo'open';else echo'closed';?>">Offerd Salary</h3>
                <div class="specialism_widget">
                  <div class="simple-checkbox">
                  <?php
                     $requet="SELECT max(sale),min(sale) from job";
                     $requet=$con->query($requet);
                     $requet=mysqli_fetch_array($requet);
                     $x=(int)$requet[1];
                     $y=(int)$requet[0];
                    ?>
                   <p class="checkbox gray"><input type="checkbox" name="sale[]" value="1_<?php  echo $x;echo"_";echo intdiv($x+intdiv($x+$y,2),2);?>" <?php if(isset($_POST['sale'])&&in_array(1,$_POST['sale'])){echo "checked";}?> id="1"><label for="1"><?php echo $x;echo" Year to ";echo intdiv($x+intdiv($x+$y,2),2);echo' Year';?></label></p>
                   <p class="checkbox gray"><input type="checkbox" name="sale[]" value="2_<?php  echo intdiv($x+intdiv($x+$y,2),2);echo"_";echo intdiv($x+$y,2)?>" <?php if(isset($_POST['sale'])&&in_array(2,$_POST['sale'])){echo "checked";}?> id="2"><label for="2"><?php echo intdiv($x+intdiv($x+$y,2),2);echo" Year to ";echo intdiv($x+$y,2);echo' Year';?></label></p>
                   <p class="checkbox gray"><input type="checkbox" name="sale[]" value="3_<?php  echo intdiv($x+$y,2);echo"_";echo intdiv($y+intdiv($x+$y,2),2)?>" <?php if(isset($_POST['sale'])&&in_array(3,$_POST['sale'])){echo "checked";}?> id="3"><label for="3"><?php echo intdiv($x+$y,2);echo" Year to ";echo intdiv($y+intdiv($x+$y,2),2);echo' Year';?></label></p>
                   <p class="checkbox gray"><input type="checkbox" name="sale[]" value="4_<?php  echo intdiv($y+intdiv($x+$y,2),2);echo"_";echo $y?>" <?php if(isset($_POST['sale'])&&in_array(4,$_POST['sale'])){echo "checked";}?> id="4"><label for="4"><?php echo intdiv($y+intdiv($x+$y,2),2);echo" Year to ";echo $y;echo' Year';?></label></p>
                  </div>
                </div>
              </div>
              <div class="widget">
                <h3 class="sb-title <?php if(isset($_POST['career']))echo'open';else echo'closed';?>">Career Level</h3>
                <div class="specialism_widget">
                  <div class="simple-checkbox">
                   <p class="checkbox gray"><input type="checkbox" name="career[]" value="0" <?php if(isset($_POST['career'])&&in_array(0,$_POST['career'])){echo "checked";}?> id="5"><label for="5">Intermediate</label></p>
                   <p class="checkbox gray"><input type="checkbox" name="career[]" value="1" <?php if(isset($_POST['career'])&&in_array(1,$_POST['career'])){echo "checked";}?> id="6"><label for="6">Normal</label></p>
                   <p class="checkbox gray"><input type="checkbox" name="career[]" value="2" <?php if(isset($_POST['career'])&&in_array(2,$_POST['career'])){echo "checked";}?> id="7"><label for="7">Special</label></p>
                   <p class="checkbox gray"><input type="checkbox" name="career[]" value="3" <?php if(isset($_POST['career'])&&in_array(3,$_POST['career'])){echo "checked";}?> id="8"><label for="8">Experienced</label></p>
                  </div>
                </div>
              </div>
              <div class="widget">
                <h3 class="sb-title <?php if(isset($_POST['exprt']))echo'open';else echo'closed';?>">Experince</h3>
                <div class="specialism_widget">
                  <div class="simple-checkbox">
                    <?php
                     $requet="SELECT max(experience) from job";
                     $requet=$con->query($requet);
                     $requet=mysqli_fetch_array($requet);
                     $requet=(int)$requet[0];
                    ?>
                   <p class="checkbox gray"><input type="checkbox" <?php if(isset($_POST['exprt'])&&in_array(0,$_POST['exprt'])){echo "checked";}?> name="exprt[]" value="0_<?php echo'0_';echo intdiv($requet,4);?>" id="9" ><label for="9"><?php   echo "0 Year to ";echo intdiv($requet,4);echo' Year';?></label></p>
                   <p class="checkbox gray"><input type="checkbox" <?php if(isset($_POST['exprt'])&&in_array(1,$_POST['exprt'])){echo "checked";}?> name="exprt[]" value="1_<?php echo intdiv($requet,4);echo'_';echo intdiv($requet,2);?>" id="10"><label for="10"><?php echo intdiv($requet,4);echo " Year to ";echo intdiv($requet,2);echo' Year';?></label></p>
                   <p class="checkbox gray"><input type="checkbox" <?php if(isset($_POST['exprt'])&&in_array(2,$_POST['exprt'])){echo "checked";}?> name="exprt[]" value="2_<?php echo intdiv($requet,2);echo'_';echo intdiv(3*$requet,4);?>" id="11"><label for="11"><?php echo intdiv($requet,2);echo " Year to ";echo intdiv(3*$requet,4);echo' Year';?></label></p>
                   <p class="checkbox gray"><input type="checkbox" <?php if(isset($_POST['exprt'])&&in_array(3,$_POST['exprt'])){echo "checked";}?> name="exprt[]" value="3_<?php echo intdiv(3*$requet,4);echo'_';echo $requet;?>" id="12"><label for="12"><?php echo intdiv(3*$requet,4);echo " Year to ";echo $requet;echo' Year';?></label></p>
                  </div>
                </div>
              </div>
              <div class="widget">
                <h3 class="sb-title <?php if(isset($_POST['gender']))echo'open';else echo'closed';?>">Gender</h3>
                <div class="specialism_widget">
                  <div class="simple-checkbox">
                   <p class="checkbox gray"><input type="checkbox" name="gender[]" value="0" <?php if(isset($_POST['gender'])&&in_array(0,$_POST['gender'])){echo "checked";}?> id="13"><label for="13">Male</label></p>
                   <p class="checkbox gray"><input type="checkbox" name="gender[]" value="1" <?php if(isset($_POST['gender'])&&in_array(1,$_POST['gender'])){echo "checked";}?> id="14"><label for="14">Female</label></p>
                  </div>
                </div>
              </div>
              <div class="widget">
                <h3 class="sb-title <?php if(isset($_POST['qual']))echo'open';else echo'closed';?>">Qualification</h3>
                <div class="specialism_widget">
                  <div class="simple-checkbox">
                  <?php
                     $requet="SELECT DISTINCT qual from job";
                     $requet=$con->query($requet);
                     while($requet_val=mysqli_fetch_array($requet))
                      {
                        $x=str_shuffle($requet_val['0']);
                        $x=substr($x,0,3);
                      ?>
                      <p class="checkbox gray"><input type="checkbox" <?php if(isset($_POST['qual'])&&in_array($requet_val['0'],$_POST['qual'])){echo "checked";}?> name="qual[]" value="<?php echo $requet_val['0'];?>" id="<?php echo$x;?>"><label for="<?php echo$x;?>"><?php echo $requet_val['0'];?></label></p>
                    <?php
                       }
                      ?>
                  </div>
                </div>
              </div>
              <div class="widget">
                <div class="subscribe_widget">
                  <h3>Still Need Help ?</h3>
                 <p>Let us now about your issue and a Professional will reach you out.</p>
               </div>
              </div>
            </form>
          </aside>

            <div class="col-lg-8 text-center">
              <div style="padding-left: 30px;">
               <div class="tags-job d-flex justify-content-between">
                        <ul class=" tag-list">
                          <?php 
                          $ary=array();
                          if(isset($_POST['key']))
                          {
                            $ary[]=$_POST['key'];
                          }
                          if(isset($_POST['qual']))
                          {
                            foreach($_POST['qual'] as $xyr)
                            {$ary[]="1".$xyr;}
                          }
                          if(isset($_POST['categorie']))
                          {
                            foreach($_POST['categorie'] as $xyr)
                            {$ary[]="2".$xyr;}
                          }
                          if(empty($ary)&&isset($_COOKIE['arr']))
                          {
                            $ary=unserialize($_COOKIE['arr']);
                          }
                          if(!empty($ary))
                          {
                           ?>
                           <?php foreach($ary as $arye)
                           {?>
                          <li class="addedTag">
                            <?php $arye=str_replace("1","",$arye);$arye=str_replace("2","",$arye);echo $arye;?>
                             <span class="tagRemove" onclick="$(this).parent().remove();">
                              x
                          </span>
                           <?php }}?>
                        </li>
                      </ul>
                      <div class="s-c-tag f-quick">
                        <a id="save"><i class="la la-cloud-download"></i>save</a>
                        <a id="clear"><i class="la la-trash-o"></i>clear</a>
                      </div>
                      <script>
                        $(document).ready(function(){
                        $('#save').on('click',function(){
                          var $c=<?php echo json_encode($ary);?>;
                          console.log($c);
                          $.post('php_verif/attachment/save_j.php', { name: $c } ).done(function( data ) {
                             console.log(data);
                           });
                        })
                        })
                      </script>
                       <script>
                        $(document).ready(function(){
                        $('#clear').on('click',function(){
                          $.post('php_verif/attachment/clear_j.php' ).done(function( data ) {
                             console.log(data);
                           });
                        })
                        })
                      </script>
               </div>
                <div class="justify-content-between d-flex sorted">
                  <span class="btn-email f-open" style="user-select:none;cursor:pointer"><a><i class="slimi-icon slimi-envelope"></i>Email Me job Like This</a></span>
                  <i>Sort By</i>
                 <div class="sorte d-flex justify-content-between  f-open">
                  <div class="dropdown">
                        <button class="btn btn-lg dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Row Number
                          <i class="la la-angle-down"></i>
                        </button>
                        <div class="dropdown-menu border border-top-0 animate fadeIn" aria-labelledby="dropdownMenu2" style="margin-top: 0;border-top-right-radius: 0;border-top-left-radius: 0;">
                          <button class="dropdown-item" type="button">Action</button>
                          <button class="dropdown-item" type="button">Another</button>
                          <button class="dropdown-item" type="button">Somethi</button>
                        </div>
                      </div>
                      <div class="dropdown">
                        <button class="btn btn-lg dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Most Resent
                          <i class="la la-angle-down"></i>
                        </button>
                        <div class="dropdown-menu border border-top-0" aria-labelledby="dropdownMenu2" style="margin-top: 0;border-top-right-radius: 0;border-top-left-radius: 0;">
                          <button class="dropdown-item" type="button">Action</button>
                          <button class="dropdown-item" type="button">Another</button>
                          <button class="dropdown-item" type="button">Somethi</button>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
              <?php   foreach($job as $i=>$j){  ?>
                        <div class="cards f-open">
                             <div class="jobs-logo text-left">
                              <div class="logo">
                                  <img src="../images/l1.png" alt="">
                                </div>
                                  <h3><a href="#" class="card-url"><?php echo $j->get_title();?></a></h3>
                                  <span><?php echo ucfirst($emp[$i]->get_first()).ucfirst($emp[$i]->get_last());?></span>
                                  <div class="jobs-place"><i class="la la-map-marker"></i><?php echo ucfirst($emp[$i]->get_region());?>, <?php echo ucfirst($emp[$i]->get_country());?></div>
                               </div>
                                <div class="jobs-info">
                                   <span class="<?php echo $j->get_job_css();?>"><?php echo $j->get_type_j();?></span>
                                   <span class="love-job">
                                      <i class="la la-heart-o"></i>
                                   </span>
                                   <i><?php $j->get_about_date();?> ago</i>
                                  </div>
                             </div>
              <?php }?>          
              </div>
            </div>
      </div>       
</div>   
<?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/footer.html";?>
            <script>
            $('.sb-title').on('click',function(){
                $(this).toggleClass('closed');
            })
            </script>
            <script>
            $(document).ready(function() {
            var r=$(".ss-content")[0].scrollHeight;
            r=232/4/r;
            $('.ss-scroll').css('height',r*100+'%')
            })
              $(document).ready(function() {
             var $dragging = null;
             
             $(document.body).on("mousemove", function(e) {
              if (document.selection) {
                 document.selection.empty()
                } else { 
                  window.getSelection().removeAllRanges()
                   }
                 var r=$(".ss-content")[0].scrollHeight;
                if ($dragging) {
                var $y=$('.ss-scroll')
                 if ($y.length) {
                  $y = $y.offset().top;
                 }
                 var $x=$('.ss-content').scrollTop()
                 var $y=$('.ss-content')
                 if ($y.length) {
                  $y = $y.offset().top;
                 }
                if ((e.pageY>=$y)&&(e.pageY<=$y+232-$('.ss-scroll').outerHeight()))
                {
                  $dragging.offset({
                      top: e.pageY,
                       right: e.pageX
                   });

                $('.ss-content').scrollTop(e.pageY-$y);
                }
                   
                    }
                  });


    $(document.body).on("mousedown", ".ss-scroll", function (e) {
        $dragging = $(e.target);
    });

    $(document.body).on("mouseup", function (e) {
        $dragging = null;
    });
});

            </script>
<script>
    if ($(window).width()<570)
    {
     $(".la-heart-o").css({'position':'absolute','top':'-171px','right':'-9px'})
    }
   $(".la-heart-o").on('click',function(){
     $(this).toggleClass('active');
   })
   $('.btn-email').on('click',function(){
     $(this).toggleClass('active');
   })
   $('.dropdown-item').on('click',function(){
    var x=$(this).parent().prev().html();
    x=x.slice(x.indexOf("<i"));
    $(this).parent().prev().html($(this).text()+x);
   })
</script>
<script>
$('.sb-title.open').next().slideDown();
$('.sb-title.closed').next().slideUp();
    $('.sb-title').on('click', function(){
        $(this).next().slideToggle();
        $(this).toggleClass('active');
        $(this).toggleClass('closed');
    });
</script>
<script>
$('input[type=radio]').on('change', function() {
    $(this).closest("form").submit();
});
$('input[type=checkbox]').on('change', function() {
    $(this).closest("form").submit();
});
</script>
</body>
</html>