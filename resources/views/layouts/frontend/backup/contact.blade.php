<!-- ======= Contact Section ======= -->
<section id="contact" class="contact bg-white">
  <div class="container py-5 my-2">
    <div class="row">
      <div class="col-lg-12 mb-5">
        <div class="section-title text-center">
          <h1>Contact Us</h1>
        </div>
      </div>
    </div>

    <div class="row" style="overflow-x: hidden">

      <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-in">
        <div class="info">
          <div class="address">
            <i class="icofont-google-map"></i>
            <h4>Workshop</h4>
            <p>Jaten, Teter, RT 02/01 Simo Boyolali Jawa Tengah 57377</p>
          </div>

          <div class="email">
            <i class="icofont-envelope"></i>
            <h4>Email</h4>
            <p>marketing@eonesia.id</p>
          </div>

          <div class="phone">
            <i class="icofont-phone"></i>
            <h4>Phone Number</h4>
            <p>08562699626</p>
          </div>
          <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBVrR0CpPqrVMYQuGhKmXFLjbnfU5119gM&q=Eonesia+Production,Pekalongan" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>

        </div>

      </div>

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-in">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Your Name</label>
              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Your Email</label>
              <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <label for="name">Message</label>
            <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Sectoion -->
@push('scripts')

@endpush