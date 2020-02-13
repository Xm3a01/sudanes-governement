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
            <span class="active">إضافة لغة</span>
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
                        <span class="caption-subject font-dark bold uppercase">إضافة لغة جديدة</span>
                    </div>
                 </div>
        <div class="portlet-body form">
             <form class="form-horizontal form-row" id="user-form" role="form" method="POST" action="{{route('cv.store')}}" autocomplete="off">
                @csrf
                <input type="hidden" name="user_id" value="{{$user->id}}" >
                <input type="hidden" name="select" value="lang" >
                <div class="form-body">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                 <div class="form-group col-md-12">
                    <label class="control-label">ادخل اللغة</label>
                    <div class="">
                        <input  class="form-control"  name="ar_language" placeholder="ادخل اللغة">
                    </div>
                  </div> 
                   <div class="form-group col-md-12">
                    <label class="control-label">Enter language  </label>
                    <div class="">
                        <input  class="form-control"  name="language" placeholder="Enter language">
                    </div>
                  </div> 
                   
                <div class="form-group col-md-12">
                  <label class="control-label" >اختر المستوي</label>
                     <select class="form-control" name="language_level">
                        <option disabled selected>مستوى اللغه</option>
                        <option value="Beginner">مبتدئي</option>
                        <option value="Intermediate">متوسط</option>
                        <option value="Mother tounge">اللغه الاساسيه</option>
                    </select>
                   </div>
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