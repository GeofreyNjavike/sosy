  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

      <div class="footer-content">
          <div class="container">
              <div class="row gy-4">
                  <div class="col-lg-5 col-md-12 footer-info">
                      <a href="index.html" class="logo d-flex align-items-center">
                          <span>SOSY TAX & FINANCIAL</span>
                      </a>
                      <p>is a progressive Tax consulting firm providing comprehensive set of cost effective solutions to
                          organization. </p>
                      <div class="social-links d-flex  mt-3">
                          <a href="{{url('https://twitter.com/TaxSosy?t=E2Z7GsMC4yFhpXSYv2y0ig&s=09')}}}" class="twitter"><i class="bi bi-twitter"></i></a>
                          <a href="{{url('https://www.instagram.com/invites/contact/?i=zslixk6n2eyh&utm_content=peo3h91')}}" class="facebook"><i class="bi bi-facebook"></i></a>
                          <a href="{{url('https://www.instagram.com/invites/contact/?i=zslixk6n2eyh&utm_content=peo3h91')}}" class="instagram"><i class="bi bi-instagram"></i></a>
                          <a href="{{url('https://www.linkedin.com/in/sosy-tax-and-financial-services-745767250')}}" class="linkedin"><i class="bi bi-linkedin"></i></a>
                      </div>
                  </div>

                  <div class="col-lg-2 col-6 footer-links">
                      <h4>Useful Links</h4>
                      <ul>
                          <li><i class="bi bi-dash"></i> <a href="{{ url('/') }}">Home</a></li>
                          <li><i class="bi bi-dash"></i> <a href="{{ url('/') }}#why-us">About us</a></li>
                          <li><i class="bi bi-dash"></i> <a href="{{ url('service') }}">Services</a></li>
                          <li><i class="bi bi-dash"></i> <a href="{{ url('/team') }}">Team</a></li>
                      </ul>
                  </div>

                  <div class="col-lg-2 col-6 footer-links">
                      <h4>Our Services</h4>
                      <ul>
                          @forelse ($services as $service)
                              <li><i class="bi bi-dash"></i> <a
                                      href="{{ url('service', $service->id) }}">{{ $service->serviceName }}</a></li>
                          @empty
                              <li><i class="bi bi-dash"></i> <a href="{{ url('service') }}">No Listed Service</a></li>
                          @endforelse

                          {{ $services->links() }}

                      </ul>
                  </div>

                  <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                      <h4>Contact Us</h4>
                      <p>
                          <strong>Location : </strong>House, Samora Avenue - Dsm <br>
                          <strong>Phone:</strong>
                          <a href="tel:+255 765 919 248">+255 765 919 248</a> <br>
                          <strong>Email:</strong><a
                              href="mailto:sosytaxservices@gmail.com">sosytaxservices@gmail.com</a>
                          <br>
                      </p>

                  </div>

              </div>
          </div>
      </div>

      <div class="footer-legal">
          <div class="container">
              <div class="copyright">
                  &copy; Copyright <strong><span>SOSY TAX & FINANCIAL SERVICES.</span></strong>. All Rights Reserved
              </div>
              <div class="credits">
                  <!-- All the links in the footer should remain intact. -->
                  <!-- You can delete the links only if you purchased the pro version. -->
                  <!-- Licensing information: https://bootstrapmade.com/license/ -->
                  <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nova-bootstrap-business-template/ -->
                  Designed by <a href="https://njavikesofcom.com/">Njavike Softcom</a>
              </div>
          </div>
      </div>
  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
          class="bi bi-arrow-up-short"></i></a>



  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
