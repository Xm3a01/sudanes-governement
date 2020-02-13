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
             <form class="form-horizontal" id="user-form" role="form" method="POST" action="{{route('cv.update' , $language->id)}}">
                @csrf
                @method('PUT')
                        <input type="hidden" name="select" value="lang" >
                        <div class="form-body">
                        <br><h4 class="text-left m-3">اللغات </h4><br>
                        <div class="form-group">
                                <label class="col-md-2 control-label">اختر اللغة</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="language">
                                            <option disabled >اللغه</option>
                                            <option value="{{$language->language}}" disabled> {{$language->ar_language}} </option>
                                            <option value="Arabic">العربية</option>
                                            <option value="English">الانجليزية</option>
                                            </select>
                                    </div>

                                    <label class="col-md-1 control-label" >اختر المستوي</label>
                                    <div class="col-md-4">
                                        <select class="form-control" name="language_level">
                                                <option disabled>مستوى اللغه</option>
                                                <option disabled selected value=" {{$language->language_level}} "> {{$language->ar_language_level}} </option>
                                                <option value="Beginner">مبتدئي</option>
                                                <option value="Intermediate">متوسط</option>
                                                <option value="Mother tounge">اللغه الاساسيه</option>
                                                </select>
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