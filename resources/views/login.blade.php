@extends('layouts.app')

@section('title', 'Login')

@section('content')
<section class="h-450px sm-h-400px top-space-margin page-title-big-typography cover-background pt-0 pb-0"
    style="background-image: url(images/movemax-slider-03.jpg)">
</section>

<section>
    <div class="container overlap-section overlap-section-three-fourth">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="bg-very-light-gray p-8 border-radius-10px">
                    <div class="row">
                        <div class="col-12 text-center mb-6">
                            <h2 class="text-dark-gray mb-0 fw-700 ls-minus-1px">Login</h2>
                        </div>
                    </div>
                    @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <p class="fw-bold">{{ session('error') }}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}" class="row contact-form-style-01">
                        @csrf
                        <div class="col-md-12 mb-20px">
                            <div class="position-relative form-group">
                                <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                <input class="form-control required" type="email" name="email"
                                    placeholder="Your email address*" value="{{ old('email') }}" required />
                            </div>
                            @error('email')
                            <span class="text-danger fw-bold p-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-20px">
                            <div class="position-relative form-group">
                                <span class="form-icon"><i class="bi bi-lock"></i></span>
                                <input class="form-control required" type="password" name="password"
                                    placeholder="Your password*" required />
                            </div>
                            @error('password')
                            <span class="text-danger fw-bold p-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button
                                class="btn btn-base-color btn-switch-text btn-medium left-icon btn-round-edge submit btn-box-shadow w-100"
                                type="submit">
                                <span>
                                    <span><i class="feather icon-feather-mail"></i></span>
                                    <span class="btn-double-text" data-text="Login">Login</span>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection