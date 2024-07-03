<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!-- User details -->
    
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>
                
               
    
<li>
<a href="javascript: void(0);" class="has-arrow waves-effect">
    <i class="ri-mail-send-line"></i>
    <span>Home Slide Setup</span>
</a>
<ul class="sub-menu" aria-expanded="false">
    <li><a href="{{ route('home.slide') }}">Home Slide</a></li>
  
</ul>
</li>
<li>
<a href="javascript: void(0);" class="has-arrow waves-effect">
    <i class="ri-mail-send-line"></i>
    <span>User Management</span>
</a>
<ul class="sub-menu" aria-expanded="false">
    <li><a href="{{ route('customers.all') }}">Customers</a></li>
  
</ul>

</li>
<li>
<a href="javascript: void(0);" class="has-arrow waves-effect">
    <i class="ri-mail-send-line"></i>
    <span>About Page Setup</span>
</a>
<ul class="sub-menu" aria-expanded="false">
    <li><a href="{{ route('about.page') }}">About Page</a></li>
  <li><a href="{{ route('about.multi.image') }}">About Multi Image</a></li>
  <li><a href="{{ route('all.multi.image') }}">All Multi Image</a></li>
</ul>
</li>
<li>
<a href="javascript: void(0);" class="has-arrow waves-effect">
<i class="ri-mail-send-line"></i>
<span>Portfolio Page Setup</span>
</a>
<ul class="sub-menu" aria-expanded="false">
<li><a href="{{ route('all.portfolio') }}">All Portfolio</a></li>
<li><a href="{{ route('add.portfolio') }}">Add Portfolio</a></li>

</ul>
</li>
                

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="ri-profile-line"></i>
        <span>Indicators Page</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('all.indicator') }}">All Indicator</a></li>
        <li><a href="{{ route('add.indicator') }}">Add Indicators</a></li>


    </ul>
</li>
<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="ri-profile-line"></i>
        <span>Footer Page Setup</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('footer.setup') }}">Footer Setup</a></li>
         
        
    </ul>
</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="ri-profile-line"></i>
        <span>Contact Message </span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('contact.message') }}">Contact Message</a></li>


    </ul>
</li>
{{--  --}}
        </div>
        <!-- Sidebar -->
    </div>
</div>