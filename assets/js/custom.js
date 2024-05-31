/**
 * Exoplanet Custom JS
 *
 * @package Exoplanet
 *
 * Distributed under the MIT license - http://opensource.org/licenses/MIT
 */

// var stickyon = jQuery('#sticky-onoff').text().trim();
// var a1 = stickyon.length;
// window.onscroll = function () {
//   if (a1 == 3) {
//     myScrollNav();
//   }
// }

// var navbar = document.getElementById("vw-sticky-menu");
// var sticky = navbar.offsetTop;
// function myScrollNav() {
//   if (window.pageYOffset > sticky) {
//     //alert(window.pageYOffset);
//     navbar.classList.add("sticky");
//     navbar.classList.add("stickynavbar");
//   } else {
//     navbar.classList.remove("sticky");
//     navbar.classList.remove("stickynavbar");
//   }
// }

jQuery(document).ready(function () {

  var spanElement = jQuery("<span id='dropDown' class='fa-solid fa-chevron-down'></span>");

  // Append the <span> element inside the element with class "menu-item-has-children"
  jQuery(".menu-item-has-children").append(spanElement);
  jQuery('span#dropDown').on('click', function () {
    jQuery('span#dropDown').siblings(".sub-menu").slideToggle(500);
    jQuery(this).toggleClass('active');
  })
  jQuery('.ewd-otp-form-identifier .ewd-otp-field-label').text('Your Tracking ID');
  jQuery('.ewd-otp-form-email .ewd-otp-field-label').text('Email Address');

  var input = jQuery("input[name='ewd_otp_identifier_number']");
  var label = jQuery(".ewd-otp-form-identifier .ewd-otp-field-label");
  var email = jQuery("input[name='ewd_otp_form_email']");
  var emailLable = jQuery(".ewd-otp-form-email .ewd-otp-field-label");
  input.focus(function () {
    label.addClass("active");
    // console.log('inputStatus=================> active');
  });
  input.blur(function () {
    if (input.val() === "") {
      label.removeClass("active");
      // console.log('inputStatus================> inActive');
    }
  });
  email.focus(function () {
    emailLable.addClass("active");
    // console.log('EmailStatus=================> active');
  });

  email.blur(function () {
    if (email.val() === "") {
      emailLable.removeClass("active");
      // console.log('emailStatus================> inActive');
    }
  });
});


jQuery(function ($) {

  jQuery('.search-icon > i').click(function () {
    jQuery(".serach_outer").slideDown(700);
  });

  jQuery('.closepop i').click(function () {
    jQuery(".serach_outer").slideUp(700);
  });
});

var menu_width = "";

var menu_width = "";
/* Mobile responsive Menu*/
jQuery(function ($) {
  jQuery('#open_nav').click(function () {
    jQuery('ul#menu-primary-menu').toggleClass("open-nav");
    jQuery('#open_nav').toggleClass('active');
  })

});

jQuery(document).ready(function () {
  jQuery('.archive .product a.added').removeClass("loading");
})

function cricket_league_pro_filters(event, ui) {
  var data_obj = {};

  data_obj['values'] = jQuery('#product-price-slider').slider("values");
  data_obj['search_value'] = jQuery('[name="products_search"]').val();

  jQuery('.shop-page-filters [type="checkbox"]:checked').each(function (index, element) {
    if (!Array.isArray(data_obj[jQuery(element).attr('name')])) {
      data_obj[jQuery(element).attr('name')] = new Array();
    }
    data_obj[jQuery(element).attr('name')].push(jQuery(element).val())
  });

  jQuery.post(cricket_league_pro_customscripts_obj.ajaxurl, {
    'action': 'get_shop_page_filter',
    'data': data_obj
  },
    function (response) {
      jQuery('.products.columns-3').html(response.html)
    });

}

function cricket_league_pro_filters_listings(event, ui) {
  var data_obj = {};

  data_obj['values'] = jQuery('#listing-price-slider').slider("values");

  jQuery.post(cricket_league_pro_customscripts_obj.ajaxurl, {
    'action': 'get_listing_page_filter',
    'data': data_obj
  },
    function (response) {
      jQuery('.auto-listings-row .auto-listing-box').remove();
      jQuery('.auto-listings-row').append(response.html);
    });
}


