@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
  <div class="contact_map mt-45">
    <div class="map-area">
      <iframe class="map-size"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.693667617067!2d144.946279515845!3d-37.82064364221098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4cee0cec83%3A0xd019c5f69915a4a0!2sCollins%20St%2C%20West%20Melbourne%20VIC%203003%2C%20Australia!5e0!3m2!1sen!2sbd!4v1607512676761!5m2!1sen!2sbd">
      </iframe>
    </div>
  </div>

  <div class="contact_area">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="contact_message content">
            <h3>contact us</h3>
              <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human. qui sequitur mutationem consuetudium lectorum. Mirum est notare quam</p>
            <ul>
              <li><i class="fa fa-fax"></i>  Address : Your address goes here.</li>
              <li><i class="fa fa-phone"></i> <a href="tel:+0123456789">0123456789</a></li>
              <li><i class="fa fa-envelope-o"></i> <a href="mailto:demo@example.com">demo@example.com</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="contact_message form">
            <h3>Tell us your project</h3>
            <form id="contact-form" method="POST"  action="https://htmldemo.net/rusu/rusu/assets/mail.php">
                <p>
                    <label> Your Name (required)</label>
                    <input name="name" placeholder="Name *" type="text">
                </p>
                <p>
                    <label>  Your Email (required)</label>
                    <input name="email" placeholder="Email *" type="email">
                </p>
                <p>
                    <label>  Subject</label>
                    <input name="subject" placeholder="Subject *" type="text">
                </p>
                <div class="contact_textarea">
                    <label>  Your Message</label>
                    <textarea placeholder="Message *" name="message"  class="form-control2" ></textarea>
                </div>
                <button type="submit"> Send</button>
                <p class="form-messege"></p>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
