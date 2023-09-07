$( document ).ready(function() {
   var $w= $(window).width();
   if($w<1200)
{
    $('.inner-hero-body').children("#p-6").removeClass("p-6");
    $('#about').css('display','none');
}
if($w<600)
{
    $('.bg-img').children().first().addClass("display-10");
}
if($w<508)
{
    $('.bg-img').children().first().removeClass("p-5");
    $('.bg-img').children().first().addClass("py-4 text-center");
}
else
{
  //  $('.bg-img').children().first().addClass("p-5");
    $('.bg-img').children().first().removeClass("py-4 text-center");
}
window.onresize = function() {
    var $w= $(window).width();
   if($w<1200)
{
    $('.inner-hero-body').children("#p-6").removeClass("p-6");
    $('#about').css('display','none');
}
else
{
    $('.inner-hero-body').children("#p-6").addClass("p-6");
    $('#about').css('display','block');
}
if($w<600)
{
    $('.bg-img').children().first().addClass("display-10");
}
else
{
    $('.bg-img').children().first().removeClass("display-10");

}
if($w<508)
{
    $('.bg-img').children().first().removeClass("p-5");
    $('.bg-img').children().first().addClass("py-4 text-center");
}
else
{
   // $('.bg-img').children().first().addClass("p-5");
    $('.bg-img').children().first().removeClass("py-4 text-center");
}
}
});

$(".navbar-toggler").on('click',function(){
    $(this).children().toggleClass("deg90");
})
$("#sign").on('click',function(){
    $(this).toggleClass("fa-eye-slash");
       var $list=$(this).prev();
     if($list.attr("type")=="text")
          $list.attr("type","password");
     else
          $list.attr("type","text");
})
