/**
 * Created by LX on 2017/9/26.
 */
$(function () {
    //console.log(location.pathname);
    //导航栏点击变色
    $('.nav-pills').find('li').each(function () {
         var a = $(this).children();
         if ($(a).attr('href') === location.pathname) {
             $(this).addClass('active');
         } else {
             $(this).removeClass('active');
         }
    });


});