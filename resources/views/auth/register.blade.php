@extends('layouts.guest')

@section('content')

<h2 class="text-2xl font-bold mb-6">Crear cuenta</h2>

<form action="{{ route('register') }}" method="POST">
    @csrf

    @if ($errors->any())
        <div style="color: red; margin-bottom: 20px;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <div class="mb-4">
        <label for="name">Nombre</label>
        <input
            type="text"
            name="name"
            value="{{ old('name') }}"
            required
            autofocus
        >

        @error('name')
            <p style="color:red;">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="email">Correo electrónico</label>
        <input
            type="email"
            name="email"
            value="{{ old('email') }}"
            required
        >

        @error('email')
            <p style="color:red;">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="password">Contraseña</label>
        <input
            type="password"
            name="password"
            required
        >

        @error('password')
            <p style="color:red;">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="password_confirmation">Confirmar contraseña</label>
        <input
            type="password"
            name="password_confirmation"
            required
        >
    </div>

    <button type="submit">Registrarme</button>

    <p class="text-sm mt-4">
        ¿Ya tienes cuenta?
        <a href="{{ route('login') }}">Inicia sesión</a>
    </p>
</form>

@endsection