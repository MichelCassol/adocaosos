<?php

namespace App\Http\Controllers;

use App\Animal;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cadastroAnimal');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animal = new Animal();

        $animal->nome = $request->input('inputNome');
        $animal->sexo = $request->input('radioSexo');
        $animal->especie = $request->input('comboEspecie');
        $animal->raca = $request->input('inputRaca');
        $animal->idade = $request->input('inputIdade');
        $animal->porte = $request->input('radioPorte');
        $animal->descricao = $request->input('inputDesc');
        $animal->vacinacao = $request->input('radicoVac');
        $animal->castrado = $request->input('radioCastro');
        $animal->id_dono = 1; //$request->input();

        if(isset($animal)){
            $animal->save();
            Alert::success('Registro salvo','O registro foi salvo com sucesso');
            return redirect('/animal');
        }else{
            Alert::error('Erro','Ocorreu um erro ao salvar');
        }
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
