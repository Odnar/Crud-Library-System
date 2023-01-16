<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel 9 Crud - Bootstrap 5 Modal Add Edit and Delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="/css/main.css" rel="stylesheet">
    <script src="/js/main.js"></script>
</head>
<body>
@include('sweetalert::alert')
<div class="container">
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>CRUD Library System</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="{{url('show')}}">Home</a>
                </li>
                <li>
                    <a href="{{url('borrowed')}}">Borrowing Books</a>
                </li>
                <li>
                    <a href="{{url('borrowedbooks')}}">Return Books</a>
                </li>
                <li>
                    <a href="{{url('returnbooks')}}">Returned Books</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
        @yield('content')
            
    </div>
</div>
@include('modal')
 
</body>
</html>