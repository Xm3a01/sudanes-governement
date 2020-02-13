@extends('dashboard.metronic')
@section('title', ' جدول المستخدمين')
<!-- BEGIN CSS -->
@section('stylesheets') 
<link rel="stylesheet" href="{{asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css')}}">

@endsection
<!-- END CSS -->
@section('content')
<!-- BEGIN PAGE-BAR -->
<div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1> جدول المستخدمين
            </h1>
        </div> 
    </div>
    <!-- END PAGE HEAD-->
    <!-- BEGIN PAGE BREADCRUMB -->
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="/dashboard">الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">  المستخدمين  </span>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->
    <!-- BEGIN PAGE BASE CONTENT -->
     <div class="mt-bootstrap-tables">
        <div class="row">
            <div class="col-md-12">
                    <!-- Begin: life time stats -->
                            <div class="portlet light bordered portlet-fit portlet-datatable">
                                <div class="portlet-title"> 
                                <div class="table-toolbar pull-left">
                                            <div class="btn-group">
                                                <a data-toggle="modal" href="#add_user"  id="sample_editable_1_new" class="btn green"> أضف مستخدم جديد 
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    <div class="actions"> 
                                        <div class="btn-group">
                                            <a class="btn red btn-outline btn-circle" href="javascript:;" data-toggle="dropdown">
                                                <i class="fa fa-share"></i>
                                                <span class="hidden-xs"> الادوات</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right" id="sample_3_tools">
                                                <li>
                                                    <a href="javascript:;" data-action="0" class="tool-action">
                                                        <i class="icon-printer"></i> Print</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" data-action="1" class="tool-action">
                                                        <i class="icon-check"></i> Copy</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" data-action="2" class="tool-action">
                                                        <i class="icon-doc"></i> PDF</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" data-action="3" class="tool-action">
                                                        <i class="icon-paper-clip"></i> Excel</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" data-action="4" class="tool-action">
                                                        <i class="icon-cloud-upload"></i> CSV</a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;" data-action="5" class="tool-action">
                                                        <i class="icon-refresh"></i> Reload</a>
                                                </li>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                  <div class="portlet-body">
                                    <div class="table-container">
                                         <table class="table table-striped table-hover" id="sample_3">
                                             <thead>
                                                    <tr>
                                                        <th data-field="state" data-checkbox="true"> </th>
                                                        <th data-field="ar_coName" data-align="center" data-sortable="true">الأسم</th>
                                                        <th>الاسم الاخير</th>
                                                        <th>البريد</th>
                                                        <th>تلفون</th>
                                                        <th>الديانه</th>
                                                        <th>المدينه</th>
                                                        <th>رقم الهويه</th>
                                                        <th>الحاله الاجتماعيه</th>
                                                        <th>الدور الوظيفي</th>
                                                        <th>العمليات</th>
                                                    </tr>
                                                </thead>
                                         
                                                    <tbody>
                                                @foreach($users as $user)
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>{{$user->ar_name}}</td>
                                                    <td>{{$user->ar_last_name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->phone}}</td>
                                                    <td>{{$user->ar_religion}}</td>
                                                    <td>{{$user->city->ar_name ?? ''}}</td>
                                                    <td>{{$user->idint_1 .' - '.$user->idint_2}}</td>
                                                    <td>{{$user->ar_social_status}}</td>
                                                    <td>{{$user->role->ar_name}}</td>
                                                    <td class = "actions">
                                                        <form action="{{route('cv.destroy', $user->id)}}" method="POST">
                                                            @csrf {{ method_field('DELETE') }}
        
                                                        <div class="action" >
                                                            
                                                        <button class="btn btn-info dropdown-toggle" data-toggle="dropdown">الادوات
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu1 pull-right" style="font-family: hacen">
                                                            <li>
                                                                    <a  href="{{route('exp.create' , $user->id)}}"  id="sample_editable_1_new" class="btn btn-sm bold uppercase">اضف خبره
                                                                            <i class="fa fa-plus"></i>
                                                                     </a>
                                                            </li>
                                                            <li>
                                                                    <a href ="{{route('user.edu' , $user->id)}}"  id="sample_editable_1_new" class="btn btn-sm bold uppercase">اضف تعليم
                                                                            <i class="fa fa-plus"></i>
                                                                     </a>
                                                            </li>
                                                            <li>
                                                                    <a href ="{{route('user.lang' , $user->id)}}"  id="sample_editable_1_new" class="btn btn-sm bold uppercase">اضف اللغه
                                                                            <i class="fa fa-plus"></i>
                                                                         </a>
                                                            </li>
                                                             <li>
                                                                    <a  href="{{route('user.ref' , $user->id)}}"  id="sample_editable_1_new" class="btn btn-sm bold uppercase">اضف مرجع
                                                                            <i class="fa fa-plus"></i>
                                                                     </a>
                                                            </li>
                                                            <li>
                                                                    <a  href="{{route('user.attch' , $user->id)}}"  id="sample_editable_1_new" class="btn  btn-sm bold uppercase">اضف ملف
                                                                            <i class="fa fa-plus"></i>
                                                                     </a>
                                                            </li>
                                                            <li>
                                                                    <a href="{{route('cv.edit', $user->id)}}"
                                                                            class="btn btn-sm  bold uppercase">
                                                                            <i class="fa fa-edit"> تعديل </i>
                                                                        </a>
                                                            </li>
                                                            <li>
                                                                    <button type="submit" class="btn btn-sm btn-block bold uppercase">
                                                                            <i class="fa fa-trash">حذف</i>
                                                                    </button>
                                                            </li>
                                                            <li>
                                                                <a class="btn btn-info" href="{{route('admin.pdf',$user->id)}}" id="print-cv">اطبع CV</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                 
                                                </form>
                                            </td>
                                      </tr> 
                                                    
                                     @endforeach
                                 </tbody>
                                 {{$users->links()}}
                                             </table>
                                        </div>
                                      </div>
                                   </div>
                                </div>
                            </div>
                            </div>
                                             
                                     
                    
               
            <!-- END DATATABLE -->

