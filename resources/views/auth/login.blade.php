@extends('base')

@section('content')

<h1>Se connecter</h1>

<div class="card">
    <div class="card-body">
        <form action="{{ route('auth.login') }}" method="post" class="vstack gap-3">

            <div class=" form-groupe">
                <label for "email">Adresse mail</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                @error("email")
                {{ $message }}
                @enderror
            </div>

            <div class=" form-groupe">
                <label for "password">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
                @error("password")
                {{ $message }}
                @enderror
            </div>

            <button class="btn btn-primary">
                Se connecter
            </button>

        </form>
    </div>
</div>
@endsection