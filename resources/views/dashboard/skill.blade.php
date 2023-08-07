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
                            <a class="breadcrumb-item" href=""><i class="icon ion-ios-home-outline"></i>
                                Home</a>
                            <a class="breadcrumb-item" href="">Dashboard</a>
                            <span class="breadcrumb-item active">Sales Monitoring</span>
                        </div>
                    </div>
                    <div class="row row-xs clearfix">
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
                                                    <th>Foto</th>
                                                    <th>Nama Skill</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($data as $item)
                                                    <tr>
                                                        <td class="tx-normal tx-gray-600">
                                                            <img src="{{ asset('storage/' . $item->gambar) }}"
                                                                alt="" class="img-fluid rounded-circle"
                                                                style="max-width:30px; max-height:30px">
                                                        </td>
                                                        <td class="tx-medium tx-dark">
                                                            {{ $item->nama }}
                                                        </td>
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
                                                @empty
                                                    <tr>
                                                        <td colspan="2" class="text-center" style="color: red">
                                                            Tidak ada data</td>
                                                    </tr>
                                                @endforelse
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
