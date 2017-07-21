@extends('layouts.app_interno')

@section('content')
<div class="col-lg-8 col-lg-offset-2" style="margin-bottom: 30px;">
    
        <div class="col-lg-12">
            <!-- PROFILE DATA -->
            <div class="col-lg-4">                            
                            <div class="ibox-content text-center">                                
                                <div class="m-b-sm">
                                        <img alt="image" class="img-circle" width="200" height="200" src="img/paulo.jpg">
                                </div>
                                <h1>Paulo Henrique</h1>
                                <h5>Membro desde: 19/07/2017</h5>                                
                                <h6>200 redes publicadas</h6>

                                <span class="btn btn-block btn-primary btn-file"><span class="fileinput-new">Alterar foto</span>
                            </div>                        
            </div>

            <div class="col-lg-8">
                <div class="ibox-content">
                    <div style="margin-bottom: 10px; margin-top:10px; font-size:10pt;">
                        <b>NOME</b>
                    </div>

                    <input id="userName" name="userName" class="form-control required" aria-required="true" type="text">

                    <div style="margin-bottom: 10px; margin-top:10px; font-size:10pt;">
                        <b>UNIVERSIDADE</b>
                    </div>

                    <input id="userName" name="userName" placeholder="De onde você vem?" class="form-control required" aria-required="true" type="text">

                    <div style="margin-bottom: 10px; margin-top:10px; font-size:10pt;">
                        <b>FALE UM POUCO SOBRE VOCÊ...</b>
                    </div>

                    <textarea class="form-control" required="" placeholder="Seja bem-vindo! Fale um pouco sobre você para os demais colegas!" name="mensagem_contato" cols="50" rows="5"></textarea>
                </div>
            </div>

        </div>    

        <div class="col-lg-12">
            <div class="col-lg-4">
            </div>

            <div class="col-lg-8" style="margin-top:15px;">                
                <div class="col-lg-12">
                    <span class="btn btn-block btn-primary btn-file"><span class="fileinput-new">Publicar!</span>                 
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

</div>
@endsection
