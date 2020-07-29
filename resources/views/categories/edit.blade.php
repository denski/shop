@extends('app')

@section('content')
<div class="col-lg-12">
    <h1 class="my-4">Edit Category</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="post">
        @csrf
        @method('put')

        Name:
        <br />
        <input type="text" name="name" value="{{ $category->name }}" class="form-control" />
        <br />
        <input type="submit" class="btn btn-primary" value="Update" />
        <br/><br/>
    </form>
</div>
@endsection
