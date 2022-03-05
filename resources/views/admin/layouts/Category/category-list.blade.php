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
                  <th>Category List</th>
                </tr>
              </thead>
              <tbody>
              
             @foreach ($lists as $e=>$list )
               <tr>
                   <td>{{ $e+++1 }}</td>
                  <td>{{ $list->name }}</td>
                  <td>{{ $list->details }}</td>
                     </tr>
             @endforeach
                
             
              </tbody>
            </table>
          </div>
        </div>
        @endsection