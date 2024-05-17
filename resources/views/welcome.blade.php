@extends('layouts.layout')

@section('title', 'Inicio')

@section('nav')
    @include('partials.nav')
@endsection

@section('content')
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
    <section id="main" class="py-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h1 class="display-4">¡Regístrate para nuestro próximo concierto!</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum nisi id ex ultricies, sed ultricies nunc rutrum.</p>
                    <a href="{{ route('assistants.assistants') }}" class="btn btn-primary btn-lg">Registrarse</a>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-1 order-md-2">
                    <h2>Sobre el Concierto</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum nisi id ex ultricies, sed ultricies nunc rutrum.</p>
                    <p>Fecha: <strong>DD/MM/AAAA</strong></p>
                    <p>Hora: <strong>HH:MM</strong></p>
                    <p>Lugar: <strong>Nombre del Lugar, Ciudad</strong></p>
                    <a href="#" class="btn btn-secondary">Más Información</a>
                </div>
                <div class="col-md-6 order-2 order-md-1" style="list-style-type: none">
                    <h2>Artistas</h2>
                    <ul class="list-unstyled">
                        <li class="artistas">Beyoncé</li>
                        <li class="artistas">Ed Sheeran</li>
                        <li class="artistas">Taylor Swift</li>
                        <li class="artistas">Drake</li>
                        <li class="artistas">Rihanna</li>
                        <li class="artistas">Justin Bieber</li>
                        <li class="artistas">Adele</li>
                        <li class="artistas">Bruno Mars</li>
                        <li class="artistas">Lady Gaga</li>
                        <li class="artistas">Kanye West</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Contacto</h2>
            <div class="row">
                <div class="col-md-6">
                    <h4>Información de Contacto</h4>
                    <p><strong>Dirección:</strong> Calle Falsa 123, Ciudad, País</p>
                    <p><strong>Teléfono:</strong> +1 234 567 890</p>
                    <p><strong>Email:</strong> contacto@ticketally.com</p>
                </div>
                <div class="col-md-6">
                    <h4>Formulario de Contacto</h4>
                    <form action="#" method="POST">
                        <div class="form-group mb-3">
                            <label for="contact-name">Nombre:</label>
                            <input type="text" class="form-control" id="contact-name" name="name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contact-email">Email:</label>
                            <input type="email" class="form-control" id="contact-email" name="email" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contact-message">Mensaje:</label>
                            <textarea class="form-control" id="contact-message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('footer')
    @include('partials.footer')
@endsection
