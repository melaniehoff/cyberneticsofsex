
$(document).ready(function() {
    console.log('++ jquery is working heyyyyy')


  // set height of .accordion-item-content based on height of accordion-link-wrapper
  // to make the css transition dynamic without manual resizing
  $(".accordion-wrapper").hover(function() {
      var item = $(this).find('.accordion-item-content');
      var linkWrapper = $(this).find('.accordion-link-wrapper');
      var height = linkWrapper.height();
      var newHeight = height + 20;
      item.css('height', newHeight + 'px');
  }, function() {
      var item = $(this).find('.accordion-item-content');
      item.css('height', '0');
  });


    $(".accordion-link").click(function(event) {
          event.preventDefault();
          var link = $(this).data('link');
          console.log(link);
          window.location.replace(link);
    });



      $("#rsvp-link").hover(
        function () {
          $(".border").css("border", "2px dashed yellow");
        },
        function () {
          $(".border").css("border", "2px dashed blue");
        }
        );


    $(".header-link").hover(
      function () {
        $(".header-link").addClass('invert');
      },
      function () {
        $(".header-link").removeClass('invert');
      }
      );



          $(".notes").hover(
            function () {
              $(".private").addClass('show');
            },
            function () {
              $(".private").removeClass('show');
            }
            );







});
