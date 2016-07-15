<!DOCTYPE html>
<html>
<head>
  <title>Alert</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="app1">
	@if (session()->has('Status'))
	<alert type="success" important>{{ session('Status')}}</alert>	
	@endif
	</div>

	<div id="app2">
		<button @click="render">Click to Do Amazingness Render Glory</button>
	</div>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>