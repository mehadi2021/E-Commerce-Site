
@extends('admin.master')
@section('content')
          <div class="tile">
            <h3 class="tile-title">Vertical Form</h3>
            <div class="tile-body">
              <form action="{{ url('category/store') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label class="control-label">Category Name</label>
                  <input class="form-control" type="text" name="name" placeholder="Enter full name">
                </div>
                <div class="form-group">
                  <label class="control-label">Category Details</label>
                  <input class="form-control" type="email"  name="details" placeholder="Enter email address">
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
