@include('dashboard.header')

<body>
    <div class="page-container">
        <div class="page-sidebar">
            @include('dashboard.navbar')
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
                                                                <img src="{{ asset('storage/' . $item->gambar) }}"
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
                                                    <tr>
                                                        <td colspan="3" class="text-center"
                                                            style="color: rgb(0, 113, 113)">Data tidak di temukan
                                                        </td>
                                                    </tr>
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
                        <div class="col-lg-12 col-xl-12">
                            <div class="card mg-b-20">
                                <div class="card-header">
                                    <h4 class="card-header-title">
                                        Daftar Skill
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
                                                    <th>Icon</th>
                                                    <th>Judul</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (count($skill) > 0)
                                                    @foreach ($skill as $item)
                                                        <tr>
                                                            <td class=" tx-normal tx-gray-600">
                                                                <img src="{{ asset('storage/' . $item->gambar) }}"
                                                                    alt="" class="img-fluid rounded-circle"
                                                                    style="max-width:30px; max-height:30px">
                                                            </td>
                                                            <td class="tx-medium tx-dark">{{ $item->nama }}</td>
                                                            <td class="tx-medium tx-dark">
                                                                <form method="post"
                                                                    action="{{ url('dashboard/skill/' . $item->id) }}"
                                                                    class="d-inline">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" name="submit"
                                                                        class="btn btn-sm btn-label-delete delete-skill"
                                                                        data-id="{{ $item->id }}"
                                                                        data-nama="{{ $item->nama }}">Delete</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="3" class="text-center"
                                                            style="color: rgb(0, 113, 113)">Data tidak di temukan
                                                        </td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
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
