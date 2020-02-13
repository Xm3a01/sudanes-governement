@extends('dashboard.metronic')
@section('title', 'جدول المستويات')
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
            <h1> جدول المستويات
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
            <span class="active">جدول المستويات</span>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class="mt-bootstrap-tables">
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                     <div class="portlet-title"> 
                                    <div class="table-toolbar pull-left">
                            <div class="btn-group">
                                <a data-toggle="modal" href="#add_level"  id="sample_editable_1_new" class="btn green">  أضف مستوي جديد
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
                            <table class="table table-striped table-bordered table-hover" id="sample_3">
                               <thead>
                                    <tr>
                                        <th> # </th>
                                        <th>اسم المستوي</th>
                                        <th>الاسم باللغة الانجليزية</th>
                                        <th>العمليات</th>
                                    </tr>
                                </thead>
                         
                                    <tbody>
                                        @foreach($levels as $level)
                                        <tr>
                                            <td>{{$level->id}}</td>
                                            <td>{{$level->ar_name}}</td>
                                            <td>{{$level->name}}</td>
                                            <td>
                                                <form action="{{route('levels.destroy', $level->id)}}" method="POST">
                                                    @csrf {{ method_field('DELETE') }}
                                                    <a href="{{route('levels.edit', $level->id)}}"
                                                        class="btn btn-info sbold uppercase">
                                                        <i class="fa fa-edit">   </i>
                                                    </a>
                                                    <button type="submit" class="btn btn-danger sbold uppercase">
                                                        <i class="fa fa-trash"> </i>
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

<!-- BEGIN ADD_company MODEL -->
    <div class="modal fade" id="add_level" tabindex="-1" role="basic" aria-hidden="true">
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
                    <form class="form-horizontal" id="level-form" role="form" method="POST" action="{{route('levels.store')}}">
                            @csrf
                            <div class="form-body">
                                    <div class="form-group">
                                            <label class="col-md-3 control-label">إسم المستوى</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="ادخل إسم المستوى " name="ar_name">
                                              </div>
                                        </div>  
                                        <div class="form-group">
                                                <label class="col-md-3 control-label"> إسم المستوى بالانجليزي</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="ادخل إسم المستوى " name="name">
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
                <!-- /.modal-content -->
                </div>
            <!-- /.modal-dialog -->
            </div>
                <!-- /.modal-dialog -->
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
