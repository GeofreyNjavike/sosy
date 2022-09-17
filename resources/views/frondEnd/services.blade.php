@extends('layouts.base-layout')
@section('content')
    <x-front.navbar />
    <x-third-part.breadcrumbs />

    <main id="main">
        <!-- ======= Our Services Section ======= -->
        <section id="services-list" class="services-list">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Services</h2>

                </div>


                <!-- ======= Services Section ======= -->
                <section id="about" class="about">
                    <div class="container" data-aos="fade-up">

                        <div class="row gy-4" data-aos="fade-up">
                            <div class="col-lg-4">
                                <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-8">
                                <div class="content ps-lg-5">
                                    <h3>{{ $services->serviceName }}</h3>
                                    <p>
                                        {{ $services->serviceDescriptions }}
                                    </p>

                                    </p>

                                </div>
                            </div>
                        </div>

                    </div>
                </section><!-- End About Section -->

            </div>
        </section><!-- End Our Services Section -->

        <!-- ======= Services Cards Section ======= -->
        <section id="services-cards" class="services-cards">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    @forelse ($service2 as $service)
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-xl-5">
                                        @if ($service->id == 1)
                                            <div class="card-bg"
                                                style="background-image: url({{ asset('assets/img/services.jpg') }})"></div>
                                        @elseif ($service->id == 2)
                                            <div class="card-bg"
                                                style="background-image: url({{ asset('assets/img/hero-bg.jpg') }})"></div>
                                        @elseif ($service->id == 3)
                                            <div class="card-bg"
                                                style="background-image: url({{ asset('assets/img/cta-bg.jpg') }})"></div>
                                        @else
                                            <div class="card-bg"
                                                style="background-image: url({{ asset('assets/img/good.jpg') }})"></div>
                                        @endif
                                    </div>
                                    <div class="col-xl-7 d-flex align-items-center">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $service->serviceName }}</h4>
                                            <a href="{{ URL::to('service', $service->id) }}">
                                                {{ \Illuminate\Support\Str::limit($service->serviceDescriptions, 100, $end = '...') }}
                                            </a>
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

    </main>

    <x-front.footer />
@endsection
