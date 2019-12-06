@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Aviso</div>

                <div class="form-group" style="text-align:center">
                    <img src="{{ asset('images\petspng.png') }}" alt="some text" width=200 height=200 >
                    <img src="{{ asset('images\adocaosos_logo.png') }}" alt="some text" width=300 height=150>                        
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div style="text-align:center; font-size:30px">    
                    Você já está logado!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
