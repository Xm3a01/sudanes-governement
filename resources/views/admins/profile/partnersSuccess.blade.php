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
                    <h1>    شركاء النجاح    
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
                    <span class="active">إضافة شركاء النجاح  </span>
                </li>
            </ul>
            <!--END PAGE BREADCRUMB-->
            
        <div class="mt-bootstrap-tables">
            <div class="row">
               <div class="col-md-12">
                  <div class="portlet light bordered">
                     <div class="portlet-title"> 
                                  <div class="table-toolbar pull-left">
                                        <div class="btn-group">
                                            <a data-toggle="modal" href="#add"  id="" class="btn green">   أضف شركة جديدة
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
                                        <th>#</th>
                                        <th> إسم الشركة  </th>
                                        <th>شعار الشركة  </th>
                                        <th> عمليات </th>
                                    </tr>
                                </thead>
                         
                                    <tbody> 
                                      
                                     @foreach ($parteners as $partener)
                                         <tr> 
                                            <td>{{$partener->id}}</td> 
                                            <td>{{$partener->partner_name}} </td>
                                            <td> <img src =" {{Storage::url($partener->partner_logo)}}" height ="30" width ="30"></td>
                                            <td>
                                               <form action="{{route('abouts.destroy',  $partener->id)}}" method="Post">
                                                    @csrf  
                                                    @method('DELETE')
                                                    <input type ="hidden" name ="select" value ="partner">
                                                    <button type="submit" class="btn btn-danger  sbold uppercase">
                                                        <i class="fa fa-trash"></i>
                                                    </button> 
                                                    <a class="btn btn-info  sbold uppercase" href ="{{route('partner.edit' , $partener->id)}}"> <i class="fa fa-edit"></i>  </a>
                                                </form> 
                                                <!--<button type="button" class="btn btn-success edit sbold uppercase" data-id="{{ $partener->id}}" data-name=" {{$partener->partner_name}}"  data-toggle="modal" data-target="#edit">-->
                                                <!--    <i class="fa fa-edit"></i>-->
                                                <!--</button> -->
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
            
            
            <div class="modal fade" id="add" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> <img src=" {{asset('vendor/img/remove-icon-small.png')}} " alt="" srcset=""> </button>
                      <h4 class="modal-title"> إضافة شركاء النجاح</h4> 
                    </div>
                <div class="modal-body">
                     
                    <form class="form-horizontal" role="form" method="POST" action="{{route('abouts.store')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="select_one" value="partner">
                        <input type="hidden" name="about_id" value="{{ $about->id ?? ''}}">
                            {{--<input type="hidden" name="partener_id" value="{{$partener->id}}">--}}
                            <div class="form-body">  
                                <div class="form-group">
                                  <label class="col-md-3 control-label">  إسم الشركة  </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="ادخل  إسم الشركة" name="partner_name">
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="col-md-3 control-label">  شعار الشركة   </label>
                                    <div class="col-md-6">
                                        <input type="file" class="form-control" name="partner_logo">
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
         /.modal-content 
    </div>
     /.modal-dialog 
</div>
 
            
            
            
            
            
            <!--edit partner-->
            
            
 
 
            

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
        
        
        
        $('.edit').on('click',function(){
            
            
              
            var id=$(this).data('id')
            var name=$(this).data('name')
            
            $('#name').val(name)
            
               $('#id').val(id)
        
        })
    });


 
</script>
@endsection