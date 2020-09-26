if ($(".custom-file-input")[0]) {
    document.querySelector('.custom-file-input').addEventListener('change', function (e) {})
}



$(document).ready(function () {
    $(document).on('change', '.btn-file :file', function () {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
    });
    $('.btn-file :file').on('fileselect', function (event, label) {
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        if (input.length) {
            input.val(log);
        } else {
            if (log) alert(log);
        }
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#picture").change(function () {
        readURL(this);
    });
});

function uploadImage() {
    var name = document.getElementById("picture").files[0].name;
    var form_data = new FormData();
    var ext = name.split('.').pop().toLowerCase();
    if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
        alert("فرمت فایل ارسالی عکس نیست");
    }
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("picture").files[0]);
    var f = document.getElementById("picture").files[0];
    var fsize = f.size || f.fileSize;
    if (fsize > 5000000) {
        alert("سایز عکس بیشتر از 5 مگ است");
    } else {
        form_data.append("picture", document.getElementById('picture').files[0]);
        $.ajax({
            url: "/admin/upload",
            method: "POST",
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                $('#uploaded_image').html(`
                <div class="alert w-100 alert-primary" role="alert">
                <strong>وضعیت : </strong> درحال آپلود ...
                </div>
               `);
                $('.js-submit-gallery-image').prop('disabled', true);
            },
            success: function (data) {
                $('#uploaded_image').html(`
                <div class="alert w-100 alert-success" role="alert">
                <strong>وضعیت : </strong> آپلود موفق
                </div>`);
                $('.js-submit-gallery-image').prop('disabled', false);
                $('.js-image-name').val(data);

            }
        });
    }
};
if ($(".custom-file-input")[0]) {
    document.querySelector('.custom-file-input').addEventListener('change', function (e) {})
}

if ($(".custom-file-input-invoice")[0]) {
    document.querySelector('.custom-file-input-invoice').addEventListener('change', function (e) {})
}

$(document).ready(function () {
    $(document).on('change', '.btn-file :file', function () {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
    });
    $('.btn-file :file').on('fileselect', function (event, label) {
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        if (input.length) {
            input.val(log);
        } else {
            if (log) alert(log);
        }
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#picture").change(function () {
        readURL(this);
    });
});




$(document).on('change', '.js-btn-upload-gallery', function () {
    uploadImage();
})

