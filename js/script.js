/*========================================
ハンバーガー
========================================*/
jQuery('.drawer_icon').on('click',function(e){
    e.preventDefault();
    jQuery('.drawer_icon').toggleClass('is-active');
    jQuery('.drawer_content').toggleClass('is-active');
    return false;
});

/*========================================
スムーススクロール
========================================*/
jQuery('a[href^="#"]').on('click',function() {
    var id = jQuery(this).attr('href');
    var position = jQuery(id).offset().top;
    jQuery('html,body').animate({
        scrollTop: position
    },
    300);

    jQuery('.drawer_icon').removeClass('is-active');
    jQuery('.drawer_content').removeClass('is-active');
});

/*========================================
スクロールカーテン
========================================*/
$(function() {
    $(window).on('scroll resize', function() {
      var setHeight = 150;
      var wHeight = $(window).height();
      var scrollTop = $(window).scrollTop();
      $('.animate_mask, .animate_mask2').each(function() {
        var targetPosition = $(this).offset().top;
        if(scrollTop > targetPosition - wHeight + setHeight) {
          $(this).addClass('show');
        }
      })
    });
});
