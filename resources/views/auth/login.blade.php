@php
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/blankLayout')

@section('title', 'Login')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/pages/page-auth.css')) }}">
@endsection

@section('content')
<div class="authentication-wrapper authentication-cover">
  <div class="authentication-inner row m-0">
    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center">
      <div class="flex-row text-center mx-auto">
        {{-- <img src="{{asset('assets/img/pages/login-'.$configData['style'].'.png')}}" alt="Auth Cover Bg color" width="520" class="img-fluid authentication-cover-img" data-app-light-img="pages/login-light.png" data-app-dark-img="pages/login-dark.png"> --}}
        <div class="mx-auto">
          <img srcset="https://scontent.fgua8-1.fna.fbcdn.net/v/t39.30808-6/255019837_4323168551086074_2003608752228759990_n.png?_nc_cat=109&ccb=1-7&_nc_sid=174925&_nc_ohc=c6A6-Ar5JQAAX80xL8f&_nc_ht=scontent.fgua8-1.fna&oh=00_AfBKoJeGIAoo99fjr_4xO_w0Odw_uK3pwwOD0tVdDv4i_Q&oe=63798814" alt="Logo dicome">


          <h3>Una nueva forma de control tecnico 🥳</h3>
          <p>
            Perfectamente diseñada para ti y para todos los servicios tecnicos que necesites
          </p>
        </div>
      </div>
    </div>
    <!-- /Left Text -->

    <!-- Login -->
    <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
      <div class="w-px-400 mx-auto">
        <!-- Logo -->
        <div class="app-brand justify-content-center mb-4">
          <a href="{{url('/')}}" class="app-brand-link gap-2 mb-2">
           //DICOME
          </a>
        </div>
        <!-- /Logo -->
        <h4 class="mb-2">Bienvenido a DICOMETEC!</h4>
        <p class="mb-4">Ingresa tu cuenta</p>

        @if (session('status'))
        <div class="alert alert-success mb-1 rounded-0" role="alert">
          <div class="alert-body">
            {{ session('status') }}
          </div>
        </div>
        @endif

        <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="login-email" class="form-label">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="login-email" name="email" placeholder="john@example.com" autofocus value="{{ old('email') }}">
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="mb-3 form-password-toggle">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="login-password">Password</label>
              @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}">
                {{-- <small>Forgot Password?</small> --}}
              </a>
              @endif
            </div>
            <div class="input-group input-group-merge">
              <input type="password" id="login-password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
              <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="remember-me" name="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label" for="remember-me">
                Remember Me
              </label>
            </div>
          </div>
          <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
        </form>

        <p class="text-center">
          <span>Si eres nuevo puedes contactar con el administrador</span>
          @if (Route::has('register'))
          <a href="{{ route('register') }}">
            {{-- <span>Create an account</span> --}}
          </a>
          @endif
        </p>
        </div>
      </div>
    </div>
    <!-- /Login -->
  </div>
</div>
@endsection
