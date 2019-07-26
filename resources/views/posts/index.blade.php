@extends('layouts.app')

@section('content')
    <h1> Posts </h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="article">
                <img src="https://images.pexels.com/photos/177557/pexels-photo-177557.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img-fluid" >
                <div class="article-body">
                    <div class="article-header">
                        {{ $post->title }}
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
    @else
        <p> No Posts found </p>
    @endif
@endsection