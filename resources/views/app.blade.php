<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body>

        <div id="app"></div>

        <footer class="page-footer blue darken-2 listra-footer">
            <div class="container">
                <div class="row">
                    <div class="col s12 center">
                        <h5 class="white-text">Anderson Dutra</h5>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container center">
                    &copy; 2019
                </div>
            </div>
        </footer>
        <script src="{{ (env('APP_ENV') === 'development') ? mix('js/main.js') : asset('js/app.js') }}"></script>
    </body>
</html>
