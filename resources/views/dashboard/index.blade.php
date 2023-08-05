@include('dashboard.header')

<body>
    <div class="page-container">
        <div class="page-sidebar">
            <div class="logo">
                <a class="logo-img" href="{{ 'dashboard.index' }}">
                    <img class="desktop-logo" src="{{ asset('assets/admin') }}/assets/images/logo.png" alt="">
                    <img class="small-logo" src="{{ asset('assets/admin') }}/assets/images/small-logo.png" alt="">
                </a>
                <i class="ion-ios-close-empty" id="sidebar-toggle-button-close"></i>
            </div>
            @include('dashboard.navbar')
            <div class="sidebar-footer">
                <a class="pull-left" href="{{ '/logout' }}" data-toggle="tooltip" data-placement="top"
                    data-original-title="Sing Out">
                    <i data-feather="log-out" class="ht-15"></i></a>
            </div>
        </div>
        <div class="page-content">
            @include('dashboard.headBar')
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="pageheader pd-t-25 pd-b-35">
                        <div class="pd-t-5 pd-b-5">
                            <h1 class="pd-0 mg-0 tx-20">Dashboard</h1>
                        </div>
                        <div class="breadcrumb pd-0 mg-0">
                            <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i>
                                Home</a>
                            <a class="breadcrumb-item" href="">Dashboard</a>
                            <span class="breadcrumb-item active">Sales Monitoring</span>
                        </div>
                    </div>
                    <div class="row row-xs clearfix">
                        <div class="col-lg-12 col-xl-8">
                            <div class="card mg-b-20">
                                <div class="card-header">
                                    <h4 class="card-header-title">
                                        Daftar Project
                                    </h4>
                                    <div class="card-header-btn">
                                        <a href="#" data-toggle="collapse" class="btn card-collapse"
                                            data-target="#recentEarnings" aria-expanded="true"><i
                                                class="ion-ios-arrow-down"></i></a>
                                        <a href="#" data-toggle="refresh" class="btn card-refresh"><i
                                                class="ion-android-refresh"></i></a>
                                        <a href="#" data-toggle="expand" class="btn card-expand"><i
                                                class="ion-android-expand"></i></a>
                                        <a href="#" data-toggle="remove" class="btn card-remove"><i
                                                class="ion-ios-trash-outline"></i></a>
                                    </div>
                                </div>
                                <div class="card-body pd-0 collapse show" id="recentEarnings">
                                    <div class="table-responsive">
                                        <table class="table table-hover mg-b-0">
                                            <thead class="tx-dark tx-uppercase tx-10 tx-bold">
                                                <tr>
                                                    <th>Foto</th>
                                                    <th>Judul</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (count($project) > 0)
                                                    @foreach ($project as $item)
                                                        <tr>
                                                            <td class=" tx-normal tx-gray-600">
                                                                <img src="{{ url('img') . '/' . $item->gambar }}"
                                                                    alt="" class="img-fluid rounded-circle"
                                                                    style="max-width:30px; max-height:30px">
                                                            </td>
                                                            <td class="tx-medium tx-dark">{{ $item->judul }}</td>
                                                            <td class="tx-medium tx-dark">
                                                                <a href="{{ url('dashboard/project/' . $item->id . '/edit') }}"
                                                                    class="btn btn-sm btn-label-success">Edit</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <p>Data tidak di temukan</p>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
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
                                <div class="card-body pd-y-0 collapse show" id="popularTopics">
                                    <div class="clearfix">
                                        @if ($about)
                                            <p class="text-justify mt-3">{{ $about->deskripsi }}</p>
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
            @include('dashboard.footer')
        </div>
    </div>
    <a href="" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
