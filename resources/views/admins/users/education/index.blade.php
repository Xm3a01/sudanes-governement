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
            <h1> جدول بيانات التعليم
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
            <span class="active">جدول بيانات التعليم</span>
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
                            <span class="caption-subject font-dark bold uppercase">جدول بيانات التعليم</span>
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
                            </div>
                        </div>
                        <table id="users-table" class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> الاسم الاول </th>
                                        <th>الاسم الثاني</th>
                                        <th>الجامعه</th>
                                        <th>التخصص</th>
                                        <th>المؤهل</th>
                                        <th>المعدل</th>
                                        <th>تاريخ التخرج</th>
                                        <th>العمليات</th>
                                    </tr>
                                </thead>
                         
                                    <tbody>
                                        @foreach($educations as $education)
                                        <tr>
                                            <td>{{$education->id}}</td>
                                            <td>{{$education->user->ar_name}}</td>
                                            <td>{{$education->user->ar_last_name}}</td>
                                            <td>{{$education->ar_university}}</td>
                                            <td>{{$education->sub_special->ar_name}}</td>
                                            <td>{{$education->ar_qualification}}</td>
                                            <td>{{$education->grade}}</td>
                                            <td>{{$education->grade_date}}</td>
                                            
                                            <td style="width:auto">
                                                <form action="{{route('cv.destroy', $education->id)}}" method="POST">
                                                    @csrf {{ method_field('DELETE') }}
                                                    <input type="hidden" name="select" value="delete">

                                                        <a data-toggle="model" href="{{route('education.edit',$education->id)}}"
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
