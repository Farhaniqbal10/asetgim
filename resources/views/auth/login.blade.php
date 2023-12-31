@extends('Tamplate.auth.layout')

@section('login')
    <section class="tf-page-title style-2 mt-5">
        <div class="tf-container">
            <div class="row">
                <div class="col-md-12">

                    <ul class="breadcrumbs">
                        <li><a href="blog2.html">Home</a></li>
                        <li>Login</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <section class="tf-login">
        <div class="tf-container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="tf-heading style-5">
                        <h4 class="heading">GANA | Game Asset Nusantara</h4>
                        <p class="sub-heading">Make sure to enter your account correctly! </p>
                        @if (session()->has('status'))
                            <div class="alert alert-success" role="alert">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('status') }}</span>
                            </div>
                        @endif
                        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif
                        @if (session()->has('unsuccess'))
                            <div class="alert alert-danger" role="alert">
                                <strong class="font-bold">Unsuccess!</strong>
                                <span class="block sm:inline">{{ session('unsuccess') }}</span>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul class="list-disc pl-5">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ htmlentities($error) }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-12">
                    <form action="{{ route('login.post') }}" method="post" id="contactform">
                        @method('POST')
                        @csrf
                        <div class="title-login">login with account</div>
                        <fieldset><input id="username" name="username" tabindex="1" aria-required="true" required=""
                                type="text" placeholder="Username"></fieldset>
                        <fieldset class="mb24"> <input id="showpassword" name="password" tabindex="2"
                                aria-required="true" type="password" placeholder="Password" required="">
                            <span class="btn-show-pass "><i class="far fa-eye-slash"></i></span>
                        </fieldset>
                        <div class="forgot-pass-wrap">
                            <label {{ __('Remember Me') }}>Remember me
                                <input type="checkbox" name="remember" value="1" id="remember">
                                <span class="btn-checkbox"></span>
                            </label>
                            <a class="forgot-pass" href="{{ route('forgot') }}">Fogot password?</a>
                        </div>
                        <div class="title-login">Or login with social</div>
                        <div class="button-gg"><a href="{{ route('register') }}"><i
                                    class="fab fa-odnoklassniki"></i></i>Create
                                Account</a>
                        </div>
                        <div class="button-gg mb31"><a href="{{ route('user.login.google') }}"><i
                                    class="fab fa-google"></i>Google</a>
                        </div>
                        <button class="submit" type="submit">Login</button>
                    </form>


                </div>
            </div>
        </div>
    </section>
@endsection
