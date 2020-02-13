@extends('dashboard.metronic')
@section('content')


<div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1> جدول المجالات
            </h1>
        </div> 
    </div>
    <!-- END PAGE HEAD-->
    <!-- BEGIN PAGE BREADCRUMB -->
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="#">الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">تعديل   الخبره  </span>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->
    <!-- BEGIN PAGE BASE CONTENT --> 
<div class="row"> 
<div class="col-md-12 ">
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet light bordered">
            <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-green hide"></i>
                        <span class="caption-subject font-dark bold uppercase">تعديل المستوى جديد</span>
                    </div>
                 </div> 
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" method="POST" action="{{route('experiences.update',$experience->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT') 
                <br><h4 class="text-left m-3">الخبرة </h4><br>
                <div class="form-group">
                        <label class="col-md-2 control-label">الدور الوظيفي</label>
                        <div class="col-md-4">
                         <select name="role_id" id="inputState" class="form-control">
                            <option selected disabled>الدور الوظيفي</option>
                            @foreach ($roles as $role)  
                            <option {{ $experience->role_id == $role->id ? 'selected' : ''}} value="{{ $role->id }}">{{ $role->ar_name }}</option>
                            @endforeach
                          </select>
                        </div>      
                    

                         <label class="col-md-1 control-label">المستوى الوظيفي</label>
                            <div class="col-md-4">
                              <input type="text" class="form-control  " placeholder="مثلا : اخصائي" name ="level">
                            </div>      
                        </div>


                        <div class="form-group">
                                <label class="col-md-2 control-label"> الدوله</label>
                                <div class="col-md-4">
                                 <select name="country_id" id="inputState" class="form-control">
                                    <option selected disabled>الدوله</option>
                                    @foreach ($countries as $country) 
                                    <option {{$experience->country_id == $country->id ? 'selected' : ''}} value="{{ $country->id }}">{{ $country->ar_name }}</option>
                                    @endforeach
                                  </select>
                                </div>      
                
                                <label class="col-md-1 control-label"> التخصص </label>
                                <div class="col-md-4">
                                    <select name="special_id" id="inputState" class="form-control">
                                    <option selected disabled>التخصص</option>
                                        @foreach ($specials as $special)  
                                          <option {{$experience->special_id == $special->id ? 'selected' : ''}} value="{{ $special->id }}">{{ $special->ar_name }}</option>
                                        @endforeach
                                    </select>
                                </div>      
                             </div>
                        
                            <div class="form-group">
                                    <label class="col-md-2 control-label"> بداية العمل في الخبرة</label>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <input type="text" class="form-control  " placeholder="الشهر مثلا: 1 " name ="start_month" value="{{$experience->start_month}}">
                                            </div>
                                            <div class="col-md-6">
                                                    <input type="text" class="form-control  " placeholder="السنه مثالا: 2000 " name ="start_year" value="{{$experience->start_year}}">
                                            </div>
                                        </div>
                                        </div>
                                        <label class="col-md-1 control-label">نهاية العمل في الخبرة</label>
                                        <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <input type="text" class="form-control  " placeholder="الشهر مثلا: 1" name ="end_month" value="{{$experience->end_month}}">
                                            </div>
                                            <div class="col-md-6">
                                                    <input type="text" class="form-control  " placeholder="السنه مثالا: 2000 " name ="end_year" value="{{$experience->end_year}}">
                                            </div>
                                        </div>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-2 control-label">الشركه التي عملتا بها</label>
                                        <div class="col-md-9">
                                            <input  class="form-control" rows="3" name="company_name" placeholder=" مثال : السودان اليوم " value="{{$experience->company_name}}">
                                        </div>
                                    </div>
                            <div class="form-group">
                                    <label class="col-md-2 control-label">الوصف</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" rows="3" name="ar_description"> {{$experience->ar_summary}} </textarea>
                                    </div>
                                </div>
                    
                                <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-4 col-md-9">
                            <button type="submit" class="btn green">حفظ</button>
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div> 
</div>
</div>



@endsection