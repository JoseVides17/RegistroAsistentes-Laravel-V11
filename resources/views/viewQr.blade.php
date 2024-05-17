@extends('layouts.layout')

@section('title', 'Codigo QR')

<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 0;
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
    }
    .container-qr {
        max-width: 600px;
    }
    .card {
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .card-header {
        background-color: #007bff;
        color: white;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        padding: 1rem;
    }
    .card-body {
        padding: 1.5rem;
    }
    .card-body p {
        font-size: 1rem;
        color: #495057;
        margin-bottom: 0.5rem;
    }
    .footer {
        background-color: #007bff;
        color: white;
        text-align: center;
        padding: 1rem;
        margin-top: auto;
    }

</style>

@section('content')
    <link href="{{ asset('/assets/qr.css') }}">
    <div class="container-qr mt-4">
        <div class="card">
            <div class="card-header">
                <h2>Guarda este Codigo</h2>
            </div>
            <div class="card-body">
                @foreach($qrData as $key => $value)
                    <p>{{ $key }}: {{ $value }}</p>
                @endforeach
                {{ QrCode::size(300)->generate(json_encode($qrData)) }}
            </div>
            <a href="{{ route('welcome') }}" class="btn btn-secondary btn-sm" style="margin-top: 10px">Regresar</a>
        </div>
    </div>

@endsection


