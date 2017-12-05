@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Product</div>

                <div class="panel-body">
                   
				   <h2>
					   <a href="{{asset('product/'.$product->id)}}" class="btn btn-success">
					   {{$product->name}}
					   </a>
				   </h2>
				   <div class="my_text">
				   @if($product->photo)
				   <img width=100% src="{{asset('/public/uploads/'.$product->photo)}}"/>
					@else
					<img src="{{asset('/public/uploads/'.no_photo.jpg)}}"/>
					@endif				
				   {!!$product->body!!}
				   {{$cat->catalogs->name}}
				   </div>
				   <hr /> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
