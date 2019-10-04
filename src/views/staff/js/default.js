$(function(){
    $.get('staff/viewAccess', function(e){
        
        e.forEach(o => {
            $('#selectAccess').append(`<option value="${o['id']}">${o['access']}</option>`);

        });
    }, 'json');

    $.get('staff/viewUsers', function(e){
        
        e.forEach(o => {
            $('#selectUsers').append(`<option value="${o['id']}">${o['first_name']} - ${o['last_name']}</option>`);

        });
    }, 'json');

    $.get('staff/view', function(e){
       e.forEach(o => {
        $('#staffList').append(`<tr>
        <td>
            <div class="table-data__info">
                <h6>${o['first_name']} ${o['last_name']}</h6>
                <span>
                    <a href="#">${o['email']}</a><br>
                    <a href="#">${o['phone']}</a>
                </span>
            </div>
        </td>
        <td>
            <span class="role admin">${o['access']}</span>
        </td>
        <td>
            <div class="desc">
               Benin
            </div>
        </td>
        
        <td>
            <span class="status--process">${o['status']}</span>
        </td>

        <td>
        <div class="table-data-feature">
        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
            <i class="zmdi zmdi-delete"></i>
        </button>
    </div>
            
        </td>
    </tr>`);

       }); 


    }, 'json');

    $('#role').submit(function(){
        var url = $(this).attr('action');
        var data = $(this).serialize();
        
        $.post(url, data, function(e){
            console.log(e);
            $('#alert').append(`<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            Access role was saved successful, click close if you're done.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>`);
        });
 
         return false;
     });

});