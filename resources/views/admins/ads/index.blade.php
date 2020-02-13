@extends('dashboard.metronic')
@section('title', ' جدول الاعلانات')
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
            <h1> الاعلانات
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
            <span class="active">جدول الاعلانات</span>
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
                            <span class="caption-subject font-dark bold uppercase">جدول الاعلانات</span>
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
                                <a data-toggle="modal" href="#add-admin"  id="sample_editable_1_new" class="btn green">  أضف اعلانا جديد
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>

                        <table id="users-table" class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th>الاعلان باللغه العربيه</th>
                                        <th>الاعلان باللغه الانجليزيه</th>
                                        <th>العنوان</th>
                                        <th>العنوان باللغه الانجليزيه</th>
                                        <th>العمليات</th>
                                    </tr>
                                </thead>
                         
                                    <tbody>
                                        @foreach($advs as $adv)
                                        <tr>
                                            <td>{{$adv->id}}</td>
                                            <td>{{Str::limit($adv->ar_adv , $limit = 30)}}</td>
                                            <td>{{Str::limit($adv->adv , $limit = 30)}}</td>
                                            <td>{{$adv->ar_title}}</td>
                                            <td>{{$adv->title}}</td>
                                            <td>
                                                <form action="{{route('advs.destroy', $adv->id)}}" method="POST">
                                                    <input type ="hidden" name ="select" value ="adv">
                                                    @csrf {{ method_field('DELETE') }}
                                                    <a href="{{route('advs.edit', $adv->id)}}"
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

<!-- BEGIN ADD_company MODEL -->
    <div class="modal fade" id="add-admin" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> <img src=" {{asset('vendor/img/remove-icon-small.png')}} " alt="" srcset=""> </button>
                    <h4 class="modal-title">إضافة اعلانا جديد</h4>
                </div>
                <div class="modal-body">
                                <!-- BEGIN PAGE BASE CONTENT --> 
            <div class="row"> 
                <div class="col-md-12 ">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="p-3"> 
            <div class="portlet-body form">
                    <form class="form-horizontal" id="level-form" role="form" method="POST" action="{{route('advs.store')}}" enctype="multipart/form-data">
                            @csrf
                            <input type ="hidden" name ="select" value ="adv">
                            <div class="form-body">
                        <div class="form-group">
                                <label class="col-md-3 control-label"> الاعلان باللغه العربيه</label>
                                <div class="col-md-6">
                                    <textarea  class="form-control"  name="ar_adv" ></textarea>
                                    </div>
                            </div> 
                            <div class="form-group">
                                    <label class="col-md-3 control-label">الاعلان باللغه الانجليزيه</label>
                                    <div class="col-md-6">
                                       <textarea  class="form-control"  name="adv" ></textarea>
                                        </div>
                                </div> 
                                <div class="form-group">
                                            <label class="col-md-3 control-label">العنوان باللغه الربيه</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="" name="ar_title">
                                                </div>
                                        </div>
                                <div class="form-group">
                                        <label class="col-md-3 control-label"> العنوان باللغه الانجليزيه </label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="" name="title">
                                            </div>
                                    </div> 
                                    
                                    <div class="form-group">
                                    <label class="col-md-3 control-label"> الصوره  </label>
                                    <div class="col-md-6">
                                        <input type="file" class="form-control" name="img">
                                    </div>
                                </div>
                                      
                                    </form>
                                </div>
                            </div> 
                        </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">إلغاء</button>
                    <button type="button" class="btn green" onclick="event.preventDefault(); document.getElementById('level-form').submit();">حفظ</button>
                </div>
                </div>
                <!-- /.modal-content -->
                </div>
            <!-- /.modal-dialog -->
            </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- BEGIN ADD_company MODEL -->

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
