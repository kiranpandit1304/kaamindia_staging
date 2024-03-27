@extends('employer.layouts.master')

@push('style-scripts')
@include('employer.layouts.partials.form_css')

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="{{ asset('assets/plugins/summernote/summernote-lite.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/dashboard/css/token.css') }}" rel="stylesheet" />

<!-- css-cdn -->
@endpush

@section('style')
<!-- add style.css -->
<style>
  /* Sweet alert css starts */
  .swal-button--danger:not([disabled]):hover {
    background-color: #1374ab;
  }

  .swal-button--danger {
    background-color: #1374ab;
  }

  .swal-button--cancel {
    color: #fff;
    background-color: #f25e20;
  }

  .swal-button--cancel:not([disabled]):hover {
    background-color: #f25e20;
  }

  .swal-icon--warning {
    border-color: #f25e20 !important;

  }

  .swal-button:not([disabled]):hover {
    background-color: #1374ab;
  }

  .swal-button {
    background-color: #1374ab;

  }

  .swal-button--cancel:focus {
    box-shadow: none !important;
  }

  .swal-icon--warning__body,
  .swal-icon--warning__dot {
    position: absolute;
    left: 50%;
    background-color: #f25e20;
  }

  .swal-button:focus {
    box-shadow: none !important;
  }

  .swal-icon--success__ring {
    border: 4px solid hsl(202deg 80% 37% / 20%);
  }

  .swal-icon--success__line {
    background-color: #1374ab;

  }

  .swal-icon--success {
    border-color: #1374ab;
  }

  .swal-overlay--show-modal {
    pointer-events: none;
  }

  /* Sweet alert css ends */

  .logo-file {
    font-size: 13px;
    border-radius: 7px;
    cursor: pointer;
    font-weight: 400;
  }

  .iconRightBorder {
    border-right: 1px solid #dee2e6;
    padding-right: 0.5rem;
  }

  .select2-container--default .select2-selection--single {
    border: 1px solid #dee2e6 !important;
  }

  /* Industry border -- */
  ul.token-input-list-kaamIndia {
    border: 1px solid #dee2e6 !important;
  }
</style>
@endsection

