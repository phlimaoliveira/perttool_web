<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Profile;
use Illuminate\Support\Facades\Input;

use Session;
use DB;
use Image;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::check()) {
            $profile = DB::table('profiles')->where('id_user', \Auth::user()->id)->first();
            $redesUser = DB::table('redes_pert_models')->where('id_user', \Auth::user()->id)->get();  
            $count=count($redesUser);          
        }        

        return view('profile')->with('profile', $profile)->with('count', $count);
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
        $profile = new Profile;        
        $profile->descricao_usuario = Input::get("descricao_usuario");
        $profile->universidade = Input::get("universidade");
        $profile->foto_perfil = "foto_perfil";
        
        $perfil = Profile::find(\Auth::user()->id);
        $perfil->descricao_usuario = $profile->descricao_usuario;
        $perfil->universidade = $profile->universidade;

        if($request->hasFile('profile_image')) {            
            $img_profile = $request->file('profile_image');
            $filename = time() . '.' . $img_profile->getClientOriginalExtension();
            $image_make = Image::make($img_profile)->resize(1600, 900)->save(public_path('/img/profile_image/' . $filename));
            $perfil->foto_perfil = $filename;

            $s3 = Storage::disk('s3');
            $s3->put($filename, $image_make->__toString(), 'public');
        }

        $perfil->save();

        Session::flash('successCadProfile', 'Tudo certo! Seu perfil foi atualizado em nosso repositório!');

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
        //
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
