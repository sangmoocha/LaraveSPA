@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">{{ __('로그인') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row pr-3">
                            <div class="col-sm-9 pr-0">
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope-open"></i></span>
                                        </div>
                                        <input type="email" 
                                               class="form-control form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                               name="email" value="{{ old('email') }}"
                                               placeholder="E-Mail Address" 
                                               required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="input-group input-group-sm mb-1">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                                        </div>
                                        <input type="password" 
                                               class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                               name="password" required
                                               placeholder="password">
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-2 col-sm-3 pb-1 pr-0">
                                <button class="btn btn-primary btn-block loginBtn w-100 h-100" type="submit" >{{ __('로그인') }}</button>
                            </div>
                        </div>                    
                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 text-right">
                            @if (Route::has('password.request'))
                                <a class="badge badge-light" href="{{ route('password.request') }}">
                                    {{ __('비밀번호 찾기') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
