@extends('layouts.main_layout')
@section('content')

<div>
    <form action="{{ route('users.store')}}" method="POST">
        @csrf

        <label>Nombre</label>
        <input name="name" type="text" required>
        <br><br>
        
        <label>Email</label>
        <input name="email" type="text" required>
        <br><br>

        <label>Contraseña</label>
        <input name="password" type="password" required>
        <br><br>

        <button type="submit">Crear</button>        
    </form>
</div>

@endsection
