let usersPage = (function () {

    $.ajax({
        url: 'get-users',
        type: 'GET',
        beforeSend: function(){

        },
        complete: function(data){
          let records = JSON.parse(data.responseText);
          console.log(records);
        }
    });
    let tableId = document.getElementById('simpletable');
    $(tableId).DataTable();

})();
