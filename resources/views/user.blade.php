@extends('layouts.app_interno')

@section('content')
<div class="col-lg-8 col-lg-offset-2" style="margin-bottom: 30px;">
    
        <div class="col-lg-12">
            <!-- PROFILE DATA -->
            	<div class="col-lg-4" style="padding:30px;">                            
                            <div class="ibox-content text-center">                                
                                <div class="m-b-sm">      
                                    @if($profile->foto_perfil == 'foto_perfil' || $profile->foto_perfil == '')
                                        <img alt="image" class="img-circle" width="200" height="200" src="/img/profile_icon.png">
                                    @else
                                        <img alt="image" class="img-circle" width="200" height="200" src="https://s3-us-west-1.amazonaws.com/perttool/{{$profile->foto_perfil}}">
                                    @endif
                                </div>
                                <h1>{{ $profile->nome_usuario }}</h1>
                                <h5>Membro desde: {{ Carbon\Carbon::parse($profile->created_at)->format('d/m/Y') }}</h5>
                                @if ($count == 0)
                                    <h6>Você ainda não tem redes publicadas!</h6>
                                @elseif($count == 1)
                                    <h6>{{ $count }} rede publicada</h6>
                                @else
                                    <h6>{{ $count }} redes publicadas</h6>
                                @endif                                
                            </div>                        
            	</div>
        
            <div class="col-lg-8" style="background:white; padding:30px;">

            	@if ($profile->universidade != '')
            		<b><div style="font-size:14pt;">{{ $profile->universidade }}</div></b><br>
            	@endif

            	@if($profile->descricao_usuario != '')
            		{{ $profile->descricao_usuario }}<br><br>
            	@endif

            	@if ($count > 0)
            		<b>Redes compartilhadas por este usuário </b>
                	@foreach($redes as $r)
                	<div class="feed-element">
                    
	                    <!-- CONTEÚDO POSTADO -->
	                    <div class="media-body " style="padding-top: 20px; padding-bottom:20px;">                    
	                        <a href="/redes/{{ $r->id }}" style="font-size:14pt;">{{ $r->nome_rede }}</a>
	                        <small class="pull-right" style="margin-top:5px;">{{ Carbon\Carbon::parse($r->created_at)->format('d/m/Y') }}</small>

	                    </div>                    
	                </div>
	                @endforeach           
                @else
                	<div style="font-size:14pt"><b>Este usuário ainda não possui redes compartilhadas!</b></div>
                @endif

                
            </div>
        </div>

</div>
@endsection
