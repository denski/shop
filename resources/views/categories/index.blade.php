@extends('app')

@section('content')
    <div class="col-lg-12">
        <h1 class="my-4">Categories</h1>

        <a href="{{ route('categories.create') }}" class="btn btn-info">New Category</a>
        <br /><br />

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th></th>
                </tr>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>

                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')" />
                            </form>
                        </td>
                    </tr>
                @endforeach
            </thead>
        </table>
    </div>
@endsection
