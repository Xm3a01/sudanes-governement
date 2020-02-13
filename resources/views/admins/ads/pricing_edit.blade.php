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
            <a href="/">الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active"> العروض  </span>
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
                        <span class="caption-subject font-dark bold uppercase">تعديل العروض</span>
                    </div>
                 </div> 
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" method="POST" action="{{route('advs.update',$price->id)}}">
                @csrf
                @method('PUT')
                <input type ="hidden" name ="select" value ="price">
                <div class="form-body">
                        <div class="form-group">
                                <label class="col-md-3 control-label">العرض الاول  </label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="ادخل العرض الاول  " name="have_one" value ="{{$price->have_one}}" >
                                    </div>
                            </div> 
                            
                            <div class="form-group">
                                <label class="col-md-3 control-label">العرض الثاني  </label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="ادخل العرض الثاني  " name="have_tow" value ="{{$price->have_tow}}" >
                                    </div>
                            </div> 
                            <div class="form-group">
                                <label class="col-md-3 control-label">العرض الثاني عربي  </label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="ادخل العرض الثاني عربي  " name="have_three" value ="{{$price->have_three}}" > 
                                    </div>
                            </div> 
                            
                            <div class="form-group">
                                <label class="col-md-3 control-label">العرض  الثالث عربي  </label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="ادخل العرض الثالث عربي  " name="have_four" value ="{{$price->have_four}}" >
                                    </div>
                            </div> 
                            
                            <div class="form-group">
                                <label class="col-md-3 control-label"> السعر  </label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="االسعر    " name="price"  value ="{{$price->price}}" >
                                    </div>
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