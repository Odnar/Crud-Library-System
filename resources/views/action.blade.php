
<!-- Edit Modal -->
<div class="modal fade" id="edit{{$booksshow->id}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Edit Book</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                {!! Form::model($booksshow, [ 'method' => 'patch','route' => ['books.update', $booksshow->id] ]) !!}
                    <div class="mb-3">
                        {!! Form::label('ISBN', 'ISBN') !!}
                        {!! Form::text('ISBN', $booksshow->ISBN, ['class' => 'form-control']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('Bookname', 'Book Name') !!}
                        {!! Form::text('Bookname', $booksshow->Bookname, ['class' => 'form-control']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('Author', 'Author') !!}
                        {!! Form::text('Author', $booksshow->Author, ['class' => 'form-control']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('Quantity', 'Quantity') !!}
                        {!! Form::number('Quantity', $booksshow->Quantity, ['class' => 'form-control']) !!}
                    </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            {{Form::button('<i class="fa fa-check-square-o"></i> Update', ['class' => 'btn btn-success', 'type' => 'submit'])}}
            {!! Form::close() !!}
        </div>
    </div>
  </div>
</div>
 
<!-- Delete Modal -->
<div class="modal fade" id="delete{{$booksshow->id}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Delete Book</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {!! Form::model($booksshow, [ 'method' => 'delete','route' => ['books.delete', $booksshow->id] ]) !!}
            <div class="input-group mb-3">
            <h4 class="text-center">Are you sure you want to delete this book?</h4>
                <div class="input-group mb-3">
                <span class="input-group-text">ISBN</span>
                <input readonly type="text" class="form-control" name ="ISBN" value = "{{$booksshow->ISBN}}">
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Book Name</span>
                <input readonly type="text" class="form-control" name ="Bookname" value = "{{$booksshow->Bookname}}">
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Author </span>
                <input readonly type="text" class="form-control" name ="Author" value = "{{$booksshow->Author}}">
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Quantity </span>
                <input readonly type="number" class="form-control" name ="Quantity" max="5" value = "{{$booksshow->Quantity}}">
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            {{Form::button('<i class="fa fa-trash"></i> Delete', ['class' => 'btn btn-danger', 'type' => 'submit'])}}
            {!! Form::close() !!}
        </div>
    </div>
  </div>
</div>