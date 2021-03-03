@extends('app')

@section('title', 'Profiles')

@section('content')
    <h1>Profil</h1>

    <form action="/profile" method="post"> {{-- isim kayıt formu --}}
        <input type="text" name="name" autocomplete="off">

        @csrf

        <button>Üye ekle</button>
    </form>
    <p style="color: red;">@error('name') {{ $message }} @enderror</p> {{-- hatalı isim mesajı --}}

@endsection
