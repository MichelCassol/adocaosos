<?php

namespace App\Http\Controllers;

use App\Animal;
use App\Dono;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

       //$animais = Animal::orderBy('nome', 'ASC')->get();
       //return view('listagemAnimais', ['animais' => $animais]);
       return view('listagemAnimais');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('cadastroAnimal',['users' => $user]);
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
        $animal->vacinacao = $request->input('radioVac');
        $animal->castrado = $request->input('radioCastro');
        //$animal->id_dono = $request->input('comboDono');
        $animal->id_dono = 1;

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
        $animal = Animal::find($id);
        $donos = Dono::orderBy('nome','ASC')->get();
        return view ('cadastroAnimal', ['animal'=>$animal, 'donos'=> $donos]);
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
        $animal = Animal::find($id);
        $animal->nome = $request->input('inputNome');
        $animal->sexo = $request->input('radioSexo');
        $animal->especie = $request->input('comboEspecie');
        $animal->raca = $request->input('inputRaca');
        $animal->idade = $request->input('inputIdade');
        $animal->porte = $request->input('radioPorte');
        $animal->descricao = $request->input('inputDesc');
        $animal->vacinacao = $request->input('radioVac');
        $animal->castrado = $request->input('radioCastro');
        //$animal->id_dono = $request->input('comboDono');
        $animal->id_dono = 1;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Animal::destroy($id);
        $animais = Animal::orderBy('nome','ASC')->get();
        return view('listagemAnimais',['animais'=>$animais]);
    }
}
