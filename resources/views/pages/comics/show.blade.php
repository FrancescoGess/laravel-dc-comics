@extends('layouts.app')

@section('title', 'Comics | Read Show')

@section('main')

<h2>
    {{ $comics->title }}
</h2>

<p>
    {{ $comics->description }}
</p>


@endsection