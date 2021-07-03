let nCount = selector => {
    $(selector).each(function () {
      $(this)
        .animate({
          Counter: $(this).text()
        }, {
          // A string or number determining how long the animation will run.
          duration: 4000,
          // A string indicating which easing function to use for the transition.
          easing: "swing",
          /**
           * A function to be called for each animated property of each animated element. 
           * This function provides an opportunity to
           *  modify the Tween object to change the value of the property before it is set.
           */
          step: function (value) {
            $(this).text(Math.ceil(value));
          }
        });
    });
  };
  
  
  
  
  
  /**
   *
   *  sticky navigation
   *
   */
  
 

  

  let button_bar = $(".btn-mobile");
  
  $(window).scroll(function () {
    // get the complete hight of window
    let oTop = $(".section-3").offset().top - window.innerHeight;
    if ($(window).scrollTop() > oTop) {
     
      button_bar.addClass("mobileShow");
      
    } else {
      button_bar.removeClass("mobileShow");
    }
  });

 







  $('[name="p_color"]').on('change', function() {
    if ($(this).attr('id') == 'white') {
       $('#color-text').text('اختر اللون - الأبيض');
       $('#white').removeClass("white-hidden");
       $('#pink').addClass("pink-hidden");
       $('#white').addClass("aos-animate");
       AOS.refresh();
     } else {
       $('#color-text').text('اختر اللون - الوردي');
       $('#white').addClass("white-hidden");
       $('#pink').removeClass("pink-hidden");
     }
     });


     
    
     $( document ).ready(function() {
           setInterval(function() {
            var div = document.getElementById('btn-shaky');
            var interval = 100;
            var distance = 10;
            var times = 4;
      
            $(div).css('position', 'relative');
      
            for (var iter = 0; iter < (times + 1) ; iter++) {
                $(div).animate({
                    left: ((iter % 2 == 0 ? distance : distance * -1))
                }, interval);
            }                                                                                                          
            $(div).animate({ left: 0 }, interval);

            var div = document.getElementById('btn-shaky-2');
            var interval = 100;
            var distance = 10;
            var times = 4;
      
            $(div).css('position', 'relative');
      
            for (var iter = 0; iter < (times + 1) ; iter++) {
                $(div).animate({
                    left: ((iter % 2 == 0 ? distance : distance * -1))
                }, interval);
            }                                                                                                          
            $(div).animate({ left: 0 }, interval);

            var div = document.getElementById('btn-shaky-3');
            var interval = 100;
            var distance = 10;
            var times = 4;
      
            $(div).css('position', 'relative');
      
            for (var iter = 0; iter < (times + 1) ; iter++) {
                $(div).animate({
                    left: ((iter % 2 == 0 ? distance : distance * -1))
                }, interval);
            }                                                                                                          
            $(div).animate({ left: 0 }, interval);
           },5000);
     });




// Jquery
$(document).on('click', '.value-control', function () {
  var action = $(this).attr('data-action')
  var min = $(this).attr('data-min')
  var max = $(this).attr('data-max')
  var target = $(this).attr('data-target')
  var value = parseFloat($('[id="' + target + '"]').val());
  if (action == "plus") {
      if (value < max) {
          value++;
      } 
  }
  if (action == "minus") {
      if (value > min) {
          value--;
      } 
  }
  $('[id="' + target + '"]').val(value)
})
     

//carousel



$('.carousel .carousel-item').each(function() {
    var minPerSlide = 4;
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i = 0; i < minPerSlide; i++) {
        next = next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
    }
});


function InvalidMsg(textbox) {
  if (textbox.value == '') {
      textbox.setCustomValidity('يجب عليك إدخال رقم بين 1 و 10');
  }
  else if (textbox.value > 10 || textbox.value < 1){
      textbox.setCustomValidity('يجب عليك إدخال رقم بين 1 و 10');
  }
  return true;
}


function InvalidMsg_1(textbox) {
  if (textbox.value == '') {
      textbox.setCustomValidity('يجب عليك إدخال إسمك الكامل');
  }
  return true;
}


function InvalidMsg_2(textbox) {
  if (textbox.value == '') {
      textbox.setCustomValidity('يجب عليك إدخال رقم هاتفك');
  }
  return true;
}

function InvalidMsg_3(textbox) {
  if (textbox.value == '') {
      textbox.setCustomValidity('يجب عليك إدخال إسم ولايتك');
  }
  return true;
}