@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
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
                </div>
            </div>
        </div>
    </div>
</section>
@endsection