@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>

                <div class="panel-body">
                   @foreach($all as $one)
				   <h2>
					   <a href="{{asset('product/'.$one->id)}}" class="btn btn-success">
					   {{$one->name}}
					   </a>
				   </h2>
				   <div class="my_text">
				   @if($one->photo)
				   <img src="{{asset('/public/uploads/thumb/'.$one->photo)}}"/>
					@else
					<img src="{{asset('/public/uploads/thumb/'.no_photo.jpg)}}"/>
					@endif				
				   {!!$one->body!!}
				   </div>
				   <hr />
				   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
