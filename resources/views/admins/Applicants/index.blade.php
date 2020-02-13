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
            <a href="/">الرئيسية</a>
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
                                                    
                                                </div>
                                            </div>
                                            
                                         <table class="table table-striped table-bordered table-hover" id="sample_3">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th>اسم الشركه</th>
                                                    <th>اسم المتقدم</th>
                                                    <th>الوظيفه</th>
                                                    <th>البريد</th>
                                                    <th>التلفون</th>
                                                    <th>السيره الزاتيه </th>
                                                    <th>تاريخ التقديم  </th>
                                                    <th>العمليات</th>
                                                   </tr>
                                                </thead>  
                      
                                                  <tbody>
                                                     @foreach(Auth::user()->notifications as $notfy)
                                                     
                                                     @if($notfy->type == 'App\Notifications\ApllyJob')
                                                      <tr>
                                                        <td>{{$notfy->data['id']}}</td>
                                                        <td>{{$notfy->data['company_name']}}</td>
                                                        <td>{{App\User::find($notfy->data['id'])->ar_name.' '.App\User::find($notfy->data['id'])->ar_last_name}}</td>
                                                        <td>{{$notfy->data['Job_sub_special']}}</td>
                                                        <td>{{App\User::find($notfy->data['id'])->email}}</td>
                                                        <td>{{App\User::find($notfy->data['id'])->phone}}</td>
                                                        <td><a  class="btn btn-info" href="{{route('admin.pdf',$notfy->data['id'])}}" id="print-cv">   طباعة السيره الزاتيه </a></td>
                                                        <td>{{$notfy->created_at->diffForHumans()}}</td>
                                                        
                                                        <td>
                                                            @if($notfy->read_at == null)
                                                            <a href="{{route('request.noty' , [ $notfy->data['id'] ?? 0 , $notfy->data['sender_id'] ?? '' , $notfy->id ,$notfy->data['job_id'] ?? 0])}}"
                                                                class="btn dark btn-sm btn-outline sbold uppercase">
                                                                <i class="fa fa-edit"> الموافقه </i>
                                                            </a>
                                                            @else
                                                            <code class="btn dark btn-sm btn-outline sbold uppercase">تمت الموافقه مسبقا</code>
                                                            @endif
                                                            <a href="{{route('notfy.delete', $notfy->id)}}" class="btn red btn-sm btn-outline sbold uppercase">
                                                                <i class="fa fa-edit">حذف</i>
                                                            </a>
                                                            
                                                        </td>
                                                      </tr> 
                                                      @endif
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

@endsection
<!-- END SCRIPTS -->
