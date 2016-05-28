function displayRubrique(rubrique){
  $('.rubrique').hide();
  $('#'+rubrique).show();
}

$(".rubriqueLien").click(function(e) {
  $(".active").removeClass("active");
  $(this).parent().addClass("active");

  displayRubrique($(this).data('rubrique'));
});

