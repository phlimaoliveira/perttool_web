<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

use App\RedesPertModel;
use App\Profile;
use App\Comentarios;
use App\User;

use Session;
use Response;
use Image;

class RedesPert extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $s = $request->input('s');


        $rede = RedesPertModel::search($s)->paginate(10);
        $users = Profile::all();
        $comentarios = Comentarios::all();

        return view('home')->with('rede', $rede)->with('users', $users)->with('comentarios', $comentarios)->with('s', $s);
    }

    // Sem login
    public function index2()
    {
        $rede = RedesPertModel::paginate(10);
        $users = Profile::all();
        $comentarios = Comentarios::all();

        return view('redes_pert')->with('rede', $rede)->with('users', $users)->with('comentarios', $comentarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:255',
            'description' => 'required'             
        ));

        $rede = new RedesPertModel;
        $rede->nome_rede = Input::get("name");
        $rede->descricao = Input::get("description");
        $rede->arquivo_rede = "arquivo_rede";
        $rede->img_rede = "img_rede";

        if($request->hasFile('add_arquivo')) {     
            if($request->file('add_arquivo')->getClientOriginalExtension() == 'ptf') {
                $arquivo = $request->file('add_arquivo');
                $filename = time() . '.' . $arquivo->getClientOriginalExtension();
                $rede->arquivo_rede = $filename;


                $path = $arquivo->store('redes_pert/'.$filename, 's3');

                $s3 = Storage::disk('s3');
                $client = $s3->getDriver()->getAdapter()->getClient();

                $s3->getDriver()->getAdapter()->getClient()->putObject(array(
                    'Bucket' => 'perttool',
                    'Key'    => $filename,
                    'SourceFile' => $arquivo
                ));
            }
        }

        if($request->hasFile('add_imagem')) {            
            $imagem = $request->file('add_imagem');
            $filename = time() . '.' . $imagem->getClientOriginalExtension();
            $image_make = Image::make($imagem)->resize(1600, 900)->save(public_path('/img/img_redes/' . $filename));
            $rede->img_rede = $filename;

            $s3 = Storage::disk('s3');
            $s3->put($filename, $image_make->__toString(), 'public');
        }     

        if(\Auth::check()) {
            $rede->nome_usuario = \Auth::user()->name;       
            $rede->id_user = \Auth::user()->id;     
        }

        if($rede->arquivo_rede == 'arquivo_rede' || $rede->img_rede == 'img_rede') {
            Session::flash('errorCadRede', 'Opa, por favor faça o upload da sua rede PERT/CPM e de uma imagem que a identifique!');
        } else {
            $rede->save(); 
            Session::flash('successCadRede', 'Parabéns! Sua rede PERT/CPM foi publicada!');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    public function visualizarRede($id) {
        $rede = RedesPertModel::find($id);
        $comentarios = Comentarios::where('id_rede', $id)->get();
        $users = Profile::all();

        return view('visualizar_redes')->with('rede', $rede)->with('comentarios', $comentarios)->with('users', $users);
    }

    public function visualizarRede2($id) {
        $rede = RedesPertModel::find($id);
        $comentarios = Comentarios::where('id_rede', $id)->get();
        $users = Profile::all();

        return view('visualizar_redes_2')->with('rede', $rede)->with('comentarios', $comentarios)->with('users', $users);
    }

    public function downloadRede($id){
        //PDF file is stored under project/public/download/info.pdf
        $s3 = Storage::disk('s3');

        $result = $s3->getDriver()->getAdapter()->getClient()->getObject(array(
            'Bucket' => 'perttool',
            'Key'    => $id,
            'SaveAs' => public_path('img/redes_download/' . $id)
        ));

        return Response::download(public_path('/img/redes_download/' . $id));


}

    public function downloadAsset($id)
    {
        $assetPath = Storage::disk('s3')->url('https://s3-us-west-1.amazonaws.com/perttool/' . $id);

        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=" . basename('perttool/' . $id));
        header("Content-Type: " . $assetPath->mime);

        return readfile($assetPath);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
