var timer;
function myFunction(){
  timer = setTimeout(function(){
    var x = $('#fname').val();
    var token = $('meta[name="csrf-token"]').attr('content');
    if( x.length > 0 )
    {
        $.post('http://laravel.serie.com/executeSearch',{ x: x, _token: token },
         function(markup){
            $('#muestro').html(markup);
        });

          //$("#muestro").text(x)
    }
  },500);

}
function down(){

  clearTimeout(timer);
}
