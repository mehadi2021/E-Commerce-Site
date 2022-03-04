
@extends('admin.master')
@section('content')


          <div class="tile">
            <h3 class="tile-title">Vertical Form</h3>
            <div class="tile-body">
              <form>
                <div class="form-group">
                  <label class="control-label">Category Name</label>
                  <input class="form-control" type="text" placeholder="Enter full name">
                </div>
                <div class="form-group">
                  <label class="control-label">Category Details</label>
                  <input class="form-control" type="email" placeholder="Enter email address">
                </div>
              </form>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
          </div>
        </div>
                     </form>
            </div>
          </div>
    @endsection
