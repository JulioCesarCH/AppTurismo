@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Panel de Control') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @Auth
                        @if(session('tipo')==1)
                            Administrador<br>Bienvenido!
                        @endif
                        @if(session('tipo')==2)
                            Administrador Establecimiento<br>Bienvenido!
                        @endif
                        @if(session('tipo')==3)
                            Supervisor<br>Bienvenido!
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
