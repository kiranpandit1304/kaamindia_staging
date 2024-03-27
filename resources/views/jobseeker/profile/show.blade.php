@extends('jobseeker.layouts.master')

@push('form_style')
@include('jobseeker.layouts.partials.form_css')

<!-- css-cdn -->

@endpush

@section('style')
<!-- add style.css -->
<style>
    /* @media (max-width: 768px) {} */
</style>
@endsection

@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <div class="container-fluid py-4 pt-0 pe-5">

        <!-- edit profile section -->
        <div class="row my-3 align-items-center">
            <div class="section-title-02 my-2 ps-0">
                <h4>My Profile <span class="ms-2"><a href="{{route('jobseeker.profile')}}"><i class="fas fa-user-edit fw-bold text-warning"></i></a></span></h4><i class=""></i>
            </div>
            <section class="p-2" style="box-shadow: 0 0 15px -8px #1374ab; border-radius: 16px;">
                <div class="container-fluid p-3">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="user-dashboard-info-box">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-lg-3 col-5 col-md-3">
                                        <div class="cover-photo-contact text-center">
                                            <div class="cover-photo">
                                                <img src="{{ asset('assets/images/user.png')}}" class="w-50" alt="main_logo">
                                            </div>
                                            <h6 class="text-center">Manthan Rawat</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="table-responsive">
                                            <table class="table table-bordered border">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Candidate Phone</th>
                                                        <td>9889290880</td>
                                                        <th scope="row">Email Address</th>
                                                        <td>demo@gmail.com</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Date of Birth</th>
                                                        <td>02/07/1999</td>
                                                        <th scope="row">Qualification</th>
                                                        <td>MCA</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">City</th>
                                                        <td>Prayagraj</td>
                                                        <th scope="row">Job Profile</th>
                                                        <td>Front end Developer</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Skils</th>
                                                        <td>HTML,CSS,JS,JQUERY<br></td>
                                                        <th scope="row">Resume</th>
                                                        <td>abc.pdf</td>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </section>
        </div>
</main><br><br><br>
<!-- My Profile -->

@endSection

@push('js_scripts')

@include('layouts.partials.form_js')
<script src="{{ asset('assets/js/custom.js') }}"></script>


@endPush

@section('script')
<!-- scripts.js -->

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    $(function() {
        $("#datepicker").datepicker();
    });

    function hide() {
        var x = document.getElementById("sidenav-main");
        if (x.style.display === "none") {
            x.style.display = "block";

        } else {
            x.style.display = "none";
        }
    }

    function drop() {
        var x = document.getElementById("up");
        if (x.style.transform == "rotate(90deg)") {
            x.style.transform = "rotate(0deg)";
        } else {
            x.style.transform = "rotate(90deg)";
        }
    }
</script>


@endSection