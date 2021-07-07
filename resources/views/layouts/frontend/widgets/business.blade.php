<div class="col-lg-4 col-md-6">
  <div class="footer-info">
    <h4>Strategic Business Alliance</h4>
    <div class="row mb-2 pb-4 text-center">
      @if(empty($business))
      <img src="{{ asset('img/profile/logo-new.png') }}" alt="" class="img-fluid" style="max-height:100px;">
      <img src="{{ asset('img/profile/logo-new.png') }}" alt="" class="img-fluid" style="max-height:100px;">
      <img src="{{ asset('img/profile/logo-new.png') }}" alt="" class="img-fluid" style="max-height:100px;">
      <img src="{{ asset('img/profile/logo-new.png') }}" alt="" class="img-fluid" style="max-height:100px;">
      @else
      @foreach($business as $b)
      <div class="col-6 col-lg-4 col-md-4 col-sm-6">
        <img src="{{ asset($b->thumb_business) }}" alt="" class="img-fluid" style="max-height:100px;">
      </div>
      @endforeach
      @endif
    </div>
  </div>
</div>