$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $("#brand").toggleClass("toggled");
    });
     $("#menu-toggle-2").click(function(e) {
      console.log('toto');
        e.preventDefault();
        console.log('tutu');
        $("#wrapper").toggleClass("toggled-2");
        $("#brand").toggleClass("toggled-2");
        console.log('tyty');
        $('#menu ul').hide();
        $('.menu_title').toggle();
        $(this).find('.collapse_icon,.extend_icon').toggle();
    });

     function initMenu() {
      $('#menu ul').hide();
      $('#menu ul').children('.current').parent().show();
      //$('#menu ul:first').show();
      $('#menu li a').click(
        function() {
          var checkElement = $(this).next();
          if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
            return false;
            }
          if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
            $('#menu ul:visible').slideUp('normal');
            checkElement.slideDown('normal');
            return false;
            }
          }
        );
      }
    $(document).ready(function() {initMenu();});