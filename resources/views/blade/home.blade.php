@extends('layouts.master')

@section('title')
	NinjaPI - Social Media Investigation
@endsection

@section('site-name')
	NinjaPI
@endsection

@section('head')
	<div class="inner cover">
            <h1 class="cover-heading">
            NinjaPI</h1>
            <p class="lead">Social Media investigator</p>
            <form method="post" action="./search">
              {{ method_field('POST') }}
              {{ csrf_field() }}
              <div class="lead"><input type="text" name = "search" style="width: 600px; color: #333333; border-radius: 5px;"></div>

              <div class="lead" style="display: inline;">
                <input type="submit" href="#" class="btn btn-lg btn-default" style="width: 140px;" value = "Facebook">
                  <input type="submit" class="btn btn-lg btn-default" style="width: 140px;" value = "Twitter">
              </div>
            </form>
            
          </div>
@endsection