$(function(){
    $.get('sales/services', function(e){
        
        e.forEach(o => {
            $('#selectService').append(`<option value="${o['id']}">${o['name']} - ${o['outlet']}</option>`);

        });
    }, 'json');
    
    $('#addSale').submit(function(){
        var url = $(this).attr('action');
       var data = $(this).serialize();
       //console.log(data);
       $.post(url, data, function(e){
        $('#alert').append(`<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            Your sale log was successful added, click Logout and have a great day! Thanks once again.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>`);
        $('#submit').attr("hidden",true);
       });

        return false;
    })
});