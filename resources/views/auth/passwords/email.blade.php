@extends('auth.master')

@section('content')
    <div class="card card-bordered">
        <div class="card-inner card-inner-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title">Reset password</h5>
                    <div class="nk-block-des">
                        <p>If you forgot your password, well, then we’ll email you instructions to reset your password.</p>
                    </div>
                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-primary alert-icon">
                    <em class="icon ni ni-alert-circle"></em>
                    {{ session('status') }}
                </div>
            @endif
            <form method="post" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label" for="default-01">Email</label>
                    </div>
                    <div class="form-control-wrap">
                        <input name="email" type="text" class="form-control form-control-lg  @error('email') is-invalid @enderror" id="default-01"
                            placeholder="Enter your email address">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block">Send Reset Link</button>
                </div>
            </form>
            <div class="form-note-s2 text-center pt-4">
                <a href="{{ route('login') }}"><strong>Return to login</strong></a>
            </div>
        </div>
    </div>
@endsection