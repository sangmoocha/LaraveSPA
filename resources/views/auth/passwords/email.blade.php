@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('비밀번호 변경 신청') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
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
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit">보내기</button>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
