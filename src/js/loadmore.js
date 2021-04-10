import dotdotdot from './components/dotdotdot';
import masonry from './components/masonry';
import Isotope from 'isotope-layout';
import imagesLoaded from 'imagesloaded';


jQuery(function($){

  function isDoubleClicked(element) {
    //if already clicked return TRUE to indicate this click is not allowed
    if (element.data("isclicked")) return true;

    //mark as clicked for 1 second
    element.data("isclicked", true);
    setTimeout(function () {
        element.removeData("isclicked");
    }, 1000);

    //return FALSE to indicate this click was allowed
    return false;
  }

  $('.news-btn').click(function(){
    if (isDoubleClicked($(this))) return;
    
    var button = $(this),
        data = {
          'action': 'loadmore',
          'query': misha_loadmore_params.posts,
          'page' : misha_loadmore_params.current_page,
          'post' : 'news',
          'ppp' : 6,
        };

    $.ajax({
      url : misha_loadmore_params.ajaxurl,
      data : data,
      type : 'POST',
      beforeSend : function ( xhr ) {
        $('.loading').show();
      }
    }).done(function(data){
      if( data ) {
        $('.js-news-list').append(data);
        dotdotdot();
        misha_loadmore_params.current_page++;
        $('.loading').hide();
        
        if ( misha_loadmore_params.current_page == misha_loadmore_params.max_page )
          button.remove();
          $('.loading').hide();
      } else {
        button.remove();
        $('.loading').hide();
      }
    });
    
  });

  $('.js-staff-members-btn').click(function(){
    if (isDoubleClicked($(this))) return;

    var button = $(this),
        data = {
          'action': 'loadmore',
          'query': posts_myajax,
          'page' : current_page_myajax,
          'post' : 'staff',
        };

    $.ajax({
      url : misha_loadmore_params.ajaxurl,
      data : data,
      type : 'POST',
      beforeSend : function ( xhr ) {
        $('.loading').show();
      }
    }).done(function(data){
      if( data ) {
        $('.js-staff-members').append(data);
        dotdotdot();
        current_page_myajax++;
        $('.loading').hide();

        if ( current_page_myajax == max_page_myajax )
          button.remove();
          $('.loading').hide();
      } else {
        button.remove();
        $('.loading').hide();
      }
    });
  });

  $('.js-about-sdg-btn').click(function(){
    if (isDoubleClicked($(this))) return;

    var button = $(this),
        data = {
          'action': 'loadmore',
          'query': posts_sdg,
          'page' : current_page_sdg,
          'post' : 'sdg',
        };

    $.ajax({
      url : misha_loadmore_params.ajaxurl,
      data : data,
      type : 'POST',
      beforeSend : function ( xhr ) {
        $('.loading').show();
      }
    }).done(function(data){
      if( data ) {
        $('.about-sdg-block:nth-child(5)').css({'display':'block'});
        //let item = $(data).css('opacity','0');
        $('.js-about-sdg-news-list').append(data);
        //$('.about-sdg-block').css({'display':'block'});
        dotdotdot();
        
        
        // setTimeout(() => {
        //   //masonry();
        //   $('.about-sdg-block').css({'opacity':'1','transition-delay': '0s'});
        // }, 800);
        

        
        
        current_page_sdg++;
        $('.loading').hide();
        
        if ( current_page_sdg == max_page_sdg ) {
          console.log('equal');
          button.remove();
          $('.loading').hide();
        }

      } else {
        button.remove();
        $('.loading').hide();
      }
    });
  });

});
