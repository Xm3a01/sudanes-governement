@extends('dashboard.metronic')
@section('title', 'شركاء النجاح')
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
                <h1> فريق العمل  
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
                <span class="active">إضافة فريق العمل  </span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
         <div class="mt-bootstrap-tables">
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                   <div class="portlet-title"> 
                                   <div class="table-toolbar pull-left">
                                        <div class="btn-group">
                                            <a data-toggle="modal" href="#about"  id="sample_editable_1_new" class="btn green"> أضف موظف جديد  
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
                    <div class="table-container"> 
                                <table class="table table-striped table-bordered table-hover" id="sample_3">
                                   <thead>
                                    <tr>
                                        <th> # </th>
                                        <th>  إسم الموظف </th>
                                        <th> اسم الموظف باللغة الانجليزية</th>
                                        <th> position  </th>
                                        <th> صورة الموظف </th> 
                                        <th>العمليات</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                    @foreach ($employees as $employee) 
                                        <tr>
                                            <td> </td>
                                            <td> {{$employee->ar_employee_name}}</td>
                                            <td> {{$employee->employee_name}}  </td> 
                                            <td> {{$employee->employee_position}}</td> 
                                            <td> <img src =" {{Storage::url($employee->employee_photo)}}" height ="30" width ="30"></td>
                                           
                                            <td>
                                                <form action="{{route('abouts.destroy', $employee->id)}}" method="POST">
                                                    @csrf {{ method_field('DELETE') }}
                                                    <input type = "hidden" name = "select" value ="team">
                                                    <a   href="{{route('team.edit' , $employee->id)}}" class="btn btn-info  sbold uppercase">
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
<!-- BEGIN PAGE BASE CONTENT --> 
        
  
  <div class="modal fade" id="about" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> <img src=" {{asset('vendor/img/remove-icon-small.png')}} " alt="" srcset=""> </button>
                    <h4 class="modal-title"> إضافة معلومات فريق العمل  </h4>
                </div>
                <div class="modal-body">
                   <form class="form-horizontal" role="form" method="POST" action="{{route('abouts.store')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="select_one" value="team">
                    <input type="hidden" name="about_id" value="{{$about->id ?? ''}}">
                    <div class="form-body"> 
                     <div class="form-group">
                <label class="col-md-3 control-label">  إسم الموظف    </label>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="ادخل  إسم الموظف     " name="ar_employee_name">
                </div>
            </div>
            <div class="form-group">
            <label class="col-md-3 control-label">  إسم الموظف باللغة الانجليزية </label>
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="ادخل  إسم الموظف  " name="employee_name">
            </div>
           </div>
           
            <div class="form-group">
            <label class="col-md-3 control-label"> position </label>
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="ادخل  وظيفة الموظف     " name="employee_position">
            </div>
            </div>
                <div class="form-group">
                <label class="col-md-3 control-label"> صورة الموظف </label>
                <div class="col-md-6">
                    <input type="file" class="form-control" name="employee_photo">
                </div>
            </div>

           <div class="form-actions">
             <div class="row">
               <div class="col-md-offset-3 col-md-9">
                 <button type="submit" class="btn btn-info">حفظ</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">إلغاء</button>
                  </div>
                </div>
            </div>
        </div>
    </form>
 </div>
                 
            </div> 
        </div>
    </div> 
    
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