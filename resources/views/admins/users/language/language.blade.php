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
            <h1> جدول اللغات
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
            <span class="active">جدول اللغات</span>
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
                            <span class="caption-subject font-dark bold uppercase">جدول اللغات</span>
                        </div>
                         </div>
                    <div class="portlet-body">
                        <div class="table-toolbar pull-left">
                            <div class="btn-group">
                            </div>
                        </div>
                        <table id="users-table" class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th>الاسم الاول</th>
                                        <th>الاسم الاخير</th>
                                        <th>اللغه</th>
                                        <th>المستوى</th>
                                        <th>العمليات</th>
                                    </tr>
                                </thead>
                         
                                    <tbody>
                                        @foreach($languages as $language)
                                        <tr>
                                            <td>{{$language->id}}</td>
                                            <td>{{$language->user->ar_name}}</td>
                                            <td>{{$language->user->ar_last_name}}</td>
                                            <td>{{$language->ar_language}}</td>
                                            <td>{{$language->ar_language_level}}</td>
                                            
                                            <td style="width:auto">
                                                <form action="{{route('cv.destroy', $language->id)}}" method="POST">
                                                    @csrf {{ method_field('DELETE') }}
                                                    <input type="hidden" name="select" value="lang-delete">

                                                        <a data-toggle="model" href="{{route('language.edit',$language->id)}}"
                                                                class="btn dark btn-sm btn-outline sbold uppercase">
                                                                <i class="fa fa-edit"> تعديل </i>
                                                            </a>
                                                
                                                        <button type="submit" class="btn red">
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
