var timer;
function myFunction() {
  timer = setTimeout(function(){
    var x = $('#fname').val();
    if( x.length > 0 )
    {
        $.post('http://laravel.serie.com/executeSearch',{ x: x }, function(markup){
            $('#muestro').html(markup);
        });
          //$("#muestro").text(x)
    }
  },500);

}
function down(){

  clearTimeout(timer);
}
$(document).ready(function(){
      var cantSeasons = $("#Seasons").val();
      var request = $.ajax({
        url: "script.php",
        type: "POST",
        data: {id : cantSeasons},
        dataType: "html"
      });
        $("#Seasons").click(function(){
        $('#SeasonForm').removeClass( "hide" ).show();
        $('#Close').removeClass( "hide" ).show();
    });
});

$(document).ready(function(){
    $("#Close").click(function(){
        $('#SeasonForm').addClass( "hide" ).hide();
        $('#Close').addClass( "hide" ).hide();
    });
});
