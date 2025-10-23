@extends('layouts.app')

@section('title', 'Login - Footique')

@section('content')

<div class="login-page">
    <div class="login-box">
        <h2>FOOTIQUE</h2>
        <p>Langkah Nyaman, Gaya Maksimal</p>

        <form action="{{ route('login.post') }}" method="POST">
            @csrf

            <input type="text" name="username" class="login-input" placeholder="Masukkan username" required>

            <div class="password-wrapper">
                <input type="password" name="password" id="password" class="login-input" placeholder="Kata sandi" required>
                <small id="togglePassword" class="toggle-password">Lihat</small>
            </div>

            <button type="submit" class="btn-login">Masuk</button>
        </form>
    </div>
</div>

<script>
document.getElementById('togglePassword').addEventListener('click', function() {
    const input = document.getElementById('password');
    const type = input.type === 'password' ? 'text' : 'password';
    input.type = type;
    this.textContent = type === 'password' ? 'Lihat' : 'Sembunyikan';
});
</script>
@endsection
