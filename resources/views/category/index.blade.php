@extends('layouts.app')


@section('title')
    View All Categories
@endsection

@section('content')
        @foreach($categories as $category)

        <h1>{{ $category->name }}</h1>
        <p>{{ $category->description }}</p>

        <hr>

        @endforeach
@endsection