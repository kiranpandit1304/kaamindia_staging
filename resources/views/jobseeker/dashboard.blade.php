@extends('jobseeker.layouts.master')

@push('form_style')
@include('jobseeker.layouts.partials.form_css')

<!-- css-cdn -->

@endpush

@section('style')
<!-- add style.css -->
<style>
    .dashboard {
        text-align: center;
        padding-top: 6rem;
    }

    .btn-warning {
        background-color: #f25e20 !important;
        border-color: #f25e20 !important;
    }

    .my-profile-btn {
        /* text-align: center; */
        color: #fff;
        background-color: #f25e20;
        width: fit-content;
        margin: auto;
        border-radius: 8px;
        font-weight: 400;
        line-height: normal;
        display: block;
        font-size: larger;
        text-align: center;
    }

    .my-profile-btn:hover {
        background-color: #f25e20;
        color: #fff;
    }
</style>
@endsection

@section('content')
<div class="my-5 py-5">
    <div class="py-5">
        <h2 class="dashboard p-0">Dashboard Section </h2>
        <a href="{{ route('jobseeker.profile') }}" class="my-profile-btn px-3">
            My Profile
        </a>
    </div>
</div>
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