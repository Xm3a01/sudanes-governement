<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/41377051_481118205695679_1374654366698438656_n.png "/>
    <title>sudan government notice </title>
    

    <!--fonts -->
    <link href="https://fonts.googleapis.com/css?family=Amiri|Cairo|Tajawal" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--script-->
   
    <!--styles-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
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
         @if(Session::has('success'))
          <div class="alert alert-success col-md-3 " id = "alert">{{Session::get('success')}} 
          <strong onclick="hide()">x</strong> 
          </div>
          @endif
          @if($errors->has('notice'))
          <div class="alert alert-danger col-md-3 " id = "alert"> يجب ان تملأ حقل البلاغ
          <strong onclick="hide()">x</strong> 
          </div>
          @endif
      <section class="top-content">
        <div class="biler">
          <div class="container">
             <div class="row">
                 <div class="col-md-5 ">
                     <div class="text-content">
                          <div class="text-right">
                            <h2 class="line-under-center">بلاغك</h2>
                          </div>
                            <h6>
                                   الخرطوم في 26-8 (سونا)- أكد النائب الأول لرئيس الجمهورية رئيس مجلس الوزراء جاء ذلك لدى 
                            </h6>
                     </div>
                       <div class="lead">
                            الخرطوم في 26-8 (سونا)- أكد النائب الأول لرئيس الجمهورية رئيس مجلس الوزراء
                     </div>
                        <button class="btn btn-defult">اخبرنا</button>
                 </div>
                 <div class="col-md-7 text-center">
                    <!--Image created by ali Elawad-->
                      <img src="images/41377051_481118205695679_1374654366698438656_n.png" height="300px" width="300px"alt="">
                 </div>
             </div>
          </div>
        </div>
    </section>
    <section class="social-media">
       <div class="container">
          <div class="row">
            <div class="col-md-4  d-none d-sm-block" style="padding-top:10px;">
              <h3>مواقع التواصل</h3>
              كل مواقع التواصل للحكومه لاكترونيه
            </div>
            <div class="col-md-8 d-none d-sm-block  ">
              <ul class="list-unstyled">
                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>

          </div>
      </div>
    </section>
    <!--Star the therd section information-->
    <section class="information">
       <div class="information-dark">
      <div class="container">
        <div class="row">
         <div class="col-md-7 text-center nativ">
           <div class="nativ-in">
                <h2 class="line-under-center">معلومات </h2>
                <h6 class="info-text">اثنا ما ضغط علي الزر سوف يوم الموقع بخد الموع الخاص بك والمعلومات المدخله عليه يكون 
                    يجب ان تكون المعلومات صحيحه ميه ميه ولا سوف تعرض نفسك للعقوبات الصارمه جدا 
                    جاءت هذه الفكر للرتقاء الديمقراطي وليس للعبس واللعب
                    اثنا ما ضغط علي الزر سوف يوم الموقع بخد الموع الخاص بك والمعلومات المدخله عليه يكون 
                    يجب ان تكون المعلومات صحيحه ميه ميه ولا سوف تعرض نفسك للعقوبات الصارمه جدا 
                    جاءت هذه الفكر للرتقاء الديمقراطي وليس للعبس واللعب
                    <br>
                    وشكرا
                  </h6>
           </div>
          </div>
          <div class="col-md-5  ">
          <div class="information-form">
              <div class="information-header line-under-center">
                  فورم البلاغات
                </div>
            <form action="{{route('notices.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group row">
                <div class="col-md-3">
                  <label class="input-group-btn">
                      <span class="btn btn-danger">
                          صوره&hellip; <input type="file" name="image[]" accept="image/*" style="display: none;" multiple>
                      </span>
                  </label>
                </div>
                <div class="col-md-9">
                  <input type="text"  class="form-control file-input" placeholder="صوره للبلاغ"  readonly>
                </div>
              </div>

              <div class="form-group">
                  <textarea name="notice" id="" cols="30" rows="10" class="form-control" placeholder=" صف الحاله والعلومات"></textarea>
               </div> 
               <button type="submit" class="btn btn-danger">بلّغ</button>
            </form>
          </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <!--End inforamtion section-->
    <!--Star footer section-->
     <section class="footer">
       <div class="container">
         <div class="row">
            <div class="col-md-6">
              kffffffffffkfkf
            </div>
            <div class="col-md-6">
              fjjjjjjjjjjjj
            </div>
         </div>
       </div>
     </section>
    <!--End footer section-->
    <script>
      function hide()
      {
          document.getElementById("alert").style.display = "none";
      }
   </script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
