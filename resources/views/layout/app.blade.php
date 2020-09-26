<!doctype html>
<html lang="fa" dir="rtl">
<?php
$statics = App\Statics::first();
?>

<head>
  <title>{{$statics->title}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{asset('fontawesome-pro-5.5.0/css/all.min.css')}}">

</head>

<body data-barba="wrapper">

  @yield('content')


  <script src="{{asset('js/app.js')}}"></script>
  <script src="https://unpkg.com/@barba/core"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/simple-slider/1.0.1/simpleslider.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>

  <script>
    barba.init({
    preventRunning: true,
    sync:true,
    transitions: [{
    name: 'opacity-transition',
    leave(data) {
      return gsap.to(data.current.container, {
        opacity: 0
      });
    },
    enter(data) {
      return gsap.from(data.next.container, {
        opacity: 0
      });
    }
  }]
});

</script>


</body>

</html>