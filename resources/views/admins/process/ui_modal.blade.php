@extends('dashboard.metronic')
@section('content')
 

<div class="page-head">
    <!-- BEGIN PAGE TITLE -->
    <div class="page-title">
        <h1>Modals
            <small>native bootstrap modals</small>
        </h1>
    </div>
    <!-- END PAGE TITLE --> 
</div>
  <!-- BEGIN PORTLET-->
  <div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-bubble font-green-sharp"></i>
            <span class="caption-subject font-green-sharp sbold">Bootstrap Modal Demos</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="javascript:;"> Option 1</a>
                    </li>
                    <li class="divider"> </li>
                    <li>
                        <a href="javascript:;">Option 2</a>
                    </li>
                    <li>
                        <a href="javascript:;">Option 3</a>
                    </li>
                    <li>
                        <a href="javascript:;">Option 4</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-hover table-striped table-bordered">
            <tr>
                <td> Basic Example </td>
                <td>
                    <a class="btn red btn-outline sbold" data-toggle="modal" href="#basic"> View Demo </a>
                </td>
            </tr>
          </table>
        <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> <img src=" {{asset('vendor/img/remove-icon-small.png')}} " alt="" srcset=""> </button>
                        <h4 class="modal-title">إضافة مجال جديد</h4>
                    </div>
                    <div class="modal-body">
                                    <!-- BEGIN PAGE BASE CONTENT --> 
                <div class="row"> 
                    <div class="col-md-12 ">
                        <!-- BEGIN SAMPLE FORM PORTLET-->
                <div class="p-3"> 
                <div class="portlet-body form">
                    <form class="form-horizontal" role="form">
                        <div class="form-body">
                                <div class="form-group">
                        <label class="col-md-3 control-label">إسم المجال</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="ادخل إسم المجال ">
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
        <button type="button" class="btn green">حفظ</button>
    </div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
        <!-- /.modal -->
    </div>
</div>
<!-- END PORTLET-->


@endsection