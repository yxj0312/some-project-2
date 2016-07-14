<form action="/tasks/1" method="POST" role="form" id = "app7" v-ajax complete="Okay, the task has been deleted.">
	{{ method_field('DELETE') }}
	{{ csrf_field() }}

	<legend>Form titles</legend>
	<div class="form-group">
		<label for="">label</label>
		<input type="text" class="form-control" id="" placeholder="Input field">
	</div>
	<button type="submit" class="btn btn-primary">Delete Task</button>
</form>