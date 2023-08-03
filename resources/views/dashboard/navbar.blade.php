<div class="page-sidebar-inner">
    <div class="page-sidebar-menu">
        <ul class="accordion-menu">
            <li class="mg-20-force menu-others">Menu Dashboard</li>
            <li class="{{ \Route::is('dashboard') ? 'open active' : '' }}">
                <a href="{{ url('/dashboard') }}"><i data-feather="home"></i><span>Dashboard</span></a>
            </li>
            <li>
                <a href=""><i data-feather="folder"></i>
                    <span>Project</span><i class="accordion-icon fa fa-angle-left"></i></a>
                <ul class="sub-menu" style="display: block;">
                    <!-- Active Page -->
                    <li><a href="{{ '/dashboard/project' }}">View Project</a></li>
                    <li><a href="{{ '/dashboard/createProject' }}">Create Project</a></li>
                </ul>
            </li>
            <li>
                <a href=""><i data-feather="grid"></i>
                    <span>About</span><i class="accordion-icon fa fa-angle-left"></i></a>
                <ul class="sub-menu" style="display: block;">
                    <!-- Active Page -->
                    <li><a href="{{ '/dashboard/about' }}">View About</a></li>
                    <li><a href="{{ '/dashboard/createAbout' }}">Create About</a></li>
                </ul>
            </li>
            <li class="menu-divider mg-y-20-force"></li>
            <li class="mg-20-force menu-elements">Elements</li>
            <li>
                <a href=""><i data-feather="grid"></i>
                    <span>UI Elements</span><i class="accordion-icon fa fa-angle-left"></i></a>
                <ul class="sub-menu">
                    <li><a href="#">Card</a></li>
                    <li><a href="#">Alerts</a></li>
                </ul>
        </ul>
    </div>
    <div class="sidebar-footer">
        <a class="pull-left" href="{{ 'logout' }}" data-toggle="tooltip" data-placement="top"
            data-original-title="Sing Out">
            <i data-feather="log-out" class="ht-15"></i></a>
    </div>
</div>
