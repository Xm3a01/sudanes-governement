@extends('dashboard.metronic')
@section('title', ' جدول الملفات')
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
            <h1> الملفات
            </h1>
        </div> 
    </div>
    <!-- END PAGE HEAD-->
    <!-- BEGIN PAGE BREADCRUMB -->
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="{{route('admin.dashboard')}}">الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">جدول الملفات</span>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class="mt-bootstrap-tables">
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-social-dribbble font-green hide"></i>
                            <span class="caption-subject font-dark bold uppercase">جدول الملفات</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group pull-left">
                                <button class="btn green btn-outline dropdown-toggle"
                                    data-toggle="dropdown">الادوات
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right" style="font-family: hacen">
                                    <li>
                                        <a href="javascript:;"> طباعة </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> طباعة ملف PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> تصدير إلي إكسل </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar pull-left">
                            <div class="btn-group">
                                <!--<a data-toggle="modal" href=""  id="sample_editable_1_new" class="btn green">  أضف مرجع جديد-->
                                <!--    <i class="fa fa-plus"></i>-->
                                <!--</a>-->
                            </div>
                        </div>

                        <table id="users-table" class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                         <th> صاحب السير </th>
                                        <th>المرجع بالغه العلربيه</th>
                                        <th>المرجع باللغه الانجليزيه</th>
                                        <th></th>
                                        <th>العمليات</th>
                                    </tr>
                                </thead>
                         
                            <tbody>
                                @foreach($files as $file)
                                <tr>
                                    <td>{{$file->id}}</td>
                                    <td>{{$file->user->ar_name.' '.$file->user->ar_last_name}}</td> 
                                    <td>{{$file->ar_name}}</td>
                                    <td>{{$file->name}}</td>
                                    
                                    <td>
                                        <form action ="{{route('download',Auth::user()->id)}}" method="POST" >
                                            @csrf
                                            <input type = "hidden" name ="f" value = "{{$file->attch}}">
                                             <button class = "btn green btn-sm btn-outline" type = "submit"> <i class ="fa fa-download"></i> تحميل</button>
                                        </form>
                                      </td>
                                      <td>
                                        <form action="{{route('cv.destroy', $file->id)}}" method="POST">
                                            @csrf {{ method_field('DELETE') }}
                                            <input type ="hidden" name ="select" value ="attch-delete">
                                            <a href="{{route('attchs.edit', $file->id)}}"
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
            <!-- END DATATABLE -->
@endsection

<!-- BEGIN SCRIPTS -->
@section('scripts')
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
