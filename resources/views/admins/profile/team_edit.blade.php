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
                  <form class="form-horizontal" role="form" method="POST" action="{{route('abouts.update' , $emp->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="select_one" value="team">
                    <div class="form-body"> 
                     <div class="form-group">
                <label class="col-md-3 control-label">  إسم الموظف    </label>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="ادخل  إسم الموظف     " name="ar_employee_name"  value="{{$emp->ar_employee_name}}">   
                </div>
            </div>
            <div class="form-group">
            <label class="col-md-3 control-label">  إسم الموظف باللغة الانجليزية </label>
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="ادخل  إسم الموظف  " name="employee_name"   value="{{$emp->employee_name}}"> 
            </div>
           </div>
           
            <div class="form-group">
            <label class="col-md-3 control-label"> الدرجه </label>
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="ادخل  وظيفة الموظف     " name="employee_position"  value="{{$emp->employee_position}}">
            </div>
            </div>
                <div class="form-group">
                <label class="col-md-3 control-label"> صورة الموظف </label>
                <div class="col-md-6">
                    <input type="file" class="form-control" name="employee_photo">
                </div>
            </div>

           <div class="form-actions">
             <div class="row">
               <div class="col-md-offset-3 col-md-9">
                 <button type="submit" class="btn btn-info">حفظ</button>
                    <a href="{{route('about.team')}}" type="button" class="btn btn-info" data-dismiss="modal">إلغاء</a>
                  </div>
                </div>
            </div>
        </div>
                  
            </form>
         
    </div> 
</div>
</div>
</div>



@endsection