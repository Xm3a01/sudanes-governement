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
            <span class="active">تعديل   معلومات الشركه  </span>
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
                        <span class="caption-subject font-dark bold uppercase">معلومات الشركة</span>
                    </div>
                 </div> 
        <div class="portlet-body form">
      <form class="form-horizontal" role="form" action="{{route('abouts.update' , $about->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="select_one" value="about_company">
       
                 <div class="form-body"> 
                    <div class="form-group">
                            <label class="col-md-3 control-label">   العنوان</label>
                            <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="ادخل  العنوان " name="ar_location" value="{{$about->ar_location}}"> 
                            </div>
                          </div> 
                            <div class="form-group">
                            <label class="col-md-3 control-label"> العنوان باللغة الانجليزية  </label>
                            <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="ادخل  العنوان " name="location"value="{{$about->location}}">
                            </div>
                          </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"> البريد الالكتروني</label>
                            <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="ادخل  البريد الالكتروني   " name="email" value ="{{$about->email}}">
                            </div>
                          </div>  
                            <div class="form-group">
                                <label class="col-md-3 control-label">   رقم الهاتف</label>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" placeholder="ادخل رقم الهاتف    " name="phone" value="{{$about->phone}}">
                                </div>
                              </div> 
                       
                  
                  
             <div class="form-group">
              <label class="col-md-3 control-label"> نبذة عن الشركة  </label>
                <div class="col-md-6">
                  <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" placeholder="عن الشركة" name="ar_about"> {{$about->ar_about}}</textarea>
              </div>
            </div>
              <div class="form-group">
              <label class="col-md-3 control-label"> نبذة عن الشركة باللغة الإنجليزية</label>
                <div class="col-md-6">
                  <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" placeholder="عن الشركة" name="about"> {{$about->about}}</textarea>
              </div>
            </div>
            
            <div class="form-group">
               <label class="col-md-3 control-label" >حمل فيديو</label>
                <div class="col-md-6">
                <input type="file" class="form-control" placeholder="ادخل رابط الفيديو " name="video">
                </div>
               </div> 
              </div>
       <div class="form-actions">
                                <div class="row">
                                    <div class="modal-footer"> 
                                    <button type="submit" class="btn green">حفظ</button>
                                    <button type="button" class="btn green" data-dismiss="modal">إلغاء</button>
                                    
                                 </div>
                                  </div>
                                    </div>
</form>
        </div>
    </div> 
</div>
</div>



@endsection