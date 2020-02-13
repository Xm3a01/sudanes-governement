@extends('dashboard.metronic')
@section('title', '  معلومات الشركة  ')
<!-- BEGIN CSS -->
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('vendor/plugins/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css')}}">
@endsection
<!-- END CSS -->
@section('content')
<div class="page-head">
    <!-- BEGIN PAGE TITLE -->
    <div class="page-title">
        <h1>    عن الشركة
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
        <span class="active">  معلومات الشركة</span>
    </li>
</ul> 
 
 <div class="mt-bootstrap-tables">
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                     <div class="portlet-title"> 
                                  <div class="table-toolbar pull-left">
                            <div class="btn-group">
                                <a data-toggle="modal" href="#about"  id="sample_editable_1_new" class="btn green"> أضف  معلومات الشركة
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
                                        <th>العنوان</th>
                                        <th>العنوان باللغة الانجليزية</th>
                                        <th>البريد الإلكتروني</th>
                                        <th>رقم الهاتف</th>
                                        <th>عن الشركة</th>
                                        <th>عن الشركه باللغة الانجليزية </th>
                                        <th>رابط الفيديو</th>
                                        <th>العمليات</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                 @foreach ($all as $about)   
                                        <tr>
                                            <td> </td>
                                            <td> {{$about->ar_location}}  </td>
                                            <td> {{$about->location}}</td>
                                            <td> {{$about->email}}</td>
                                            <td> {{$about->phone}}</td>
                                            <td> {{Str::limit($about->ar_about , $limit = 30)}}</td>
                                            <td> {{Str::limit($about->about  , $limit = 30)}}</td>
                                            <td>
                                                
                                                <video width="200" height="100" controls>
                                                  <source src="{{Storage::url($about->video)}}" type="video/mp4">
                                                  <source src="{{Storage::url($about->video)}}" type="video/3gp">
                                                </video> </td> 
                                             <td>
                                                <form action="{{route('abouts.destroy', $about->id)}}" method="POST">
                                                    @csrf {{ method_field('DELETE') }}
                                                    <input type ="hidden" name ="select" value ="about">
                                                    <a href="{{route('abouts.edit' , $about->id)}}" class="btn btn-info sbold uppercase">
                                                        <i class="fa fa-edit"> </i>
                                                    </a>
                                                    <button type="submit" class="btn btn-danger  sbold uppercase">
                                                        <i class="fa fa-trash"></i>
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
 <!-- END PAGE BASE CONTENT -->


  <div class="modal fade" id="about" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> <img src=" {{asset('vendor/img/remove-icon-small.png')}} " alt="" srcset=""> </button>
                    <h4 class="modal-title">إضافة معلومات الشركة  </h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" action="{{route('abouts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="select_one" value="about_company">
       
                 <div class="form-body"> 
                    <div class="form-group">
                            <label class="col-md-3 control-label">   العنوان</label>
                            <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="ادخل  العنوان " name="location_ar">
                            </div>
                          </div> 
                            <div class="form-group">
                            <label class="col-md-3 control-label"> العنوان باللغة الانجليزية  </label>
                            <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="ادخل  العنوان " name="location">
                            </div>
                          </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"> البريد الالكتروني</label>
                            <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="ادخل  البريد الالكتروني   " name="email">
                            </div>
                          </div>  
                            <div class="form-group">
                                <label class="col-md-3 control-label">   رقم الهاتف</label>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" placeholder="ادخل رقم الهاتف    " name="phone">
                                </div>
                              </div> 
                       
                  
                  
             <div class="form-group">
              <label class="col-md-3 control-label"> نبذة عن الشركة  </label>
                <div class="col-md-6">
                  <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" placeholder="عن الشركة" name="ar_about"></textarea>
              </div>
            </div>
              <div class="form-group">
              <label class="col-md-3 control-label"> نبذة عن الشركة باللغة الإنجليزية</label>
                <div class="col-md-6">
                  <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" placeholder="عن الشركة" name="about"></textarea>
              </div>
            </div>
            
            <div class="form-group">
               <label class="col-md-3 control-label" >حمل فيديو</label>
                <div class="col-md-6">
                <input type="file" class="form-control" placeholder="ادخل رابط الفيديو " name="video">
                </div>
               </div> 
              </div>
       <div class="form-actions">
                                <div class="row">
                                    <div class="modal-footer"> 
                                    <button type="submit" class="btn green">حفظ</button>
                                    <button type="button" class="btn green" data-dismiss="modal">إلغاء</button>
                                    
                                 </div>
                                  </div>
                                    </div>
</form>
                </div>
                 
            </div> 
        </div>
    </div> 


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
