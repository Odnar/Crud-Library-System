<!-- Add Modal -->
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="addnewModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addnewModalLabel">Add New Books</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                {!! Form::open(['url' => 'savebooks']) !!}
                <div class="input-group mb-3">
                <span class="input-group-text">ISBN</span>
                <input  type="number" class="form-control" name ="ISBN" required>
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Book Name</span>
                <input  type="text" class="form-control" name ="Bookname" required>
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Author </span>
                <input  type="text" class="form-control" name ="Author"  required>
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Quantity </span>
                <input  type="number" class="form-control" name ="Quantity"  required>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
            {!! Form::close() !!}
        </div>
    </div>
  </div>
</div>