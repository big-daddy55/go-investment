// document.addEventListener("scroll", function () {
//     var scrollPosition = window.scrollY;
//     console.log("Scroll position: " + scrollPosition);
// });


// document.addEventListener("scroll", function () {
//     var scrollPosition = window.scrollY;
//     var animatedText = document.querySelector('.animated-text');

//     // Adjust the value (e.g., 300) based on when you want the animation to trigger
//     if (scrollPosition >= 0) {
//         animatedText.classList.add('animate');
//     }
// });

// Cards
var $cell = $('.card');

//open and close card when clicked on card
$cell.find('.js-expander').click(function() {

  var $thisCell = $(this).closest('.card');

  if ($thisCell.hasClass('is-collapsed')) {
    $cell.not($thisCell).removeClass('is-expanded').addClass('is-collapsed').addClass('is-inactive');
    $thisCell.removeClass('is-collapsed').addClass('is-expanded');
    
    if ($cell.not($thisCell).hasClass('is-inactive')) {
      //do nothing
    } else {
      $cell.not($thisCell).addClass('is-inactive');
    }

  } else {
    $thisCell.removeClass('is-expanded').addClass('is-collapsed');
    $cell.not($thisCell).removeClass('is-inactive');
  }
});

//close card when click on cross
$cell.find('.js-collapser').click(function() {

  var $thisCell = $(this).closest('.card');

  $thisCell.removeClass('is-expanded').addClass('is-collapsed');
  $cell.not($thisCell).removeClass('is-inactive');

});
