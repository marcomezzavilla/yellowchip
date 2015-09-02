  (function($) {
    'use strict';    

      // Opacity //
      // ------- //

      $(document).ready(function() {

        $('.container').addClass('container-loaded');

        // Nav //
        // --- //
        var $toggleMenu = $('[data-target="toggle-menu"]');
        var $bkgMenu =  $('[data-target="bkg-menu"]');
        var $closeMenu = $('[data-target="close-menu"]');

        $toggleMenu.on('click', function() {
          $(this).toggleClass(' is-x');
          $bkgMenu.toggleClass('is-visible');
        });

        $closeMenu.on('click', function() {
          $bkgMenu.toggleClass('is-visible');
        });

        // Typed //
        // ----- //

        $(function(){

          $(".typed").typed({
            strings: [
              "^2000is a digital <span>pr agency</span>",
              "^2000leads companies <br /> in the digital PR world",
              "^2000helps client be connected, <br />seen and heard"
            ],
            typeSpeed: 25,
            backDelay: 2000,
            loop: true,
            contentType: 'html', // or text
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
          });

          $(".reset").click(function(){
            $(".typed").typed('reset');
          });

        });

        function newTyped(){ /* A new typed object */ }
        function foo(){ console.log("Callback"); }

        // Tweet //
        // ----- //

        $('.yellowchippr .tweetie').twittie({
          username: 'yellowchippr',
          dateFormat: '%d %b',
          template: '{{screen_name}} — {{date}} <br /> {{tweet}} ',
          apiPath: '../../assets/js/api/tweet.php',
          count: 3,
        },
          function () {
            setInterval(function() {
              var item = $('.yellowchippr .tweetie ul').find('li:first');
              item.animate( 500, function() {
                $(this).detach().appendTo('.yellowchippr .tweetie ul').removeAttr('style');
              });
          }, 8000);
        });

        // Flickity //
        // -------- //

        $('.portfolio-all').flickity({
          // options
          contain: true,
          setGallerySize: true,
          // wrapAround: true,
          cellAlign: 'center',
        }).focus();

        $('.portfolio-all-mobile').flickity({
          // options
          contain: true,
          setGallerySize: true,
          // wrapAround: true,
          cellAlign: 'center',
        }).focus();

        // Scroll //
        // ------ //

        $.scrollIt({
          upKey: 38,             // key code to navigate to the next section
          downKey: 40,           // key code to navigate to the previous section
          easing: 'ease',        // the easing function for animation
          scrollTime: 400,       // how long (in ms) the animation takes
          activeClass: 'active', // class given to the active nav element
          onPageChange: null,    // function(pageIndex) that is called when page is changed
          topOffset: -160        // offset (in px) for fixed top navigation
        });

        var resizeTimer; // set resizeTimer to empty so it resets on page load

        $(window).on("load resize scroll", function() {
          clearTimeout(resizeTimer);
          resizeTimer = setTimeout(resizeFunction, 100);
        }).trigger('resize');

      }); // End document.ready

      var $firstSection = $('[data-target="first-section"]');
      var $secondSection = $('[data-target="second-section"]');

      function resizeFunction() {
        var $space = $(window).height() - 240;
        var $firstSectionHeight = $firstSection.height();
        var $secondSectionHeight = $secondSection.height();

        if($space >= $firstSectionHeight && $space >= $secondSectionHeight) {
          $firstSection.css('height', $space);
          $secondSection.css('height', $space);
        }
        else if($space >= $firstSectionHeight && $space <= $secondSectionHeight) {
          $firstSection.css('height', $space);
          $secondSection.css('height', '100%');
        }
        else if($space <= $firstSectionHeight && $space >= $secondSectionHeight) {
          $firstSection.css('height', '100%');
          $secondSection.css('height', $space);
        }
        else {
          $firstSection.css('height', '100%');
          $secondSection.css('height','100%');
        }

        var goTo = [
          '<a data-scroll-nav="1" href="#">Read more</a>',
          '<a data-scroll-nav="0" href="#">Back to top</a>',
        ];
        var pos = $(this).scrollTop(); 

        if((pos < 160) && ($space >= $firstSectionHeight && $space >= $secondSectionHeight)) {
          $('.goto').html(goTo[0]);
        }
        if((pos > $firstSectionHeight / 2) && ($space >= $firstSectionHeight && $space >= $secondSectionHeight)) {
          $('.goto').html(goTo[1]);
        }
      };

  }(jQuery));