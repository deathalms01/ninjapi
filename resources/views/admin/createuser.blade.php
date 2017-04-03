@extends('home')

@section('panel-title')
    Create User
@endsection

@section('panel-body')
	<form class="form-horizontal" role="form" method="POST" action="/admin">
        {{ csrf_field() }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Name</label>

	        <div class="col-md-6">
	            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

	            @if ($errors->has('name'))
	                <span class="help-block">
	                	<strong>{{ $errors->first('name') }}</strong>
	                </span>
	            @endif
	        </div>
        </div>

        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Last Name</label>

            <div class="col-md-6">
                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}">

                @if ($errors->has('surname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('surname') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
            <label for="dob" class="col-md-4 control-label">Date of Birth</label>

                <div class="col-md-6">
                    <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}">

                    @if ($errors->has('dob'))
                        <span class="help-block">
                            <strong>{{ $errors->first('dob') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
            <label for="username" class="col-md-4 control-label">Username</label>

            <div class="col-md-6">
                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}">

                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nuserame') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>

            <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                    @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                    @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
            <label for="type" class="col-md-4 control-label">Type</label>

            <div class="col-md-6">
                <select id="type" class="form-control" name="type" value="{{ old('type') }}" style="width: 100px;">
                    @if(Auth::user()->type=='admin')
                        <option value="admin">Admin</option>
                    @endif
                    <option value="user">User</option>
                </select>
                @if ($errors->has('type'))
                    <span class="help-block">
                        <strong>{{ $errors->first('type') }}</strong>
                    </span>
                        @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </div>
    </form>
@endsection