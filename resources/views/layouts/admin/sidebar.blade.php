<div class="side-menu-fixed">
    <div class="scrollbar side-menu-bg">
     <ul class="nav navbar-nav side-menu" id="sidebarnav">
       <!-- menu item Dashboard-->
       <li>
         <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
           <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">الصفحة الرئيسية</span></div>
           <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
         </a>
         <ul id="dashboard" class="collapse" data-parent="#sidebarnav">
           <li> <a href="{{ route('slider.index') }}">اسليدر</a> </li>
           <li> <a href="{{ route('about.index') }}">من نحن</a> </li>
           <li> <a href="{{ route('achievement.index') }}">انجازات صناع الحياة</a> </li>
           <li> <a href="{{ route('successPartner.index') }}">شركاء النجاح</a> </li>
         </ul>
       </li>
       <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Components </li>

       <li>
         <a href="{{ route('donate.index') }}"><i class="ti-menu-alt"></i><span class="right-nav-text">التبرعات </span> </a>
       </li>
        <!-- menu item chat-->
    </ul>
     </li>
   </ul>
 </div>
</div>
