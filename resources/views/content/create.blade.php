@extends('master')

@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}

@stop

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>			
				
			<!-- To use these forms go to
			https://laravelcollective.com/docs/5.4/html#form-model-binding -->			
			
			{!! Form::open(array('route' => 'content.store', 'data-parsley-validate' => '')) !!} <!-- this was changed from url to route in order to use the name instead of url -->
    			
    			{{	Form::label('title', 'Title:')	}}
    			{{	Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))	}}
    			
    			{{ Form::label('slug', 'Slug:') }}
    			{{ Form::text('slug', null, ['class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255']) }}
    			
    			{{	Form::label('body', 'Post Content:')	}}
    			{{	Form::textarea('body', null, array('class' => 'form-control', 'required' => ''))	}}
    			
    			{{	Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;'))}}
    			
			{!! Form::close() !!}
			
		</div>
	</div>
</div>

@stop


@section('scripts')

 {!! Html::script('js/parsley.min.js') !!}

@stop