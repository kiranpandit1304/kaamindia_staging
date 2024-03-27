@section('resume-style')
<style>
    /* Uploading Resume CSS */

    .main-wrapper {
        max-width: 1170px;
        margin: 0 auto;
        text-align: center;
    }

    .upload-main-wrapper {
        width: 220px;
        margin: 0 auto;
    }

    #file-upload-name {
        margin: 4px 0 0 0;
        font-size: 12px;
    }

    .upload-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        cursor: pointer;
        background-color: #f25e20;
        padding: 22px 10px;
        border-radius: 10px;
        overflow: hidden;
        transition: 0.2s linear all;
        color: #ffffff;
    }

    .upload-wrapper input[type="file"] {
        width: 100%;
        position: absolute;
        left: 0;
        right: 0;
        opacity: 0;
        top: 0;
        bottom: 0;
        cursor: pointer;
        z-index: 1;
    }

    /* .upload-wrapper>svg {
        width: 50px;
        height: auto;
        cursor: pointer;
    }

    .upload-wrapper.success>svg {
        transform: translateX(-200px);
    } */

    /* .upload-wrapper.uploaded {
        transition: 0.2s linear all;
        width: 60px;
        border-radius: 50%;
        height: 60px;
        text-align: center;
        
    } */

    .upload-wrapper .file-upload-text {
        position: absolute;
        opacity: 1;
        visibility: visible;
        transition: 0.2s linear all;
    }

    .upload-wrapper.uploaded .file-upload-text {
        text-indent: -999px;
        margin: 0;
    }

    .file-success-text {
        opacity: 0;
        transition: 0.2s linear all;
        visibility: hidden;
        transform: translateX(200px);
        position: absolute;
        left: 0;
        right: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .file-success-text svg {
        width: 25px;
        height: auto;
    }

    .file-success-text span {
        margin-left: 15px;
    }

    .upload-wrapper.success .file-success-text {
        opacity: 1;
        visibility: visible;
        transform: none;
    }

    .upload-wrapper.success.uploaded .file-success-text {
        opacity: 1;
        visibility: visible;
        transform: none;
    }

    .upload-wrapper.success.uploaded .file-success-text span {
        display: none;
    }

    .upload-wrapper .file-success-text circle {
        stroke-dasharray: 380;
        stroke-dashoffset: 380;
        transition: 1s linear all;
        transition-delay: 0.96s;
    }

    .upload-wrapper.success .file-success-text circle {
        stroke-dashoffset: 0;
    }

    .upload-wrapper .file-success-text polyline {
        stroke-dasharray: 380;
        stroke-dashoffset: 380;
        transition: 1s linear all;
        transition-delay: 1s;
    }

    .upload-wrapper.success .file-success-text polyline {
        stroke-dashoffset: 0;
    }

    .upload-wrapper.success .file-upload-text {
        -webkit-animation-name: bounceOutLeft;
        animation-name: bounceOutLeft;
        -webkit-animation-duration: 0.2s;
        animation-duration: 0.2s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    @-webkit-keyframes bounceOutLeft {
        20% {
            opacity: 1;
            -webkit-transform: translate3d(20px, 0, 0);
            transform: translate3d(20px, 0, 0);
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0);
        }
    }

    @keyframes bounceOutLeft {
        20% {
            opacity: 1;
            -webkit-transform: translate3d(20px, 0, 0);
            transform: translate3d(20px, 0, 0);
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0);
        }
    }
</style>
@endsection()

