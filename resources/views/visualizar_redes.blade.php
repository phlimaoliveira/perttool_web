@extends('layouts.app_interno')

@section('content')
<div class="col-lg-8 col-lg-offset-2" style="margin-bottom: 30px;">
    
        <div class="col-lg-12" style="background:white;">
            <div class="text-center">
                <h1 style="margin-top:50px;"><b>{{ $rede->nome_rede }}</b></h1>
                <h5><b>Criado por:</b> <a href="/user/{{$rede->id_user}}">{{ $rede->nome_usuario }}</a></h5>  
            </div> 

            <p style="padding:30px;">
                {{ $rede->descricao }}
            </p>

            <div class="col-md-12" jstcache="0">
                    <div class="ibox " jstcache="0">                        
                        <div class="ibox-content" jstcache="0">
                            <img src="https://s3-us-west-1.amazonaws.com/perttool/{{$rede->img_rede}}" class="img-responsive"/>            
                        </div>
                    </div>
                </div>
            </div>

            <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="margin-bottom:30px; margin-top:80px; background: white; padding-bottom: 30px;">                
                <a href="/download/{{$rede->arquivo_rede}}"><span class="btn btn-success btn-file"><span class="fileinput-new"><i class="fa fa-cloud-download"></i> Download</span></a>
            </div>

            <div class="col-lg-12 text-center">
                @include('partials._message')  
                <h2>Deixe seu <b>comentário</b></h2>
                <form action="storeComentario" enctype="multipart/form-data" method="POST">
                    <textarea class="form-control" id="comentario" required="" placeholder="Deixe sua opinião, sugestão ou agradeça o colaborador!" name="comentario" cols="50" rows="5"></textarea>

                    <div class="fileinput fileinput-new pull-right" data-provides="fileinput" style="margin-top:15px;">
                        <input class="btn btn-primary" type="submit" value="Comentar" name="submit" id="Submit">
                    </div> 
                    <input type="hidden" name="id_rede" value="{{ $rede->id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </div>

            <!-- LISTA DE COMENTÁRIOS -->

            <div class="col-lg-12">

                <h2>Comentários:</h2>

                    @if (count($comentarios) > 0)
                        @foreach($comentarios as $c)
                        <div class="social-feed-box" style="margin-bottom:40px;">
                            <div class="social-avatar">
                                @foreach($users as $u)
                                    @if($u->id_user == $c->id_user)
                                        @if($u->foto_perfil == 'foto_perfil' || $u->foto_perfil == '')
                                            <div class="pull-left">
                                                <img alt="image" class="img-circle" src="/img/profile_icon.png" width="75" height="75">
                                            </div>

                                            <div class="media-body">
                                                <div style="margin-left:20px;">
                                                    <b>{{ $u->nome_usuario }}</b>
                                                </div>

                                                <small class="text-muted">{{ $c->created_at }}</small>

                                                <div class="social-body" style="margin-left:20px;">
                                                    <p>
                                                        {{ $c->comentario }}
                                                    </p>
                                                </div>
                                            </div>
                                        @else
                                            <div class="pull-left">
                                                <img alt="image" class="img-circle" src="https://s3-us-west-1.amazonaws.com/perttool/{{$u->foto_perfil}}" width="75" height="75">
                                            </div>                

                                            <div class="media-body">
                                                <div style="margin-left:20px;">
                                                    <b>{{ $u->nome_usuario }}</b>
                                                </div>                        

                                                <div class="social-body" style="margin-left:20px;">
                                                <p>
                                                   {{ $c->comentario }}
                                                 </p>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                @endforeach                            
                                </div>
                                </div>
                                    
                            @endforeach  

            @else
                <div class="col-lg-12 text-center" style="margin-bottom:30px;">
                    <h3>Ainda não existem comentários!<br>Comente...</h3>
                </div>
            @endif                               
        </div>
@endsection
