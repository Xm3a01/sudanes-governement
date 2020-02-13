@extends('dashboard.metronic')

@section('title')
    اضافة صاحب عمل
@endsection
@section('content')


   <!-- BEGIN PAGE HEAD-->
   <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1> ادارة اصحاب العمل 
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
            <span class="active">إضافة صاحب عمل جديد  </span>
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
                        <span class="caption-subject font-dark bold uppercase">إضافة صاحب عمل جديد</span>
                    </div>
                 </div> 
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" method="POST" action="{{route('companies.store')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="label" value="admin">
                <input type="hidden" name="select" value="owner">
                <div class="form-body">
                        <div class="form-group">
                                <label class="col-md-3 control-label">الاسم الاول</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="الاســم " name="ar_name">
                                  </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">الاسم الثاني</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="الاســم " name="ar_last_name">
                                  </div>
                            </div>
                        <div class="form-group">
                                <label class="col-md-3 control-label">البريد اللاكتروني</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="البريد اللاكتروني " name="email">
                                  </div>
                            </div>
                            <div class="form-group">
                                    <label class="col-md-3 control-label">كلمة السر</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" placeholder="كلمة السر" name="password">
                                      </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-3 control-label">الهــاتف</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="الهاتف" name="phone">
                                          </div>
                                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">إسم الشركة</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="ادخل إسم الشركة " name="company_name">
                          </div>
                    </div>
                    <div class="form-group">
                            <label class="col-md-3 control-label"> إسم الشركة بالانجليزي</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="ادخل إسم الشركة " name="company_name_en">
                              </div>
                        </div>
                    <div class="form-group">
                            <label class="col-md-3 control-label"> بريد العمل الإلكتروني / عنوان URL</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="ادخل  بريد العمل الإلكتروني / عنوان URL " name="company_email">
                              </div>
                        </div>

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
                            <label class="col-md-3 control-label">الجنس</label>
                            <div class="col-md-6">
                                <select class="form-control" name="gender">
                                    <option disabled selected> الجنس</option>    
                                    <option value="Maile">ذكر</option>
                                    <option value="Femaile">انثى</option>
                                </select>
                            </div>
                        </div>
                      
                            <div class="form-group">
                                    <label class="col-md-3 control-label">الوصف الوظيفي</label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" rows="3" name="ar_description"></textarea>
                                    </div>
                                </div>
                    
                                <div class="form-group">
                                        <label for="exampleInputFile" class="col-md-3 control-label">الشعار</label>
                                        <div class="col-md-6">
                                            <input type="file" id="exampleInputFile" name="logo">
                                            <p class="help-block">ملف (اختياري)</p>
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
