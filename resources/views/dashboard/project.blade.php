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
                            <h1 class="pd-0 mg-0 tx-20">Add Your Project</h1>
                        </div>
                        <div class="breadcrumb pd-0 mg-0">
                            <a class="breadcrumb-item" href=""><i class="icon ion-ios-home-outline">
                                    Items</i></a>
                            <span class="breadcrumb-item active">Add Project</span>
                        </div>
                    </div>
                    <div class="row row-xs clearfix">
                        <div class="col-xl-12">
                            <div class="row row-xs">
                                @foreach ($data as $item)
                                    <div class="col-sm-6 col-xl-3">
                                        <div class="card mg-b-20">
                                            <div class="card-body text-center">
                                                <img src="{{ url('img') . '/' . $item->gambar }}" alt=""
                                                    class="img-fluid rounded-circle"
                                                    style="max-width:50px; max-height:50px">
                                                <h5 class="tx-dark tx-13 tx-medium mg-y-15 d-block">{{ $item->judul }}
                                                </h5>
                                                <p class="text-center mt-3">
                                                    {{ $item->deskripsi }}
                                                </p>
                                                <a href="{{ url('dashboard/project/' . $item->id . '/edit') }}"
                                                    class="btn btn-sm btn-label-success">Edit</a>
                                                {{-- <form onsubmit="return confirm('yakin mau hapus?')" class="d-inline"
                                                    action="{{ '/dashboard/project/' . $item->gambar }}" method="post">
                                                    @csrf
                                                    @method('DELETE') <button type="submit"
                                                        class="btn btn-sm btn-label-delete">Delete</button> --}}

                                                <form method="post"
                                                    action="{{ url('dashboard/project/' . $item->id) }}"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" name="submit"
                                                        class="btn btn-sm btn-label-delete delete-project"
                                                        data-id="{{ $item->id }}"
                                                        data-nama="{{ $item->judul }}">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('dashboard.footer')
        </div>
    </div>
    <a href="" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