jQuery(function () {
  //----- OPEN
  jQuery('[data-popup-open]').on('click', function (e) {
    var targeted_popup_class = jQuery(this).attr('data-popup-open');
    jQuery('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

    e.preventDefault();
  });

  //----- CLOSE
  jQuery('[data-popup-close]').on('click', function (e) {
    var targeted_popup_class = jQuery(this).attr('data-popup-close');
    jQuery('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

    e.preventDefault();
  });
});


jQuery(document).ready(function ($) {

  var sync1 = $(".main-gallery");
  var sync2 = $(".main-gallery-list");
  var slidesPerPage = 6; //globaly define number of elements per page

  sync1.owlCarousel({
    items: 1,
    slideSpeed: 200,
    nav: true,
    dots: false,
    responsiveRefreshRate: 200,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
  }).on('changed.owl.carousel', syncPosition);

  sync2.on('initialized.owl.carousel', function () {
    sync2.find(".owl-item").eq(0).addClass("current");
  }).owlCarousel({
    items: slidesPerPage,
    dots: false,
    nav: false,
    smartSpeed: 200,
    slideSpeed: 500,
    slideBy: 4,
    autoplay: true,
    // loop:true
    responsiveRefreshRate: 100
  }).on('changed.owl.carousel', syncPosition2);

  sync2.on('click', '.owl-item', function () {
    sync1.trigger('to.owl.carousel', [$(this).index(), 200, true]);
  });

  function syncPosition(el) {
    var current = el.item.index;

    sync2.find(".owl-item").removeClass("current").eq(current).addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();

    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }

  function syncPosition2(el) {
    if (sync2.data('owl.carousel').options.loop) {
      var number = el.item.index;
      var clonedNumber = el.item.count - el.item.index;

      if (clonedNumber <= number) {
        number = clonedNumber;
      }
      number--;
      var sync2visible = sync2.find('.owl-item').eq(number).visible(true);
      sync2.data('owl.carousel').to(sync2visible, 100, true);
    } else {
      sync1.data('owl.carousel').to(el.item.index, 100, true);
    }
  }


  //custom variation home page image and price change start

  var owl = jQuery('#partnerSlider .owl-carousel');
  owl.owlCarousel({
    margin: 25,
    dots: false,
    nav: false,
    autoplay: true,
    autoplayTimeout: 2000,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      500: {
        items: 2
      },
      600: {
        items: 2
      },
      700: {
        items: 3
      },
      900: {
        items: 3
      },
      1000: {
        items: 4
      },
      1200: {
        items: 4
      },
      1300: {
        items: 6
      }
    },
    autoplayHoverPause: true,
    mouseDrag: true
  });
  jQuery('.product_variant_color').on('click', function () {

    jQuery('.product_variant_text').hide();
    jQuery(this).closest('.variant-parent-container').find('.product_variant_text').show();
    jQuery('.product_variant_color').removeClass('checked');
    jQuery(this).addClass('checked');

    var variationId = jQuery(this).attr('variation-id');

    jQuery.ajax({
      url: cricket_league_pro_customscripts_obj.ajaxurl,
      type: 'POST',
      data: {
        action: 'get_variation_data',
        variation_id: variationId
      },
      success: function (response) {

        // Update price
        jQuery('.product-price').html(response.price_html);

        // Update images
        var imageGallery = jQuery('.product-gallery');
        imageGallery.html(response.image_html);

      }
    });

  });

  if (jQuery('.product_variant_color').length) {
    jQuery('.product_variant_color').eq(0).addClass('checked').click();
    jQuery('.variant-parent-container .product_variant_text').eq(0).show();
  }
  var interval = null;
  function show_loading_box() {
    jQuery(".eco-box").css("display", "none");
    clearInterval(interval);
  }
  jQuery('document').ready(function () {

    interval = setInterval(show_loading_box, 1000);
  });
  //custom variation home page image and price change end
});


jQuery('document').ready(function () {

  jQuery(".search-toggle .search-icon").click(function (e) {
    jQuery(".search-container").show();
    e.stopPropagation();
  });

  jQuery(".search-container").click(function (e) {
    e.stopPropagation();
  });

  jQuery(document).click(function () {
    jQuery(".search-container").hide();
  });



  jQuery('.cat_toggle i').click(function () {
    jQuery('#cart_animate').toggle('slow');
  });

  jQuery(document).ready(function () {
    jQuery('.myVideoBtn').click(function () {
      var url = jQuery(this).data('url');
      // console.log(url);
      // console.log(jQuery('#videoEmbed'));
      jQuery('#videoEmbed').attr('src', url);
      jQuery("#myVideoNewModal").show();
    });
    jQuery('.close-one').click(function () {
      jQuery("#myVideoNewModal").hide()
    });

    jQuery('.counter1-up').each(function () {
      jQuery(this).prop('Counter', 0).animate({
        Counter: jQuery(this).text()
      }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
          jQuery(this).text(Math.ceil(now));
        }
      });
    });



  });


  jQuery('a[data-slide]').click(function (e) {
    e.preventDefault();
    var slideno = jQuery(this).data('slide');
    jQuery('.slider-for').slick('slickGoTo', slideno - 1);
  });
  jQuery('.matches-slider-wrapper .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    center: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  });
  var owl = jQuery('#slider .owl-carousel');
  if (owl.length > 0) {

    owl.owlCarousel({
      margin: 25,
      nav: false,
      autoplay: true,
      lazyLoad: true,
      autoHeight: false,
      autoplayTimeout: 2000,
      center: true,
      dots: false,
      loop: true,
      // loop: true,
      navText: ['<i class="fas fa-angle-left" aria-hidden="true"></i>', '<i class="fas fa-angle-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1,
          stagePadding: 0
        },
        768: {
          items: 1,
          stagePadding: 0
        },
        1024: {
          items: 1,
        },
        1920: {
          items: 1,
        },

      },
      autoplayHoverPause: true,
      mouseDrag: true
    });
  }

  jQuery('.slick-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    infinite: true,
    focusOnSelect: false,
    adaptiveHeight: true,
    asNavFor: '.thumbnail-slider',
  });

  jQuery('.thumbnail-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slick-slider',
    dots: false,
    centerMode: true,
    focusOnSelect: false,
    arrows: false,
    centerPadding: 100,
    margin: 15,
    infinite: true,
  });
  jQuery('.next').click(function () {
    jQuery('.thumbnail-slider').slick('slickNext');
  });

  jQuery('.prev').click(function () {
    jQuery('.thumbnail-slider').slick('slickPrev');
  });
  jQuery("#upcoming-evt .owl-carousel").owlCarousel({
    items: 3,
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    arrows: false,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      991: {
        items: 2
      }
    }
  });
  var owl = jQuery('#testimonials .owl-carousel');
  if (owl.length > 0) {
    owl.owlCarousel({
      margin: 25,
      nav: false,
      autoplay: false,
      lazyLoad: true,
      autoplayTimeout: 3000,
      center: false,
      dots: true,
      loop: true,
      responsive: {
        0: {
          items: 1,
        },
        768: {
          dotsEach: 1,
          items: 1,
        },
        1024: {
          dotsEach: 1,
          items: 1,
        },
        1200: {
          dotsEach: 1,
          items: 1,
        },
        1400: {
          dotsEach: 1,
          items: 1,
        },
        1920: {
          dotsEach: 1,
          items: 1,
        },

      },
      autoplayHoverPause: true,
      mouseDrag: true
    });
  }


  var owl = jQuery('#blog-news .owl-carousel');
  owl.owlCarousel({
    margin: 25,
    nav: false,
    dots: false,
    autoplay: true,
    // lazyLoad: true,
    autoplayTimeout: 4000,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      500: {
        items: 1
      },
      600: {
        items: 1
      },
      700: {
        items: 2
      },
      900: {
        items: 2
      },
      1000: {
        items: 2
      },
      1200: {
        items: 3
      },
      1300: {
        items: 3
      }
    },
    autoplayHoverPause: true,
    mouseDrag: true
  });

  var owl = jQuery('.recent-posts .owl-carousel');
  owl.owlCarousel({
    margin: 25,
    nav: false,
    dots: false,
    autoplay: true,
    // lazyLoad: true,
    autoplayTimeout: 4000,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      500: {
        items: 1
      },
      600: {
        items: 1
      },
      700: {
        items: 2
      },
      900: {
        items: 2
      },
      1000: {
        items: 2
      },
      1200: {
        items: 3
      },
      1300: {
        items: 3
      }
    },
    autoplayHoverPause: true,
    mouseDrag: true
  });

  var owl = jQuery('section.clientandPratners .owl-carousel');
  owl.owlCarousel({
    margin: 25,
    dots: false,
    nav: false,
    autoplay: true,
    autoplayTimeout: 2000,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      500: {
        items: 2
      },
      600: {
        items: 2
      },
      700: {
        items: 3
      },
      900: {
        items: 3
      },
      1000: {
        items: 4
      },
      1200: {
        items: 4
      },
      1300: {
        items: 4
      }
    },
    autoplayHoverPause: true,
    mouseDrag: true
  });
  var owl = jQuery('section#Our-team .owl-carousel');
  owl.owlCarousel({
    margin: 25,
    nav: false,
    dots: true,
    autoplay: false,
    // lazyLoad: true,
    autoplayTimeout: 3000,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    loop: false,
    responsive: {
      0: {
        items: 1
      },
      500: {
        items: 1
      },
      600: {
        items: 1
      },
      700: {
        items: 2
      },
      900: {
        items: 3
      },
      1000: {
        items: 3
      },
      1300: {
        items: 3
      },
      1400: {
        items: 4
      }
    },
    autoplayHoverPause: true,
    mouseDrag: true
  });


});


