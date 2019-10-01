$(function(){

    $('#insertEvent').submit(function(){
       var url = $(this).attr('action');
       var data = $(this).serialize();
       //console.log(data);
       $.post(url, data, function(e){
        alert(1);
       });

        return false;
    });
});