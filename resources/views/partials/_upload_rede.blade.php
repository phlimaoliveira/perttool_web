<div class="ibox-content">

<form action="storeRedePert" method="POST">
    <div class="col-md-12" style="margin-bottom:20px;">                
        <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">                
                <span class="btn btn-block btn-success btn-file"><span class="fileinput-new"><i class="fa fa-file"></i> Selecionar Arquivo</span>                
            </div> 
        </div>

        <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <span class="btn btn-block btn-success btn-file"><span class="fileinput-new"><i class="fa fa-file-image-o"></i> Selecionar Imagem</span>                
            </div> 
        </div>
    </div>

    <div class="col-md-12" style="margin-bottom:20px;">
        <div class="col-md-2" style="margin-top:5px;">
            <p>
                <b class="pull-right">Nome da rede:</b>
            </p>
        </div>
        <div class="col-md-10">
            <input id="name" name="name" class="form-control required" aria-required="true" type="text">
        </div>
    </div>

    <div class="col-md-12" style="margin-bottom:20px;">
        <div class="col-md-2" style="margin-top:5px;">
            <p>
                <b class="pull-right">Descrição: </b>
            </p>
        </div>
        <div class="col-md-10">
            <textarea class="form-control" id="description" required="" placeholder="Sobre o que se trata a sua rede PERT/CPM?" name="description" cols="50" rows="5"></textarea>
        </div>
    </div>

    <div class="col-md-12">
        <div class="fileinput fileinput-new pull-right" data-provides="fileinput" style="margin-right:15px;">
            <input type="submit" name="submit" id="Submit">
        </div> 
    </div>  
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
</div