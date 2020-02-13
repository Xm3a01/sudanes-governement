@extends('dashboard.metronic')
@section('title', '  معلومات  الوظائف  ')
<!-- BEGIN CSS -->
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('vendor/plugins/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css')}}">
@endsection

@section('content')


 <!-- BEGIN PAGE HEAD-->
 <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1> جدول الوظائف
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
            <span class="active">جدول الوظائف</span>
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
                            <div class="table-container"> 
                                <table class="table table-striped table-bordered table-hover" id="sample_3">
                                   <thead>
                                        <tr>
                                            <th ></th>
                                            <th >إسم صاحب العمل</th>
                                            <th >إسم الشركة</th> 
                                            <th >المدينه</th>
                                            <th >المسمي الوظيفي</th>
                                            <th >التخصص </th>
                                            <th >التخصص الاساسي</th>
                                            <th >نوع العمل</th>
                                            <th >المرتب</th>
                                            <th >سنوات الخبرة</th>
                                            <th >التاريخ</th>
                                            <th >الشعار</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jobs as $job)     
                                        <tr>
                                            <td> </td>
                                            <td> {{$job->owner->ar_name.' '.$job->ar_last_name}} </td>
                                            <td> {{$job->owner->company_name}}</td>
                                            <td> {{$job->city->ar_name}} </td>
                                            <td> {{$job->special->ar_name}} </td> 
                                            <td> {{$job->sub_special->ar_name ?? ''}} </td> 
                                            <td> {{$job->level}} </td>
                                            <td> {{$job->ar_status}}</td>
                                            <td> {{$job->selary}} </td>
                                            <td> {{$job->yearsOfExper}}</td>
                                            <td class="center"> {{$job->created_at}}</td>
                                            <td>  <img src="{{Storage::url($job->owner->logo)}}" height="40" width="50"> </td>
                                            <td> 
                                        
                                            <form action="{{route('jobs.destroy' , $job->id)}}"  method="post">
                                                @csrf @method('delete')
                                            <a class="btn btn-info  " href="{{route('jobs.edit', $job->id)}}"> <i class="fa fa-edit"></i></a>
                                            <button type="submit" class="btn btn-danger  "> <i class="fa fa-trash"></i> </button>
                                            </a>   
                                            </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    {{ $jobs->links() }}
                    </table>
            </div>
        </div>
        </div>
     </div>
  </div>
 </div>
    <!-- END PAGE BASE CONTENT -->


@endsection

!-- BEGIN SCRIPTS -->
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