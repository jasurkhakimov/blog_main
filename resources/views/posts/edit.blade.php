@extends('layouts.app')

@section('content')
    
    <div class="card">
        <div class="card-header">
            Edit Post
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{route('posts.update', $post->id)}}" method="post">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="title"> Title </label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="text"> Text </label>
                    <textarea class="form-control" name="text" id="text" cols="30" rows="10">{{ $post->text }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">
                    Update
                </button>

            </form>


        </div>
    </div>

@endsection