@extends('home')

@section('panel-title')
    Searches
@endsection

@section('panel-body')
	<div class="table-responsive">          
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Searched Name</th>
                    <th>PDF</th>
                </tr>
            </thead>
            
            @foreach($data as $user)
                    
                <tbody>
                    <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->subject_name }}</td>
                    <td>{{ $data->data_location }}</td>
                    </tr>
                </tbody>
                    
            @endforeach

        </table>
    </div>

    <center>
    {{ $data->links() }}
    </center>
@endsection