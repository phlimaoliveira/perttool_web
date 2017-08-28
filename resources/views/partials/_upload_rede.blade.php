<div class="ibox-content">

<form action="storeRedePert" enctype="multipart/form-data" method="POST">
    <div class="col-md-12" style="margin-bottom:20px;">                
        <div class="col-md-6">
            <div style="position:relative;">
                    <a class='btn btn-block btn-success' href='javascript:;'>
                        <i class="fa fa-file"></i> Selecionar Arquivo
                        <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="add_arquivo" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
                    </a>
                    &nbsp;
                    <span class='label label-info' id="upload-file-info"></span>
            </div>            
        </div>

        <div class="col-md-6">
            <div style="position:relative;">
                    <a class='btn btn-block btn-success' href='javascript:;'>
                        <i class="fa fa-file-image-o"></i> Selecionar Imagem
                        <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="add_imagem" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
                    </a>
                    &nbsp;
                    <span class='label label-info' id="upload-file-info"></span>
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
            <input id="name" name="name" placeholder="Identifique a sua rede" required="" class="form-control required" aria-required="true" type="text">
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
            <input class="btn btn-primary" type="submit" value="Upload da Rede" id="Submit">
        </div> 
    </div>  
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
</div