<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laravel Test App</title>

    {{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('css/main.css')}}
</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">

            <ul class="nav navbar-nav">
                <li>{{ HTML::link('users/register', 'Register') }}</li>
                <li>{{ HTML::link('users/login', 'Login') }}</li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @if(Session::has('message'))
        <p class="alert">{{ Session::get('message') }}</p>
        @endif

        @yield('content')
    </div>

    {{ HTML::script('packages/jquery/jquery.min.js') }}
    {{ HTML::script('packages/bootstrap/js/bootstrap.min.js') }}
</body>
</html>