@if(Session::has('successCadRede')) 
	<div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <strong>Parabéns! Sua rede PERT/CPM foi publicada.</strong>
    </div>
@endif

@if(Session::has('successCadProfile')) 
	<div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <strong>Tudo certo! Seu perfil foi atualizado em nosso repositório!</strong>
    </div>
@endif

@if(Session::has('errorCadRede')) 
	<div class="alert alert-danger alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <strong>Opa, por favor faça o upload da sua rede PERT/CPM em formato (.ptf) e de uma imagem que a identifique!</strong>
    </div>
@endif

@if(Session::has('successCadComentario')) 
	<div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <strong>Seu comentário foi postado!</strong>
    </div>
@endif
