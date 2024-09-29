{{-- resources/views/admin/posts/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Post</h1>
    <form method="POST" action="{{ route('admin.posts.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