<!-- BEGIN ADD_company MODEL -->
    <div class="modal fade" id="add_user" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="height: auto!important;">
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
                <input type="hidden" name="select_user" value="user">
                <div class="form-body">
                    <h4 class="text-left m-3">البيانات الشخصية</h4><br>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> الاسم الاول</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="ادخل الاسم الاول  " name="ar_name">
                          </div>  

                          <label class="col-md-1 control-label">الاسم الاخير</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="ادخل الاسم الثاني  " name="ar_last_name">
                          </div>  
                    </div>
                    <div class="form-group">
                            <label class="col-md-2 control-label">البريد الاكتروني</label>
                            <div class="col-md-4">
                                <input type="email" name="email" class="form-control  " placeholder=" ادخل البريد الاكتروني">
                            </div>
                            <label class="col-md-1 control-label">كلمة المرور</label>
                            <div class="col-md-4">
                                    <input type="password" name="password" class="form-control  " placeholder="كلمة المرور">
                             </div> 
                        </div>

                    <div class="form-group">
                            <label class="col-md-2 control-label">الجنسية  </label>
                            <div class="col-md-4">
                            <select name="birth_country_id" id="inputState" class="form-control">
                                <option disabled selected> الجنسية </option>
                                @foreach ($countries as $country) 
                                 <option value="{{ $country->id }}">{{ $country->ar_name }}</option>
                                @endforeach
                            </select>
                            </div>

                              <label class="col-md-1 control-label">العنوان</label>
                              <div class="col-md-4">
                                <select name="country_id" id="inputState" class="form-control">
                                    <option disabled selected> العنوان </option>
                                    @foreach ($countries as $country) 
                                     <option value="{{ $country->id }}">{{ $country->ar_name }}</option>
                                    @endforeach
                                </select>
                              </div>
                        </div>

                        <div class="form-group">
                                <label class="col-md-2 control-label">المدينه</label>
                                <div class="col-md-4">
                                <select name="city_id" id="inputState" class="form-control">
                                        <option disabled selected> المدينه </option>
                                        @foreach ($cities as $city) 
                                            <option value="{{ $city->id }}">{{ $city->ar_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                    
                              <label class="col-md-1 control-label">تاريخ الميلاد</label>
                              <div class="col-md-4">
                                    <input type="date" class="form-control" name="birthdate" id="">
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-md-2 control-label"> الديانة  </label>
                                <div class="col-md-4">
                                      <select class="form-control" name="religion">
                                          <option disabled selected>اختر الديانة </option>
                                          <option value="Muslime">مسلم</option>
                                          <option value="Christian">مسيحي</option>
                                          <option value="Gushin">يهودي </option>
                                          <option value="Other">اخرى</option>
                                      </select>
                                  </div>

                              <label class="col-md-1 control-label">الحالة الاجتماعية</label>
                              <div class="col-md-4">
                                    <select class="form-control" name="social_status">
                                        <option disabled selected>اختر الحالة الاجتماعية  </option>
                                        <option value="Married">متزوج</option>
                                        <option value="Single">اعزب </option>
                                    </select>
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-md-2 control-label">رقم الجواز</label>
                                <div class="col-md-4">
                                    <input type="text" name="idint_1" class="form-control" id="" placeholder="مثلا 233456765">
                                </div>
                                  <label class="col-md-1 control-label">الرقم الوطني</label>
                                  <div class="col-md-4">
                                        <input type="text" name="idint_2" class="form-control  " placeholder="مثلا 188-15-34-567-45">
                                    </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-2 control-label">التخصص</label>
                                <div class="col-md-4">
                                    <select name="special_id" id="inputState" class="form-control">
                                        <option disabled selected> التخصص </option>
                                        @foreach ($specials as $special) 
                                            <option value="{{ $special->id }}">{{ $special->ar_name }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    

                                <label class="col-md-1 control-label">الدور الوظيفي</label>
                                <div class="col-md-4">
                                    <select name="role_id" id="inputState" class="form-control">
                                            <option disabled selected> الدور الوظيفي </option>
                                            @foreach ($roles as $role) 
                                                <option value="{{ $role->id }}">{{ $role->ar_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                            </div>
                            
                            <div class="form-group">
                                    <label class="col-md-2 control-label">رقم الهاتف</label>
                                    <div class="col-md-6">
                                            <input type="text" name="phone" class="form-control  " placeholder=" ادخل رقم الهاتف">
                                     </div> 
                                </div> 
>
                            <div class="form-group">
                                    <label class="col-md-2 control-label">المستوى الوظيفي</label>
                                    <div class="col-md-4">
                                            <input type="text" name="level" class="form-control  " placeholder="مثلا : اخصائي">
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
             

@endsection

<!-- BEGIN SCRIPTS -->
@section('scripts')
<script src=" {{asset('asset/js/jquery.printPage.js')}} "></script>
<script>
    $(document).ready(function () {
        $('#print-cv').printPage();
    });
    

</script>


<script src="{{asset('vendor/js/table-datatables-buttons.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('vendor/js/datatable.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"></script>
<script>
    //Datatable
    $(document).ready(function () {
        $('#users-table').DataTable();
    });

</script>
@endsection
<!-- END SCRIPTS -->
