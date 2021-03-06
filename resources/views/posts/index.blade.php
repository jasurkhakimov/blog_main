@extends('layouts.app')

@section('content')
    <h1 class="my-4"> Posts 
        @if(Auth::user()->email == 'admin@gmail.com')
            <a href="/posts/create/" class="btn btn-light text-primary"> Create New Post </a>
        @endif
    </h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="article mb-4">
                <img src="https://images.pexels.com/photos/177557/pexels-photo-177557.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img-fluid" >
                <div class="article-body">
                    <div class="article-header">
                        <a href="/posts/{{$post->id}}"> {{ $post->title }} </a>
                    </div>
                    <div class="article-text">
                        {{ $post->text }}
                    </div>
                    <div class="created">
                        <span class="author"> John Doe </span>
                        <span class="time"> {{ $post->created_at }} </span>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
        <p> No Posts found </p>
    @endif
@endsection