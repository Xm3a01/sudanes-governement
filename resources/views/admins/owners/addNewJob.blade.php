@extends('dashboard.metronic')
@section('content')

 <!-- BEGIN PAGE HEAD-->
 <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1> جدول الوظائف
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
            <span class="active">إضافة وظيفة جديدة  </span>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->
    <!-- BEGIN PAGE BASE CONTENT --> 
<div class="row"> 
<div class="col-md-12 ">
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet light bordered">
            <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-green hide"></i>
                        <span class="caption-subject font-dark bold uppercase">إضافة وظيفة جديدة</span>
                </div>
            </div> 
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" method="POST" action="{{route('jobs.store')}}">
                @csrf
                <div class="form-body"> 
                  <input  type="hidden" name="owner_id" value="{{$owner->id}}">

                  <div class="form-group">
                        <label class="col-md-3 control-label">الدور الوظيفي</label>
                        <div class="col-md-6">
                         <select name="role_id" id="inputState" class="form-control">
                            <option selected disabled>الدور الوظيفي</option>
                            @foreach ($roles as $role)  
                            <option value="{{ $role->id }}">{{ $role->ar_name }}</option>
                            @endforeach
                          </select>
                        </div>      
                   </div>
                    <div class="form-group">
                         <label class="col-md-3 control-label">المستوى الوظيفي</label>
                            <div class="col-md-6">
                             <input type="text" class="form-control  " placeholder="مثال:  اخصائي- " name="level">
                            </div>      
                        </div>


                <div class="form-group">
                        <label class="col-md-3 control-label"> الدوله</label>
                        <div class="col-md-6">
                            <select name="country_id" id="inputState" class="form-control">
                            <option selected disabled>الدوله</option>
                            @foreach ($countries as $country) 
                            <option value="{{ $country->id }}">{{ $country->ar_name }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                        <div class="form-group">
                                <label class="col-md-3 control-label">المدينه </label>
                                <div class="col-md-6">
                                    <select name="city_id" id="inputState" class="form-control">
                                    <option selected disabled>المدينه</option>
                                    @foreach ($cities as $city)   
                                    <option value="{{ $city->id }}">{{ $city->ar_name }}</option>
                                    @endforeach
                                    </select>
                                </div>      
                            </div>

                            <div class="form-group">
                                    <label class="col-md-3 control-label"> التخصص الاساسي</label>
                                    <div class="col-md-6">
                                        <select name="special_id" id="inputState" class="form-control">
                                        <option selected disabled>التخصص الاساسي</option>
                                        @foreach ($specials as $special) 
                                        <option value="{{ $special->id }}">{{ $special->ar_name }}</option>
                                        @endforeach
                                        </select>
                                    </div>      
                                </div>

                                <div class="form-group">
                                        <label class="col-md-3 control-label"> التخصص الفرعي</label>
                                        <div class="col-md-6">
                                            <select name="sub_special_id" id="inputState" class="form-control">
                                                <option selected disabled>التخصص</option>
                                                @foreach ($sub_specials as $sub_special)  
                                                    <option value="{{ $sub_special->id }}">{{ $sub_special->ar_name }}</option>
                                                @endforeach
                                            </select>
                                     </div>       
                                </div>
                    
                            <div class="form-group">
                                    <label class="col-md-3 control-label"> سنين الخبرة المطلوبة</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control  " placeholder="مثال: 1 شهر و2 سنة " name="experinse">
                                    </div>
                                </div>
                                
                            <div class="form-group">
                                    <label class="col-md-3 control-label">حالة العمل</label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="status">
                                            <option value="Full time">دوام كامل</option>
                                            <option value="Part time">دوام جزئي</option>
                                        </select>
                                    </div>
                                </div>
                    
                            <div class="form-group ">
                                    <label class="col-md-3 control-label">الراتب</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control  " placeholder="مثال: 2500 - 5000" name="selary">
                                      </div>
                                </div>

                            <div class="form-group">
                                    <label class="col-md-3 control-label">الوصف الوظيفي</label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" rows="3" name="ar_description"></textarea>
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

            <!-- END PAGE BASE CONTENT -->
                         


@endsection