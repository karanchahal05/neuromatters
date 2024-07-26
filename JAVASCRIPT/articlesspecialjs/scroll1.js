var page = window.location.pathname;
var pageCheck = page.includes('index.php');

$(document).ready(function(){
  var scrollLink = $('.scroll');
  var headerHeight = $('#header').outerHeight();
  headerHeight = headerHeight + 10;
  scrollLink.click(function(e){
    if (pageCheck == true) {
      e.preventDefault();
      $('body, html').animate({
        scrollTop: $(this.hash).offset().top-headerHeight
      }, 1400)
    }
    else {
      window.location = '../index.php';
      setTimeout(function () {
        e.preventDefault();
        $('body, html').animate({
          scrollTop: $(this.hash).offset().top-headerHeight
        }, 1400)
      }, 5000);
    }
  });
});
