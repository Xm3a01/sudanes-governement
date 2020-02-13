@extends('dashboard.metronic')
@section('content')


<div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1> 
            </h1>
        </div> 
    </div>
    <!-- END PAGE HEAD-->
    <!-- BEGIN PAGE BREADCRUMB -->
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="#">الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active"> تعديل معلومات الشركاء</span>
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
                        <span class="caption-subject font-dark bold uppercase"> معلومات الشركاء</span>
                    </div>
                 </div> 
    <div class="portlet-body form">
      <form class="form-horizontal" role="form" action="{{route('abouts.update' , $partener->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <input type="hidden" name="select_one" value="partner">
       
             <div class="form-body"> 
               <div class="form-group">
                  <label class="col-md-3 control-label">  إسم الشركة  </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="ادخل إسم الشركة" name="partner_name" value="{{$partener->partner_name}}"> 
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-md-3 control-label">  شعار الشركة   </label>
                    <div class="col-md-6">
                        <input type="file" class="form-control" name="partner_logo" value="{{$partener->partner_logo}}"> 
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row"> 
                        <button type="submit" class="btn green">حفظ</button> 
                     </div>
                </div>
                </div>
                  
            </form>
         
    </div> 
</div>
</div>
</div>



@endsection