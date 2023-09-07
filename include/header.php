<?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/nav.php";?>
              <!----------------------------------------------------------->
              <div class="inner-hero f-raleway">                   
                   <div class="inner-hero-body row text-center w-100 m-auto">
                   <div class="col-md-12 m-auto text-left text-center p-7 pt-5 px-2" style="z-index:22">
                    <?php
                    if($x==true)
                    {
                      include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/recherche.php";
                    }
                    else
                    {
                      echo '<div class="text center display-4 f-quick font-weight-bold my-2 text-white" style="z-index:22">'.$cbr.'</div>';
                    }
                    ?>
                    </div>
                  </div>
                </div>    