<div class="user-dashboard-info-box">
    <div class="row ">
        <div class="col-lg-12">
            <h4 class="fw-normal">Resume</h4>
            <p> Resume is the most important documents recruiter look for. Recruiters generally do not look at profiles without resumes. </p>
            <div class="text-end resumeclass">
                <form action="abc" method="POST" id="download">
                    <div>
                            <a href="<?php echo asset('../storage/app/public/assets/photo/jobseeker/') .'/'.Auth::guard("jobseeker")->user()->resume ?>" id="downloadbtn" target="_blank" class="text-primary">Download <i class="fa fa-download"></i></a>
                    </div>
                </form>
            </div>

            <div class="text-end resumeclass">
                <form action="abc" method="POST">
                    <div>
                            <a href="#" class="text-warning" id="delete"> Delete <i class="fa fa-trash"></i></a>
                    </div>
                </form>
            </div>

            <div class="main-wrapper my-3">
                <div class="upload-main-wrapper">
                    <div class="upload-wrapper">
                        <input type="file" id="upload-file" accept=".pdf,.docx" />
                        <span class="file-upload-text">Upload File</span>
                        <div class="file-success-text">
                            <svg version="1.1" id="check" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" xml:space="preserve">
                                <circle style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-miterlimit:10;" cx="49.799" cy="49.746" r="44.757" />
                                <polyline style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="
                    27.114,51 41.402,65.288 72.485,34.205 " />
                            </svg> <span>Upload File</span>
                        </div>
                    </div>
                    <p id="file-upload-name" class="fw-light text-start"></p>

                </div>
            </div>
            <p class="text-center">Files Supported: PDF, DOC , DOCX</p>
            <!-- </div> -->

        </div>
    </div>
</div>

@section('resume-script')

<script>
    
    $(document).ready(function() {
        @if(Auth::guard("jobseeker")->user()->resume==null || Auth::guard("jobseeker")->user()->resume=='')
        $(".resumeclass").hide();
        @endif
        $('#upload-file').change(function() {
            if (this.files[0].size > 2200000) {
                $('#file-upload-name').html("File is too big! maximum 2mb size supported").css("color", "red");
                this.value = " ";
            } else {
                $('#file-upload-name').html(this.value).css("color", "black");;
            };

            let filename = $(this).val().split("\\").pop();
            $('#file-upload-name').html(filename).append(" :- Uploaded on Apr 27, 2023");

            if (filename != "") {
                var fd = new FormData();
                fd.append('update','update');
                // Append data
                var files = $('#upload-file')[0].files;
                if(files.length > 0)
                {
                    fd.append('resume',files[0]);
                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
                $.ajax({
                    url: "{{route('jobseeker.saveResume')}}",
                    type: "POST",
                    data:fd,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        var result = JSON.parse(response);
                        if (result.success) {                    
                            Swal.fire({
                                icon: 'success',
                                title: result.message
                            });
                        }else{
                            Swal.fire({
                                icon: 'error',
                                title: 'Something went wrong'
                            });
                        }
                        console.log('result',result);
                        $('#downloadbtn').attr('href',"{{ asset('../storage/app/public/assets/photo/jobseeker/') .'/' }}"+result.jobseeker.resume);
                        $(".resumeclass").show();
                    },
                    error: function(xhr, status, error) {}
                });
                // var fileExtension = ['jpeg', 'jpg'];
                // if ($.inArray($(this).val().toLowerCase(), fileExtension) == -1) {
                //     $('#file-upload-name').html(this.value);
                //     $('#file-upload-name').html("Only '.jpeg','.jpg' formats are allowed.");
                // } else {
                //     $('#file-upload-name').html(this.value);
                // }
                setTimeout(function() {
                    $('.upload-wrapper').addClass("uploaded");
                }, 600);
                setTimeout(function() {
                    $('.upload-wrapper').removeClass("uploaded");
                    $('.upload-wrapper').addClass("success");
                }, 1600);
            }

        });
        $("#delete").click(function() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ route('jobseeker.deleteResume') }}",
                        type: "GET",
                        success: function(result) {
                            var data = JSON.parse(result);
                            if (data.success) {
                                Swal.fire('Deleted!', 'Your resume has been deleted.', 'success' )
                            }
                            $(".resumeclass").hide();
                            $("#file-upload-name").html('');
                        },
                        error: function(xhr, status, error) {}
                    });
                }
            })
        });
    });
</script>
@endsection