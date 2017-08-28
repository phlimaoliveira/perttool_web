@extends('layouts.app_interno')

@section('content')
<div class="col-lg-8 col-lg-offset-2" style="margin-bottom: 30px;">
    
        <div class="col-lg-12">
            <!-- PROFILE DATA -->
            <form action="storeProfile" enctype="multipart/form-data" method="POST">
            <div class="col-lg-4">                            
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

                                <div style="position:relative;">
                                    <a class='btn btn-primary' href='javascript:;'>
                                        Alterar foto
                                        <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="profile_image" size="40"  value="Alterar foto" onchange='$("#upload-file-info").html($(this).val());'>
                                    </a>
                                    &nbsp;
                                    <span class='label label-info' id="upload-file-info"></span>
                            </div>
                            </div>                        
            </div>
        
            <div class="col-lg-8">

                @include('partials._message')  

                <div class="ibox-content">                    
                    <div style="margin-bottom: 10px; margin-top:10px; font-size:10pt;">
                        <b>UNIVERSIDADE</b>
                    </div>

                    <input id="universidade" name="universidade" value="{{ $profile->universidade }}" required="" placeholder="De onde você vem?" class="form-control required" aria-required="true" type="text">

                    <div style="margin-bottom: 10px; margin-top:10px; font-size:10pt;">
                        <b>FALE UM POUCO SOBRE VOCÊ...</b>
                    </div>

                    <textarea class="form-control" id="descricao_usuario" required="" placeholder="Seja bem-vindo! Fale um pouco sobre você para os demais colegas!" name="descricao_usuario" cols="50" rows="10">{{ $profile->descricao_usuario }}</textarea>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="col-lg-4">
                </div>

                <div class="col-lg-8" style="margin-top:15px;">                
                    <div class="col-lg-12">                     
                        <input type="submit" class="btn btn-block btn-primary" name="submit" id="Submit">                  
                    </div>

                    <div class="col-lg-12">
                        <div class="text-center" style="margin-top:10px;">
                            <a href="/home">
                                <small>Voltar ao inicio!</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
        </div>

</div>
@endsection
