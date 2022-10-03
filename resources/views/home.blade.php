@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"style="border: 2px solid #BA00D8">
                <div class="card-header" style="border: 1px solid #BA00D8">{{ __('Dashboard') }}</div>
                    
                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Estas Con Sesion Iniciada Maestro ;3') }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
