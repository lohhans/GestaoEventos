@extends('layout.template')

@section('content')
<!doctype html>
<section class="form-gradient mb-5">
    <div class="alinha"></div>
    <div class="alinha"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}" required autofocus>

                                    @if ($errors->has('cpf'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('cpf') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="login" class="col-md-4 col-form-label text-md-right">{{ __('Login') }}</label>

                                <div class="col-md-6">
                                    <input id="login" type="text" class="form-control{{ $errors->has('login') ? ' is-invalid' : '' }}" name="login" value="{{ old('login') }}" required>

                                    @if ($errors->has('login'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('login') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="labelCep" class="col-md-4 col-form-label text-md-right">{{ __('CEP') }}</label>

                                <div class="col-md-6">
                                    <input id="cep" type="text" class="form-control" name="cep" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="labelNumero" class="col-md-4 col-form-label text-md-right">{{ __('Numero') }}</label>

                                <div class="col-md-6">
                                    <input id="numero" type="text" class="form-control" name="numero" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="labelrua" class="col-md-4 col-form-label text-md-right">{{ __('Rua') }}</label>

                                <div class="col-md-6">
                                    <input id="rua" type="text" class="form-control" name="rua" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="labelBairro" class="col-md-4 col-form-label text-md-right">{{ __('Bairro') }}</label>

                                <div class="col-md-6">
                                    <input id="bairro" type="text" class="form-control" name="bairro" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="labelCidade" class="col-md-4 col-form-label text-md-right">{{ __('Cidade') }}</label>

                                <div class="col-md-6">
                                    <input id="cidade" type="text" class="form-control" name="cidade" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="labelEstado" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

                                <div class="col-md-6">
                                    <input id="estado" type="text" class="form-control" name="estado" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="labelPais" class="col-md-4 col-form-label text-md-right">{{ __('País') }}</label>

                                <div class="col-md-6">
                                    <input id="pais" type="text" class="form-control" name="pais" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="labelComplemento" class="col-md-4 col-form-label text-md-right">{{ __('Complemento') }}</label>

                                <div class="col-md-6">
                                    <input id="complemento" type="text" class="form-control" name="complemento" required autofocus>
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
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <input id="tipousuario_id" name="tipousuario_id" value="3" type="hidden" class="form-control{{ $errors->has('tipousuario_id') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>



                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
