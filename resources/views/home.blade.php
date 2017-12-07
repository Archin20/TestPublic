@extends('layouts.app')

@section('content')
<div class="container">
		<form action="{{asset('home')}}" method="post" enctype="multipart/form-data">
			{!! csrf_field() !!}
	  <div class="form-group">
		<label for="name">Name</label>
		@if($errors->has('name'))
		{{$errors->first('name')}}
		@endif
		<input type="text" name="name" class="form-control" id="name" placeholder="name">
	  </div>
	  <div class="form-group">
		<label for="body">Body</label>
		<textarea  class="form-control" id="body" name="body"></textarea>
	  </div>
	  <div class="form-group">
		<label for="exampleInputFile">File input</label>
		<input type="file" id="exampleInputFile" name="pict">
		<p class="help-block">Example block-level help text here.</p>
	  </div>
	 
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
    </div>
</div>
@endsection
