@extends('layouts.app_interno')

@section('content')
<div class="col-lg-8 col-lg-offset-2" style="margin-bottom: 30px;">

    @include('partials._message')  

    <div class="ibox-content" style="background:#f4f4f4">
        <div class="panel-body" >
        <div class="pull-right">
            <form action="/search" method="get" class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control" name="s" placeholder="Busca por palavra-chave" value="{{ isset($s) ? $s : '' }}">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </div>
            </form>
        </div>
        </div>
    </div>

    <div class="ibox-content">        
        <div class="panel-body">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                <div class="text-center">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" class=""><i class="fa fa-plus-circle"></i> Nova Rede PERT/CPM</a>
                                </div>
                            </h5>
                        </div>

                        <div id="collapseOne" aria-expanded="false" class="panel-collapse collapse" style="height: 0px;"><div class="panel-body">                                
                                @include('partials._upload_rede')
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div>
            <div class="feed-activity-list">

            @if (count($rede) > 0)
                @foreach($rede as $r)
                <div class="feed-element">
                    <!-- IMAGEM DO USUÁRIO -->                    
                    @foreach($users as $u)
                        @if($u->id_user == $r->id_user)
                            @if($u->foto_perfil == 'foto_perfil' || $u->foto_perfil == '')
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" style="width:50px; height: 50px;" src="/img/profile_icon.png">
                                </a>
                            @else
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" style="width:50px; height: 50px;" src="https://s3-us-west-1.amazonaws.com/perttool/{{$u->foto_perfil}}">
                                </a>
                            @endif
                        @endif
                    @endforeach

                    <!-- CONTEÚDO POSTADO -->
                    <div class="media-body ">                    
                        <a href="/redes/{{ $r->id }}" style="font-size:14pt;">{{ $r->nome_rede }}</a><br>
                        <small class="pull-right">{{ Carbon\Carbon::parse($r->created_at)->format('d/m/Y') }}</small>
                        Postado por: <strong>{{ $r->nome_usuario }}</strong><br>  

                        <?php $qtdComentarios = 0 ?>
                        @foreach($comentarios as $c)                  
                            @if($r->id == $c->id_rede)
                                <?php $qtdComentarios++ ?>
                            @endif 
                        @endforeach

                        @if($qtdComentarios == 0)
                            <i class="fa fa-comment"></i> <small class="text-muted">Esta rede ainda não possui comentários</small>
                        @elseif($qtdComentarios == 1)
                            <i class="fa fa-comment"></i> <small class="text-muted">{{ $qtdComentarios }} comentário</small>
                        @else
                            <i class="fa fa-comment"></i> <small class="text-muted">{{ $qtdComentarios }} comentários</small>
                        @endif

                    </div>                    
                </div>
                @endforeach  

            </div>

            @else
                <div class="col-lg-12 text-center">
                    <h3>Desculpe-nos. Não foram cadastradas redes PERT/CPM!</h3>
                </div>
            @endif 

            <!-- PAGINAÇÃO -->
            <div class="pull-right" style="margin-bottom:-40px;">
                {{ $rede->appends(['s' => $s])->links() }}
            </div>

        </div>

    </div>
</div>
@endsection