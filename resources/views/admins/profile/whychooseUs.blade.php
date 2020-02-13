@extends('dashboard.metronic')
@section('title')
    لماذانحن
@endsection
@section('content')

 <!-- BEGIN PAGE HEAD-->
 <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>      لماذا نحن؟    
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
            <span class="active">إضافة    مميزاتنا  </span>
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
                        <span class="caption-subject font-dark bold uppercase">  إضافة معلومات لماذا نحن؟    </span>
                    </div>
                 </div> 
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" method="POST" action="{{route('abouts.store')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="select_one" value="whyus">
                <input type="hidden" name="about_id" value="{{$about->id}}">
                <div class="form-body">  
    <div class="form-group">
        <label class="col-md-3 control-label"> العنوان  </label>
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="ادخل العنوان   " name="why_title">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label"> التفاصيل </label>
        <div class="col-md-6">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="why_details" ></textarea>
        </div>
    </div> 
    
    <div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
<button type="submit" class="btn green">حفظ</button>

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