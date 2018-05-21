$('#simpletable').DataTable({
    dom: 'lBfrtip',
    "pagingType": "full_numbers",
    buttons: [
        {
            extend: 'copyHtml5',
            exportOptions: {
             columns: ':contains("Office")'
            }
        },
        {
            extend: 'pdfHtml5',
            message: 'PDF created by PDFMake with Buttons for DataTables.'
        },
        'excelHtml5',
        'csvHtml5',
        'pdfHtml5',
        'print'
    ]
});



$('.users').on('click','.add-clicks', function(event) {

    $('#clicks-form').modal('show');
    let slug = this.id;
    $('#user-slug').val(slug)

    console.log();
});

// document.querySelector('.users').addEventListener('click', function (e) {
//     // e.preventDefault();
    
// });