/* Counter */
jQuery(document).ready(function () {

  function addExcerpt(config) {
    config.forEach(function (item) {
      // Get all elements with the specified class
      var elements = document.querySelectorAll('.' + item.className);
      let i = 1;

      elements.forEach(function (element) {

        var textElement = element.querySelector(item.tagname);

        if (textElement) {

          var content = textElement.textContent.trim();

          var excerpt = content.length >= item.excerptLength ? content.slice(0, item.excerptLength) + '...' : content;

          var excerptElement = document.createElement(textElement.tagName === 'a' ? 'a' : item.tagname); // Create a new element with the same tag name as the original element
          if (textElement.tagName === 'a') {
            excerptElement.href = textElement.href; // Preserve the link if target itselt is anchor tag
          }
          excerptElement.textContent = excerpt;
          element.removeChild(textElement);
          element.appendChild(excerptElement);

          i++;
        } else {

          console.error("No paragraph or anchor element found inside." + item.className);
        }
      });
    });
  }

  // Define an array of objects containing class names and excerpt lengths
  var config = [
    // { className: 'heading-wrap-evt', excerptLength: 70, tagname: 'h3' },
    { className: 'excrept-anchor', excerptLength: 75, tagname: 'h5' },
    { className: 'event-content', excerptLength: 350, tagname: 'p' }
  ];

  // Call the function to add excerpts

  addExcerpt(config);


  // ------------ Scroll Top ---------------

  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
      jQuery('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
      jQuery('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
  });
  jQuery('#return-to-top').click(function () {      // When arrow is clicked
    jQuery('body,html').animate({
      scrollTop: 0                       // Scroll to top of body
    }, 2000);
  });
});

