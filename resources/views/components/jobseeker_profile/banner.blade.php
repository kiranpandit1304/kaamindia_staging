<section class="header-inner header-inner-big bg-img bg-holder text-white overflow-none" style="background-image: url('https://kaamindia.xeambpo.com/assets/images/bg1.png')">
    <div class="container">
        <div class="row align-items-center search-banner justify-content-center w-100">
            <h3 class="text-white text-center">Find The Perfect Job</h3>
            <div class="col-12">
                <div class="job-search-field">
                    <div class="job-search-item">
                        <form id="jobSearch" class="form row align-items-center">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <div class="my-3">
                                        <input type="text" value="web dev" id="searchJob" class="job-search-height form-control border" name="job_title" placeholder="Job title, skill or company">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <div class="my-3">
                                        <input type="text" class="job-search-height border form-control location-input" name="job_location" placeholder="Town, city or postcode">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-1">
                                <div class="form-group form-action text-start">
                                    <button type="submit" class="text-white btn btn-warning btn-sm mt-0"><i class="search-btn fas fa-search fs-6 p-1"></i>Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@section('banner-script')
<script>
    $(document).ready(function() {
        $.validator.addMethod("alphaWithSpaceAndDot", function(value, element) {
            return this.optional(element) || value == value.match(/^[a-zA-Z\s.]+$/);
        }, function(params, element) {
            return "Numbers not allowed";
        });


        $("#jobSearch").validate({
            rules: {
                job_title: {
                    required: true,
                    alphaWithSpaceAndDot: true
                },
            },
            messages: {
                job_title: {
                    required: "Enter job title"
                },
            }
        });

        $('#clearButton').click(function() {
            $('#searchJob').val('');
            $("#clearSearchBtn").css("display", "none");
        });

        if ($("#searchJob").val()) {
            $("#clearSearchBtn").css("display", "block");
        } else {
            $("#clearSearchBtn").css("display", "none");
        }


    });
</script>
@endsection