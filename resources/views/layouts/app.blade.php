<!doctype html>
<html lang="en">
  <head>
    <title>Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700|Play:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/app.css">
    
  
</head>
  <body>
      
    @include('include.navbar')

      <main class="container" id="app"> 
          @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    {{$error}}
                </div>
            @endforeach
          @endif
          
          @if(session('success'))
              <div class="alert alert-success">
                  {{session('success')}}
              </div>
          @endif
          
          @if(session('error'))
              <div class="alert alert-danger">
                  {{session('error')}}
              </div>
          @endif

          @yield('content')

      </main>

      <script src="{{ asset('js/app.js') }}"></script>

  </body>
</html>