@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('회원가입') }}</div>
                <form method="POST" action="{{ route('register') }}">
                    <div class="card-body">
                        @csrf
                        <div class="row ml-3 mr-3">
                            <div class="input-group input-group-sm mb-1">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                    </div>
                                    <input type="text" 
                                            class="form-control form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                            name="name" value="{{ old('name') }}"
                                            placeholder="Name" 
                                            required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="input-group input-group-sm mb-1">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope-open"></i></span>
                                    </div>
                                    <input type="email" 
                                            class="form-control form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                            name="email" value="{{ old('email') }}"
                                            placeholder="E-Mail Address" 
                                            required>
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
                            <div class="input-group input-group-sm">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-unlock"></i></span>
                                    </div>
                                    <input type="password" 
                                            class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                            name="password_confirmation" required
                                            placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary btn-sm mr-3">회원 가입</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
