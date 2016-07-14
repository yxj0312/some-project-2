<div class="container" id="app6">
	{{-- <tasks list="{{ json_encode($tasks) }}"></tasks> --}}
	{{-- <tasks list="{{$tasks}}"></tasks> --}}
	<tasks></tasks>
</div>

<template id="tasks-template">
<h1>
    My Tasks
</h1>
	<ul class="list-group">
	    <li class="list-group-item" v-for="task in list">
	        @{{ task.body }}
	        <button @click="deleteTask(task)">X</button>
	        {{-- <button @click="getTaskID(task)">Get ID</button> --}}
	    </li>
</ul>
</template>