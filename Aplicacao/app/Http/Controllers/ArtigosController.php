<?php

namespace App\Http\Controllers;

use App\Artigo;
use Illuminate\Http\Request;

class ArtigosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artigos=Artigo::all();
        //return $artigos;
        //dd($artigos);
        return view('Artigos.Artigos',['artigos'=>$artigos,'mensage'=>'']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Artigos.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artigo=Artigo::create($request->all());
        $artigo->save();
        $artigos=Artigo::all();
        return view('Artigos.Artigos',['artigos'=>$artigos,'mensage'=>'Artigo '.$artigo->Titulo.' cadastrado com sucesso']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Artigo $artigo)
    {
        if(!$artigo){
            abort(404);
        }
        //dd($artigo);
        return view('Artigos.show',['artigo'=>$artigo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Artigo $artigo)
    {
        if(!$artigo){
            abort(404);
        }
        return view('Artigos.edit',['artigo'=>$artigo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artigo $artigo)
    {
        $artigo->fill($request->all());
        $artigo->save();
        $artigos=Artigo::all();
        return view('Artigos.Artigos',['artigos'=>$artigos,'mensage'=>'Artigo '.$artigo->Titulo.' Atualizado com sucesso']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
        if(!Artigo::find($id)){
            abort(404);
        }
        $artigo = Artigo::find($id);
        $artigo->delete();
        $artigos=Artigo::all();
        return view('Artigos.Artigos',['artigos'=>$artigos,'mensage'=>'Artigo '.$artigo->Titulo.' deletado com sucesso']);
    }

    public function getJson(){
        return Artigo::all();
    }

    public function mapa(){
        $artigos=Artigo::all();
        //dd($artigos);
        return view('mapa.mapa',['artigos'=>$artigos]);
    }
}
