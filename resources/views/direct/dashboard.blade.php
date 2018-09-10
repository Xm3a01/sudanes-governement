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
                    <li class="nav-item active">
                      <a class="nav-link" href="#"> <i class="fa fa-podcast" aria-hidden="true"></i>  الطوارئ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"> <i class="fa fa-telegram" aria-hidden="true"></i> استفسار</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" id="about" onclick="show()"> <i class="fa fa-question-circle" aria-hidden="true"></i> عنا</a>
                    </li>
                  </ul>
                </div>
            </div>
         </nav> 
         @foreach($notices as $notice )
         <br>
         <center>
         <div class="col-md-8">
      
          <div class="card">
             <div class="card-header">{{$notice->notice}} ({{count($notice->images)}}) <span class="pull-right">{{$notice->created_at}}</span></div>
              <div class="card-body">
                <div class="row">
                @foreach($notice->images as $image)
                  <div class="col-md-4">
                      <img src="{{Storage::url($image->image)}}" height="200px" width="250px">
                  </div>
                @endforeach
                </div>
             </div>
           </div>
        </div>
      </center>
         @endforeach


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>