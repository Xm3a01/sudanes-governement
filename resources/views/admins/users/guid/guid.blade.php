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
            <h1> جدول التوجيهات
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
            <span class="active">جدول التوجيهات</span>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class="mt-bootstrap-tables">
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
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
                        <div class="table-toolbar pull-left">
                            <div class="btn-group">
                                
                            </div>
                        </div>
                        <table id="sample_3" class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th>العنوان</th>
                                        <th>العنوان عربي</th>
                                        <th>التوجيهات</th>
                                        <th>التوجيهات بالعربيه</th>
                                        <th>العمليات</th>
                                    </tr>
                                </thead>
                         
                                    <tbody>
                                        <tr>
                                            <td>{{$guid->id}}</td>
                                            <td>{{$guid->title}}</td>
                                            <td>{{$guid->ar_title}}</td>
                                            <td>{!! Str::limit($guid->guid , $limit = 30)!!}</td>
                                            <td>{!! Str::limit($guid->ar_guid , $limit = 30)!!}</td>
                                            <td>
                                                <a data-toggle = "modal" href="#edit-guid"
                                                    class="btn blue btn-sm btn-outline sbold uppercase">
                                                    <i class="fa fa-edit"> تعديل </i>
                                                </a>
                                             
                                            </td>
                                        </tr>
                                        </tbody>
                            </table>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <!-- END DATATABLE -->

            <!-- BEGIN ADD_project MODEL -->
            <div class="modal fade in" id="edit-guid">
                <div class="modal-dialog">
                    <div class="modal-content" style="height: auto!important;">
                        <div class="modal-header">
                            <h4 class="modal-title">تعديل التوجيهات </h4>
                        </div>
                        <div class="modal-body container">
                            <form action="{{ route('guids.update' , $guid->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row justify-content-center">
                                <div class="form-group col-md-10">
                                    <label>العنوان بالعربيه</label>
                                    <input type="text" name="ar_title" class="form-control" placeholder="العنوان" value="{{$guid->ar_title}}">
            
                                    <label>التوجيهات بالعربيه</label>
                                    <textarea name="ar_guid" class="form-control ck_editor" >{{$guid->ar_guid}}</textarea>
                               
                                    <label>العنوان بالانجليزي</label>
                                    <input type="text" name="title" class="form-control" placeholder="العنوان" value="{{$guid->title}}">
            
                                    <label>التوجيهات بالانجليزي</label>
                                    <textarea name="guid" class="form-control ck_editor">{{$guid->guid}}</textarea>
            
                                     </div>
                                </div>
                                <div class="margin-top-10">
                                    <button type="submit" class="btn btn-outline sbold green">أضافة</button>
                                    <button type="button" class="btn btn-outline sbold red" data-dismiss="modal">أغلاق</button>
                                </div>
                            </form>
                        </div>
            
            
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- BEGIN ADD_project MODEL -->

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
        $('#guids-table').DataTable();
    });

</script>
@endsection
<!-- END SCRIPTS -->
