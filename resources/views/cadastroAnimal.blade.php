    @extends('layout.app')

    @section('conteudo')
    </li> -->
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
            <li class="breadcrumb-item"><a href="javascript:void(0);">Greeva</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
            <li class="breadcrumb-item active">Form Elements</li>
        </ol>
        <h4 class="page-title">Cadastro de Animais</h4>
    </div><!-- End page title box -->
    <div class="row">
        <div class="col-12">
            <div class="card-box">

    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Cadastro</h4>
                <form method="POST" action="/animal">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6"><label for="inputEmail4"
                                class="col-form-label">Nome</label> <input type="nome"
                                class="form-control" id="inputNome" name="inputNome" placeholder="Nome do Animal"></div>
                                <div class="form-group col-md-6"><label for="comboEspecie"
                                    class="col-form-label" name="comboEspecie">Espécie</label> <select id="inputState"
                                    class="form-control">
                                    <option>Escolha a Espécie</option>
                                    <option>Ave</option>
                                    <option>Cachorro</option>
                                    <option>Cavalo</option>
                                    <option>Coelho</option>
                                    <option>Gato</option>
                                    <option>Hamster</option>
                                    <option>Porco</option>
                                    <option>Porquinho da India</option>
                                </select></div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-2"><label
                            class="col-form-label">Sexo:</label>
                            <div class="custom-control custom-radio"><input type="radio"
                                    id="radioSexo1" name="radioSexo" class="custom-control-input">
                                <label class="custom-control-label" for="radioSexo1">Fêmea</label></div>
                            <div class="custom-control custom-radio"><input type="radio"
                                    id="radioSexo2" name="radioSexo" class="custom-control-input">
                                <label class="custom-control-label" for="radioSexo2">Macho</label></div>
                    </div>
                    <div class="form-group col-md-4"><label for="inputCity"
                        class="col-form-label">Idade</label> <input type="number"
                        class="form-control" id="inputIdade" name="inputIdade" placeholder="Idade do Animal"></div>
                        <div class="form-group col-md-6"><label for="inputCity"
                                class="col-form-label">Raça</label> <input type="text"
                                class="form-control" id="inputRaca" name="inputRaca"  placeholder="Raça do Animal"></div>
                                <div class="form-group col-md-2">



                        <label class="col-form-label">Porte:</label>
                             <div class="custom-control custom-radio"><input type="radio"
                            id="radioPorte1" name="radioPorte" class="custom-control-input">
                            <label class="custom-control-label" for="radioPorte1">Pequeno</label></div>
                            <div class="custom-control custom-radio"><input type="radio"
                            id="radioPorte2" name="radioPorte" class="custom-control-input">
                            <label class="custom-control-label" for="radioPorte2">Médio</label></div>
                            <div class="custom-control custom-radio"><input type="radio"
                            id="radioPorte3" name="radioPorte" class="custom-control-input">
                            <label class="custom-control-label" for="radioPorte3">Grande</label></div>
                            </div>

                            <div class="form-group col-md-2"><label
                                class="col-form-label">Castrado:</label>
                                <div class="custom-control custom-radio"><input type="radio"
                                        id="radioCastro1" name="radioCastro" class="custom-control-input">
                                    <label class="custom-control-label" for="radioCastro1">Sim</label></div>
                                <div class="custom-control custom-radio"><input type="radio"
                                        id="radioCastro2" name="radioCastro" class="custom-control-input">
                                    <label class="custom-control-label" for="radioCastro2">Não</label></div>
                            </div>
                            <div class="form-group col-md-2"><label
                                class="col-form-label">Vacinado:</label>
                                <div class="custom-control custom-radio"><input type="radio"
                                        id="radicoVac1" name="radicoVac" class="custom-control-input">
                                    <label class="custom-control-label" for="radicoVac1">Sim</label></div>
                                <div class="custom-control custom-radio"><input type="radio"
                                        id="radicoVac2" name="radicoVac" class="custom-control-input">
                                    <label class="custom-control-label" for="radicoVac2">Não</label></div>
                            </div>

                            <div class="form-group col-md-6"><label class="col-md col-form-label" name="inputDesc">Descrição</label>
                                <div class="col-md"><textarea class="form-control"  rows="3"></textarea></div>
                        </div>

                    </div>

                    <div class="form-group">
                    </div><button type="submit" class="btn btn-primary" id="salvarAnimal" name="salvarAnimal">Salvar</button>
                </form>
            </div><!-- end card-box -->
        </div><!-- end col -->
    </div><!-- end row -->
    </div><!-- end container-fluid-->
    </div><!-- end contant-->
    </div><!-- End Page Content-->
    @endsection
