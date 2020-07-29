@extends('app')

@section('content')
<div class="col-lg-12">
    <h1 class="my-4">Create New Category</h1>

    <form action="{{ route('categories.store') }}" method="post">
        @csrf

        Name:
        <br />
        <input type="text" name="name" value="" class="form-control" />
        <br />
        <input type="submit" class="btn btn-primary" value="Save" />
        <br/><br/>
    </form>
</div>
@endsection