jQuery(function ($) {
  $(window).scroll(function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > 100) {
      $('.right_menu').addClass('scrolled');
    } else {
      $('.right_menu').removeClass('scrolled');
    }
    $('.main-header').css('background-position', 'center ' + (scrollTop / 2) + 'px');
  });

});

//At the document ready event
jQuery(function () {
  new WOW().init();
});

//also at the window load event
jQuery(window).on('load', function () {

  new WOW().init();
});


jQuery('body').on('added_to_cart', function (e, fragments, cart_hash, button) {
  var product = '';
  var img = '';
  var title = '';
  var url = '';

  if (cricket_league_pro_customscripts_obj.is_home == "1") {
    var product = jQuery(button).closest('.product-content');
    var img = product.find('img').attr('src');
    var title = product.find('.product_head').text();
    var url = product.find('.woocommerce-loop-product__link').attr('href');
  } else {
    var product = jQuery(button).closest('.product');
    var img = product.find('img').attr('src');
    var title = product.find('.woocommerce-loop-product__title').text();
    var url = product.find('.product_head').attr('href');
  }
  if (product != '') {
    jQuery.notify({
      icon: img,
      title: title,
      message: "Product has been added to your cart.",
      url: url
    }, {
      type: 'minimalist',
      delay: "3000",
      icon_type: 'image',
      template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
        '<img data-notify="icon" class="img-circle pull-left">' +
        '<span class="prod-title" data-notify="title">{1}</span>' +
        '<div class="prod-messg" data-notify="message">{2}</div>' +
        '</div>'
    });
  }

});

