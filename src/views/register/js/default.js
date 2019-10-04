$(function(){

    $('#addUser').submit(function(){
        var url = $(this).attr('action');
       var data = $(this).serialize();
       console.log(data);
       $.post(url, data, function(e){
          if(e){
            $('#alert').append(`<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
            ${e}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>`);
          }else{
        $('#alert').append(`<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            Your registeration was successful, click Sign In to access your account.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>`);};
       });

        return false;
    })

});