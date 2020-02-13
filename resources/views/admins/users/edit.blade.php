@extends('dashboard.metronic')
@section('content')


 <!-- BEGIN PAGE HEAD-->
 <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1> جدول الموظفين
            </h1>
        </div> 
    </div>
    <!-- END PAGE HEAD-->
    <!-- BEGIN PAGE BREADCRUMB -->
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="index.html">الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">إضافة موظف جديد</span>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->
    <!-- BEGIN PAGE BASE CONTENT --> 
    <div class="row"> 
<div class="col-md-12">
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet light bordered">
            <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-green hide"></i>
                        <span class="caption-subject font-dark bold uppercase">إضافة سيرة ذاتية جديدة</span>
                    </div>
                 </div>
        <div class="portlet-body form">
             <form class="form-horizontal" id="user-form" role="form" method="POST" action="{{route('cv.update' , $user->id)}}">
                @csrf
                @method('PUT')
                <input type ="hidden" name ="select_user" value ="user_edit">
                <div class="form-body">
                    <h4 class="text-left m-3">البيانات الشخصية</h4><br>
                    <div class="form-group">
                        <label class="col-md-2 control-label">الإسم  </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="ادخل إسم  " name="ar_name" value="{{$user->ar_name}}">
                          </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> الاسم باللغه لانجليزيه </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="ادخل إسم  " name="name" value="{{$user->name}}">
                        </div>      
                    </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label">الاسم الثاني  </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="ادخل إسم  " name="ar_last_name" value="{{$user->ar_last_name}}">
                          </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> الاسم باللغه لانجليزيه </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="ادخل إسم  " name="last_name" value="{{$user->last_name}}">
                        </div>      
                    </div>
                    <div class="form-group">
                            <label class="col-md-2 control-label">البريد الاكتروني</label>
                            <div class="col-md-4">
                                <input type="email" name="email" class="form-control  " placeholder=" ادخل البريد الاكتروني" value="{{$user->email}}">
                            </div>
                            <label class="col-md-1 control-label">كلمة المرور</label>
                            <div class="col-md-4">
                                    <input type="password" name="password" class="form-control" placeholder="كلمة المرور">
                             </div> 
                        </div>
                    
                        <div class="form-group">
                                <label class="col-md-2 control-label">الجنسية  </label>
                                <div class="col-md-4">
                                <select name="country_id" id="inputState" class="form-control">
                                    @foreach ($countries as $country) 
                                     <option {{$user->country_id == $country->id ? 'selected' : ''}} value="{{ $country->id }}">{{ $country->ar_name }}</option>
                                    @endforeach
                                </select>
                                </div>
    
                                  <label class="col-md-1 control-label">العنوان</label>
                                  <div class="col-md-4">
                                        <select name="birth_country_id" id="inputState" class="form-control">
                                            @foreach ($countries as $country) 
                                             <option {{$user->country_id == $country->id ? 'selected' : ''}} value="{{ $country->id }}">{{ $country->ar_name }}</option>
                                            @endforeach
                                        </select>
                                 </div>
                            </div>
    
                            <div class="form-group">
                                    <label class="col-md-2 control-label">المدينه</label>
                                    <div class="col-md-4">
                                    <select name="city_id" id="inputState" class="form-control">
                                            @foreach ($cities as $city) 
                                                <option {{$user->city_id == $city->id ? 'selected' : ''}} value="{{ $city->id }}">{{ $city->ar_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                              <label class="col-md-1 control-label">تاريخ الميلاد</label>
                              <div class="col-md-4">
                                    <input type="date" class="form-control" name="birthdate" id="" value="{{$user->birthdate}}">
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-md-2 control-label"> الديانة  </label>
                                <div class="col-md-4">
                                      <select class="form-control" name="religion">
                                          <option disabled>اختر الديانة  </option>
                                          <option value="{{$user->religion}}" selected>{{$user->ar_religion}}</option>
                                          <option value="Muslime">مسلم</option>
                                          <option value="Christian">مسيحي</option>
                                          <option value="Gushin">يهودي </option>
                                          <option value="Other">اخرى</option>
                                      </select>
                                  </div>

                              <label class="col-md-1 control-label">الحالة الاجتماعية</label>
                              <div class="col-md-4">
                                    <select class="form-control" name="social_status">
                                        <option disabled >اختر الحالة الاجتماعية  </option>
                                        <option value="{{$user->social_status}}" selected>{{$user->ar_social_status}}</option>
                                        <option value="Married">متزوج</option>
                                        <option value="Single">اعزب </option>
                                    </select>
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-md-2 control-label">رقم الجواز</label>
                                <div class="col-md-4">
                                    <input type="text" name="idint_1" class="form-control" id="" placeholder="مثلا 233456765"  value="{{$user->idint_1}}">
                                </div>
                                  <label class="col-md-1 control-label">الرقم الوطني</label>
                                  <div class="col-md-4">
                                        <input type="text" name="idint_2" class="form-control  " placeholder="مثلا 188-15-34-567-45" value="{{$user->idint_2}}">
                                    </div>
                            </div>
                            
                            <div class="form-group">
                                    <label class="col-md-2 control-label">التخصص</label>
                                        <div class="col-md-4">
                                            <select name="special_id" id="inputState" class="form-control">
                                                @foreach ($specials as $special) 
                                                    <option {{$user->special_id == $special->id ? 'selected' : ''}} value="{{ $special->id }}">{{ $special->ar_name }}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                            
        
                                        <label class="col-md-1 control-label">الدور الوظيفي</label>
                                        <div class="col-md-4">
                                            <select name="role_id" id="inputState" class="form-control">
                                                    @foreach ($roles as $role) 
                                                        <option {{$user->role_id == $role->id ? 'selected' : ''}} value="{{ $role->id }}">{{ $role->ar_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                    </div>
                                    <div class="form-group">
                                    <label class="col-md-2 control-label">المستوى الوظيفي</label>
                                    <div class="col-md-4">
                                            <input type="text" name="level" class="form-control  " placeholder="مثلا : اخصائي">
                                     </div> 
                                </div>

                            <br><h4 class="text-left m-3">بيانات الاتصال</h4><br>
                            <div class="form-group">
                                    <label class="col-md-2 control-label">رقم الهاتف</label>
                                    <div class="col-md-4">
                                            <input type="text" name="phone" class="form-control  " placeholder=" ادخل رقم الهاتف" value="{{$user->phone}}">
                                     </div> 
                                </div>

                    
                                     </div>
                                         <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn green">حفظ</button>
                                                    <button type="button" class="btn default">إلغاء</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> 
                        </div>
                    </div>



@endsection