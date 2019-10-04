$(function(){

    $.get('schedule/viewEvents', function(e){
        
        e.forEach(o => {

           $('#events').append(`<tr><td>${o['title']}</td><td>${o['date']}</td><td>${o['description']}</td><td><a class="del" ref="${o['id']}" href="#" > <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
           <i class="zmdi zmdi-delete" style="color:red"></i>
       </button></a></td></tr>`);
        });

        $('.del').click(function(){
            item = $(this);
            var id = $(this).attr('ref');
            $.post('schedule/delEvent', {'id': id}, function(e){
                item.parent().parent().remove();
            });
            return false;
        });
    }, 'json');
});