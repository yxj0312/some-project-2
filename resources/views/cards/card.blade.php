@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">All Cards</div>
				<div class="panel-body">
					@foreach ($card as $cards)
					<li><a href="cards/{{ $cards->id }}">{{$cards->title}}</a></li>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@stop