jQuery(document).ready(function () {
  // Delete that line if you don't want the first Div to be displayed by default
  jQuery(".answer:first").css("display", "block");
  jQuery(".accordion-click:first").addClass('active');
  // 
  jQuery(".accordion-click").click(function () {
    jQuery(this).toggleClass('active');
    jQuery(this).next().slideToggle(500);
    jQuery(".answer").not(jQuery(this).next()).slideUp(500);
    jQuery(".accordion-click").not(jQuery(this)).removeClass('active');
  });

  // Get the target element
  var targetElement = document.getElementById('dynamic-color');

  // Get the text content of the element
  var textContent = targetElement.textContent.trim();

  // Split the text content into words
  var words = textContent.split(' ');

  // Check if there are at least two words
  if (words.length >= 2) {
    // Get the second word
    var secondWord = words[1];

    // Create a new array to store modified words
    var newWords = [];

    // Loop through the words
    for (var i = 0; i < words.length; i++) {
      // If it's the second word, wrap it in a span element
      if (i === 1) {
        newWords.push('<span class="second-word">' + secondWord + '</span>');
      } else {
        newWords.push(words[i]);
      }
    }

    // Join the words back into a sentence
    var newSentence = newWords.join(' ');

    // Set the new sentence as the HTML content of the target element
    targetElement.innerHTML = newSentence;
  }

});

jQuery(document).ready(function ($) {
  jQuery('.counter').waypoint(function () {
    var $this = jQuery(this.element);

    // Check if the animation has already been triggered
    if ($this.hasClass('counted')) return;

    // Get the numeric part of the text
    var countTo = parseInt($this.text(), 10);

    // Extract the static text (e.g., "+") from the element
    var staticText = $this.text().replace(/[0-9]/g, '');

    // Start the counter animation
    jQuery({ countNum: 0 }).animate({ countNum: countTo }, {
      duration: 2000, // Adjust as needed
      easing: 'linear',
      step: function () {
        // Update the numeric part of the text
        $this.text(Math.floor(this.countNum) + staticText);
      },
      complete: function () {
        // Ensure the final number is displayed correctly with the static text
        $this.text(countTo + staticText);
      }
    });

    // Add class to indicate the animation has been triggered
    $this.addClass('counted');

  }, {
    offset: '80%' // Adjust as needed, triggers when the div is 80% in view
  });
});
jQuery(document).ready(function () {
  jQuery('.products .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    autoplay: false,
    dots: true,
    arrow: false,
    nav: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
        nav: false
      },
      1000: {
        items: 3,
        loop: false
      },
      1024: {
        items: 4,
        loop: false
      }
    }
  });
  // Set the height of each slide based on the tallest slide
  function setSlideHeights(className) {
    var tallestSlideHeight = 0;
    jQuery(className).each(function () {
      var slideHeight = jQuery(this).height();
      tallestSlideHeight = Math.max(tallestSlideHeight, slideHeight);
    });
    jQuery(className).css('height', tallestSlideHeight + 'px');
    jQuery(className + ' > div').css('height', '100%');
    jQuery(className + ' > div').css('display', 'flex');
  }
  // Call the function to set slide heights on document ready and window resize
  setSlideHeights('section#upcoming-evt .owl-item');
  setSlideHeights('.products .owl-item');

  jQuery(window).on('resize', setSlideHeights);
});

