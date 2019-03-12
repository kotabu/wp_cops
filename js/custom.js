jQuery(function($){
  var nav = 0;
  jQuery('#nav-button').click(function(){
    if ( nav == 0 ) {
      jQuery('.contact-information').show();
      jQuery('#header-nav').show();
      jQuery('body').animate({'top':'0px','right':'200px'},500);
      nav = 1;
    } else if ( nav == 1 ) {
      jQuery('body').animate({'top':'0px','right':'0px'},500);
      setTimeout(function(){
        jQuery('.contact-information').hide();
        jQuery('#header-nav').hide();
      },500);
      nav = 0;
    }
  });
});
