@extends('layouts.mastar')

@section('content')
<div class="login-page">
<section class="cover-on">
 <div class="container">
      <center>
         <div class="login-form" >
             <form action="{{route('register')}}" method="post">
                
                @csrf

                   <div class="form-group">
                       <select name="ministry" id="" class="form-control{{ $errors->has('ministry') ? ' is-invalid' : '' }}" >
                          <option value="">اختار الوزاره</option>
                          @foreach($ministries as $ministry)
                           <option value="{{$ministry->id}}">{{$ministry->name}}</option>
                           @endforeach
                       </select>
                    </div>
                  <div class="form-group">
                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="" placeholder="لاسم">
                  </div>
                  <div class="form-group">
                     <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="" placeholder="البريد اللاكتروني">
                  </div>
                 <div class="form-group">
                    <select name="gender" id="" class="form-control" >
                      <option value="1">ذكر</option>
                      <option value="0">انثى</option>
                   </select>
                 </div>
                 <div class="form-group">
                        <input type="password"class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="" placeholder="كلمة السر">
                  </div>
                  <div class="form-group">
                       <input type="password"class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" id="" placeholder="اعد كلمة السر">
                
                   </div>
                   <button type="submit" class="btn btn-primary">تسجيل</button>
             </form>
         </div>
      </center>
    </div>
</section>  
</div>
@stop
