<footer class="footer  mt-3">

  <div class="container pb-4">
    <div class="row py-3 justify-content-center align-items-baseline">

      <div class="col-lg-3 col-md-6">
        <a class="" href="{{ route('home') }}">
          <img class="img-fluid w-75" src="{{ asset('assets/images/kaamindia-logo.png')}}" alt="logo">
        </a>
        <div class="footer-contact-info bg-holder mt-4" style="background-image: url('../../assets/images/google-map.png')">
          <h6 class="text-dark mb-4">Contact Us</h6>
          <ul class="list-unstyled mb-0">
            <li> <i class="fas fa-map-marker-alt text-primary"></i><span>XEAM Tower,E-202, Phase- 8-B, Industrial Area, Mohali, Chandigarh (Punjab)</span> </li>
            <li> <i class="fas fa-mobile-alt text-primary"></i><span>(+91) 172-4360000</span> </li>
            <li> <i class="far fa-envelope text-primary"></i><span>support@jobber.demo</span> </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="footer-link">
          <ul class="list-unstyled">
            <li><a href="{{ route('home') }}" class="text-dark">Home</a></li>
            <li><a href="{{ route('jobList') }}" class="text-dark">Jobs</a></li>
            <li class=""><a class="text-dark" href="{{ route('jobseeker.profile') }}">My Profile</a></li>
            <li class=""><a class="text-dark" href="{{ route('jobseeker.saveJob') }}">Saved Jobs</a></li>
            <li class=""><a class="text-dark" href="{{ route('jobseeker.appliedJob') }}">Applied Jobs</a></li>
            <li class=""><a class="pwd-chg text-dark" href="{{ route('jobseeker.changePassword') }}">Change Password</a></li>

          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
        <div class="footer-link">
          <ul class="list-unstyled">
            <li><a href="#" class="text-dark">Help center</a></li>
            <li><a href="#" class="text-dark">Summons/Notices</a></li>
            <li><a href="#" class="text-dark">Report issue</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
        <div class="footer-link">
          <ul class="list-unstyled">
            <li><a href="#" class="text-dark">Privacy policy</a></li>
            <li><a href="#" class="text-dark">Terms & conditions</a></li>
            <li><a href="#" class="text-dark">Fraud alert</a></li>
            <li><a href="#" class="text-dark"> Trust & safety</a></li>

          </ul>
        </div>
      </div>


    </div>
  </div>
  </div>
</footer>
<!--=================================
Back To Top-->
<div id="back-to-top" class="back-to-top">
  <i class="fas fa-angle-up"></i>
</div>
<!--=================================
Back To Top-->

@section('login-script')

<script src="{{ asset('assets/dashboard/js/sweetalert.min.js') }}"></script>

<script>
  $('.js-example-placeholder-single').each(function() {

    $(this).select2({
      dropdownParent: $(this).parent(),
    }).on('change', function() {
      $(this).valid();
    });
  })
</script>
@endsection