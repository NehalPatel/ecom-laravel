@extends('layouts.app')

@section('title')
    View All Products
@endsection

@section('content')
    <table class="table">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>description</td>
            <td>Category</td>
            <td>Price</td>
            <td>Created On</td>
        </tr>
    @foreach($products as $product)

    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->category->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->created_at }}</td>
    </tr>

    @endforeach

    </table>
@endsection