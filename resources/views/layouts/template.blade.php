<!DOCTYPE html>
<html lang="pt-br">
    <head>        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">        
        <title>@yield('title')</title>
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->        
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
       
        

        <link href="{{ URL::asset('assets/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    
    

        
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="produtos">Produtos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="clientes">Clientes</a>
            </li>
            
            <li class="nav-item">
            <a class="nav-link" href="usuarios">Usuários</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>


                       
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

<!-- Scripts DataTables -->
<script src="{{ URL::asset('assets/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('assets/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ URL::asset('assets/datatables/datatables-demo.js') }}"></script>
        