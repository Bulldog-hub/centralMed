// function displayRubrique(rubrique){
//   $('.rubrique').hide();
//   $('#'+rubrique).show();
// }
//
// $(".rubriqueLien").click(function(e) {
//   $(".active").removeClass("active");
//   $(this).parent().addClass("active");
//
//   displayRubrique($(this).data('rubrique'));
// });

$(".period li").click(function(e) {
  $(".active_period").removeClass("active_period");
  $(this).addClass("active_period");

  var date = new Date();
  date.setTime(date.getTime() + (1 * 60 * 60 * 1000));
  expires = "; expires=" + date.toGMTString();
  document.cookie = "period=" + encodeURIComponent($(this).data('period')) + expires + "; path=/";
});

$(document).ready(function(){

  // Variables
  var clickedTab = $(".tabs > .active");
  var tabWrapper = $(".tab__content");
  var activeTab = tabWrapper.find(".active");
  var activeTabHeight = activeTab.outerHeight();

  // Show tab on page load
  activeTab.show();

  // Set height of wrapper on page load
  tabWrapper.height(activeTabHeight);

  $(".tabs > li").on("click", function() {

    // Remove class from active tab
    $(".tabs > li").removeClass("active");

    // Add class active to clicked tab
    $(this).addClass("active");

    // Update clickedTab variable
    clickedTab = $(".tabs .active");

    // fade out active tab
    activeTab.fadeOut(250, function() {

      // Remove active class all tabs
      $(".tab__content > li").removeClass("active");

      // Get index of clicked tab
      var clickedTabIndex = clickedTab.index();

      // Add class active to corresponding tab
      $(".tab__content > li").eq(clickedTabIndex).addClass("active");

      // update new active tab
      activeTab = $(".tab__content > .active");

      // Update variable
      activeTabHeight = activeTab.outerHeight();

      // Animate height of wrapper to new tab height
      tabWrapper.stop().delay(50).animate({
        height: activeTabHeight
      }, 500, function() {

        // Fade in active tab
        activeTab.delay(50).fadeIn(250);

      });
    });
  });

  // Variables
  var colorButton = $(".colors li");

  colorButton.on("click", function(){

    // Remove class from currently active button
    $(".colors > li").removeClass("active-color");

    // Add class active to clicked button
    $(this).addClass("active-color");

    // Get background color of clicked
    var newColor = $(this).attr("data-color");

    // Change background of everything with class .bg-color
    $(".bg-color").css("background-color", newColor);

    // Change color of everything with class .text-color
    $(".text-color").css("color", newColor);
  });
});