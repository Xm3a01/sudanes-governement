@extends('dashboard.metronic')
@section('title', ' جدول المستخدمين')
<!-- BEGIN CSS -->
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('vendor/plugins/datatables/datatables.min.css') }}">
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
            <a href="index.html">الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">جدول المستخدمين</span>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->
    <!-- BEGIN PAGE BASE CONTENT -->
 @if(Auth::user()->supper)
           <!-- BEGIN PAGE BASE CONTENT -->
    <div class="mt-bootstrap-tables">
        <div class="row">
            <div class="col-md-12">
                    <!-- Begin: life time stats -->
                            <div class="portlet light portlet-fit portlet-datatable bordered">
                                <div class="portlet-title"> 
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
                                         <div class="table-toolbar pull-left">
                                                <div class="btn-group">
                                                    <a data-toggle="modal" href="#add-admin"  id="sample_editable_1_new" class="btn green">  أضف مستخدم جديد
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            
                                         <table class="table table-striped table-bordered table-hover" id="sample_3">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th>الأسم</th>
                                                    <th>البريد</th>
                                                    <th>التلفون</th>
                                                    <th>العمليات</th>
                                                   </tr>
                                                </thead>  
                      
                                                  <tbody>
                                                     @foreach($admins as $admin)
                                                      <tr>
                                                        <td>{{$admin->id}}</td>
                                                        <td>{{$admin->name}}</td>
                                                        <td>{{$admin->email}}</td>
                                                        <td>{{$admin->phone}}</td>
                                                        <td>
                                                            <form action="{{route('admins.destroy', $admin->id)}}" method="POST">
                                                                @csrf {{ method_field('DELETE') }}
                                                                <a href="{{route('admins.edit', $admin->id)}}"
                                                                    class="btn dark btn-sm btn-outline sbold uppercase">
                                                                    <i class="fa fa-edit"> تعديل </i>
                                                                </a>
                                                                <button type="submit" class="btn red btn-sm btn-outline sbold uppercase">
                                                                    <i class="fa fa-edit">حذف</i>
                                                                </button>
                                                            </form>
                                                            
                                                        </td>
                                                      </tr> 
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                    
                                        </div>
                                    </div>
            </div>
            </div>
            </div>
            </div>
            <!-- END DATATABLE -->
            @endif

<!-- BEGIN ADD_company MODEL -->
    <div class="modal fade" id="add-admin" tabindex="-1" role="basic" aria-hidden="true">
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
                    <form class="form-horizontal" id="level-form" role="form" method="POST" action="{{route('admins.store')}}">
                            @csrf
                            <div class="form-body">
                        <div class="form-group">
                                <label class="col-md-3 control-label">إسم المستخدم </label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="ادخل إسم المستخدم " name="name">
                                    </div>
                            </div> 
                            <div class="form-group">
                                    <label class="col-md-3 control-label">البريد الإكتروني</label>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="ادخل البريد اللاكتروني " name="email">
                                        </div>
                                </div> 
                                <div class="form-group">
                                            <label class="col-md-3 control-label">رقم الهاتف </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="ادخل رقم الهاتف" name="phone">
                                                </div>
                                        </div>
                                <div class="form-group">
                                        <label class="col-md-3 control-label"> كلمة السر</label>
                                        <div class="col-md-6">
                                            <input type="password" class="form-control" placeholder="ادخل كلمة السر" name="password">
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
                    <button type="button" class="btn green" onclick="event.preventDefault(); document.getElementById('level-form').submit();">حفظ</button>
                  </div>
                 </div> 
                </div>
               <!-- /.modal-dialog -->
             </div> 
            </div>
            <!-- BEGIN ADD_company MODEL -->

@endsection

<!-- BEGIN SCRIPTS -->
@section('scripts')
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
