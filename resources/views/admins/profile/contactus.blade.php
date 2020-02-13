@extends('dashboard.metronic')
@section('title')
    تواصل معنا
@endsection
@section('content')

 <!-- BEGIN PAGE HEAD-->
 <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1> إتصل بنا
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
            <span class="active">  معلومات الاتصال</span>
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
                                    <span class="caption-subject font-dark bold uppercase">  معلومات الاتصال  </span>
                                </div>
                             </div> 
                    <div class="portlet-body form">
                        <form class="form-horizontal" role="form">
                            <div class="form-body"> 
                                    <div class="form-group">
                                            <label class="col-md-3 control-label">   العنوان</label>
                                            <div class="col-md-6">
                                              <input type="text" class="form-control" placeholder="ادخل  العنوان ">
                                            </div>
                                          </div> 
                                    <div class="form-group">
                                            <label class="col-md-3 control-label"> البريد الالكتروني</label>
                                            <div class="col-md-6">
                                              <input type="text" class="form-control" placeholder="ادخل  البريد الالكتروني    ">
                                            </div>
                                          </div>  
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">   رقم الهاتف</label>
                                                <div class="col-md-6">
                                                  <input type="text" class="form-control" placeholder="ادخل رقم الهاتف    ">
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






  <div class="modal fade" id="add_user" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> <img src=" {{asset('vendor/img/remove-icon-small.png')}} " alt="" srcset=""> </button>
                    <h4 class="modal-title">إضافة مستخدم جديد</h4>
                </div>
                <div class="modal-body">
                                <!-- BEGIN PAGE BASE CONTENT --> 
            <div class="row"> 
                <div class="col-md-12 ">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="p-3"> 
            <div class="portlet-body form">
             <form class="form-horizontal" id="user-form-add" role="form" method="POST" action="{{route('cv.store')}}">
                @csrf
                <input type="hidden" name="select" value="edu" >
                <input type="hidden" name="select_form" value="{{$user->id}}" >
                <div class="form-body">
                        <br><h4 class="text-left m-3"> معلومات التعليم</h4><br>
                        <div class="form-group">
                                <label class="col-md-2 control-label" >المؤهلات</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="qualification">
                                            <option selected disabled>اختر المؤهل</option>
                                            <option value="Diploma ">دبلوم</option>
                                            <option value="Bachelor">بكالريوس</option>
                                            <option value="Master">ماجستير</option>
                                            <option value="PH">دكتوراه</option>
                                            </select>
                                    </div>

                            <label class="col-md-1 control-label">الجامعة</label>
                            <div class="col-md-4">
                                    <input type="text" class="form-control" name="university" placeholder="مثال: جامعة الجزيرة" id="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">التخصص</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="special_id">
                                            <option disabled selected>اختر التخصص</option>
                                            @foreach ($sub_specials as $sub)
                                            <option value="{{$sub->id}}">{{$sub->ar_name}}</option>
                                            @endforeach
                                            </select>
                                    </div>

                            <label class="col-md-1 control-label">تاريخ التخرج</label>
                            <div class="col-md-4">
                                    <input type="date" class="form-control" name="grade_date" id="">
                                </div>
                                </div>

                        <div class="form-group">
                    <label class="col-md-2 control-label">المعدل</label>
                    <div class="col-md-4">
                            <input type="text" class="form-control" name="grade" placeholder="مثال: 3.00 من 4.00" id="">
                            </div>
                            </div> 
                         </div>    
                        </form>
                    </div>
                </div> 
            </div>
            </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">إلغاء</button>
                <button type="button" class="btn green" onclick="event.preventDefault(); document.getElementById('user-form-add').submit();">حفظ</button>
        </div>
        </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
        </div>
            <!-- /.modal-dialog -->
 </div>
<!-- BEGIN ADD_company MODEL --> 