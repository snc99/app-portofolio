<div class="page-header">
    <nav class="navbar navbar-expand-lg">
        <ul class="list-inline list-unstyled mg-r-20">
            <li class="list-inline-item align-text-top"><a class="hidden-md hidden-lg" href="#"
                    id="sidebar-toggle-button"><i class="ion-navicon tx-20"></i></a></li>
            <li class="list-inline-item align-text-top"><a class="hidden-xs hidden-sm" href="#"
                    id="collapsed-sidebar-toggle-button"><i class="ion-navicon tx-20"></i></a></li>
        </ul>
        <div class="collapse navbar-collapse">
        </div>
        <div class="header-right pull-right">
            <ul class="list-inline justify-content-end">
                <li class="list-inline-item dropdown">
                    <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="select-profile">Hi, John!</span>
                        <img src="{{ asset('assets/admin') }}/assets/images/avatar/avatar1.png"
                            class="img-fluid wd-35 ht-35 rounded-circle" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-profile shadow-2">
                        <div class="user-profile-area">
                            <div class="user-profile-heading">
                                <div class="profile-thumbnail">
                                    <img src="{{ asset('assets/admin') }}/assets/images/avatar/avatar1.png"
                                        class="img-fluid wd-35 ht-35 rounded-circle" alt="">
                                </div>
                                <div class="profile-text">
                                    <h6>John Deo</h6>
                                    <span>email@example.com</span>
                                </div>
                            </div>
                            <a href="{{ '/logout' }}" class="dropdown-item"><i class="icon-power"
                                    aria-hidden="true"></i>
                                Sign-out</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
