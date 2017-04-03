@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-main">
                <div class="panel-heading">
                    @yield('panel-title')
                    <!--Dashboard-->
                </div>
                
                <div class="panel-body">
                    @yield('panel-body')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
