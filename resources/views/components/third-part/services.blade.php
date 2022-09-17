    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Services</h2>

            </div>

            @forelse ($services as $service)
                <!-- ======= Services Section ======= -->
                <section id="about" class="about">
                    <div class="container" data-aos="fade-up">

                        <div class="row gy-4" data-aos="fade-up">
                            <div class="col-lg-4">
                                <img src="assets/img/about.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-8">
                                <div class="content ps-lg-5">
                                    <h3>{{ $service->serviceName }}</h3>
                                    <p>
                                        {{ $service->serviceDescriptions }}
                                    </p>

                                    </p>

                                </div>
                            </div>
                        </div>

                    </div>
                </section><!-- End About Section -->
            @break

            @empty
                <!-- ======= Services Section ======= -->
                <section id="about" class="about">
                    <div class="container" data-aos="fade-up">

                        <div class="row gy-4" data-aos="fade-up">
                            <div class="col-lg-4">
                                <img src="assets/img/about.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-8">
                                <div class="content ps-lg-5">
                                    <h3>Voluptatem dignissimos provident quasi</h3>
                                    <p>
                                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                        in
                                        reprehenderit in voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                        cupidatat
                                        non proident
                                    </p>
                                    <ul>
                                        <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex
                                            ea
                                            commodo consequat.</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in
                                            reprehenderit
                                            in voluptate velit.</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex
                                            ea
                                            commodo consequat.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </section><!-- End About Section -->
            @endforelse
        </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Services Cards Section ======= -->
    <section id="services-cards" class="services-cards">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                @forelse ($services as $service)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(assets/img/cards-1.jpg);"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $service->serviceName }}</h4>
                                        <p> {{ \Illuminate\Support\Str::limit($service->serviceDescriptions, 100, $end = '...') }}
                                        </p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->
                @empty
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(assets/img/cards-1.jpg);"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="title"><a href="#" class="stretched-link">Tax Advisory</a>
                                        </h4>
                                        <p class="description">We provide advice on corporate tax, withholding taxes,
                                            VAT, double
                                            taxation
                                            status, charitable tax status, updates of changes in the tax laws and
                                            regulations, customs
                                            and
                                            excise duties, stamp duties, payroll taxes, preparation of transfer pricing
                                            policy and the
                                            tax
                                            implications of any other matters which may be referred to us. The scope of
                                            the advisory
                                            services shall be discussed between our firm and the client.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->


                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(assets/img/cards-2.jpg);"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="title"><a href="#" class="stretched-link">Tax Advisory</a>
                                        </h4>
                                        <p class="description">We provide advice on corporate tax, withholding taxes,
                                            VAT,
                                            double
                                            taxation
                                            status, charitable tax status, updates of changes in the tax laws and
                                            regulations, customs
                                            and
                                            excise duties, stamp duties, payroll taxes, preparation of transfer pricing
                                            policy and the
                                            tax
                                            implications of any other matters which may be referred to us. The scope of
                                            the
                                            advisory
                                            services shall be discussed between our firm and the client.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->
                @endforelse
            </div>

        </div>
    </section><!-- End Services Cards Section -->
