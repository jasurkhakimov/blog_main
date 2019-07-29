@extends('layouts.app')

@section('content')
    
    <div class="card mt-4">
        <div class="card-header">
            Create New Post
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
                <hr>
            @endif

            <form action="{{ route('posts.store') }}" method="post">
                <div class="form-group">
                @csrf
                  <label for="title">Title of your Post</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="Enter some title here...">
                </div>
                <div class="form-group">
                    <label for="text"> Text pf your Post </label>
                    <textarea class="form-control" name="text" id="text" cols="30" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-primary"> Submit </button>

            </form>


        </div>
    </div>

@endsection