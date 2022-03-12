
@extends('admin.master')
@section('content')
          <div class="tile">
            <h3 class="tile-title">Vertical Form</h3>
            <div class="tile-body">
              <form action="{{ url('product/store') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label class="control-label">Product Name</label>
                  <input class="form-control" type="text" name="name" placeholder="Enter full name">
                </div>
                  <div class="form-group">
                  <label class="control-label">Product Price</label>
                  <input class="form-control" type="text"  name="price" placeholder="Enter email address">
                </div>
                <div class="form-group">
                  <label class="control-label">Product Details</label>
                  <input class="form-control" type="text"  name="details" placeholder="Enter email address">
                </div>
                <div class="form-group">
                  <label class="control-label">Category Name</label>
               
                 <select class="form-control">
                        @foreach($lists as $list)
                         <option  value="">Select Your Option</option>
   <option  value="{{ $list->id }}">{{ $list->name }}</option>
    @endforeach
</select>
                 
                </div>
                   <div class="tile-footer">
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
              </form>
            </div>

          </div>
        </div>
                     </form>
            </div>
          </div>
    @endsection
