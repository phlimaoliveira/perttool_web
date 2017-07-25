@extends('layouts.app')

@section('content')
<div class="col-lg-8 col-lg-offset-2">
    <div class="loginColumns animated fadeInDown" style="padding-top:100px;">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Repositório PERTTOOL</h2>

                <br>
                <p>
                    Olá, seja bem-vindo.
                </p>

                <br>
                <p>
                    Cadastre-se e compartilhe suas redes criadas na ferramenta PERTTOOL com os demais usuários. Acreditamos que a melhor forma de aprender é compartilhando o conhecimento.
                </p>

                <p>
                    <small>Não se esqueça de compartilhar com os colegas. Vamos ajudar a manter este ecossistema de ensino e aprendizagem.</small>
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Senha</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar-me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Entrar
                                    </button>
                                </div>

                                <div class="col-md-8 col-md-offset-4">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Esqueceu a senha?
                                    </a>
                                </div>
                            </div>

                        <p class="text-muted text-center">
                            <small>Ainda não possuo cadastro?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="register">Criar conta</a>

                        <div class="text-center" style="margin-top:10px;">
                            <a href="/redes_pert">
                                <small>Quero apenas visualizar as redes cadastradas!</small>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                Universidade Federal de Goiás - Regional Jataí
            </div>
            <div class="col-md-6 text-right">
               <small>© 2015-2017</small>
            </div>
        </div>
    </div>
</div>
@endsection