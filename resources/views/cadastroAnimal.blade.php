@extends('layout.app')

@section('conteudo')
</li>
</ul>
</div><!-- Sidebar -->
<div class="clearfix"></div>
</div><!-- Sidebar -left -->
</div><!-- Left Sidebar End -->
<!-- Page Content Start -->
<div class="content-page">
<div class="content">
<div class="container-fluid">
<!-- Page title box -->
<div class="page-title-box">
    <ol class="breadcrumb float-right">
        <li class="breadcrumb-item active">Cadastro de Animal</li>
    </ol>
    <h4 class="page-title">Cadastro</h4>
</div><!-- End page title box -->
<div class="row">
    <div class="col-12">
        <div class="card-box">

<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title">Cadastro</h4>
            <form method="POST" @if(isset($animal)) action="/animal/{{ $animal->id }} @else action="/animal" @endif>
                @csrf
                <input type="hidden" name=_method" value="{{ isset($animal) ? 'PATCH' : 'POST' }}">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputNome" class="col-form-label">Nome</label>
                        <input value="{{ $animal->nome ?? '' }}" type="nome" class="form-control" id="inputNome" name="inputNome" placeholder="Nome do Animal">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="comboEspecie" class="col-form-label">Espécie</label>
                        <select id="inputEspecie" name="comboEspecie" class="form-control">
                            <option disabled="disabled" value="" selected>Escolha a Espécie</option>
                            <option value="Ave">Ave</option>
                            <option value="Cachorro">Cachorro</option>
                            <option value="Cavalo">Cavalo</option>
                            <option value="Coelho">Coelho</option>
                            <option value="Gato">Gato</option>
                            <option value="Hamster">Hamster</option>
                            <option value="Porco">Porco</option>
                            <option value="Porquinho da India">Porquinho da India</option>
                        </select>
                    </div>

                        <div class="form-group col-md-2">
                            <label class="col-form-label">Sexo:</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="radioSexo1" name="radioSexo" class="custom-control-input" value="F">
                                    <label class="custom-control-label" for="radioSexo1">Fêmea</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="radioSexo2" name="radioSexo" class="custom-control-input" value="M">
                                    <label class="custom-control-label" for="radioSexo2">Macho</label>
                                </div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputIdade" class="col-form-label">Idade</label>
                            <input type="number" class="form-control" id="inputIdade" name="inputIdade" placeholder="Idade do Animal">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputRaca" class="col-form-label">Raça</label>´
                            <input type="text" class="form-control" id="inputRaca" name="inputRaca" placeholder="Raça do Animal">
                        </div>


                    <div class="form-group col-md-2">
                        <label class="col-form-label">Sexo:</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="radioSexo1" name="radioSexo" class="custom-control-input" value="F">
                                <label class="custom-control-label" for="radioSexo1">Fêmea</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="radioSexo2" name="radioSexo" class="custom-control-input" value="M">
                                <label class="custom-control-label" for="radioSexo2">Macho</label>
                            </div>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputIdade" class="col-form-label">Idade</label>
                        <input value="{{ $animal->idade ?? '' }}" type="number" class="form-control" id="inputIdade" name="inputIdade" placeholder="Idade do Animal">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputRaca" class="col-form-label">Raça</label>´
                        <input value="{{ $animal->raca ?? ''}}"type="text" class="form-control" id="inputRaca" name="inputRaca" placeholder="Raça do Animal">
                    </div>

                    <div class="form-group col-md-2">
                        <label class="col-form-label">Porte:</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="radioPorte1" name="radioPorte" class="custom-control-input" value="Pequeno">
                            <label class="custom-control-label" for="radioPorte1">Pequeno</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="radioPorte2" name="radioPorte" class="custom-control-input" value="Médio">
                            <label class="custom-control-label" for="radioPorte2">Médio</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="radioPorte3" name="radioPorte" class="custom-control-input" value="Grande">
                            <label class="custom-control-label" for="radioPorte3">Grande</label>
                        </div>
                    </div>

                    <div class="form-group col-md-2">
                        <label class="col-form-label">Castrado:</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="radioCastro1" name="radioCastro" class="custom-control-input" value=1>
                            <label class="custom-control-label" for="radioCastro1">Sim</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="radioCastro2" name="radioCastro" class="custom-control-input" value=0>
                            <label class="custom-control-label" for="radioCastro2">Não</label>
                        </div>
                    </div>

                    <div class="form-group col-md-2">
                        <label class="col-form-label">Vacinado:</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="radioVac1" name="radioVac" class="custom-control-input" value=1>
                            <label class="custom-control-label" for="radioVac1">Sim</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="radioVac2" name="radioVac" class="custom-control-input" value=0>
                            <label class="custom-control-label" for="radioVac2" >Não</label>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label class="col-form-label">Descrição</label>
                        <div>
                            <textarea value="{{ $animal->descricao ?? '' }}" class="form-control" name="inputDesc" id="inputDesc" rows="3" placeholder="Descrição"></textarea>
                        </div>
                    </div>

                </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="dono" class="col-form-label">Dono</label>
                            <select id="dono" name="dono" class="form-control">
                                <option disabled="disabled" value="" selected>Selecione um Dono</option>
                               
                               @foreach ($donos as $dono)
                                    <option value="{{ $dono->id}}" @isset($animal) @if($animal->dono_id == $dono->id) selected @endif @endisset>{{ $dono->nome }}</option>    
                                @endforeach
                                
                            </select>
                        </div>
                    </div>

                <div class="form-row">
                    <button type="submit" class="btn btn-primary" id="salvarAnimal" name="salvarAnimal">Salvar</button>
                </div>

            </form>
        </div><!-- end card-box -->
    </div><!-- end col -->
</div><!-- end row -->
</div><!-- end container-fluid-->
</div><!-- end contant-->
</div><!-- End Page Content-->
@endsection
