$(function(){
    

    $.get('reservation/List', function(e){
        
        e.forEach(o => {

           $('#reservations').append(`<tr><td>${o['first_name']}</td><td>${o['last_name']}</td><td>${o['email']}</td><td>${o['address']}</td><td>${o['date_of_birth']}</td><td>${o['origin']}</td><td>${o['destination']}</td><td>${o['arrival']}</td><td>${o['departure']}</td><td>${o['nationality']}</td><td>${o['passport_no']}</td><td>${o['date_issued']}</td><td>${o['tel_no']}</td><td>${o['company']}</td><td><a class="del" ref="${o['id']}" href="#" > <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
           <i class="zmdi zmdi-delete" style="color:red"></i>
       </button></a></td></tr>`);
        });

        // $('.del').click(function(){
        //     item = $(this);
        //     var id = $(this).attr('ref');
        //     $.post('room/delRoom', {'id': id}, function(e){
        //         item.parent().parent().remove();
        //     });
        //     return false;
        // });
    }, 'json');

    $('#addReservation').submit(function(){
        var url = $(this).attr('action');
        var data = $(this).serialize();
        console.log(data);
        $.post(url, data, function(e){
 
        });
 
         return false;
     });
});