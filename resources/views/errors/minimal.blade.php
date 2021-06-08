<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body style="background-color: #28343D;">

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card" style="width: 390px;">
            <div class="card-body text-center">
                <h5 class="card-title ">
                    @yield('code')
                </h5>
                <p class="card-text"><strong> @yield('message') </strong></p>
                <span class="text-muted">@yield('description')</span>

            </div>

            <div class="card-footer text-center">
                <a href="{{ route('root') }}" class="btn btn-primary">
                    Voltar
                </a>
            </div>
        </div>
    </div>

</body>

</html>
