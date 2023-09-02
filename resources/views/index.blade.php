<body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Selamat Datang</a>
            <button
                class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded"
                type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#portfolio">Portfolio</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#about">About</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#skill">Skill</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#contact">Contact</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="auth">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column fade-in">
            <img class="masthead-avatar mb-5 animated" src="assets/img/irvan.png" alt="" />
            <h1 class="masthead-heading text-uppercase mb-0">
                <span class="typing-text"></span><span class="cursor"></span>
            </h1>
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            {{-- <p class="masthead-subheading font-weight-light mb-0">
                <span class="typing-text">Web Developer - Quality Assurance</span><span class="cursor"></span>
            </p> --}}
        </div>
    </header>

    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Project Web</h2>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row">
                @foreach ($project as $item)
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal"
                            data-target="#portfolioModal{{ $item->id }}">
                            <div
                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i
                                        class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid" alt="" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-12 ml-auto">
                    @if ($about)
                        <p class="text-center"> {{ $about->deskripsi }}</p>
                    @else
                        {{-- <p class="masthead-subheading font-weight-light mb-0 text-center" style="color: darksalmon">
                            <span>Data tidak di temukan</span><span class="cursor"></span> --}}
                        <h4 class="text-uppercase mb-4 text-center">-- Data Tidak ada --</h4>

                        </p>
                    @endif
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="page-section text-black mb-0" id="skill">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-black">Skill</h2>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-12 ml-auto">
                    <div class="skill-container">
                        @if (count($skill) > 0)
                            @foreach ($skill as $item)
                                <div class="skill-item">
                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="skill"
                                        class="skill-icon">
                                </div>
                            @endforeach
                        @else
                            <p>data tidak di temukan</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    @include('footer')
    @foreach ($project as $modal)
        <div class="portfolio-modal modal fade" id="portfolioModal{{ $modal->id }}" tabindex="-1" role="dialog"
            aria-labelledby="portfolioModal{{ $modal->id }}" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                        id="portfolioModal{{ $modal->id }}">{{ $modal->judul }}</h2>
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <img class="img-fluid rounded mb-5" src="{{ asset('storage/' . $modal->gambar) }}"
                                        alt="" />
                                    <p class="mb-5">
                                        {{ $modal->deskripsi }}
                                    </p>
                                    {{-- <a class="btn btn-primary" href="#">
                                        <i class="fas fa-eye fa-fw"></i> Lihat</a> --}}
                                    <button class="btn btn-danger" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <script src="{{ '' }}/assets/js/scripts.js"></script>
</body>

</html>
