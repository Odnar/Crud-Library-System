@extends('app')
 
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
        </li>
        <li class="nav-item">
        <h1 class="page-header text-center">Borrowing Page</h1>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="row">
    <div class="col-md-12 col-md-offset-1">
        <h2 >List of Books
        </h2>
        
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-md-offset-1">
        <table class="table table-bordered table-responsive table-striped">
            <thead>
                <th>ISBN</th>
                <th>Book Name</th>
                <th>Author</th>
                <th>Quantity</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($books as $booksshow)
                    <tr>
                        <td>{{$booksshow->ISBN}}</td>
                        <td>{{$booksshow->Bookname}}</td>
                        <td>{{$booksshow->Author}}</td>
                        <td>{{$booksshow->Quantity}}</td>
                        <td> 
                        <a href="#borrowed{{$booksshow->id}}" data-bs-toggle="modal" class="btn btn-success"><i class='fa fa-book'></i> Borrow Books</a>  
                            @include('borrowedmodal')
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$books->onEachSide(1)->links()}}
    </div>
</div>
@endsection