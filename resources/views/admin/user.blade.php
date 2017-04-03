
@extends('home')

@section('panel-title')
    Users
@endsection

@section('panel-body')

        <a href="{{ url('/admin/create') }}" class="btn btn-primary" style="color: white !important;">Create User</a>
    
        <div class="table-responsive">          
            <table class="table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Lastname</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Created By</th>
                    <th>Created At</th>
                  </tr>
                </thead>
                @foreach($data as $user)
                    @if( $user->id != Auth::user()->id )
                        <tbody>
                          <tr>
                            <td><a href="/profile/{{ $user->username }}" style="color: #303030 !important">{{ $user->name }}</a></td>
                            <td>{{ $user->surname }}</td>
                            <td><a href="/profile/{{ $user->username }}" style="color: #303030 !important">{{ $user->username }}</a></td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->type }}</td>
                            <td>{{ $user->created_by }}</td>
                            <td>{{ $user->created_at }}</td>
                            @if(Auth::user()->type == 'admin')
                                <form method="post" action="/admin/{{ $user->id }}" onsubmit = 'return confirmDelete()'> 
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <td><input type="submit" class="btn btn-danger btn-sm" value="delete"></td>
                                </form>
                            @endif
                          </tr>
                    </tbody>
                    
                    @endif
                @endforeach

            </table>
        </div>
    

    <center>
    {{ $data->links() }}
    </center>

<script type="text/javascript">
    function confirmDelete() {
        var result = confirm('Are you sure you want to delete?');

        if (result) {
                return true;
        } 
        else 
        {
                return false;
        }
    }
</script>

@endsection