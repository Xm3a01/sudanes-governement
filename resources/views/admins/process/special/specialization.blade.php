@extends('dashboard.metronic')
@section('content')


   <!-- BEGIN PAGE HEAD-->
   <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1> جدول التخصصات
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
            <span class="active">جدول التخصصات</span>
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
                            <span class="caption-subject font-dark bold uppercase">جدول التخصصات</span>
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
                                <button id="sample_editable_1_new" class="btn green">  أضف تخصص جديد
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
    <table id="table-pagination" data-toggle="table"
        data-url="../assets/global/plugins/bootstrap-table/data/data2.json"
        data-height="299" data-pagination="true" data-search="true">
        <thead>
            <tr>
                <th data-field="state" data-checkbox="true"></th>
                <th data-field="main" data-align="center" data-sortable="true">تخصص أساسي</th>
                <th data-field="sub" data-align="center" data-sortable="true"> تخصص فرعي</th>
                <th data-field="" data-align="center">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> </td>
                <td> طب العيون </td>
                <td>قزحية</td>
                <td> 
                    <a class="edit" href="javascript:;"> edit </a>
                    <a class="delete" href="javascript:;"> del </a>
                </td>
            </tr>
            <tr>
                    <td> </td>
                    <td>  هندسة ميكانيكا</td> 
                    <td>      الات ثقيلة </td>
                    <td> 
                        <a class="edit" href="javascript:;"> edit </a>
                        <a class="delete" href="javascript:;"> del </a>
                    </td>
                </tr>

                <tr>
                        <td> </td>
                        <td>  هنسة البرمجيات </td> 
                        <td>      -  </td>
                        <td> 
                            <a class="edit" href="javascript:;"> edit </a>
                            <a class="delete" href="javascript:;"> del </a>
                        </td>
                    </tr>

                    <tr>
                            <td> </td>
                            <td>   طب العيون</td> 
                            <td>       قرنية</td>
                            <td> 
                                <a class="edit" href="javascript:;"> edit </a>
                                <a class="delete" href="javascript:;"> del </a>
                            </td>
                        </tr>

                        <tr>
                                <td> </td>
                                <td>   طب العيون</td> 
                                <td>  شبكية</td>
                                <td> 
                                    <a class="edit" href="javascript:;"> edit </a>
                                    <a class="delete" href="javascript:;"> del </a>
                                </td>
                            </tr>
            
        </tbody>
    
    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE BASE CONTENT -->


@endsection