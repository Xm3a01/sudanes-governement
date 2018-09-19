<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sudanese governement</title>
    <link rel="icon" href="images/41377051_481118205695679_1374654366698438656_n.png "/>

    <link href="https://fonts.googleapis.com/css?family=Amiri|Cairo|Tajawal" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.toast.min.css')}}">

    <!--styles-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>

     @yield('content')

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/jquery.toast.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>

<script type="text/javascript">
  $(document).ready(function() {
  @if(Session::has('success'))
      $.toast({
        heading: 'نجاح',
        text: "{{ Session::get('success') }}",
        showHideTransition: 'slide',
        position: 'botton-right',
        icon: 'success',
        class: 'message'
        });
        @endif

       @if(Session::has('error'))
      $.toast({
        heading: 'حطأ',
        text: "{{ Session::get('error') }}",
        showHideTransition: 'slide',
        position: 'botton-right',
        icon: 'success',
        class: 'message'
       });
       @endif

      @foreach ($errors->all() as $error)
     $.toast({
        heading: 'حطأ',
        text: "{{ $error }}",
        showHideTransition: 'slide',
        position: 'botton-left',
        icon: 'error',
        class: 'message',
        hideAfter: false
       });
       @endforeach
});
 function hide()
 {
  window.document.getElementById('hid').style.display = "none";
 }
  </script>
</body>
</html>