
<!-- Delete Returned Modal -->

<div class="modal fade" id="delete{{$return->id}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Delete Member</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {!! Form::model($return, [ 'method' => 'delete','route' => ['return.delete', $return->id] ]) !!}
                <h4 class="text-center">Are you sure you want to delete Member?</h4>
                <div class="input-group mb-3">
                <span class="input-group-text">Full Name</span>
                <input readonly type="text" class="form-control" name = "Fullname" value = "{{$return->Fullname}}">
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Address </span>
                <input readonly type="text" class="form-control" name = "Address" value = "{{$return->Address}}">
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Contact Number</span>
                <input readonly type="text" class="form-control" name="Contactnumber" value = "{{$return->Contactnumber}}">
                </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Book Name</span>
                <input readonly type="text" class="form-control" name = "Bookname"value = "{{$return->Bookname}}">
                </div>
                <div class="input-group mb-3" >
                <span class="input-group-text">Date Borrowed</span>
                <input readonly type="text" class="form-control" value = "{{$return->DateBorrowed}}"  >
                </div>
                <div class="input-group mb-3" >
                <span class="input-group-text">Date Returned</span>
                <input readonly type="text" class="form-control" value = "{{$return->DateReturn}}"  >
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