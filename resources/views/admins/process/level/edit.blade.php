@extends('dashboard.metronic')
@section('content')


<div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1> جدول المجالات
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
            <span class="active">تعديل المستوى  جديد  </span>
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
                        <span class="caption-subject font-dark bold uppercase">تعديل المستوى جديد</span>
                    </div>
                 </div> 
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" method="POST" action="{{route('levels.update',$level->id)}}">
                @csrf
                @method('PUT')
                <div class="form-body">
                        <div class="form-group">
                                <label class="col-md-3 control-label">اسم المستوى</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="ادخل إسم المستوى " name="ar_name" value="{{$level->ar_name}}">
                                  </div>
                            </div>  
                            <div class="form-group">
                                    <label class="col-md-3 control-label"> إسم المستوى بالانجليزي</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="ادخل إسم المستوى " name="name" value="{{$level->name}}">
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



@endsection