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
            <span class="active">إضافة مجال جديد  </span>
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
                        <span class="caption-subject font-dark bold uppercase">إضافة مجال جديد</span>
                    </div>
                 </div> 
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" method="POST" action="{{route('subspecials.update',$sub_special->id)}}">
                @csrf
                @method('PUT')
                <div class="form-body">
                        <div class="form-group">
                                <label class="col-md-3 control-label">الدور الوظيفي</label>
                                <div class="col-md-6">
                                    <select name="special_id" id="" class="form-control">
                                        <option selected >الدور الوظيفي</option>
                                        @foreach ($specials as $special)     
                                        <option value="{{$special->id}}" {{($sub_special->special_id == $special->id) ? 'selected' : '' }}>{{$special->ar_name}}</option>
                                        @endforeach
                                    </select>
                                  </div>
                            </div>  
                            <div class="form-group">
                                    <label class="col-md-3 control-label">إسم التخصص</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="ادخل إسم التخصص " name="ar_name" value="{{$sub_special->ar_name}}">
                                      </div>
                                </div> 
                            <div class="form-group">
                                    <label class="col-md-3 control-label"> إسم التخصص بالانجليزي</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="ادخل إسم التخصص " name="name" value="{{$sub_special->name}}">
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