

$('#table-category').DataTable({
    dom: 'Pflrtip',
    language: {
        "emptyTable": "هیچ داده ای جهت نمایش وجود ندارد",
        "info": "نمایش _START_ تا _END_ از _TOTAL_ رکود",
        "infoEmpty": "نمایش 0 تا 0 از 0 رکود",
        "search": "جستجو",
        "lengthMenu": "نمایش _MENU_",
        "processing": " درحال پردازش ...",
        "paginate": {
            "first": "اولین",
            "last": "آخرین",
            "next": "بعدی",
            "previous": "قبلی"
        },
    },
    processing: true,
    serverSide: true,
    ajax: {
        url: "category/table",
    },
    columns: [
        {
            class: "align-middle",
            data: 'id',
            name: 'id'
        },
        {
            class: "align-middle",
            data: 'name',
            name: 'name',
             
        },
        {
            class: "align-middle",
            data: "actions",
            name: "actions",

     
        },
    ]
});


$(document).on('click','.js_category_edit',function(){
$('.js_category_id').val($(this).attr('id'));
$('.js_category_value').val($(this).attr('data-value'));
    $('#modal_edit').modal('show');
})