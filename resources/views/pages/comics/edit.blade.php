@extends('layouts.app')

@section('title', 'Comics | Edit Edit')

@section('main')
    <main>
        <h2>Modifica un prodotto</h2>

@foreach ($errors->all() as $error )
    {{ $error }} <br>
@endforeach
        {{-- @error('title')
            {{ json_encode($errors) }}
        @enderror --}}
            {{-- @if($error->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors -> all() as error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>

                @endif --}}
            </div>
        <div class="container">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">titolo</label>
                    <input type="text" class="form-control" name="title" id="title"
                        value="{{ old( 'title' ) ?? $comic->title }}" />
                        @error('title')
                            {{ $message }}
                        @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="3">
                        {{ old('description') ?? $comic->description }}
                    </textarea>
                </div>


                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" class="form-control" name="thumb" id="thumb"
                        value="{{ old('thumb') ?? $comic->thumb }}" />
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Prezzo</label>
                    <input type="number" 
    
                    step="0.01"
                    class="form-control" name="price" id="price"
                        value="{{ old('price') ?? $comic->price }}" />
                        @error('price')
                            {{ $message }}
                        @enderror
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" name="series" id="series"
                        value="{{ old('series') ?? $comic->series }}" />
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data</label>
                    <input type="date" class="form-control" name="sale_date" id="sale_date"
                        value="{{ old('sale_date') ?? $comic->sale_date }}" />
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" name="type" id="type"
                        value="{{ old('type') ?? $comic->type }}" />
                </div>

                <button type="submit" class="btn btn-primary">
                    Crea
                </button>


            </form>
        </div>
    </main>
@endsection
