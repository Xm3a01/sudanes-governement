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
            <a href="/dashboard">الرئيسية</a>
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
             <form class="form-horizontal" id="user-form" role="form" method="POST" action="{{route('cv.update' , $education->id)}}">
                @csrf
                @method('PUT')
                <input type="hidden" name="select" value="edu" >
                <div class="form-body">
                        <br><h4 class="text-left m-3"> معلومات التعليم</h4><br>
                        <div class="form-group">
                                <label class="col-md-2 control-label" >المؤهلات</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="qualification">
                                            <option  disabled>اختر المؤهل</option>
                                            <option selected value="{{$education->qualification}}" >{{$education->ar_qualification}}</option>
                                            <option value="Diploma ">دبلوم</option>
                                            <option value="Bachelor">بكالريوس</option>
                                            <option value="Master">ماجستير</option>
                                            <option value="PH">دكتوراه</option>
                                            </select>
                                    </div>

                            <label class="col-md-1 control-label">الجامعة</label>
                            <div class="col-md-4">
                                    <input type="text" class="form-control" name="university" value="{{$education->ar_university}}" placeholder="مثال: جامعة الجزيرة" id="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">التخصص</label>
                                <div class="col-md-4">
                                    <select name="sub_special_id" id="inputState" class="form-control">
                                        @foreach ($sub_specials as $sub_special)
                                            <option selected value="{{ $education->sub_special->id }}">{{ $education->sub_special->ar_name }}</option>
                                            <option value="{{ $sub_special->id }}">{{ $sub_special->ar_name }}</option>
                                        @endforeach
                                    </select>
                                </div>      
                            <label class="col-md-1 control-label">تاريخ التخرج</label>
                            <div class="col-md-4">
                                    <input type="date" class="form-control" name="grade_date" id="" value="{{$education->grade_date}}">
                                </div>
                                </div>

                                <div class="form-group">
                            <label class="col-md-2 control-label">المعدل</label>
                            <div class="col-md-4">
                                    <input type="text" class="form-control" name="grade" placeholder="مثال: 3.00 من 4.00" id="" value="{{$education->grade}}">
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