@extends('layout')

@section('content')
<section id="home">
    <div id="home-cover" class="bg-parallax  animated fadeIn">
        <div id="home-content-box">
            <div id="home-inner-content" class="text-center">
                <div id="home-heading" class="animated zoomIn">
                    <h1>NANOCODES<br>PROGRAMMING</h1>

                </div>
                <div id="home-btn" class="animated zoomIn">
                    <a class="btn btn-lg btn-general btn-white" href="/login" role="button">Learn to code</a>

                </div>

            </div>

        </div>

    </div>

</section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
