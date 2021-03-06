

$('#table-teammate').DataTable({
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
        url: "teammate/table",
    },
    columns: [
        {
            class: "align-middle",
            data: 'id',
            name: 'id'
        },
        {
            class: "align-middle",
            data: 'image',
            name: 'image',
             
            render: function (data, type, row, meta) {
                return '<a data-caption="' + data + ' | کد : ' + row.id + '" data-fancybox="gallery" href="/upload/img/' + row.image + '" target="_blank" class="d-flex text-dark  text-dark align-items-center">\n<img class="border bordar-dark ml-3 mr-2" src="/upload/img/thumb/' + row.image + '" width="64">\n  <span>' +''+ "</span>\n </a>"
            }
        },
        {
            class: "align-middle",
            data: "name",
            name: "name",

         
        },
        {
            class: "align-middle",
            data: "describe",
            name: "describe",
            render: function (data, type, row, meta) {
                return ('<textarea class="form-control w-100" disabled >'+data+'</textarea>')
                        }
         
        },
        {
            class: "align-middle",
            data: "actions",
            name: "actions",

        },



    ]
});