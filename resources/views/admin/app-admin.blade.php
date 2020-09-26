<!doctype html>
<html lang="fa" class="h-100" dir="rtl">

<head>
  <title>Moha</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{asset('css/admin.css')}}">
  <link rel="stylesheet" href="{{asset('fontawesome-pro-5.5.0/css/all.min.css')}}">
  @FilemanagerScript

</head>

<body class="bg-light h-100 " >
  @yield('content')



  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('tinymce/tinymce.min.js')}}"></script>

  <script>
    tinymce.init({
  selector: 'textarea#tiny',
  file_picker_callback: filemanager.tinyMceCallback,
  content_css: '{{asset("tinymce/mytiny.css")}}',

    theme: 'modern',
    
    height: 500,
    plugins: [
      'advlist code autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'save table contextmenu directionality emoticons template paste textcolor'
    ],
    toolbar: 'code | insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
    font_formats:'moha'
 

});


  </script>


</body>

</html>