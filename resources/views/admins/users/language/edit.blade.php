@extends('dashboard.metronic')
@section('content')


 <!-- BEGIN PAGE HEAD-->
 <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1> جدول اللغات
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
            <span class="active">تعديل اللغة </span>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->
    <!-- BEGIN PAGE BASE CONTENT --> 
    <div class="row"> 
<div class="col-md-12">
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet light bordered">
        <div class="portlet-body form">
            <form class="form-horizontal" id="user-form" role="form" method="POST" action="{{route('cv.update' , $language->id)}}">
                @csrf
                @method('PUT')
                        <input type="hidden" name="select" value="lang" >
                        <div class="form-body">
                         <div class="">
                            <div class="form-group">
                                
                    <label class="control-label col-md-2"> اللغة</label>
                    <div class="col-md-6">
                        <input  class="form-control"  name="ar_language" placeholder="ادخل اللغة" value="{{$language->ar_language}}">
                    </div>
                  </div> 
                   <div class="form-group">
                    <label class="control-label col-md-2"> language  </label>
                    <div class="col-md-6">
                        <input  class="form-control"  name="language" placeholder="Enter language" value="{{$language->language}}">
                     </div>
                    </div> 
                        </div>
                            <div class="form-group">
                              <label class="col-md-2 control-label" >اختر المستوي</label>
                                <div class="col-md-6">
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
                        
                                </div>
                            </form>
             
                            </div> 
                        </div>
                    </div>



@endsection