<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Empresa')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .activo a {
            color: red;
            text-decoration: underline;
        }
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        nav {
            background-color: #343a40;
        }
        nav a {
            color: white !important;
            padding: 15px;
            display: inline-block;
        }
        nav a:hover {
            background-color: #495057;
            color: white !important;
        }
        .container {
            flex: 1;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }
        .servicios-container {
            text-align: left;
            flex: 1;
        }
        .pagination {
            justify-content: center;
        }
        .page-item .page-link {
            background-color: #343a40;
            color: white;
        }
        .page-item .page-link:hover {
            background-color: #495057;
            color: white;
        }
        /* Ajuste del margen para formularios de edición */
        .container form {
            margin-top: 0 !important;
        }
    </style>
</head>
<body>
    <nav>
        <table class="table table-bordered">
            @include('partials.nav')
        </table>
    </nav>
    <div class="container">
        @include('partials.sesion-estado')
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>