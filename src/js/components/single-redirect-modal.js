export default function singleRedirectModal(postType, container) {
  let referrer = document.referrer;
  let finalReferrer = referrer.substring(0, referrer.lastIndexOf('/'));
  let postId = finalReferrer.split("/").pop();
  let newsArticles = document.querySelectorAll('.js-article-link')
  
  if($(container).find(`.${postType}-article-${postId}`).length === 0 && finalReferrer.includes(`/${postType}/`)) {
    $.ajax({
      type: 'POST',
      url: `${siteUrl}/wp-admin/admin-ajax.php`,
      dataType: "html", // add data type
      data: { action : 'get_ajax_posts', id: postId, post_type: postType },
      success: function( response ) {
          $('.js-ajax-dummy-post-list').append( response );
          document.querySelector(`.${postType}-article-link-${postId}`).click();
      }
    });
  } else {
    newsArticles.forEach((item) => {
      let href = item.href;
      let nextEl = item.nextElementSibling;
      if(finalReferrer.toLowerCase() === href) {
        setTimeout(() => {
          item.click();
        }, 500)
      }
    });
  }
  

  //console.log(image_ogp);
  if(image_ogp) {
    document.head.innerHTML += `<meta property="og:image" content='${image_ogp}' />`;
  }
  
  
}