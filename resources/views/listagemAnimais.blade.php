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
        <li class="breadcrumb-item active">Lista</li>
    </ol>
    <h4 class="page-title">Lista de Animais</h4>

</div><!-- End page title box -->
<div class="row">
    <div class="col-12">
        <div class="card-box">

<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"></h4>
            <form>
                <div class="form-row">


<table class="table">
    <thead style="color: slateblue; text-align:center;text-decoration:bold;">
      <tr>
        <th scope="col">Dono</th>
        <th scope="col">Nome</th>
        <th scope="col">Espécie</th>
        <th scope="col">Porte</th>
        <th scope="col">Raça</th>
        <th scope="col">Vacinado</th>
        <th scope="col">Castrado</th>
        <th scope="col">Sexo</th>
        <th scope="col">Opções</th>
      </tr>
    </thead>
    <tbody style="text-align:center;text-decoration:bold;">
        @foreach ($animais as $animal)
        <tr>
            <td>{{ $animal->id_dono}}</td>
            <td>{{ $animal->nome}}</td>
            <td>{{ $animal->especie}}</td>
            <td>{{ $animal->porte}}</td>
            <td>{{ $animal->raca}}</td>

            @if ($animal->vacinacao)
                <td>Sim</td>
            @else
                <td>Não</td>
            @endif

            @if ($animal->castrado)
                <td>Sim</td>
            @else
                <td>Não</td>
            @endif

            @if ($animal->sexo== "M")
                <td>Macho</td>
            @else
                <td>Fêmea</td>
            @endif
            
            <td style="text-align: center; width: 30%">
                <a href="/animal/{{ $animal->id }}/edit">
                    <button id="btn-editar" type="submit" class="btn btn-secondary btn-rounded w-sm">
                        Editar
                    </button>
                </a>
            
                <button id="btn-excluir" type="button" class="btn btn-danger btn-rounded w-sm" onclick="deletar({{ $animal->id }})">
                    Excluir
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <div class="form-group">
      <a href="/animal/create">
          <button id="btn-salvar" type="button" class="btn btn-primary btn-rounded w-md">
              Novo
          </button>
      </a>
  </div>    


</form>
</div><!-- end card-box -->
</div><!-- end col -->
</div><!-- end row -->
</div><!-- end container-fluid-->
</div><!-- end contant-->
</div><!-- End Page Content-->

@endsection
