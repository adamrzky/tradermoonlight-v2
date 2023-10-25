@extends('layouts.auth.app')

@section('content')
<br>
    <div class="uni-sign-in uk-section uk-section-large@m uk-panel uk-overflow-hidden ">

        <!-- Page header -->
        <header class="uni-page-header">
            <div class="uk-container">
                <h1 class="heading uk-h3 uk-h1@m uk-text-uppercase uk-text-center">Sign in</h1>
            </div>
        </header>
        <div class="uk-margin-top uk-margin-large-top@m">
            <div class="uk-container">
                <div class="uk-flex-column uk-flex-center uk-width-medium@m uk-margin-auto">
                    <form class="uk-form-stacked uk-panel uk-width-1-1" action="{{ route('login') }}" method="post"
                        data-uk-margin="margin: uk-margin">
                        @csrf
                        <div>
                            <label for="email-login-page" class="uk-form-label">Your email: <span
                                    class="uk-text-danger">*</span></label>
                            <input id="email-login-page" type="email" name="email"
                                class="uk-input uk-form-medium uk-radius-large" required>
                        </div>
                        <div>
                            <label for="password-login-page" class="uk-form-label">Your password: <span
                                    class="uk-text-danger">*</span></label>
                            <input id="password-login-page" type="password" name="password"
                                class="uk-input uk-form-medium uk-radius-large" required>
                        </div>
                        <div class="uk-grid uk-flex-between uk-flex-middle" data-uk-grid>
                            <div class="uk-flex uk-flex-middle">
                                <input id="remember-login-page" type="checkbox" name="remember" class="uk-checkbox">
                                <label for="remember-login-page" class="uk-form-label uk-margin-xsmall-left">Remember
                                    me?</label>
                            </div>
                            <div>
                                <a href="reset-password.html" class="uk-link-line uk-text-small uk-text-bold">
                                    <span>Forgot password</span>
                                </a>
                            </div>
                        </div>
                        <div class="uk-margin-medium">
                            <button type="submit" class="uk-button uk-button-medium@m uk-button-gradient uk-width-expand">
                                {{ __('Login') }} </button>
                        </div>
                        <div class="uk-grid uk-grid-xsmall uk-flex-center uk-text-xlarge uk-margin-medium-top@m"
                            data-uk-grid>
                            <a aria-label="facebook" href="#facebook"><i class="brand-facebook-alt"></i></a>
                            <a aria-label="google" href="#google"><i class="brand-google"></i></a>
                            <a aria-label="twitter" href="#twitter"><i class="brand-twitter"></i></a>
                        </div>
                    </form>
                    {{-- <p class="uk-text-small uk-text-bold uk-text-center uk-margin-large-top@m">
                    Don't have an account? <a href="sign-up.html" class="uk-link-line uk-text-primary"><span>Sign up</span></a>.
                </p> --}}
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Wrapper end -->
@endsection