@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-0 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 ps-4 mx-2">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-5 ">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-dark " aria-current="page">Company</li>
        </ol>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 me-md-0" id="navbar">
        <ul class="ms-md-auto navbar-nav justify-content-end">
          <li class="nav-item hidden-bar ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav" onclick="hide()">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--=================================Register -->
  <section class="mb-5">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-12 px-3">
          <div class="login-register user-dashboard-info-box box p-3 my-4 card-shadow">
            <div class="section-title d-flex flex-wrap justify-content-center my-3">
              <h4 class="text-center pe-sm-3">Fill the information about the company</h4>
              <span><a class="btn btn-primary p-3 pt-1 pb-1" href="{{route('employer.company.show')}}"><i class="fas fa-eye eye-icon-size pt-1"></i></a></span>
            </div>
            <form method="post" action="{{route('employer.company.edit',isset($company) ? $company->id : '')}}" class="mt-5" id="add_company_form" data-toggle="validator" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="row justify-content-center">
                <div class="row">
                  <div class="col-lg-6 box p-2">
                    <h4 class="">Basic Information</h4>
                    <div class="row">
                      <div class="my-3 col-md-12">
                        <div class="form-group mb-3">
                          <div class="position-relative">
                            <span class="position-absolute start-0 top-50 ps-3 iconRightBorder">
                              <i class=" fas fa-building opacity-10 pt-2"></i>
                            </span>
                            <label class="form-label ms-0 " for="company_name">Company Name <em class="text-danger">*</em></label>
                            <input type="text" name="name" id="name" value="{{isset($company) ? $company->name : ''}}" placeholder="Company name" class="ps-5 border form-control" required>
                            <p id="name_err" class="position-absolute"></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3 col-md-12">
                      <label class="form-label ms-0 " for="about_company">About company <em class="text-danger">*</em></label>
                      <textarea id="about_content" required="required" data-msg="Enter about company" name="about" class="form-control summernote">{{isset($company) ? $company->about : ''}}</textarea>
                      <p id="about_err"></p>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <div class="form-group mb-3">
                          <div class="position-relative">
                            <span class="position-absolute start-0 top-50 ps-3 iconRightBorder">
                              <i class=" fas fa-building opacity-10 pt-2"></i>
                            </span>
                            <label class="form-label ms-0" for="state">Company Size<em class="text-danger">*</em></label>
                            <input type="number" min="1" value="{{isset($company) ? $company->company_size : ''}}" class="ps-5 form-control border" name="company_size">
                            <p id="company_size_err" class="position-absolute"></p>
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-6 mb-3 datetimepickers">
                        <div class="form-group mb-3">
                          <div class="position-relative">
                            <span class="position-absolute start-0 top-50 ps-3 iconRightBorder">
                              <i class="fas fa-calendar-alt opacity-10 pt-2"></i>
                            </span>
                            <label class="form-label ms-0">Incorporated in<em class="text-danger">*</em></label>
                            <input type="text" value="{{isset($company) ? $company->established_at : ''}}" class="ps-5 form-control border" id="start" readonly="true" name="established_at">
                            <p id="established_at_err" class="position-absolute"></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <div class="form-group mb-3">
                          <div class="position-relative">
                            <span class="position-absolute start-0 top-50 ps-3 iconRightBorder">
                              <i class=" fas fa-building opacity-10 pt-2"></i>
                            </span>
                            <label class="form-label ms-0" for="state">Industry<em class="text-danger">*</em></label>
                            <textarea name="industry" id="token" class="w-100 ps-5 outline-0 border form-control" required placeholder="Full Industry">
                          </textarea>
                            @if ($errors->has('industry'))
                            <span class="text-danger position-absolute">{{ $errors->first('industry') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <div class="form-group mb-3">
                          <div class="position-relative">
                            <span class="position-absolute start-0 top-50 ps-3 iconRightBorder">
                              <i class="fa fa-file opacity-10 pt-2"></i>
                            </span>
                            <label class="form-label ms-0 " for="company">GST Number</label>
                            <input type="text" name="gst_number" value="{{isset($company) ? $company->gst_number : ''}}" onkeypress="return /[0-9]/i.test(event.key)" id="gst" class="border ps-5 form-control" placeholder="Gst number">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 box p-2">
                    <h4 class="">Contact Details</h4>
                    <div class="row">
                      <div class="my-3 col-md-6">
                        <div class="form-group mb-3">
                          <div class="position-relative">
                            <span class="position-absolute start-0 top-50 ps-3 iconRightBorder">
                              <i class="fas fa-envelope opacity-10 pt-2"></i>
                            </span>
                            <label class="form-label ms-0" for="email">Email Address<em class="text-danger">*</em></label>
                            <input type="email" name="email" id="email" value="{{isset($company) ? $company->email : ''}}" class="border ps-5 form-control" required placeholder="Email">
                            <p id="email_err" class="position-absolute"></p>
                          </div>
                        </div>
                      </div>
                      <div class="my-3 col-md-6">
                        <div class="form-group mb-3">
                          <div class="position-relative">
                            <span class="position-absolute start-0 top-50 ps-3 iconRightBorder">
                              <i class="fas fa-globe-americas opacity-10 pt-2"></i>
                            </span>
                            <label class="form-label ms-0" for="website">Website</label>
                            <input type="url" pattern="^(http(s)?:\/\/)+[\w\-\._~:\/?#[\]@!\$&'\(\)\*\+,;=.]+$" name="website" id="website" value="{{isset($company) ? $company->website : ''}}" class="border ps-5 form-control" required placeholder="Website">
                          </div>
                        </div>
                      </div>
                      <div class="mb-3 col-md-6">
                        <div class="form-group mb-3">
                          <div class="position-relative">
                            <span class="position-absolute start-0 top-50 ps-3 iconRightBorder">
                              <i class="fas fa-phone-alt opacity-10 pt-2"></i>
                            </span>
                            <label class="form-label ms-0">Phone<em class="text-danger">*</em></label>
                            <input type="text" name="phone_number" value="{{isset($company) ? $company->phone_number : ''}}" minlength="10" maxlength="10" onkeypress="return /[0-9]/i.test(event.key)" placeholder="+91" class="ps-5 border form-control" required>
                            <p id="phone_number_err" class="position-absolute"></p>
                          </div>
                        </div>
                      </div>
                      <div class="mb-3 col-md-6">
                        <div class="form-group mb-3">
                          <div class="position-relative">
                            <span class="position-absolute start-0 top-50 ps-3 iconRightBorder">
                              <img src="{{ asset('assets/dashboard/img/tel.png')}}" class="landline-icon navbar-brand-img opacity-10" alt="main_logo">
                            </span>
                            <label class="form-label ms-0">Landline</label>
                            <input type="text" name="landline_number" maxlength="11" value="{{isset($company) ? $company->landline_number : ''}}" onkeypress="return /[0-9]/i.test(event.key)" placeholder="Landline number" class="ps-5 border form-control">
                          </div>
                        </div>
                      </div>
                      @if($company)
                      @php $link = json_decode($company->social_links); @endphp
                      @endif
                      <div class="mb-3 col-md-6">
                        <div class="form-group mb-3">
                          <div class="position-relative">
                            <span class="position-absolute start-0 top-50 ps-2 iconRightBorder">
                              <i class="fa fa-facebook pt-2 ps-2"></i>
                            </span>
                            <label class="form-label ms-0">Facebook</label>
                            <input type="url" pattern="^(http(s)?:\/\/)+[\w\-\._~:\/?#[\]@!\$&'\(\)\*\+,;=.]+$" name="facebook_link" value="{{isset($link->facebook) ? $link->facebook : ''}}" class="border form-control ps-5" placeholder="www.facebook.com/">
                          </div>
                        </div>
                      </div>
                      <div class="mb-3 col-md-6">
                        <div class="form-group mb-3">
                          <div class="position-relative">
                            <span class="position-absolute start-0 top-50 ps-2 iconRightBorder">
                              <i class="fa fa-twitter pt-2 ps-2"></i>
                            </span>
                            <label class="form-label ms-0">Twitter</label>
                            <input type="url" pattern="^(http(s)?:\/\/)+[\w\-\._~:\/?#[\]@!\$&'\(\)\*\+,;=.]+$" name="twitter_link" value="{{isset($link->twitter) ? $link->twitter : ''}}" class="border form-control ps-5" placeholder="www.twitter.com/">
                          </div>
                        </div>
                      </div>
                      <div class="mb-3 col-md-6">
                        <div class="form-group mb-3">
                          <div class="position-relative">
                            <span class="position-absolute start-0 top-50 ps-2 iconRightBorder">
                              <i class="fa fa-linkedin pt-2 ps-2"></i>
                            </span>
                            <label class="form-label ms-0">Linkedin</label>
                            <input type="url" pattern="^(http(s)?:\/\/)+[\w\-\._~:\/?#[\]@!\$&'\(\)\*\+,;=.]+$" name="linkdin_link" value="{{isset($link->linkdin) ? $link->linkdin : ''}}" class="border form-control ps-5" placeholder="www.linkedin.com/">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label class="form-label ms-1" for="logo">Logo</label>
                        <label class="form-control border w-100 pt-2 ps-3 logo-file ">Click to upload a file
                          <div class="form-group mb-3">
                            <div class="position-relative">
                              <span class="position-absolute end-0  pe-3 cloud-icon">
                                <i class="fa fa-cloud-upload opacity-10"></i>
                              </span>
                            </div>
                          </div>
                          <input type="hidden" name="old_logo" value="">
                          <input type="file" name="logo" class="multi form-control border d-none with-preview" id="logo" data-maxfile="1024" accept=".jpg, .jpeg, .png, .webp, .svg" />
                        </label>
                        <div class="alert ps-2 ms-1 w-100 mb-3 mt-3 text-dark" id="logoList">
                          @if(isset($company->logo))
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row align-items-center px-2">
                  @if(isset($company->companyAddress))
                  @foreach ($company->companyAddress as $value)
                  <h4>Address</h4>
                  <div class="col-md-6 mt-2">
                    <div class="row">
                      <div class="col-md-12 mb-3">
                        <label class="form-label ms-0" for="state">State<em class="text-danger">*</em></label>
                        <select class="js-example-basic-single ps-5 form-control border" name="state_id" id="state">
                          @foreach($states as $state)
                          <option value="{{ $value->state->id == $state->id ? $state->id:$state->id }}" {{$value->state->id == $state->id ? 'selected':'' }}>{{ $value->state->id == $state->id ? $state->name:$state->name }} </option>
                          @endforeach
                        </select>
                        <p id="state_id_err" class="position-absolute end-0"></p>
                      </div>
                      <div class="col-md-12 mb-3">
                        <label class="form-label ms-0" for="state">City<em class="text-danger">*</em></label>
                        <select class="js-example-basic-single form-control border ps-5 filter-city" name="city_id">
                          <option value="{{ $value->city->id }}">{{$value->city->name}}</option>
                          <!-- option use Ajax filter -->
                        </select>
                        <p id="city_id_err" class="position-absolute end-0"></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label ms-0" for="state">Full Address<em class="text-danger">*</em></label>
                    <textarea name="full_address" required value="{{isset($company) ? $value->full_address : ''}}" id="" class="add-height ps-3 w-100  border form-control outline-0" placeholder="Address">{{$value->full_address}}</textarea>
                    <p id="full_address_err" class="position-absolute "></p>
                  </div>
                  @endforeach
                  @endif
                  <!-- Company Address not exist -->
                  @if(!$company || $company->companyAddress->isEmpty())
                  <h4>Address</h4>
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-md-12 my-3">
                        <div class="position-relative">
                          <span class="position-absolute start-0 top-50 ps-2">
                          </span>
                          <label class="form-label ms-0" for="state">State<em class="text-danger">*</em></label>
                          <select class="js-example-basic-single ps-5 form-control border" name="state_id" id="state">
                            @foreach($states as $state)
                            <option value="{{ $state->id}}">{{ $state->name}} </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12 my-3">
                        <div class="position-relative">
                          <span class="position-absolute start-0 top-50 ps-2">
                          </span>
                          <label class="form-label ms-0" for="state">City<em class="text-danger">*</em></label>
                          <select class="js-example-basic-single form-control border ps-5 filter-city" name="city_id">
                            <!-- option use Ajax filter -->
                          </select>
                          @if ($errors->has('city_id'))
                          <span class="text-danger">{{ $errors->first('city_id') }}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label ms-0" for="state">Full Address<em class="text-danger">*</em></label>
                    <textarea name="full_address" class="ps-3 w-100 add-height border form-control outline-0" placeholder="Address" required></textarea>
                  </div>
                  @endif
                  <!-- END Company Address not exist -->
                </div>
                <div class="row my-3">
                  <div class="col ps-1">
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                  </div>
                </div>
                <!-- Get All Industry For suggetion -->
                <?php
                // selected industry
                if (isset($company->industries)) {
                  foreach ($company->industries as $industryData) {
                    $selectedIndustry[] = [
                      'id' => $industryData->id,
                      'name' => $industryData->name,
                    ];
                  }
                }
                ?>
                <!-- End Get All Industry For suggetion -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('employer.layouts.partials.footer')
</main>
<!--=================================Register -->
@endsection

@push('js-scripts')
<!-- JS script links only starts here -->
@include('employer.layouts.partials.form_js')

<!-- Template Scripts (Do not remove)-->
<script src="{{asset('assets/plugins/summernote/summernote-lite.min.js')}}"></script>
<script src="{{ asset('assets/dashboard/js/jquery.tokeninput.js') }}"></script>
<script src="{{ asset('assets/dashboard/js/sweetalert2@9.js') }}"></script>
<script src="{{ asset('assets/dashboard/js/jquery.MultiFile.js') }}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<!-- JS script links only ends here -->
<!-- Custom script links only starts here -->
@endpush


@section('script')
<script>
  $(document).ready(function() {
    $("#add_company_form").validate({
      // ignore: ':hidden:not(.summernote),.note-editable.card-block',

      rules: {
        name: {
          required: true
        },
        about: {
          required: true,
        },
        company_size: {
          required: true
        },
        established_at: {
          required: true,
        },
        industry: {
          required: true,
        },
        email: {
          required: true,
        },

        phone_number: {
          required: true,
        },
        state_id: {
          required: true,
        },
        city_id: {
          required: true,
        },
        full_address: {
          required: true,
        },

      },
      errorPlacement: function(error, element) {
        var name = $(element).attr("name");
        error.appendTo($("#" + name + "_err"));
      },
      messages: {
        name: {
          required: "Pleae enter company name"
        },
        about: {
          required: "Please enter about company",
        },
        company_size: {
          required: "Please enter company size"
        },
        established_at: {
          required: "Please select date"
        },
        industry: {
          required: "Please selec industry"
        },

        email: {
          required: "Please enter email"
        },
        phone_number: {
          required: "Please enter phone number"
        },
        company_state_idsize: {
          required: "Please select state"
        },
        city_id: {
          required: "Please select city"
        },
        full_address: {
          required: "Please enter full address"
        },
      }
    });
  });
</script>
<script>
  $(document).ready(function() {
    $("#about_content").summernote({
      styleWithSpan: false,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        ['fontname'],
        ['color', ['color']],
        ['para', ['ul', 'ol']]
        ['table', ['table']],
        ['paragraph'],
        ['ol'],
        ['ul'],
        ['table'],
        ['insert', ['link']],
      ],

      height: 150, // set editor height
      callbacks: {
        onChange: function(contents, $editable) {
          summernoteElement.val(summernoteElement.summernote('isEmpty') ? "" : contents);
          summernoteValidator.element(summernoteElement);
        }
      }
    });
    $('.dropdown-toggle').dropdown();
  });


  $(function() {
    $("#start").datepicker({
      maxDate: "now"
    });
  });

  // city filter by state
  $(document).on('change', '#state', function() {
    let state_id = $(this).val();
    // alert(state_id);
    $.ajax({
      type: "GET",
      url: "{{route('employer.company.filterCity')}}",
      data: {
        'state_id': state_id
      },
      success: function(data) {
        $(".filter-city").html(data);
      }
    });

  });
  // end city filter by state

  // show model create company
  $(document).ready(function() {
    var companyEmail = $('#email').val();
    if (!companyEmail) {
      $('#simpleModal').show()
      $('#simpleModal').modal({
        backdrop: 'static',
        keyboard: true,
        show: true
      });
    }
  });

  //logo

  $("#logo").MultiFile({
    list: "#logoList",
    error: function(s) {
      if (typeof console != "undefined") console.log(s);
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: s,
      });
    },
  });

  $(document).ready(function() {
    $('.js-example-basic-single').select2();
  });

  $(document).ready(function() {
    // $('#add_company_form').parsley();
    $('#employer_registration_form').parsley();

    $('#employer_role').on('change', function() {
      if ($(this).val() === 'Company') {
        $('#employer_industry_div').removeClass('d-none');
        $('#employer_industry').prop('required', true);
      } else {
        $('#employer_industry_div').find('select').val('').trigger('change');
        $('#employer_industry').prop('required', false);
        $('#employer_industry_div').addClass('d-none');
      }
    });

  });

  $("#logo").change(function() {
    if (fileSizeValidate(this)) {}
  });

  var maxSize = '200';

  function fileSizeValidate(fdata) {
    if (fdata.files && fdata.files[0]) {
      var fsize = fdata.files[0].size / 200;
      if (fsize > maxSize) {
        error.innerHTML = "<span style='color: red;'>" +
          "Please choose the file less then 200kb</span>"
        document.getElementById('logo').value = '';
        return false;
      } else {
        return true;
      }
    }
  }

  // Select industry token -->
  $(function() {
    var allIndustry = <?php echo json_encode($industryes); ?>;
    $('#token').tokenInput(
      allIndustry, {
        <?php if (isset($selectedIndustry)) { ?>
          prePopulate: <?php echo json_encode($selectedIndustry); ?>,
        <?php } ?>
        theme: "kaamIndia",
        hintText: "Please Select Industry ?",
        noResultsText: "Nothin' found.",
        searchingText: "industry...",
        preventDuplicates: true,
        onAdd: function(item) {
          sync(this.tokenInput("get"));
        },
        onDelete: function(item) {
          sync(this.tokenInput("get"));
        },
      });
  });
</script>

@endsection
<!-- Custom script links only ends here -->