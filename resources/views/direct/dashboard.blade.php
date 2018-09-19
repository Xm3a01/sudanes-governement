<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/41377051_481118205695679_1374654366698438656_n.png "/>
    <title>الحكومه اللاكترونيه بلاغك</title>

    <!--fonts -->
    <link href="https://fonts.googleapis.com/css?family=Amiri|Cairo|Tajawal" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!--styles-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body >
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <div class="container">
                <a class="navbar-brand" href="#">بلاغك</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                      <div id="app">
                        <a id="navbarDropdown"  class="nav-link dropdown-toggle bell-id" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        @if(Auth::user()->unreadnotifications->count() > 0)
                        <count class="count"></count> @endif <i class="fa fa-bell"></i> البلاغات
                          </a>
                          <div class="dropdown-menu  dropdown-menu-left" aria-labelledby="navbarDropdown">
                          @foreach(Auth::user()->unreadnotifications as $notfy)
                              <a href="{{ route('blags.show' , $notfy->data['id']) }}" class="dropdown-item">
                                    {{ str_limit($notfy->data['notice'], $limit = 40, $end = '...') }}  <span class="caret"></span>      
                               </a>
                               <hr>
                          @endforeach
                            </div>
                         </div>
                     </li>
                  </ul>
                </div>
            </div>
         </nav> 
         <section class="back-logo">
            
          <div class="front-logo">
            <div class="font-user">
            {<small>{{Auth::user()->ministry->name}}</small>}
            <a href="" class="dropdown">{{ Auth::user()->name }}</a> 
            <img src="{{Storage::url( Auth::user()->avatar )}}" height="20"px" width="20px" class="img-circle" alt="">
            </div>
             
          </div>
     </section>
 <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/app.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>