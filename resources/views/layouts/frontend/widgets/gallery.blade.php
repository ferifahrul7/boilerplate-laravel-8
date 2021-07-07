<!-- ======= Gallery Section ======= -->
<section id="gallery" class="portfolio bg-light mt-n2">
  <div class="container py-5 my-2" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-12 mb-5">
        <div class="section-title text-center">
          <h1>Gallery</h1>
          <p class="font-weight-bold">Check our gallery from the recent events</h2>
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center" id="magnific">
      @if($galleries->count() > 0)
      @foreach($galleries as $gallery)
      <div class="col-lg-3 col-md-4 m-3">
        <a href="{!! asset($gallery->gallery) !!}" data-tanggal="{!! tanggal($gallery->tanggal) !!}" data-title="{!! $gallery->judul !!}" data-caption="{!! $gallery->keterangan !!}">
          <img src="{{ asset($gallery->thumb_gallery) }}" class="zoom" style="max-width:800px">
        </a>
      </div>
      @endforeach
      @else

      <div class="col-lg-3 col-md-4 py-3">
        <div class="venue-gallery">
          <a href="{{ asset('img/venue-gallery/1.png') }}" class="venobox" data-gall="venue-gallery">
            <img src="{{ asset('img/venue-gallery/1.png') }}" alt="" class="img-fluid zoom">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 py-3">
        <div class="venue-gallery">
          <a href="{{ asset('img/venue-gallery/2.png') }}" class="venobox" data-gall="venue-gallery">
            <img src="{{ asset('img/venue-gallery/2.png') }}" alt="" class="img-fluid zoom">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 py-3">
        <div class="venue-gallery">
          <a href="{{ asset('img/venue-gallery/3.png') }}" class="venobox" data-gall="venue-gallery">
            <img src="{{ asset('img/venue-gallery/3.png') }}" alt="" class="img-fluid zoom">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 py-3">
        <div class="venue-gallery">
          <a href="{{ asset('img/venue-gallery/4.png') }}" class="venobox" data-gall="venue-gallery">
            <img src="{{ asset('img/venue-gallery/4.png') }}" alt="" class="img-fluid zoom">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 py-3">
        <div class="venue-gallery">
          <a href="{{ asset('img/venue-gallery/5.png') }}" class="venobox" data-gall="venue-gallery">
            <img src="{{ asset('img/venue-gallery/5.png') }}" alt="" class="img-fluid zoom">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 py-3">
        <div class="venue-gallery">
          <a href="{{ asset('img/venue-gallery/6.png') }}" class="venobox" data-gall="venue-gallery">
            <img src="{{ asset('img/venue-gallery/6.png') }}" alt="" class="img-fluid zoom">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 py-3">
        <div class="venue-gallery">
          <a href="{{ asset('img/venue-gallery/7.png') }}" class="venobox" data-gall="venue-gallery">
            <img src="{{ asset('img/venue-gallery/7.png') }}" alt="" class="img-fluid zoom">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 py-3">
        <div class="venue-gallery">
          <a href="{{ asset('img/venue-gallery/8.png') }}" class="venobox" data-gall="venue-gallery">
            <img src="{{ asset('img/venue-gallery/8.png') }}" alt="" class="img-fluid zoom">
          </a>
        </div>
      </div>

      @endif
    </div>
  </div>
</section><!-- End Gallery Section -->
@push('scripts')

<script>
  $('#magnific').magnificPopup({
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
    // other options
    overflowY: 'auto',
    tLoading: '', // remove text from preloader
    gallery: {
      enabled: true
    },
    image: {
      titleSrc: function(item) {
        var markup = '';
        markup += '<small class="float-right font-weight-bold">On ' + item.el.attr('data-tanggal') + '</small>';
        markup += '<h3>' + item.el.attr('data-title') + '</h3>';
        markup += '<p class="text-justify">' + item.el.attr('data-caption') + '</p>';

        return markup
      },
    },
    mainClass: 'mfp-with-zoom', // this class is for CSS animation below
    zoom: {
      enabled: true, // By default it's false, so don't forget to enable it
      duration: 300, // duration of the effect, in milliseconds
      easing: 'ease-in-out', // CSS transition easing function
      // The "opener" function should return the element from which popup will be zoomed in
      // and to which popup will be scaled down
      // By defailt it looks for an image tag:
      opener: function(openerElement) {
        // openerElement is the element on which popup was initialized, in this case its <a> tag
        // you don't need to add "opener" option if this code matches your needs, it's defailt one.
        return openerElement.is('img') ? openerElement : openerElement.find('img');
      }
    },
  });
</script>
@endpush