 <!-- BEGIN HEADER -->
 <div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{route('home')}}">
                <img src=" {{Storage::url(Auth::user()->ministry->logo)}} " width="170px" height="70" alt="logo" class="logo-default" /> </a>
            <div class="" style = "background:url('../images/sidebar-toggle-light.png')">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
       
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
      
        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN HEADER SEARCH BOX -->
            <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
            <!--<form class="search-form" action="page_general_search_2.html" method="GET">-->
            <!--    <div class="input-group">-->
            <!--        <input type="text" class="form-control input-sm" placeholder="Search..." name="query">-->
            <!--        <span class="input-group-btn">-->
            <!--            <a href="javascript:;" class="btn submit">-->
            <!--                <i class="icon-magnifier"></i>-->
            <!--            </a>-->
            <!--        </span>-->
            <!--    </div>-->
            <!--</form>-->
            <!-- END HEADER SEARCH BOX -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="separator hide"> </li>
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                     <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="icon-bell"></i>
                            @if(Auth::user()->unreadnotifications->count() > 0) 
                            <span class="badge badge-success"><count class="count"></count></span>
                            @endif 
                            البلاغات
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3>
                                    {{-- <span class="bold">{{Auth::user()->unreadnotifications->count()}} pending</span> notifications</h3> --}}
                                {{-- <a href="{{route('all.notfy')}}">view all</a> --}}
                            </li>
                            <li>
                                <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                    {{-- @foreach (Auth::user()->unreadnotifications as $notfy)   
                                    <li>
                                        <a href="{{route('show.notfy' , $notfy->id)}}">
                                            <span class="time">{{$notfy->created_at->diffForHumans()}}</span>
                                            <span class="details">
                                                <span class="">
                                                    <i class=""> <img src=" {{asset(Storage::url($notfy->data['photo'] ?? '' ))}}" alt="AVATAR" height="30" width="30"> </i>
                                               </span> {{ $notfy->data['notfy_description'] ?? '' }}  </span>
                                        </a>
                                    </li> 
                                    @endforeach --}}
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- END NOTIFICATION DROPDOWN -->
                    <li class="separator hide"> </li>
                    <!-- BEGIN INBOX DROPDOWN -->
                     <li class="dropdown dropdown-extended dropdown-inbox dropdown-dark" id="header_inbox_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="icon-envelope-open"></i>
                            <span class="badge badge-danger"> 0 </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3>You have
                                    <span class="bold">0 New</span> Messages</h3>
                                <a href="#">view all</a>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                    <li>
                                        <a href="#">
                                            <span class="photo">
                                                <img src="../assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                            <span class="subject">
                                                <span class="from">  </span>
                                                <span class="time"> </span>
                                            </span>
                                            <span class="message">  </span>
                                        </a>
                                    </li>  
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- END INBOX DROPDOWN -->
                    <li class="separator hide"> </li>
                    
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                     <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <span class="username username-hide-on-mobile"> {{Auth::user()->name}} </span>
                            <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                            <img alt="" class="img-circle" src="{{asset('vendor/images/noimage_person.png')}}" /> </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                {{-- <a href="{{route('admins.edit' , Auth::user()->id)}}" data-toggle="model" data-target="#adminsetting">
                                    <i class="icon-user"></i>اعدادات </a> --}}
                            </li>
                            <li class="divider"> </li>
                            <li>
                                {{-- <a href="{{ route('admin.logout') }}"
                                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="icon-key"></i>تسجيل خروج</a>
                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form> --}}
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
         </div>
      </div>
   </div>
<!-- END HEADER -->