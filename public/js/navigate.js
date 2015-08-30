    $(window).scroll(function(){
      if($(this).scrollTop() > 500)
      {
        $('#navi').removeClass('hide');
        $('#navi').addClass('navbar-fixed-top');
      }
      else
      {
        $('#navi').removeClass('navbar-fixed-top');
        $('#navi').addClass('hide');
      };
    });