jQuery(document).ready(function ($) {
  jQuery('.counter').waypoint(function () {
    var $this = jQuery(this.element);

    // Check if the animation has already been triggered
    if ($this.hasClass('counted')) return;

    // Get the numeric part of the text
    var countTo = parseInt($this.text(), 10);

    // Extract the static text (e.g., "+") from the element
    var staticText = $this.text().replace(/[0-9]/g, '');

    // Start the counter animation
    jQuery({ countNum: 0 }).animate({ countNum: countTo }, {
      duration: 2000, // Adjust as needed
      easing: 'linear',
      step: function () {
        // Update the numeric part of the text
        $this.text(Math.floor(this.countNum) + staticText);
      },
      complete: function () {
        // Ensure the final number is displayed correctly with the static text
        $this.text(countTo + staticText);
      }
    });

    // Add class to indicate the animation has been triggered
    $this.addClass('counted');

  }, {
    offset: '80%' // Adjust as needed, triggers when the div is 80% in view
  });
});

jQuery(document).ready(function ($) {
  // Hide all player details initially
  jQuery('.main-tab').hide();

  // Show details for the first player by default
  jQuery('.team-tab-left:first').addClass('active-tab'); // Add active class to first tab
  var firstPlayerId = jQuery('.team-tab-left:first').data('player');
  jQuery('#player-' + firstPlayerId).show(); // Show details for first player

  // Click event handler for player tabs
  jQuery('.team-tab-left').click(function () {
    var playerId = jQuery(this).data('player'); // Get player ID from data attribute

    // Remove active class from all tabs
    jQuery('.team-tab-left').removeClass('active-tab');
    // Add active class to clicked tab
    jQuery(this).addClass('active-tab');

    // Hide all player details
    jQuery('.main-tab').hide();
    // Show details for clicked player
    jQuery('#player-' + playerId).show();
  });
  // Run the code when the DOM is fully loaded



  jQuery(window).scroll(function () {
    // Get the header element
    var header = jQuery(".site-header");

    // Get the distance scrolled from the top of the page
    var scroll = jQuery(window).scrollTop();
    // Calculate the height of wpadminbar
    var wpadminbar = document.getElementById('wpadminbar');
    var wpadminbarHeight = wpadminbar ? wpadminbar.offsetHeight : 0;
    // Define the position to make the header sticky
    var stickyPosition = 50; // Adjust this value as needed

    // Add or remove a class to make the header sticky
    if (scroll >= stickyPosition) {
      header.addClass("sticky");
      // Set the top value for #masthead
      var masthead = document.getElementById('masthead');
      if (masthead) {
        masthead.style.top = wpadminbarHeight + 'px';
      }
    } else {
      header.removeClass("sticky");
    }
  });

  jQuery('.search-button').on('click', function (e) {
    e.preventDefault();
    jQuery('.search-form').fadeToggle('fast');
  });

  // Hide search form when clicking outside of it
  jQuery(document).on('click', function (event) {
    if (!jQuery(event.target).closest('.search-button').length && !jQuery(event.target).closest('.search-form').length) {
      jQuery('.search-form').fadeOut('fast');
    }
  });
  jQuery('.tab-links a').on('click', function (e) {
    var currentAttrValue = jQuery(this).attr('href');

    // Show/Hide Tabs
    jQuery('.tab-content ' + currentAttrValue).show().siblings().hide();

    // Change/remove current tab to active
    jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

    e.preventDefault();
  });

  jQuery('.our-staff .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    arrows: false,
    autoplay: false,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 3
      },
      992: {
        items: 4
      }
    }
  });
});


//shop page work 

