@if (session()->has('flash_notification.message'))
<div class="row center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="alert alert-{{ session()->get('flash_notification.level') }}">
            <span class="white-text center">{!! session()->get('flash_notification.message') !!}</span>
        </div>
    </div>
</div>
@endif

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(10000, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 4000);
</script>