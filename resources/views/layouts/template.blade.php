<!DOCTYPE html>
<html lang="pt-br">
    <head>        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="css/style.css" rel="stylesheet"> -->        
        <title>@yield('title')</title>
        <!-- <script src="https://cdn.tailwindcss.com"></script> --> <!-- Esta dando erro essa linha -->       
             
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

       
        
        <link rel="stylesheet" type="" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="" href="//cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

        <link rel="stylesheet" type="" href="assets/datatables/dataTables.bootstrap5.min.css">

        
        
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
            <a class="nav-link active" aria-current="page" href="{{route('produtos')}}">Produtos</a>
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
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
        </div>
    </div>
    </nav>


                       
    @yield('content')      
      
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="//cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

        
        <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
        <script src="{{ URL::asset('assets/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ URL::asset('assets/datatables/dataTables.bootstrap5.min.js')}}"></script>
        <script src="{{ URL::asset('assets/datatables/datatables-demo.js') }}"></script>
        

        <script>
            $(document).ready(function () {
            $('#dataTable').DataTable();
            });
        </script>        
    
    </body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>





<!-- Scripts DataTables codigo do curso não funcionou--> 
<!-- <script src="{{ URL::asset('assets/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('assets/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ URL::asset('assets/datatables/datatables-demo.js') }}"></script> -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</html>


        