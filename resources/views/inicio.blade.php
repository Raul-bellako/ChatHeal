
@extends('layouts.main_layout')


@section('content')
    <section id="inicio">
        <div class="flex-container">
            <div class="text-column">
                
                <p>Un paso hacia la tranquilidad:</p>
                    <p>juntos por tu bienestar emocional</p>
                
            </div>
            <div class="image-column">
                <img src="{{ asset('images/seccion1.png') }}" >
            </div>
        </div>
    </section>



    <section id="about">
        <div class="section-container">
            <div class="section-content">
                <h2>ChatHeal: Revolucionando el Cuidado de la Salud Mental</h2>
                <p>Nuestra aplicación móvil, parte integral de Chatheal, está diseñada para brindar un apoyo emocional constante y accesible. Con una interfaz amigable y fácil de usar, está concebida para ofrecer herramientas que ayuden a monitorear y gestionar la salud mental de manera efectiva.</p>
               
            </div>
        </div>
    </section>


    <section id="caracteristicas">
        <div class="flex-container">
            <div class="text-column">
                <header>
                    <h2>Características de Chatheal</h2>
                </header>
                <ul>
                    <li>Conversaciones de apoyo emocional las 24 horas del día.</li>
                    <li>Consejos personalizados basados en tu estado emocional.</li>
                    <li>Juegos educativos para la gestión de la salud mental.</li>
                    <li>Conexión con voluntarios capacitados en escucha activa.</li>
                </ul>
            </div>
            <div class="image-column">
                <img src="ruta-de-tu-imagen.jpg" alt="Descripción de la imagen">
            </div>
        </div>
    </section>
@endsection
