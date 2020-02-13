@extends('metronic')
@section('title', ' الرئيسية  ')

@section('content')


<div class="page-head">
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <h1>  لوحة التحكم  
                    </h1>
                </div> 
            </div>
           
 
            <div class="row">
                {{-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                        <div class="visual">
                            <i class="fa fa-comments"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="1349">{{$admins->count()}}</span>
                            </div>
                            <div class="desc"> المشرفون </div>
                        </div>
                    </a>
                </div> --}}
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                        <div class="visual">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="{{$users->count()}}">{{$users->count()}} </span> </div>
                            <div class="desc"> السير الذاتية </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                        <div class="visual">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="{{$jobs}}" > {{$jobs}} </span>
                            </div>
                            <div class="desc"> الوظائف </div>
                        </div>
                    </a>
                </div>
                {{-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                        <div class="visual">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="{{$owners->count()}}"> {{$owners->count()}} </span></div>
                            <div class="desc"> الشركات </div>
                        </div>
                    </a>
                </div> --}}
            </div>
            <div class="clearfix"></div>
            <!-- END DASHBOARD STATS 1-->
             

           </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    <a href="javascript:;" class="page-quick-sidebar-toggler">
        <i class="icon-login"></i>
    </a>
    
</div>
    
    
    @endsection
 
