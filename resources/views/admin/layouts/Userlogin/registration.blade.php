
@extends('admin.master')
@section('content')


          <div class="tile">
            <h3 class="tile-title">Vertical Form</h3>
            <div class="tile-body">
                 <form method="POST" action="{{ route('register') }}">
                        @csrf
                <div class="form-group">
                  <label class="control-label">Name</label>
                     <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                  <label class="control-label">Email</label>
                   <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                   <div class="form-group">
                  <label class="control-label">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                   <div class="form-group">
                  <label class="control-label">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                </div>
                   <div class="tile-footer">
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
              </form>
            </div>

          </div>
        </div>
                     </form>
            </div>
          </div>
    @endsection
