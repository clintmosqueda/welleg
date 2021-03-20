jQuery(function($){

  $('.news-btn').click(function(){
    console.log('click');
    var button = $(this),
        data = {
      'action': 'loadmore',
      'query': misha_loadmore_params.posts,
      'page' : misha_loadmore_params.current_page
    };

    $.ajax({
      url : misha_loadmore_params.ajaxurl,
      data : data,
      type : 'POST',
      success : function( data ){
        if( data ) {
          $('.js-news-list').append(data);
          misha_loadmore_params.current_page++;

          if ( misha_loadmore_params.current_page == misha_loadmore_params.max_page )
            button.remove();
        } else {
          button.remove();
        }
      }
    });
  });



  $('.js-staff-members-btn').click(function(){
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
        // beforeSend : function ( xhr ) {
        //   button.text('Loading...');
        // },
        success : function( data ){
          if( data ) {
            $('.js-staff-members').append(data);
            current_page_myajax++;

            if ( current_page_myajax == max_page_myajax )
              button.remove();
          } else {
            button.remove();
          }
        },
      });
    });

});
