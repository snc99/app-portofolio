@include('dashboard.header')

<body>
    <!--================================-->
    <!-- Page Container Start -->
    <!--================================-->
    <div class="page-container">
        <!--================================-->
        <!-- Page Sidebar Start -->
        <!--================================-->
        <div class="page-sidebar">
            <div class="logo">
                <a class="logo-img" href="/layouts/admin">
                    <img class="desktop-logo" src="{{ asset('assets/admin') }}/assets/images/logo.png" alt="">
                    <img class="small-logo" src="{{ asset('assets/admin') }}/assets/images/small-logo.png" alt="">
                </a>
                <i class="ion-ios-close-empty" id="sidebar-toggle-button-close"></i>
            </div>
            <!--================================-->
            <!-- Sidebar Menu Start -->
            <!--================================-->
            @include('dashboard.navbar')
            <!--/ Sidebar Menu End -->
        </div>
        <!--/ Page Sidebar End -->
        <!--================================-->
        <!-- Page Content Start -->
        <!--================================-->
        <div class="page-content">
            <!--================================-->
            <!-- Page Header Start -->
            <!--================================-->
            @include('dashboard.headBar')
            <!--/ Page Header End -->
            <!--================================-->
            <!-- Page Inner Start -->
            <!--================================-->
            <div class="page-inner">
                <!-- Main Wrapper -->
                <div id="main-wrapper">
                    <!--================================-->
                    <!-- Breadcrumb Start -->
                    <!--================================-->
                    <div class="pageheader pd-t-25 pd-b-35">
                        <div class="pd-t-5 pd-b-5">
                            <h1 class="pd-0 mg-0 tx-20">Edit About</h1>
                        </div>
                        <div class="breadcrumb pd-0 mg-0">
                            <a class="breadcrumb-item" href=""><i class="icon ion-ios-home-outline">
                                    Items</i></a>
                            <span class="breadcrumb-item active">About</span>
                        </div>
                    </div>
                    <!--/ Breadcrumb End -->
                    <!--================================-->
                    <!-- / Sales+Order+Revenue  End -->
                    <!--================================-->
                    <!-- Transaction History Start -->
                    <!--================================-->
                    <form method="post" action="/dashboard/about">
                        @csrf
                        <div class="row row-xs clearfix">
                            <div class="col-xl-12">
                                <div class="card mg-b-20">
                                    <div class="card-header">
                                        <h4 class="card-header-title">
                                            Edit About
                                        </h4>
                                    </div>
                                    <div class="card-body collapse show" id="collapse1">
                                        <div class="form-layout form-layout-1">
                                            <div class="row mg-b-25">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="form-control-label active">Deskripsi : <span
                                                                class="tx-danger">*</span></label>
                                                        <textarea rows="3" class="form-control" placeholder="Input your description" name="deskripsi"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- row -->
                                            <div class="form-layout-footer">
                                                <button class="btn btn-custom-primary" name="submit"
                                                    type="submit">Submit Form</button>
                                                <a href="{{ '/dashboard/about' }}" class="btn btn-secondary">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Transaction History End -->
                </div>
                <!--/ Main Wrapper End -->
            </div>
            <!--/ Page Inner End -->
            <!--================================-->

            @include('dashboard.footer')
        </div>
        <!--/ Page Content End -->
    </div>
    <!--/ Page Container End -->
    <!--================================-->
    <!-- Scroll To Top Start-->
    <!--================================-->
    <a href="" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
    <!--/ Scroll To Top End -->
    <!--================================-->
    <!-- Setting Sidebar Start -->
    <!--================================-->
