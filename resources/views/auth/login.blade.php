@extends('layouts.app')

@section('conteudo')
<div class="container-fluid full-height bg-orange">
    <div class="row">
        <div class="card-login">  
            <img src="media/logo/logo_color.png" alt="logo" class="d-block mx-auto pb-5">
            <form action="{{ route('login.entrar') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="idUser">Usuário</label>
                <div class="input-group">
                    <input placeholder="Usuário" id="idUser" class="form-control border-0 bg-gray" type="text" name="user">
                    <span class="input-group-addon bg-gray rounded-right "><i class="mr-1 material-icons">person</i></span>
                </div>
            </div>
            <div class="form-group">

                <label for="idPassword">Senha</label>
                <div class="input-group">
                <input placeholder="Senha" id="idPassword" class="form-control border-0 bg-gray" type="password" name="password">
                <span class="input-group-addon bg-gray rounded-right"><i class="mr-1 material-icons">lock</i></span>
                </div>
                
            </div>
            <button type="submit" class="btn btn-custom btn-lg btn-block background-button p-2 pl-4 mt-5">Entrar <img src="media/icon/baseline_send_white_18dp.png" alt=""></button>
            </form>
        </div>
    </div>
</div>  
    
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" >
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
