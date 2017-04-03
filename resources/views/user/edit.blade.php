@extends('home')

@section('panel-title')
    Edit Profile
@endsection

@section('panel-body')

    <div class="form-group">
        <div class="col-md-4 col-md-offset-4">
            <center>
            <img src="/images/{{ Auth::user()->image }}" style="width:150px; height:150px; border-radius:50%; margin-right:25px;">

                <form action="../../profile/avatar" method="post" enctype="multipart/form-data">
                    <label>Update Profile Picture</label>
                    <input type="file" name="avatar">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <input type="submit" class= "btn btn-primary" value="Upload">
                </form>
            </center>
        </div>
    </div>

	<form class="form-horizontal" role="form" method="POST" action="/admin/{{ Auth::user()->id }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
                
            </div>
        </div>
    
    <div class="panel panel-default panel-main">
        <div class="panel-heading">
            <center>Account Information</center>
        </div>
    </div>

        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
            <label for="username" class="col-md-4 control-label">Username</label>

            <div class="col-md-6">
                <input id="username" type="text" class="form-control" name="username" value="{{ Auth::user()->username}}">

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
            <input id="password" type="password" class="form-control" name="password" value="{{ Auth::user()->password}}">
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
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ Auth::user()->password}}">

                    @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                    @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
            <label for="type" class="col-md-4 control-label">Type</label>

            <div class="col-md-6">
                <input id="type" type="text" class="form-control" name="type" value="{{ Auth::user()->type}}" readonly>
            </div>
        </div>

    <div class="panel panel-default panel-main">
        <div class="panel-heading">
            <center>Personal Information</center>
        </div>
    </div>
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name}}">

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
                <input id="surname" type="text" class="form-control" name="surname" value="{{ Auth::user()->surname}}">

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
                    <input id="dob" type="date" class="form-control" name="dob" value="{{ Auth::user()->dob}}">

                    @if ($errors->has('dob'))
                        <span class="help-block">
                            <strong>{{ $errors->first('dob') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email}}">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
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