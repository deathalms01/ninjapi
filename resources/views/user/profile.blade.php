@extends('layouts.app')

<style type="text/css">
	.profile-img{
		max-width: 150px;
		border: 5px solid #fff;
		border-radius: 100%;
		box-shadow: 0 2px 2px rgba(0,0,0,0.3);
	}
</style>

@section('content')
<center>
<div class="row">
	<div class="col-md-2 col-md-offset-5">
		<div class="panel panel-default">
			<div class="panel-body text-centered">
				<img class="profile-img" src="/images/{{ Auth::user()->image }}">
				<h1>{{ $user->name }} {{ $user->surname }}</h1>
				<h5>{{ $user->type }}</h5>
				<h5>{{ $user->email }}</h5>
				<h5>({{ Carbon\Carbon::createFromFormat('Y-m-d', $user->dob)->age }} years old)</h5>
				@if(Auth::user()->id == $user->id)
					<form action="../admin/{{ $user->id }}/edit">
						<input type="submit" class="btn btn-primary" value="edit">
					</form>
				@endif
			</div>
		</div>
	</div>
</div>
@endsection