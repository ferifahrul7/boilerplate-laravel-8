  <!-- ======= Clients Section ======= -->
  <section id="partner" class="clients bg-light">
      <div class="container py-5 mt-2">
          <div class="row">
              <div class="col-lg-12 mb-5">
                  <div class="section-title text-center">
                      <h1>Partner</h1>
                      <p class="font-weight-bold">Our Partner</h2>
                  </div>
              </div>
          </div>
          <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

              @forelse($partners as $partner)
              <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo" data-aos="fade-in">
                      <img src="{{ asset($partner->thumb_partner) }}" class="img-fluid" alt="">
                  </div>
              </div>
              @empty
              <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo" data-aos="fade-in">
                      <img src="{{ asset('img/partner/abc.png') }}" class="img-fluid" alt="">
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo" data-aos="fade-in" data-aos-delay="100">
                      <img src="{{ asset('img/partner/biznet.png') }}" class="img-fluid" alt="">
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo" data-aos="fade-in" data-aos-delay="150">
                      <img src="{{ asset('img/partner/blackberry.png') }}" class="img-fluid" alt="">
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo" data-aos="fade-in" data-aos-delay="200">
                      <img src="{{ asset('img/partner/bpjs.png') }}" class="img-fluid" alt="">
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo" data-aos="fade-in" data-aos-delay="250">
                      <img src="{{ asset('img/partner/bri.png') }}" class="img-fluid" alt="">
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6" data-aos="fade-in" data-aos-delay="400">
                  <div class="client-logo">
                      <img src="{{ asset('img/partner/grab.png') }}" class="img-fluid" alt="">
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo" data-aos="fade-in" data-aos-delay="300">
                      <img src="{{ asset('img/partner/indosat.png') }}" class="img-fluid" alt="">
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo" data-aos="fade-in" data-aos-delay="350">
                      <img src="{{ asset('img/partner/ojk.png') }}" class="img-fluid" alt="">
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6" data-aos="fade-in" data-aos-delay="400">
                  <div class="client-logo">
                      <img src="{{ asset('img/partner/pnm.png') }}" class="img-fluid" alt="">
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6" data-aos="fade-in" data-aos-delay="400">
                  <div class="client-logo">
                      <img src="{{ asset('img/partner/pos.png') }}" class="img-fluid" alt="">
                  </div>
              </div>


              <div class="col-lg-3 col-md-4 col-xs-6" data-aos="fade-in" data-aos-delay="400">
                  <div class="client-logo">
                      <img src="{{ asset('img/partner/propan.png') }}" class="img-fluid" alt="">
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6" data-aos="fade-in" data-aos-delay="400">
                  <div class="client-logo">
                      <img src="{{ asset('img/partner/telkom.png') }}" class="img-fluid" alt="">
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6" data-aos="fade-in" data-aos-delay="400">
                  <div class="client-logo">
                      <img src="{{ asset('img/partner/xl.png') }}" class="img-fluid" alt="">
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6" data-aos="fade-in" data-aos-delay="400">
                  <div class="client-logo">
                      <img src="{{ asset('img/partner/yamaha.png') }}" class="img-fluid" alt="">
                  </div>
              </div>
              @endforelse

          </div>

      </div>
  </section><!-- End Clients Section -->