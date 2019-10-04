$(function(){

    $.get('booking/viewBooking', function(e){
         console.log(e)
        e.forEach(o => {
            console.log(o[1]);
         $('#bookings').append(`<tr><td>${o['first_name']} ${o['last_name']}</td><td>${o['room_name']}</td><td>${o['check_in']}</td><td>${o['check_out']}</td><td>${o['adults']}</td><td>${o['children']}</td><td>${o['rate']}</td><td>${o['amount_paid']}</td><td>${o['balance']}</td><td>${o['status']}</td> <td><button ref="${ref =[`${o['id']}`,`${o['room_id']}`, `${o['guest_id']}` ]}" type="button" class="btn btn-danger btn-sm">
         <i class="fa fa-tash"></i>&nbsp;Check Out</button></td></tr>`);  


         $('.btn').click(function(){
            item = $(this);
            var ref = $(this).attr('ref');
            //alert(ref);
            
            $.post('booking/checkout', {'data': ref}, function(e){
                item.parent().parent().remove();
            });
            return false;
        });
        
        });

    }, 'json');
    
    $.get('booking/availRooms', function(e){
        
        e.forEach(o => {
            $('#rooms').append(`<option value="${o['id']}"> ${o['room_type_name']} - ${o['room_name']} - ₦${o['price']}</option>`);

        });
    }, 'json');

    $.get('booking/bookedGuest', function(e){
        
        e.forEach(o => {
            $('#guest').append(`<option value="${o['id']}"> ${o['first_name']} - ${o['last_name']} - ${o['arrival']}</option>`);

        });
    }, 'json');

    
    $('#addBooking').submit(function(){
        var url = $(this).attr('action');
        var data = $(this).serialize();
        
        $.post(url, data, function(e){
            $('#alert').append(`<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            Guest Booking was successful, click close if you're done.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>`);
        });
 
         return false;
     });
});