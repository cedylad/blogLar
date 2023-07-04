@extends('base')

@section('title', 'Créer un article')

@section('content')

<form action="" method="post"">
@csrf
    <div>
        <p>Article</p>
        <input type=" text" name="title" value="{{ old('title', 'Article de démonstration') }}">
    @error("title")
    {{ $message }}
    @enderror
    </div>

    <div>
        <p>Slug</p>
        <input type=" text" name="slug" value="{{ old('slug') }}">
        @error("slug")
        {{ $message }}
        @enderror
    </div>



    <div>
        <p>Contenu</p>
        <textarea name="content">{{ old('content', 'Contenu de démonstration') }}</textarea>
        @error("content")
        {{ $message }}
        @enderror
    </div>
    <button>Enregistrer</button>
</form>

@endsection