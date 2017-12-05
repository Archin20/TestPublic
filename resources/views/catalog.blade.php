@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h2>{{$cat->name}}</h2>

                <div class="panel-body">
                   @foreach($cat->products->all() as $one)
				   <h2>{{$one->name}}</h2>
				   @endforeach
				   
				 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
