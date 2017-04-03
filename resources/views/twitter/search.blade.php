@extends('layouts/home')

@section('title', 'NinjaPi Detective Agency')

@section('content')

 <div class="col-sm-12" style="margin-bottom: 20px">
 	<h1 style="color: rgba(29, 163, 206, 0.89">
 		NinjaPi Detective Agency
 	</h1>
 	<h4>
 		Social Media Investigator
 	</h4>
 </div>
 <form action="./search">

 <input id="input-search" type="text"
 	    name="search-bar" 
 	    class="form-control"
        placeholder="Enter the name of suspected person to search" 
        style="text-align: center; font-size: .8em; border-radius: 0" />
 <button type="submit" 
 		 class="btn btn-default" 
 		 style="margin-top: 10px; border-radius: 0; width: 100px">Search</button>
 </form>

@endsection
