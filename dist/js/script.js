// script.js

// full syntax
// $(document).ready(function () {
//    alert("Hello"); 
// });

$(function () {
  var selectedClass = "";
  $(".filter").click(function () {
    selectedClass = $(this).attr("data-rel");
    $("#gallery").fadeTo(100, 0.1);
    $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
    setTimeout(function () {
      $("." + selectedClass).fadeIn().addClass('animation');
      $("#gallery").fadeTo(300, 1);
    }, 300);
  });
});

  //alert("Hallo");
  //$('#box').hide();
  //$('.thing').fadeOut(1000);
  //$('h1').css("color","blue");

  // $('button').click(function () {
  //   $('#box').fadeOut();
  // });

  //$('.animation').css('border', 'solid 1px red');
  //$("#gallery").fadeTo(3000, 0.2);

  


// $("#gallery").fadeTo(3000, 0.2);

// $('.filter').click(function() {
//   alert("faseto");
//   $('.1').fadeTo(3000,1);
// });

//$("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
//setTimeout(function () {
// $("." + selectedClass).fadeIn().addClass('animation');
//$("#gallery").fadeTo(300, 1);
//}, 300);
//});


//$('h2, h3, h4').css('border', 'solid 1px red');

//$('div#container').css('border', 'solid 1px red');

//$('div.container').css('border', 'solid 1px red');

//$('p.lead').css('border', 'solid 1px red');

//$('li:first').css('border', 'solid 1px red');
// $('div em').css('border', 'solid 1px red');

// child elements of div
//$('div > p').css('border', 'solid 1px r
// var a;
// a = $('div > p');

// all header von h1..h6
//a=$(':header');


// a = $('div:contains("Brad")');


//a.css('border', 'solid 1px red');









//         $('div#gallery').css('border', 'solid 1px red');

//     $("#gallery").fadeTo(100, 0.1);
//     $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
//     setTimeout(function () {
//       $("." + selectedClass).fadeIn().addClass('animation');
//       $("#gallery").fadeTo(300, 1);
//     }, 300);
//   });
// $(selector).action();
// // selector can be class, id, any html tag like a div 
// $('#box').hide();
// $('.thing').fadeOut();
//$('h1').css("color","blue");
// 


// $('h1, h2, h3').hide();

//$('h1, h2, h3, h4').css('border', 'solid 1px red');
//$('div#container').css('border', 'solid 1px red');
// $('p.lead').css('border', 'solid 1px red');
//$('p.box').css('border', 'solid 1px blue');
// $('li:first').css('border', 'solid 1px blue');
//$('div em').css('border', 'solid 1px blue');
//$('div > p').css('border', 'solid 1px red');
//  $(':header').css('border', 'solid 1px red');
//$('div:contains("Brad")').css('border', 'solid 1px red');

//$('div.btn-success').click(function() {
//    $('h1').hide(1000);
//});
//$('button').click(function() {
//   $('h1').toggle(1000);
//})

// jQuery Event Methods
//$('#box').click(function() {
//    alert('you just click the box');
//});

// $('input').blur(function() {
//     var element = $(this);
//     console.log(element);
//     if ( $(this).val() == "" ) {
//         $(this).css('border','solid 1px red');
//         $('#box').text('Forgot to enter text?');

//     }
// });

// $('input').keydown(function() {
//     var element = $(this);
//     console.log(element);
//     if ( $(this).val() !== "" ) {
//         $(this).css('border','solid 1px #777');
//         $('#box').text('thanks for the text');

//     }
// });

// $('#box').hover( function() {
//     $(this).text('you hovered in');
// } , function() {
//     $(this).text('you hovered out');
// })


// jQuery Chaining
//$('#box').fadeOut().delay(80000).css('background', 'red').slideDown();

//$('.notification-bar').delay(2000);