jQuery(document).ready(function(){


  
  const get_woocommerce_currency_symbol = cricket_league_pro_customscripts_obj.get_woocommerce_currency_symbol;
  const finalAmount = get_woocommerce_currency_symbol + parseInt(cricket_league_pro_customscripts_obj.product_max_price);
  const StartAmountProduct = get_woocommerce_currency_symbol + 0;
 

 
   jQuery( "#product-amount-final" ).text(finalAmount);
   jQuery( "#product-amount-start" ).text(StartAmountProduct);
 
 
  
 
     jQuery( "#product-price-slider" ).slider({
       range: true,
       min: 0,
       max: parseInt(cricket_league_pro_customscripts_obj.product_max_price),
       values: [ 0, parseInt(cricket_league_pro_customscripts_obj.product_max_price) ],
       change: function( event, ui ) {
        cricket_league_pro_filters();
       },
       slide: function( event, ui ) {
 
         jQuery( "#product-amount-start" ).text(
           get_woocommerce_currency_symbol + ui.values[ 0 ]
         );
         jQuery( "#product-amount-end" ).text(
           get_woocommerce_currency_symbol + ui.values[ 1 ]
         );
       }
     });


 
//  console.log('load');
 // Event handler for category filter checkboxes using event delegation
 jQuery(document).on('change', '.shop-page-filters ', function(event) {
  //  console.log('Checkbox changed!');
   // Get the name of the selected category checkbox
  
   
   cricket_league_pro_filters();
 });
 
 
 
 // Update pagination links click handler
 //  jQuery(document).on('click', '.navigation a.page-numbers', function(event) {
 jQuery(document).on('click', '.pagination a.page-numbers', function(event) {
  event.preventDefault(); // Prevent default link behavior
  var page = jQuery(this).text(); // Get the page number from the clicked pagination link
  cricket_league_pro_filters(page); // Trigger the AJAX request with the page number
 });
 
 
 function cricket_league_pro_filters(page){
 
   var data_obj = {};
 
   data_obj['values'] = jQuery('#product-price-slider').slider( "values" );
 


   jQuery('.shop-page-filters [type="checkbox"]:checked').each(function(index, element) {
     if (!Array.isArray(data_obj[jQuery(element).attr('name')])) {
         data_obj[jQuery(element).attr('name')] = [];
     }
     data_obj[jQuery(element).attr('name')].push(jQuery(element).val());
 });

 
 
      // Add the page number to the data object if provided
 if (page) {
 data_obj['paged'] = page;

 }
 
 setQueryParams(data_obj);
 
 data_obj.base_url = window.location.href;
 
 //data_obj['shop_template'] = shop_template;
 
 jQuery.post(cricket_league_pro_customscripts_obj.ajaxurl, {
 'action': 'get_shop_page_filter',
 'data': data_obj,
 
 },
 function(response) {
 jQuery('.fsp-products-wrapper').html(response.html);
//  console.log('response.pagination', response.pagination);
 // jQuery('.navigation text-center mt-5 mb-5 pt-4 pb-4').html(response.pagination); // Update pagination
 
 jQuery('.pagination').html(response.pagination); // Update pagination
 });
 
 }
 
 
 function setQueryParams(data_obj) {
  //  console.log('data_obj', data_obj)
   let url = new URL(window.location.href)
   let params = new URLSearchParams(url.search)
 
   const data_obj_keys = Object.keys(data_obj)
 
  //  console.log('data_obj_keys', data_obj_keys)
 
   for (let index = 0; index < data_obj_keys.length; index++) {
     const element = data_obj_keys[index]
 
    //  console.log('element', element)
 
     if (
       (element != 'base_url')
     ) {
       params.set(element, data_obj[element])
     }
   }
 
  //  console.log('params.toString()', params.toString())
 
   const querySting = params.toString()
 
   window.history.replaceState(null, null, `?${querySting}`)
 
  //  console.log('url', url)
 
   
 
 }
  
 });
 if (window.innerWidth > 991) {
  // Find the footer element
  var footer = jQuery("footer");

  // Find the section or div before the footer
  var sectionBeforeFooter = footer.prev("section");
  var divBeforeFooter = footer.prev("div");

  // Calculate the height of the footer
  var footerHeight = footer.outerHeight();

  // Apply margin-bottom to the section if it exists
  if (sectionBeforeFooter.length > 0) {
    sectionBeforeFooter.css("margin-bottom", footerHeight + "px");
  }

  // Apply margin-bottom to the div if it exists and if there was no section
  if (divBeforeFooter.length > 0 && sectionBeforeFooter.length === 0) {
    divBeforeFooter.css("margin-bottom", footerHeight + "px");
  }
}

jQuery(document).ready(function($) {
  jQuery('.htmltlightbox').htmltlightbox({
      type: 'iframe'
  });
});