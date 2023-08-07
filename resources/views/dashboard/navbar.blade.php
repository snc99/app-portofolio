<div class="logo">
    <a class="logo-img" href="{{ '' }}">
        <img class="desktop-logo" src="{{ asset('assets/admin') }}/assets/images/logo.png" alt="">
        <img class="small-logo" src="{{ asset('assets/admin') }}/assets/images/small-logo.png" alt="">
    </a>
    <i class="ion-ios-close-empty" id="sidebar-toggle-button-close"></i>
</div>
<div class="page-sidebar-inner">
    <div class="page-sidebar-menu">
        <ul class="accordion-menu">
            <li class="mg-20-force menu-others">Menu Dashboard</li>
            <li>
                <a href="{{ '/dashboard' }}"><i data-feather="home"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="menu-divider mg-y-20-force"></li>
            <li class="mg-20-force menu-elements">Fitur</li>
            <li>
                <a href=""><i data-feather="grid"></i>
                    <span>About</span><i class="accordion-icon fa fa-angle-left"></i></a>
                <ul class="sub-menu" style="display: block;">
                    <li><a href="{{ '/dashboard/about' }}">View About</a></li>
                    <li><a href="{{ '/dashboard/createAbout' }}">Create About</a></li>
                </ul>
            </li>
            <li>
                <a href=""><i data-feather="grid"></i>
                    <span>Skill</span><i class="accordion-icon fa fa-angle-left"></i></a>
                <ul class="sub-menu">
                    <li><a href="{{ '/dashboard/skill' }}">View Skill</a></li>
                    <li><a href="{{ '/dashboard/createSkill' }}">Create Skill</a></li>
                </ul>
            <li>
            <li>
                <a href=""><i data-feather="folder"></i>
                    <span>Project</span><i class="accordion-icon fa fa-angle-left"></i></a>
                <ul class="sub-menu" style="display: block;">
                    <li><a href="{{ '/dashboard/project' }}">View Project</a></li>
                    <li><a href="{{ '/dashboard/createProject' }}">Create Project</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="sidebar-footer">
        <a class="pull-left" href="{{ 'logout' }}" data-toggle="tooltip" data-placement="top"
            data-original-title="Sing Out">
            <i data-feather="log-out" class="ht-15"></i></a>
    </div>
</div>
