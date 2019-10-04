$(function(){

    $('#insertEvent').submit(function(){
       var url = $(this).attr('action');
       var data = $(this).serialize();
       //console.log(data);
       $.post(url, data, function(e){
        $('#alert').append(`<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            Event was successful schedule, click close if you're done.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>`);
       });

        return false;
    });
});