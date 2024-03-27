@extends('layouts.master')

@push('form-style')
@include('layouts.partials.form_css')
@endpush

@section('style')
@endsection

@section('content')
<section class="space-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-12 user-dashboard-info-box">
                <div class="login-register">
                    <div class="section-title text-center">
                        <h4>Email verified successfull</h4>
                        <p class="mt-0">Welcome to the kaamindia App</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection