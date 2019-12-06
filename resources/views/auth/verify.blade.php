@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique o seu e-mail') }}</div>

                <div class="form-group" style="text-align:center">
                    <img src="{{ asset('images\petspng.png') }}" alt="some text" width=200 height=200 >
                    <img src="{{ asset('images\adocaosos_logo.png') }}" alt="some text" width=300 height=150>                        
                </div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um novo link de verificação foi enviado para o seu endereço de e-mail') }}
                        </div>
                    @endif

                    {{ __('Antes de prosseguir, por favor verifique o seu e-mail por um link de verificação.') }}
                    {{ __('Se você não recebeu um email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('clique aqui para enviar novamente') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
