<!-- Return Modal -->
<div class="modal fade" id="return{{$borrowed->id}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Edit Member</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                {!! Form::model($borrowed, [ 'method' => 'patch','route' => ['return.update', $borrowed->id] ]) !!}
                <div class="input-group mb-3">
                <span class="input-group-text">Full Name</span>
                <input readonly type="text" class="form-control" name ="Fullname" value = "{{$borrowed->Fullname}}">
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Address </span>
                <input readonly type="text" class="form-control" name ="Address" value = "{{$borrowed->Address}}" >
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Contact Number</span>
                <input readonly type="text" class="form-control" name ="Contactnumber" value = "{{$borrowed->Contactnumber}}">
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Book Name</span>
                <input readonly type="text" class="form-control" name ="Bookname" value = "{{$borrowed->Bookname}}">
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Book Name</span>
                <input readonly type="text" class="form-control" name ="ISBN" value = "{{$borrowed->ISBN}}">
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Date Borrowed</span>
                <input readonly type="Date" class="form-control" name ="DateBorrowed" value = "{{$borrowed->DateBorrowed}}">
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Date Return</span>
                <input type="Date" class="form-control" name ="DateReturn" required>
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

<!-- Delete Borrowed Modal -->
<div class="modal fade" id="delete{{$borrowed->id}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Delete Member</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {!! Form::model($borrowed, [ 'method' => 'delete','route' => ['return.delete', $borrowed->id] ]) !!}
                <h4 class="text-center">Are you sure you want to delete Member?</h4>
                <div class="input-group mb-3">
                <span class="input-group-text">Full Name</span>
                <input readonly type="text" class="form-control" name = "Fullname" value = "{{$borrowed->Fullname}}">
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Address </span>
                <input readonly type="text" class="form-control" name = "Address" value = "{{$borrowed->Address}}">
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Contact Number</span>
                <input readonly type="text" class="form-control" name="Contactnumber" value = "{{$borrowed->Contactnumber}}">
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Book Name</span>
                <input readonly type="text" class="form-control" name = "Bookname"value = "{{$borrowed->Bookname}}">
                </div>
                <div class="input-group mb-3" >
                <span class="input-group-text">Date Borrowed</span>
                <input readonly type="text" class="form-control" value = "{{$borrowed->DateBorrowed}}"  >
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
