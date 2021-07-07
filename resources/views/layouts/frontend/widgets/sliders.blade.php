<!-- ======= Intro Section ======= -->
<section id="hero">

    <div class="row no-gutters">
        <div class="col-lg-12" data-aos="fade-in">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @forelse($sliders as $slider)
                    <div class="swiper-slide row no-gutters">
                        <div class="parallax-bg" style="background-image:url({{ asset($slider->thumb_slider) }})"> </div>
                        <div class="col-lg-12 mt-5 d-flex justify-content-start pt-5 align-items-end px-5">
                            <h1 class="text-light" data-swiper-parallax="-1500">{!! $slider->judul !!}</h1>
                        </div>
                        <div class="col-lg-12 d-flex align-items-end justify-content-center">
                            <button class="btn btn-outline-success rounded-circle mx-2" onclick="event.preventDefault(); $('.magnific-video').click();"><i class="fas fa-play"></i></button>
                            <a href="#about" class="btn scrollto btn-success rounded-pill mx-2"><i class="fas fa-chevron-down"></i> About</a>
                        </div>
                        <div class="col-lg-12 d-flex align-items-end">
                            <div class="trans-white d-flex flex-fill">
                                <p class="text-dark" data-swiper-parallax="-1000">{{ $slider->teks }}</p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="swiper-slide row no-gutters">
                        <div class="parallax-bg" style="background-image:url({{ asset('img/background/bg.jpg') }}"> </div>
                        <div class="col-lg-12 mt-5 d-flex justify-content-start pt-5 align-items-end px-5">
                            <h1 class="text-light" data-swiper-parallax="-1500">"TURNING <span class="text-success">IDEAS</span> INTO <span class="text-success">ACTION</span>"</h1>
                        </div>
                        <div class="col-lg-12 d-flex align-items-end">
                            <div class="trans-white d-flex flex-fill">
                                <p class="text-dark" data-swiper-parallax="-1000">EOnesia Production merupakan Re-Branding dari RI Production, Sebuah perusahaan yang bergerak di bidang Jasa EO (Event Organizer).</p>
                            </div>
                        </div>
                    </div>
                    @endforelse


                </div>
                <!-- Add Pagination -->
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <button class="magnific-video" data-link="https://www.youtube.com/watch?v=hnGL82fUNPM" data-id="5" style="display:none"></button>
</section><!-- End Intro -->
@push('scripts')
<script>
    $('.magnific-video').each(function() { // the containers for all your galleries
        $('.magnific-video').magnificPopup({

            type: 'iframe',
            items: {
                src: $(this).data("link")
            },
            iframe: {
                markup: '<div class="mfp-iframe-scaler">' +
                    '<div class="mfp-close"></div>' +
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                    '</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button

                patterns: {
                    youtube: {
                        index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

                        id: 'v=', // String that splits URL in a two parts, second part should be %id%
                        // Or null - full URL will be returned
                        // Or a function that should return %id%, for example:
                        // id: function(url) { return 'parsed id'; }

                        src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe.
                    },

                },

                srcAction: 'iframe_src', // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".
            }
        });
    });
</script>
@endpush