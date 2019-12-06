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
        <li class="breadcrumb-item active">Cadastro de Dono</li>
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
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6"><label for="inputNome"
                            class="col-form-label">Nome</label> <input type="text"
                            class="form-control" name="inputNome" id="inputNome" placeholder="Nome do Dono"></div>

                            <div class="form-group col-md-6"><label for="cpf"
                                class="col-form-label">CPF</label> <input type="number"
                                class="form-control" name="inputCPF" id="inputCPF" placeholder="Apenas números"></div>
                                <div class="form-group col-md-2"><label
                                    class="col-form-label">Sexo</label>
                                    <div class="custom-control custom-radio"><input type="radio"
                                            id="radioSexo1" name="radioSexo" class="custom-control-input" value="F">
                                        <label class="custom-control-label" for="radioSexo1">Feminino</label></div>
                                    <div class="custom-control custom-radio"><input type="radio"
                                            id="radioSexo2" name="radioSexo" class="custom-control-input" value="M">
                                        <label class="custom-control-label" for="radioSexo2">Masculino</label></div>


                            </div>

                            <div class="form-group col-md-4"><label for="cpf"
                                class="col-form-label">Data de Nascimento</label> <input type="date"
                                class="form-control" name="inputNascimento" id="inputNascimento" ></div>


                            <div class="form-group col-md-6"><label name="comboEstado" for="comboEstado"
                                class="col-form-label">Estado</label> <select id="comboEstado"
                                class="form-control">
                                <option disabled="disabled" value="" selected>Selecione um estado</option>
                                <option>Acre</option>
                                <option>Alagoas</option>
                                <option>Amapa</option>
                                <option>Amazonas</option>
                                <option>Bahia</option>
                                <option>Ceará</option>
                                <option>Distrito Federal</option>
                                <option>Espirito Santo</option>
                                <option>Goiás</option>
                                <option>Maranhão</option>
                                <option>Mato Grosso</option>
                                <option>Mato Grosso do Sul</option>
                                <option>Minas Gerais</option>
                                <option>Pará</option>
                                <option>Paraíba</option>
                                <option>Paraná</option>
                                <option>Pernambuco</option>
                                <option>Piauí</option>
                                <option>Rio de Janeiro</option>
                                <option>Rio Grande do Norte</option>
                                <option>Rio Grande do Sul</option>
                                <option>Rondônia</option>
                                <option>Roraima</option>
                                <option>Santa Catarina</option>
                                <option>São Paulo</option>
                                <option>Sergipe</option>
                                <option>Tocantins</option>
                </select></div>
                <div class="form-group col-md-6"><label for="inputCidade"
                    class="col-form-label">Cidade</label> <input type="text"
                    class="form-control" name="inputCidade" id="inputCidade" placeholder="Cidade"></div>
                <div class="form-group col-md-6"><label for="inputLogradouro"
                    class="col-form-label">Logradouro</label> <input type="text"
                    class="form-control" name="inputLogradouro" id="inputLogradouro" placeholder="Logradouro"></div>
                    <div class="form-group col-md-6"><label for="inputLogradouro"
                        class="col-form-label">Bairro</label> <input type="text"
                        class="form-control" name="inputBairro" id="inputBairro" placeholder="Bairro"></div>
                        <div class="form-group col-md-6"><label for="inputLogradouro"
                            class="col-form-label">Numero</label> <input type="number"
                            class="form-control" name="inputNumero" id="inputNumero" placeholder="Numero"></div>
                            <div class="form-group col-md-6"><label for="inputNumero"
                                class="col-form-label">Email</label> <input type="email"
                                class="form-control" name="inputEmail" id="inputEmail" placeholder="email@email.com"></div>
                                <div class="form-group col-md-6"><label for="inputLogradouro"
                                    class="col-form-label">Telefone</label> <input type="text"
                                    class="form-control" name="inputTelefone" id="inputFone" placeholder="(xx)x-xxxx-xxxx"></div>


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
