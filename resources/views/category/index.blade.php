@extends('layouts.app')


@section('title')
    View All Categories
@endsection

@section('content')
+
    <a href="{{ route('category.add') }}" class="btn btn-info float-end">Add New</a>

        @if(session('success'))
            <div>{{ session('success') }}</div>
        @endif

        <table class="table">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th width="200px">Actions</th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td>
                        {{ $category->name }}
                    </td>
                    <td>
                        {{ $category->description }}
                    </td>
                    <td>
                        <a href="{{ route('category.edit', ['category' => $category]) }}" class="btn btn-info">Edit</a>
                        <form action="{{ route('category.delete', $category) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </table>
@endsection