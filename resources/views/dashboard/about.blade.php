@include('dashboard.header')

<body>
    <div class="page-container">
        <div class="page-sidebar">
            <div class="logo">
                <a class="logo-img" href="/layouts/admin">
                    <img class="desktop-logo" src="{{ asset('assets/admin') }}/assets/images/logo.png" alt="">
                    <img class="small-logo" src="{{ asset('assets/admin') }}/assets/images/small-logo.png" alt="">
                </a>
                <i class="ion-ios-close-empty" id="sidebar-toggle-button-close"></i>
            </div>
            @include('dashboard.navbar')
        </div>
        <div class="page-content">
            @include('dashboard.headBar')
            <div class="page-inner">
                <div id="main-wrapper">
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
                    <div class="row row-xs clearfix">
                        <div class="col-xl-12">
                            <div class="row row-xs">
                                <div class="col-sm-10 col-xl-12">
                                    <div class="card mg-b-20">
                                        <div class="card-header">
                                            <h4 class="card-header-title">
                                                About
                                            </h4>
                                            <div class="card-header-btn">
                                                <a href="" data-toggle="collapse" class="btn card-collapse"
                                                    data-target="#popularTopics" aria-expanded="true"><i
                                                        class="ion-ios-arrow-down"></i></a>
                                                <a href="" data-toggle="refresh" class="btn card-refresh"><i
                                                        class="ion-android-refresh"></i></a>
                                                <a href="" data-toggle="expand" class="btn card-expand"><i
                                                        class="ion-android-expand"></i></a>
                                                <a href="" data-toggle="remove" class="btn card-remove"><i
                                                        class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="card-body text-center" id="popularTopics">
                                            @if ($data)
                                                <p class="text-center mt-3">
                                                    {{ $data->deskripsi }}</p>
                                                <a href="{{ url('dashboard/about/' . $data->id . '/edit') }}"
                                                    class="btn btn-sm btn-label-success">Edit</a>

                                                <form method="post" action="{{ url('dashboard/about/' . $data->id) }}"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" name="submit"
                                                        class="btn btn-sm btn-label-delete delete-about"
                                                        data-id="{{ $data->id }}">Delete</button>
                                                </form>
                                            @else
                                                <p class="text-center mt-3" style="color: red">Data Tidak Di
                                                    Temukan</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('dashboard.footer')
        </div>
    </div>
    <a href="" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
