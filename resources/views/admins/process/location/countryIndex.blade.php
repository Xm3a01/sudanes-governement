@extends('dashboard.metronic')
@section('title', 'الدول والمدن')
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
            <h1> جدول الدول
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
            <span class="active">جدول الدول</span>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class="mt-bootstrap-tables">
        <div class="row">
            <div class="col-md-12">
                    <!-- Begin: life time stats -->
                            <div class="portlet light portlet-fit portlet-datatable bordered">
                                <div class="portlet-title"> 
                                 <div class="table-toolbar pull-left">
                                            <div class="btn-group">
                                                <a href="{{route('locations.create')}}" id="sample_editable_1_new" class="btn green">  أضف دوله جديد
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
                                                    <th data-field="state" data-checkbox="true">#</th>
                                                    <th data-field="coName" data-align="center" data-sortable="true">الدوله</th>
                                                    <th data-field="ar_coName" data-align="center" data-sortable="true"> الدوله بالعربيه</th>
                                                    <th data-field="" data-align="center">Action</th>
                                                </tr>
                                            </thead>
                                             <tbody>
                                                @foreach ($countries as $country)      
                                                <tr>
                                                    <td>{{$country->id}} </td>
                                                    <td> {{$country->name}} </td> 
                                                    <td> {{$country->ar_name}} </td> 
                                                    <td> 
                                                        <form action="{{route('locations.destroy', $country->id)}}" method="post" >
                                                        @csrf
                                                        @method('delete')
                                                        <input type ="hidden" name = "select" value ="country">
                                                        <a class="edit btn btn-info" href="{{route('locations.edit',$country->id)}}"><i class ="fa fa-edit"></i></a>
                                                        <button class="delete btn btn-danger"><i class ="fa fa-trash"></i></button>
                                                      
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
            
                                            </tbody>
                                            {{$countries->links()}}
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- End: life time stats -->
                   
                    
                            </div>
                        </div>
                    </div>
    <!-- END PAGE BASE CONTENT -->


@endsection

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