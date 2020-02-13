@extends('dashboard.metronic')
@section('title', 'أصحاب العمل')
<!-- BEGIN CSS -->
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('vendor/plugins/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css')}}">
@endsection
<!-- END CSS -->

@section('content')

<!-- BEGIN PAGE HEAD-->
 <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1> جدول أصحاب العمل
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
            <span class="active">  أصحاب العمل</span>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class="mt-bootstrap-tables">
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered portlet-fit portlet-datatable">
                    <div class="portlet-title"> 
                      <div class="table-toolbar pull-left">
                            <div class="btn-group">
                                <a  href="{{route('companies.create')}}" id="sample_editable_1_new" class="btn green">  اضف صاحب عمل
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
                     <div class="portlet-body" style ="">
                      <div class="table-container"> 
                            <table class="table table-hover table-striped table-hover" id="sample_3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>الاسم</th>
                                        <th>البريد</th>
                                        <th>التلفون</th>
                                        <th>اسم الشركه</th>
                                        <th>Company Name</th>
                                        <th>بريد الشركه</th>
                                        <th>الدور الوظيفي</th>
                                        <th>الدوله</th>
                                        <th>المدينه</th>
                                        <th>التاريخ</th>
                                        <th>العمليات</th>
                                    </tr>
                                </thead>
                                <tbody>
                        
                                    @foreach ($owners as $owner)     
                                    <tr>
                                        <td >{{$owner->id}} </td>
                                        <td > {{$owner->ar_name}} </td>
                                        <td > {{$owner->email}}</td>
                                        <td > {{$owner->phone}}</td>
                                        <td > {{$owner->company_name}}</td>
                                        <td > {{$owner->company_name_en}}</td>
                                        <td > {{$owner->company_email}} </td>
                                        <td > {{$owner->role->ar_name ?? ''}}</td>
                                        <td > {{$owner->country->ar_name ?? ''}}</td> 
                                        <td > {{$owner->city->ar_name ?? ''}}</td> 
                                        <td > {{$owner->created_at}} </td>
                                        <td  class="center" style="display: content;"> 
                                            <form method="POST"  action="{{route('companies.destroy' , $owner->id)}}" id="delete-owner">
                                              @csrf
                                              @method('delete')
                                            <a class="btn btn-info" style="padding: 5px 10px;" href="{{route('companies.edit',$owner->id)}}"><i class="fa fa-edit"></i></a>
                        
                                            <button type="submit" class="btn btn-danger" style="padding: 5px 10px;">
                                                    <i class="fa fa-trash"></i>
                                            </button>
                        
                                            <a class="btn btn-success" style="padding: 5px 10px; margin-top:3px;" href="{{route('jobs.create',$owner->id)}}"><i class="fa fa-plus">اضافة عمل</i></a>
                                            </form>
                                        </td>
                                    </tr>
                        
                                    @endforeach
                        
                                </tbody>
                                {{ $owners->links() }}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE BASE CONTENT -->


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