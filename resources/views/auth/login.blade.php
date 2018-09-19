@extends('layouts.mastar')

@section('content')
<div class="login-page">
<section class="cover-on >
 <div class="container">
      <center>
         <div class="login-form" >
             <form action="{{route('login')}}" method="post">
                 @csrf
                 <div class="form-group">
                     <input type="email" class="form-control" name="email" id="" placeholder="البريد اللاكتروني">
                 </div>
                 <div class="form-group">
                        <input type="password"class="form-control" name="password" id="" placeholder=" كلمة السر">
                  </div>
                   <button type="submit" class="btn btn-primary">خول</button>
                    <br>
                    <br>
                   <div class="form-group">
                       <a href="">تسجيل</a> | <div class="hint">الحساب الجديد تكون مسأؤل عنه</div>
                       
                  </div>
             </form>
         </div>
      </center>
    </div>
</section>  
</div>
@stop