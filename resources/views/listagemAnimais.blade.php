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
        <li class="breadcrumb-item active">Lista de Animais para Doação</li>
    </ol>
    <h4 class="page-title">Lista de Animais para Doação</h4>
</div><!-- End page title box -->
<div class="row">
    <div class="col-12">
        <div class="card-box">

<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title">Lista de Animais para Doação</h4>
            <form>
                <div class="form-row">


<table class="table">
    <thead style="color: slateblue">
      <tr>
        <th scope="col">Dono</th>
        <th scope="col">Nome</th>
        <th scope="col">Especie</th>
        <th scope="col">Porte</th>
        <th scope="col">Raça</th>
        <th scope="col">Vacinado</th>
        <th scope="col">Castrado</th>
        <th scope="col">Sexo</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Gabriel</th>
        <td>Fred</td>
        <td>Cachorro</td>
        <td>Grande</td>
        <td>Labrador</td>
        <td>Sim</td>
        <td>Não</td>
        <td>Macho</td>
      </tr>
      <tr>
        <th scope="row">Michel</th>
        <td>Carlitos</td>
        <td>Gato</td>
        <td>Pequeno</td>
        <td>Persa</td>
        <td>Sim</td>
        <td>Sim</td>
        <td>Fêmea</td>
      </tr>
      <tr>
        <th scope="row">Eruz    </th>
        <td>PeixoPorc</td>
        <td>Porquinho da India</td>
        <td>Pequeno</td>
        <td>Abissímo</td>
        <td>Não</td>
        <td>Não</td>
        <td>Macho</td>
      </tr>
    </tbody>
  </table>



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
