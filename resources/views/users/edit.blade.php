@extends('layouts.main_layout')
@section('content')

<br><br><br><br><br>
<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('put')

    <label>Nombre</label>
    <input name="name" type="text" value="{{ $user->name }}" required>
    <br><br>
    
    <label>Email</label>
    <input name="email" type="text" value="{{ $user->email }}" required>
    <br><br>

    <label>Contraseña</label>
    <input name="password" type="password" required>
    <br><br>

    <button type="submit">Actualizar</button>
</form>
<br><br><br><br><br>

@endsection
