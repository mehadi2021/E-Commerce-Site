 @extends('admin.master')
 @section('content')
 <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Striped Table</h3>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Category Name</th>
                  <th>Category Details</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

             @foreach ($lists as $e=>$list )
               <tr>
                   <td>{{ $e+++1 }}</td>
                  <td>{{ $list->name }}</td>
                  <td>{{ $list->details }}</td>
                   <td class=col-md-2><a button class="btn btn-success btn-xs" href=""><i class=" fa fa-check"></i></a></button>
        <a button class="btn btn-primary btn-xs" href="{{url('category/'.$list->id.'/edit') }}"><i class="fa fa-pencil"></i></a></button>
        <form action="{{url('category'.$list->id) }}" method="post">
            @csrf
            @method('delete')
        <button type="submit" onclick="return confirm('Are You Sure?')"  class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
        </form>  </td>
</tr>
             @endforeach


              </tbody>
            </table>
          </div>
        </div>
        @endsection




