@extends('home')

@section('panel-title')
    Recent Activities
@endsection

@section('panel-body')
	<div class="table-responsive">          
            <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Activity</th>
                    <th>Table</th>
                    <th>User ID</th>
                    <th>Reference</th>
                    <th>Date</th>
                  </tr>
                </thead>
                @foreach($logs as $log)
                    <tbody>
                    	<tr>
                    		<td>{{ $log->id }}</td>
                    		<td>{{ $log->activity }}</td>
                    		<td>{{ $log->table }}</td>
                    		<td>{{ $log->user_id }}</td>
                    		<td>{{ $log->created_id }}</td>
                    		<td>{{ $log->date }}</td>
                    	</tr>
                    </tbody>
                @endforeach

            </table>
        </div>
    <center>
    	{{ $logs->links() }}
    </center>
@endsection