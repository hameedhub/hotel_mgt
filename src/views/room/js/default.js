$(function(){
    
    $.get('typeList', function(e){
        
        e.forEach(o => {
            //console.log(o);
            $('#roomType').append(`<tr><td>${o['room_type_name']}</td><td>${o['price']}</td><td>${o['description']}</td><td><a class="del" ref="${o['id']}" href="#" > <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
            <i class="zmdi zmdi-delete" style="color:red"></i>
        </button></a></td></tr>`);

        });
        $('.del').click(function(){
            item = $(this);
            var id = $(this).attr('ref');
            $.post('delType', {'id': id}, function(e){
                item.parent().parent().remove();
            });
            return false;
        });


    }, 'json');
    $.get('room/typeList', function(e){
        
        e.forEach(o => {
            $('#selectType').append(`<option value="${o['id']}">${o['room_type_name']}</option>`);

        });
    }, 'json');

    $.get('room/roomList', function(e){
        
        e.forEach(o => {

           $('#rooms').append(`<tr><td>${o['room_name']}</td><td>${o['room_type_name']}</td><td>${o['location']}</td><td>${o['price']}</td><td>${o['status']}</td><td><a class="del" ref="${o['id']}" href="#" > <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
           <i class="zmdi zmdi-delete" style="color:red"></i>
       </button></a></td></tr>`);
        });

        $('.del').click(function(){
            item = $(this);
            var id = $(this).attr('ref');
            $.post('room/delRoom', {'id': id}, function(e){
                item.parent().parent().remove();
            });
            return false;
        });
    }, 'json');


    $('#saveType').submit(function(){
       var url = $(this).attr('action');
       var data = $(this).serialize();
       //console.log(data);
       $.post(url, data, function(e){

       });

        return false;
    });

    $('#addRoom').submit(function(){
        var url = $(this).attr('action');
        var data = $(this).serialize();
        console.log(data);
        $.post(url, data, function(e){
 
        });
 
         return false;
     });
});