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
                            <h1 class="pd-0 mg-0 tx-20">Add Your Skill</h1>
                        </div>
                        <div class="breadcrumb pd-0 mg-0">
                            <a class="breadcrumb-item" href=""><i class="icon ion-ios-home-outline">
                                    Items</i></a>
                            <span class="breadcrumb-item active">Add Project</span>
                        </div>
                    </div>
                    <div class="row row-xs clearfix">
                        <div class="col-xl-12">
                            <div class="card mg-b-20">
                                <div class="card-header">
                                    <h4 class="card-header-title">
                                        Add Project
                                    </h4>
                                </div>
                                <div class="card-body collapse show" id="collapse1">
                                    <form method="post" action="/dashboard/skill/" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-layout form-layout-1">
                                            <div class="row mg-b-25">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label active">Nama Skill : <span
                                                                class="tx-danger">*</span></label>
                                                        <input class="form-control" type="text" name="nama"
                                                            placeholder="Input nama skill">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <hr class="d-md-none">
                                                    <label class="form-control-label active">Fill : </label>
                                                    <div class="input-group form-type-fill file-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Choose file..." readonly id="file-name">
                                                        <input type="file" name="gambar" id="file-input">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-custom-primary file-browser"
                                                                type="button"><i class="fa fa-upload"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- row -->
                                            <input class="btn btn-custom-primary" type="submit" name="submit"></input>
                                            <a href="/dashboard/skill" class="btn btn-secondary">Cancel</a>
                                        </div>
                                    </form>
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
