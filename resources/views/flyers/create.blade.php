

@extends('layouts.app')

@section('content')
<div class="container">
	<h1>
		Selling Your House
	</h1>
		
		<div class="row">
			<form enctype="multipart/form-data" action="/flyers" method="POST" role="form" class="col-md-6">
				@include('flyers.form')
		
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				
			</form>
		</div>
		

</div>
@stop