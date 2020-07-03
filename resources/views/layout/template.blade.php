<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"/>
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"/>
    <title>Ishcola21</title>
</head>
<body>
    @auth
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="navbar-nav col-md-10">
            <a class="navbar-brand" href="#">Ishcola21</a>
            <div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('teste.index')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('teste.create')}}">+Provas</a></li>
                </ul>
            </div>
        </div>
        <div class="navbar-nav col-md-1">
            <a class="nav-item" style="color: white;"><small>{{ auth()->user()->email }}</small></a>
        </div>
        <div class="navbar-nav col-md-1">
            <form action="{{ route('logout') }}" method="POST">
            @csrf
                <input class="btn btn-dark" type="submit" name="logout" value="logout"/> 
            </form>
        </div>
    </nav>
    @endauth
    
    @if (Session::has('mensagem'))
    <div class="container pt-3 alert alert-warning">
        {{ Session::get('mensagem') }}
    </div>
    @endif
    
    <div class="container pt-3">
        @yield('content')
    </div>

</body>

</html>