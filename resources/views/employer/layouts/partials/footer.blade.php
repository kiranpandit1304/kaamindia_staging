<footer class="footer py-3 bottom-0 position-fixed w-100 blue-bg-clr">
  <div class="container-fluid">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6 mb-lg-0">
        <div class="copyright text-center text-sm text-white text-lg-start">
          Copyright © <script>
            document.write(new Date().getFullYear())
          </script>,
          <!-- made with <i class="fa fa-heart"></i>  -->
          by
          <a href="#" class="fw-bold orange-clr" target="_blank">KaamIndia. </a>
          All Rights Reserved.
          <!-- for a better web. -->
        </div>
      </div>
      <!-- <div class="col-lg-6">
        <ul class="nav nav-footer">
          <li class="nav-item">
            <a href="#" class="nav-link text-white" target="_blank">Creative Tim</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white" target="_blank">About Us</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white" target="_blank">Blog</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link pe-0 text-white" target="_blank">License</a>
          </li>
        </ul>
      </div> -->
    </div>
  </div>
</footer>

<!-- create Company Model  -->
<div id="simpleModal" class="modal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shad">
      <div class="modal-header">
        <h5 class="modal-title">Welcome To KaamIndia</h5>
      </div>
      <div class="modal-body">
        <form method="post" action="{{route('employer.company.store')}}">
          @csrf
          <input type="hidden" name="form_type" value="company_create">
          <div class="form-group mb-3">
            <div class="position-relative">
              <span class="position-absolute start-0 top-50 ps-3">
                <i class=" fas fa-user opacity-10 pt-2"></i>
              </span>
              <label class="form-label">Your Company Name<em class="text-danger">*</em></label>
              <input type="text" onkeypress="return RestrictSpace()" name="name" class="ps-5 border form-control" data-parsley-trigger="keyup" data-parsley-pattern="^[a-zA-Z]+$" placeholder="Full Name" data-parsley-error-message="This Field Is Required" required>
              @if ($errors->has('name'))
              <span class="text-danger">{{ $errors->first('name') }}</span>
              @endif
            </div>
          </div>

          <div class="form-group  mb-3">
            <div class="position-relative">
              <span class="position-absolute start-0 top-50 ps-3">
                <i class="fas fa-envelope opacity-10 pt-2"></i>
              </span>
              <label class="form-label">Email Address<em class="text-danger">*</em></label>
              <input type="email" name="email" class="ps-5 border form-control" value="" data-parsley-type="email" data-parsley-error-message="Please enter email" placeholder="Email" data-parsley-trigger="keyup" required>
              @if ($errors->has('email'))
              <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>
          </div>
          <button type="submit" id="company_create" value="company_create" class="btn text-white btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- END create company model -->