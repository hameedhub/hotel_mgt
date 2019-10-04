$(function(){

    $('#login').submit(function(){
        var url = $(this).attr('action');
       var data = $(this).serialize();
       
       $.post(url, data, function(e){
          if(e){
            $('#alert').append(`<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
            ${e}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>`);
          }else{
            window.location.href="dashboard"
       };
       
       });

        return false;
    })

});