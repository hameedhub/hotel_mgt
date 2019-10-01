$(function(){

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

            <div class="rs-select2--trans rs-select2--sm">
                <select class="js-select2" required name="access">
                    <option value="0">None</option>
                    <option value="1">Staff</option>
                    <option value="2">Manager</option>
                    <option value="3">Store</option>
                    <option value="4">Accountant</option>
                </select>
                <div class="dropDownSelect2"></div>
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

    $.post(url, data, function(){

    });

});