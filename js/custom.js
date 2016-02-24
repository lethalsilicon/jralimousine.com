//Set the global variable for the image switch
var preVal = 0;

$(document).ready(function() {

//car picker
$( "#slider" ).slider({
      value: 0,
      min: 0,
      max: 2,
      step: 1,
      start: function( event, ui ) {
      	preVal = ui.value;
      },
      stop: function( event, ui ) {
        var index = ui.value;
        switch_text(index);
      }
    });

//the below handles swapping the text
function description(car_model, car_description) {
    this.car_model = car_model;
    this.car_description = car_description;
}

var descriptionArray = [];

var d1 = new description(
    "Lincoln Town Car",
    "A comfortable luxury experience with extended leg room and trunk space."
);

var d2 = new description(
    "Ford Expedition",
    "For those times when you need a bit more space. Seats up to six people in style."
);

var d3 = new description(
    "Lincoln MKT",
    "The NEW standard for understated elegance."
);

descriptionArray.push(d1);
descriptionArray.push(d2);
descriptionArray.push(d3);

//swap and text and image
function switch_text(index) {
    var description = descriptionArray[index];
    $(".car_model").text(description.car_model);
    $(".car_description").text(description.car_description);

    //Show Hide
    $( "#car" + preVal ).toggleClass("hide");
    $( "#car" + index ).toggleClass("hide");
}

//form/ modal/ datepicker
$(function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
    });
 
    $( ".reserve" ).click(function() {
      $( "#dialog" ).dialog( "open" );
    });
  });

$(function() {
    $( "#datepicker" ).datepicker();
  });

//jQuery Smooth Scrolling
$(function() {
  $('.navbar a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

});//end doc


