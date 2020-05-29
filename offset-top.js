$("body").delegate(".custom_review_list", "click", function(){
      $('li.reviews_tab a').trigger('click');
      $('html, body').animate({scrollTop: $(".customer_reviews_box").offset().top-10}, 1000);
    });