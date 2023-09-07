                                       $('#save_awrd').on('click',function(e){
                                           e.preventDefault();
                                           var title=$('#aw_ttl').val();
                                           var from=$('#aw_f_d').val();
                                           var to=$('#aw_t_d').val();
                                           var dsc=$('#aw_dsc').val();
                                           //var data={title:title,from:from,to:to,univ:univ,dscrpt:dscrpt};
                                           //alert(JSON.stringify(data));
                                           $.ajax({
                                           type:'POST',
                                           url:'../php_verif/manage_user_profile/resume/awrd.php',
                                           dataType: "json",
                                           data:{exp_title:title,exp_from:from,exp_to:to,dsc:dsc}, 
                                           success :function(data) {
                                               if(data.code==404)
                                               {
                                                $('#aw_ttl').parent().children("p").text(data.msg1+" *");
                                                $('#aw_f_d').parent().children("p").text(data.msg3+" *");
                                                $('#aw_t_d').parent().children("p").text(data.msg2+" *");
                                                $('#aw_dsc').parent().children("p").text(data.msg4+" *");
                                               }
                                               else
                                               {
                                                   if(data.code==300)
                                                   {
                                                    console.log(data.msg);
                                                   }
                                                   else
                                                   {
                                                    $(this).parent().parent().parent().prev().trigger('click');
                                                    location.reload();
                                                   }
                                               }
                                            },
                                           
                                             }).fail(function(xhr, status, error) {
                                           alert( xhr.toString() +'     '+status+'    '+error.toString() );
                                           console.warn(xhr.responseText)
                                         })
                                       })
                                            $('#save_skill').on('click',function(e){
                                                e.preventDefault();
                                                var title=$('#skill_ttl').val();
                                                var prs=$('#skill_prs').val();
                                                //var data={title:title,from:from,to:to,univ:univ,dscrpt:dscrpt};
                                                //alert(JSON.stringify(data));
                                                $.ajax({
                                                type:'POST',
                                                url:'../php_verif/manage_user_profile/resume/skill.php',
                                                dataType: "json",
                                                data:{skl_title:title,skl_prs:prs}, 
                                                success :function(data) {
                                                    if(data.code==404)
                                                    {
                                                      $('#skill_ttl').parent().children("p").text(data.msg1+" *");
                                                      $('#skill_prs').parent().children("p").text(data.msg2+" *");
                                                    }
                                                    else
                                                    {
                                                        if(data.code==300)
                                                        {
                                                         console.log(data.msg);
                                                        }
                                                        else
                                                        {
                                                         $(this).parent().parent().parent().prev().trigger('click');
                                                         location.reload();
                                                        }
                                                    }
                                                 },
                                                
                                                  }).fail(function(xhr, status, error) {
                                                alert( xhr.toString() +'     '+status+'    '+error.toString() );
                                                console.warn(xhr.responseText)
                                              })
                                            })
                                                     $('#save_exprt').on('click',function(e){
                                                         e.preventDefault();
                                                         var title=$('#exp_ttl').val();
                                                         var from=$('#exp_f_d').val();
                                                         var to=$('#exp_t_d').val();
                                                         var comp=$('#c_p').val();
                                                         var dsc=$('#exp_dsc').val();
                                                         //var data={title:title,from:from,to:to,univ:univ,dscrpt:dscrpt};
                                                         //alert(JSON.stringify(data));
                                                         $.ajax({
                                                         type:'POST',
                                                         url:'../php_verif/manage_user_profile/resume/exprt.php',
                                                         dataType: "json",
                                                         data:{exp_title:title,exp_from:from,exp_to:to,company:comp,dsc:dsc}, 
                                                         success :function(data) {
                                                             if(data.code==404)
                                                             {
                                                              $('#exp_ttl').parent().children("p").text(data.msg1+" *");
                                                              $('#exp_f_d').parent().children("p").text(data.msg3+" *");
                                                              $('#exp_t_d').parent().children("p").text(data.msg2+" *");
                                                              $('#c_p').parent().children("p").text(data.msg4+" *");
                                                              $('#exp_dsc').parent().children("p").text(data.msg5+" *");
                                                             }
                                                             else
                                                             {
                                                                 if(data.code==300)
                                                                 {
                                                                  console.log(data.msg);
                                                                 }
                                                                 else
                                                                 {
                                                                  $(this).parent().parent().parent().prev().trigger('click');
                                                                  location.reload();
                                                                 }
                                                             }
                                                          },
                                                         
                                                           }).fail(function(xhr, status, error) {
                                                         alert( xhr.toString() +'     '+status+'    '+error.toString() );
                                                         console.warn(xhr.responseText)
                                                       })
                                                     })
                                                          $('#save_edu').on('click',function(e){
                                                              e.preventDefault();
                                                              var title=$('#ttl').val();
                                                              var from=$('#f_d').val();
                                                              var to=$('#t_d').val();
                                                              var univ=$('#u_n').val();
                                                              var qual=$('#qual').val();
                                                              var dsc=$('#dsc').val();
                                                              //var data={title:title,from:from,to:to,univ:univ,dscrpt:dscrpt};
                                                              //alert(JSON.stringify(data));
                                                              $.ajax({
                                                              type:'POST',
                                                              url:'../php_verif/manage_user_profile/resume/educ.php',
                                                              dataType: "json",
                                                              data:{title:title,from:from,to:to,univ:univ,qual:qual,dscrpt:dsc}, 
                                                              success :function(data) {
                                                                  if(data.code==404)
                                                                  {
                                                                    $('#ttl').parent().children("p").text(data.msg1+" *");
                                                                    $('#f_d').parent().children("p").text(data.msg3+" *");
                                                                    $('#t_d').parent().children("p").text(data.msg2+" *");
                                                                    $('#u_n').parent().children("p").text(data.msg4+" *");
                                                                    $('#qual').parent().children("p").text(data.msg5+" *");
                                                                    $('#dsc').parent().children("p").text(data.msg6+" *");
                                                                  }
                                                                  else
                                                                  {
                                                                      if(data.code==300)
                                                                      {
                                                                       alert(data.msg);
                                                                      }
                                                                      else
                                                                      {
                                                                       $(this).parent().parent().parent().prev().trigger('click');
                                                                       location.reload();
                                                                      }
                                                                  }
                                                               },
                                                                }).fail(function(xhr, status, error) {
                                                              alert( xhr.toString() +'     '+status+'    '+error.toString() );
                                                              console.warn(xhr.responseText)
                                                            })
                                                          })