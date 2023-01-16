<!-- Borrowed Modal -->
<div class="modal fade" id="borrowed{{$booksshow->id}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Borrow Books</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
               {!! Form::model($booksshow, [ 'method' => 'patch','route' => ['borrowed.save', $booksshow->id] ]) !!}
               <input type="hidden" class="form-control" name ="id" value = "" required>
                <div class="input-group mb-3">
                <span class="input-group-text">Full Name</span>
                <input type="text" class="form-control" name ="Fullname" value = "" required>
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Address </span>
                <input type="text" class="form-control" name ="Address" value = "" required>
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Contact Number</span>
                <input type="number" class="form-control" name ="Contactnumber" value = "" required>
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Date Borrowed</span>
                <input  type="Date" class="form-control" name ="DateBorrowed" required>
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Book Name</span>
                <input readonly type="text" class="form-control" name ="Bookname" value = "{{$booksshow->Bookname}}">
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">ISBN </span>
                <input readonly type="text" class="form-control" name ="ISBN" value = "{{$booksshow->ISBN}}">
                </div>
                <input  type="hidden" class="form-control" name ="Quantity" value = "1" required>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
            {!! Form::close() !!}
        </div>
    </div>
  </div>
</div>

