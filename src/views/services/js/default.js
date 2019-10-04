$(function(){
    $.get('services/getServices', function(e){
        
        e.forEach(o => {
            //console.log(o);
            $('#services').append(`<tr><td>${o['name']}</td><td>${o['outlet']}</td><td>${o['product']}</td><td>${o['price']}</td><td>${o['description']}</td><td><a class="del" ref="${o['id']}" href="#" > <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
            <i class="zmdi zmdi-delete" style="color:red"></i>
        </button></a></td></tr>`);

        });
        $('.del').click(function(){
            item = $(this);
            var id = $(this).attr('ref');
            $.post('services/delService', {'id': id}, function(e){
                item.parent().parent().remove();
            });
            return false;
        });

    }, 'json');


    $('#addService').submit(function(){
        var url = $(this).attr('action');
       var data = $(this).serialize();
       //console.log(data);
       $.post(url, data, function(e){
        $('#alert').append(`<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            Service was successful added, click close if you're done.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>`);
       });

        return false;
    })
    

});