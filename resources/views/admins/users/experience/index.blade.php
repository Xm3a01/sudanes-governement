@extends('dashboard.metronic')
@section('title', ' جدول الخبرات')
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
            <h1> جدول الخبرات
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
            <span class="active">جدول الخبرات</span>
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
                        <table id="sample_3" class="table table-hover table-bordered table-striped "  >
                        <thead>
                            <tr>
                                <th> # </th>
                                <th>صاحب الخبره</th>
                                <th>الدور الوظيفي</th>
                                <th>التخصص</th>
                                <th>سنين الخبره</th>
                                <th>المستوى الوظيفي</th>
                                <th>بدية العمل  في الخبره</th>
                                <th>نهايه العمل في الخبر</th>
                                <th>الوصف</th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            @foreach($experiences as $experience)
                            <tr>
                                <td>{{$experience->id}}</td>
                                <td>{{$experience->user->ar_name}}</td>
                                <td>{{$experience->role->ar_name}}</td>
                                <td>{{$experience->sub_special->ar_name}}</td>
                                <td>{{$experience->expert_year.' سنوات'}}</td>
                                <td>{{$experience->level->ar_name}}</td>
                                <td>{{$experience->start_month .'/'.$experience->start_year }}</td>
                                <td>{{$experience->end_month .'/'.$experience->end_year }}</td>
                                <td>{{ $experience->ar_summary }}</td>
                                <td>
                                <form action="{{route('experiences.destroy', $experience->id)}}" method="POST">
                                    @csrf {{ method_field('DELETE') }}
                                    <a href="{{route('experiences.edit', $experience->id)}}"
                                        class="btn btn-info p-2 sbold uppercase">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger p-2 sbold uppercase">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>

                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                                {{$experiences->links()}}
                            </table>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <!-- END DATATABLE -->

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
