@extends('layouts.layout')

@section('title', 'Asistentes | Registrar')

@section('content')
    <link href="{{ asset('/assets/css/assistants.css') }}" rel="stylesheet">
    <div class="container-form">
        <h2>Registro de Asistentes</h2>
        <form action="{{ route('assistants.create') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="identification">Identificación:</label>
                <input type="text" class="form-control" id="identification" name="identification" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="age">Edad:</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>
            <div>
                <button type="submit" class="btn btn-primary btn-sm" style="margin-top: 10px">Guardar</button>
                <a href="{{ route('welcome') }}" class="btn btn-secondary btn-sm" style="margin-top: 10px">Regresar</a>
            </div>
        </form>
    </div>

@endsection

