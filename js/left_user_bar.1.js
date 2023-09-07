$(".manage").on('click',function(){
                //$('.manage').next().removeClass("show");
                if(!$(this).next().hasClass("show"))
                {
                $('.manage').next().filter('.show').prev().trigger( "click" );
               // $('.manage').next().removeClass("show");
                    $('.manage').removeClass('active')
                    $(this).addClass('active');
                }
                else
                {
                    $(this).removeClass('active');
                }
                })
                