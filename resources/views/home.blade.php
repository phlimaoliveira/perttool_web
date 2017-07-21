@extends('layouts.app_interno')

@section('content')
<div class="col-lg-8 col-lg-offset-2" style="margin-bottom: 30px;">

    @include('partials._message')  

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
                    <a href="profile.html" class="pull-left">
                        <img alt="image" class="img-circle" style="width:50px; height: 50px;" src="img/paulo.jpg">
                    </a>

                    <!-- CONTEÚDO POSTADO -->
                    <div class="media-body ">                    
                        <a href="/redes" style="font-size:14pt;">{{ $r->nome_rede }}</a><br>
                        <small class="pull-right">{{ Carbon\Carbon::parse($r->created_at)->format('d/m/Y') }}</small>
                        Postado por: <strong>Paulo Henrique</strong><br>                    
                        <i class="fa fa-comment"></i> <small class="text-muted">200 comentários</small>

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
                {{ $rede->links() }}
            </div>

        </div>

    </div>
</div>
@endsection