<div class="page-sidebar-wrapper">
<!-- BEGIN SIDEBAR -->
 <div class="page-sidebar navbar-collapse collapse">
<!-- BEGIN SIDEBAR MENU -->
<ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
<li class="nav-item start  {{Request::is('dashboard') ? 'active open' : ''}}">
<a href="{{route('home')}}" class="nav-link ">
<i class="icon-home"></i>
<span class="title">الرئيسية</span>
</a>
</li>  
<li class="nav-item">
<a href="javascript:;" class="nav-link nav-toggle">
    <i class="icon-users"></i>
    <span class="title"> السير الذاتية</span>
    <span class="arrow"></span>
</a>
<ul class="sub-menu">
    <li class="nav-item  {{Request::is('user*') ? 'active open' : ''}}">
        <a href="#" class="nav-link">
            <span class="title">عرض جميع السير</span>
        </a>
    </li>
    <li class="nav-item ">
        <a href="#" class="nav-link">
            <span class="title">الخبرات</span>
        </a>
    </li>
    <li class="nav-item ">
        <a href="#" class="nav-link">
            <span class="title">التعليم</span>
        </a>
    </li>
    <li class="nav-item ">
        <a href="#" class="nav-link ">
            <span class="title">اللغه</span>
        </a>
    </li>
    <li class="nav-item ">
        <a href="#" class="nav-link ">
            <span class="title">المرجع</span>
        </a>
    </li>
    <li class="nav-item ">
        <a href="#" class="nav-link ">
            <span class="title">الملفات</span>
        </a>
    </li>
    <li class="nav-item ">
        <a href="#" class="nav-link ">
            <span class="title">موجهات السيره الزاتيه</span>
        </a>
    </li>
   
</ul>
</li>   

<li class="nav-item  ">
<a href="javascript:;" class="nav-link nav-toggle">
    <i class="icon-settings"></i>
    <span class="title">الضبط</span>
    <span class="arrow"></span>
</a>
<ul class="sub-menu">
    <li class="nav-item">
        <a href="{{route('ministaries.index')}}" class="nav-link nav-toggle">
            <i class="icon-briefcase"></i>
            <span class="title"> الوزارات</span>
         </a>
        </li> 
        <li class="nav-item">
        <a href="{{route('ministaries.index')}}" class="nav-link nav-toggle">
            <i class="icon-users"></i>
            <span class="title"> المستخدمين</span>
        </a>
      </li>
  </ul>
</li>

{{-- <li class="nav-item ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-th"></i>
        <span class="title"> التخصصات</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item ">
            <a href="{{route('specials.index')}}" class="nav-link ">
                <span class="title">عرض التخصصات </span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{route('subspecials.index')}}" class="nav-link ">
                <span class="title">التخصصات الدقيقه   </span>
            </a>
        </li>
    </ul>
</li>

        <li class="nav-item">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-settings"></i>
            <span class="title">الدول والمدن</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item ">
                <a href="{{route('locations.index')}}" class="nav-link ">
                    <span class="title">الدول </span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{route('cities.index')}}" class="nav-link ">
                    <span class="title"> المدن </span>
                </a>
            </li>
        </ul>
    </li> 
        
    <li class="nav-item">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-settings"></i>
            <span class="title"> الشركه</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item ">
                <a href="{{route('about.company')}}" class="nav-link ">
                    <span class="title">عن الشركه</span>
                </a>
            </li>
            @if(!is_null($about))
            <li class="nav-item ">
                <a href="{{route('about.partner')}}" class="nav-link ">
                    <span class="title">شركاء النجاح  </span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{route('about.team')}}" class="nav-link ">
                    <span class="title">فريق العمل</span>
                </a>
            </li> 
            @endif
            
        </ul>
        </li> 
        @if(Auth::user()->supper)
    <li class="nav-item ">
    <a href=" {{route('admins.index')}} " class="nav-link nav-toggle">
    <i class="icon-users"></i>
    <span class="title">المشرفون </span>
    </a> 
    </li>
    @endif
    
    <li class="nav-item ">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-settings"></i>
            <span class="title">الاعلانات & العروض</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li>
            <a href="{{route('advs.index')}}" class="nav-link ">
                <span class="title">الاعلانات</span>
            </a>
            </li>
            
             <li>
            <a href="{{route('price.index')}}" class="nav-link ">
                <span class="title">العروض</span>
            </a>
            </li> 
        </ul>
                
            </li>
            
             <li class="nav-item ">
                <a href="{{route('news.index')}}" class="nav-link ">
                    <i class="icon-settings"></i>
                    <span class="title">الاخبار</span>
                </a>
            </li> --}}
            
         </ul>
        </li>
    </ul>
<!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->
</div>