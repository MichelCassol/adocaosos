<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dono;
use RealRashid\SweetAlert\Facades\Alert;

class DonoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donos = Dono::orderBy('nome', 'ASC')->get();
        return view('listagemDono', ['donos' => $donos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $donos = Dono::orderBy('nome', 'ASC')->get();
        return view('cadastroDono', ['donos'=>$donos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dono = new Dono();

        $dono->nome = $request->input('inputNome');
        $dono->cpf = $request->input('inputCPF');
        $dono->sexo = $request->input('radioSexo');
        $dono->dataNascimento = $request->input('inputNascimento');
        $dono->rua = $request->input('inputLogradouro');
        $dono->numero = $request->input('inputNumero');
        $dono->bairro = $request->input('inputBairro');
        $dono->estado = $request->input('comboEstado');
        $dono->cidade = $request->input('inputCidade');
        $dono->email  = $request->input('inputEmail');
        $dono->telefone = $request->input('inputTelefone');

        if(isset($dono)){
            $dono->save();
            Alert::success('Registro salvo','O registro foi salvo com sucesso');
            return redirect('/dono');
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
        $dono = Dono::find($id);
        return view ('cadastroDono', ['dono'=>$dono]);
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
        $dono = Dono::find($id);
        $dono->nome = $request->input('inputNome');
        $dono->cpf = $request->input('inputCPF');
        $dono->sexo = $request->input('radioSexo');
        $dono->dataNascimento = $request->input('inputNascimento');
        $dono->rua = $request->input('inputLogradouro');
        $dono->numero = $request->input('inputNumero');
        $dono->bairro = $request->input('inputBairro');
        $dono->estado = $request->input('comboEstado');
        $dono->cidade = $request->input('inputCidade');
        $dono->email  = $request->input('inputEmail');
        $dono->telefone = $request->input('inputTelefone');

        if(isset($dono)){
            $dono->save();
            Alert::success('Registro salvo','O registro foi salvo com sucesso');
            return redirect('/dono');
        }else{
            Alert::error('Erro','Ocorreu um erro ao salvar');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dono::destroy($id);
        $donos = Dono::orderBy('nome', 'ASC')->get();
        return view('listagemDonos',['donos'=>$donos]);
    }
}
