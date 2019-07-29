@extends('layouts.app')


@section('content')
    
    <div class="my-4">
        <a href="/posts" class="btn btn-light shadow-sm"> Go Back </a>
    </div>
    <h1> {{ $post->title }} </h1>
    <div>
            <small> Author:  </small>
            <small class="ml-auto"> Written on: {{$post->created_at}} </small>
    </div>
    <hr>

    <div class="p-5 bg-white shadow-sm">
        {{$post->text}}
    </div>

    <div class="my-4">
        <a href="/posts/{{$post->id}}/edit" class="btn btn-warning shadow-sm px-4"> Edit </a>

        <form class="form-inline" method="post" action="{{ route('posts.destroy', $post->id) }}" style="display: inline">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-danger shadow-sm px-3">
        </form>

    </div>
@endsection