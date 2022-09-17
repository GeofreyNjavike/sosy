<!-- ======= Our Services Section ======= -->
<section id="services-list" class="services-list">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Our Services</h2>

        </div>

        <div class="row gy-5">

            @forelse ($services as $service)
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
                    <div>
                        <h4 class="title"><a href="{{ URL::to('service', $service->id) }}"
                                class="stretched-link">{{ $service->serviceName }}</a></h4>
                        <p class="description">
                            {{ \Illuminate\Support\Str::limit($service->serviceDescriptions, 100, $end = '...') }}</p>
                    </div>
                </div>
                <!-- End Service Item -->
            @empty

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
                    <div>
                        <h4 class="title"><a href="{{ url('service') }}" class="stretched-link">Tax Advisory</a></h4>
                        <p class="description">We provide advice on corporate tax, withholding taxes, VAT, double
                            taxation
                            status, charitable tax status, updates of changes in the tax laws and regulations, customs
                            and
                            excise duties, stamp duties, payroll taxes, preparation of transfer pricing policy and the
                            tax
                            implications of any other matters which may be referred to us. The scope of the advisory
                            services shall be discussed between our firm and the client.</p>
                    </div>
                </div><!-- End Service Item -->
            @endforelse

            {{ $services->links() }}
        </div>

    </div>
</section><!-- End Our Services Section -->
