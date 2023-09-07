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
                <div class="p-3 comp-info mt-5">
                  <div class="h2 f-quick f-500 text-indigo"><i class="slimi-icon slimi-user font-weight-bold"></i>My Profile</div>
                  <div class="dropdown-divider mt-4"></div>
                  <div class="row my-5">
                      <div class="col-lg-6">
                                  <div class="form-group f-quick">
                                              <label class="f-open f-15" for="user">Your Name</label>
                                              <input type="text" id="user" class="form-control custom-in" placeholder="Alfred Romane">
                                  </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group f-quick">
                                    <label class="f-open f-15" for="user">Email</label>
                                    <input type="text" id="user" class="form-control custom-in" placeholder="user@exemple.com">
                        </div>
                      </div>
                  </div>
                  <div class="row my-5">
                      <div class="col-lg-6">
                                  <div class="form-group f-quick">
                                              <label class="f-open f-15" for="user">Phone</label>
                                              <input type="text" id="user" class="form-control custom-in" placeholder="0687122036">
                                  </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group f-quick f-500">
                            <label class="f-robot f-15" for="user">Date Of Birth:</label>
                        <div class="row mx-auto">
                            <div class="col-sm-4 px-1 qst">
                                   <select class="form-control custom-in">
                                      <option>dd</option>
                                      <option>dd</option>
                                   </select>
                           </div>
                             <div class="col-sm-4 px-1 qst">
                                     <select class="form-control custom-in">
                                        <option>mm</option>
                                        <option>mm</option>
                                     </select>
                             </div>
                             <div class="col-sm-4 px-1 qst">
                                   <select class="form-control custom-in">
                                      <option>yyyy</option>
                                      <option>yyyy</option>
                                   </select>
                           </div>
                        </div>
                        </div>
                      </div>
                  </div>
                  <div class="row my-5">
                    <div class="col-lg-6">
                                <div class="form-group f-quick">
                                            <label class="f-open f-15" for="user">Categorie</label>
                                            <input type="text" id="user" class="form-control custom-in" placeholder="web Devloper">
                                </div>
                   </div>
                   <div class="col-lg-6">
                      <div class="form-group f-quick">
                                  <label class="f-open f-15" for="user">Job Title</label>
                                  <input type="text" id="user" class="form-control custom-in" placeholder="15/9/2001">
                      </div>
                    </div>
                </div>
                  <div class="row my-5">
                      <div class="col-lg-12">
                               <div class="form-group f-quick">
                                         <label class="f-open f-15" for="skill">Categorie</label>
                                           <ul class="form-control  custom-in tag-list">
                                             <li class="addedTag">
                                                SEO
                                                <span class="tagRemove" onclick="$(this).parent().remove();">
                                                 x
                                             </span>
                                             <input type="hidden" value="photoh" name="tags[]">
                                           </li>
                                           <li><input type="text" id="skill" class="tag-in"></li>
                                         </ul>
                             </div>
                        </div>
                 </div>
                 <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="form-group f-quick">
                              <label for="dscrpt" class="f-open f-15">Description</label>
                              <textarea class="form-control custom-in" style="padding:30px" id="dscrpt" rows="7"></textarea>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="p-3 comp-info mt-5">
                <div class="h2 f-quick f-500 text-indigo"><i class="slimi-icon slimi-network"></i>User Contact</div>
                <div class="dropdown-divider mt-4"></div>
                <div class="row my-5">
                    <div class="col-lg-6">
                                <div class="form-group f-quick">
                                            <label class="f-open f-15" for="user">Country</label>
                                            <input type="text" id="user" class="form-control custom-in" placeholder="Algerie">
                                </div>
                   </div>
                   <div class="col-lg-6">
                      <div class="form-group f-quick">
                                  <label class="f-open f-15" for="user">Region</label>
                                  <input type="text" id="user" class="form-control custom-in" placeholder="Tebessa">
                      </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="form-group f-quick">
                                    <label class="f-open f-15" for="user">City / Town</label>
                                    <input type="text" id="user" class="form-control custom-in" placeholder="Tebessa">
                        </div>
                      </div>
                    <div class="col-lg-6">
                                <div class="form-group f-quick">
                                            <label class="f-open f-15" for="user">Postcode</label>
                                            <input type="text" id="user" class="form-control custom-in" placeholder="12000">
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
                                            <label class="f-open f-15" for="user">Facebook</label>
                                            <div class="custom-in">
                                                <input type="text" id="user" placeholder="facebook.com">
                                                <i class="fab fa-facebook-f"></i>
                                            </div>
                                </div>
                   </div>
                   <div class="col-lg-6">
                      <div class="form-group f-quick">
                                  <label class="f-open f-15" for="user">Google+</label>
                                  <div class="custom-in">
                                      <input type="text" id="user" placeholder="google.com">
                                      <i class="fab fa-google-plus-g"></i>
                                  </div>
                      </div>
                   </div>
                </div>
                   <div class="row mt-5 mb-3">
                      <div class="col-lg-6">
                                  <div class="form-group f-quick">
                                              <label class="f-open f-15" for="user">Twitter</label>
                                              <div class="custom-in">
                                                  <input type="text" id="user" placeholder="twitter.com">
                                                  <i class="fab fa-twitter"></i>
                                              </div>
                                  </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group f-quick">
                                    <label class="f-open f-15" for="user">LinkedIn</label>
                                    <div class="custom-in">
                                        <input type="text" id="user" placeholder="linkedin.com">
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
                              <label class="f-robot f-15" for="user">Experience</label>
                              <select class="form-control custom-in">
                                  <option>5 Years</option>
                                  <option>5 Years</option>
                               </select>
                          </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group f-quick f-500 oth">
                            <label class="f-robot f-15" for="user">Age</label>
                            <select class="form-control custom-in">
                                <option>25</option>
                                <option>25</option>
                             </select>
                        </div>
                     </div>
                  </div>
                     <div class="row mt-5 mb-3">
                        <div class="col-lg-6">
                            <div class="form-group f-quick f-500 oth">
                                <label class="f-robot f-15" for="user">Current Salary($)</label>
                                <select class="form-control custom-in">
                                    <option>2500</option>
                                    <option>2500</option>
                                 </select>
                            </div>
                       </div>
                       <div class="col-lg-6">
                          <div class="form-group f-quick f-500 oth">
                              <label class="f-robot f-15" for="user">Expected Salary($)</label>
                              <select class="form-control custom-in">
                                  <option>4500</option>
                                  <option>4500</option>
                               </select>
                          </div>
                       </div>
                  </div>
                  <div class="row mt-5 mb-3">
                        <div class="col-lg-6">
                            <div class="form-group f-quick f-500 oth">
                                <label class="f-robot f-15" for="user">Languages</label>
                                <select class="form-control custom-in">
                                    <option>Arabe</option>                                    
                                    <option>English</option>
                                 </select>
                            </div>
                       </div>
                       <div class="col-lg-6">
                          <div class="form-group f-quick f-500 oth">
                              <label class="f-robot f-15" for="user">Education Levels</label>
                              <select class="form-control custom-in">
                                  <option>Faculte</option>
                                  <option>Faculte</option>
                               </select>
                          </div>
                       </div>
                  </div>
                </div>
              <div class="row my-5 float-right">
                  <button class="btn  f-open btn-outline-rose float-right">Save changes</button>
               </div>
          </div>
        </div>
    </div>
        <?php include $_SERVER['DOCUMENT_ROOT']."/recrutment/include/footer.html";?>
        <script src="../../js/left_user_bar.js"></script>
    <script src="../../js/circle-progress.min.js"></script>
    <script>
        $("#skill").on('keypress',function(e) {
               if(e.which == 13) {
                             x='<li class="addedTag">'+
                                                     $(this).val()+
                                                     '<span class="tagRemove" onclick="$(this).parent().remove();">'
                                                      +'x'
                                                  +'</span>'
                                                  +'<input type="hidden" value="photoh" name="tags[]">'
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