<div class="container" id="app6">
	{{-- <tasks list="{{ json_encode($tasks) }}"></tasks> --}}
	{{-- <tasks list="{{$tasks}}"></tasks> --}}
	{{-- <tasks></tasks> --}}
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


<div id="clock">	
	<template id="clock-min">
		<div></div>
	</template>
	<template id="clock-hour">
		<div></div>
	</template>
	<template id="clock-sec">
		<div></div>
	</template>
	<template id="clock-time">
		<div>@{{myMessage}}</div>
	</template>
	
    <template id="clock-template">
        <div>
    	  <min-component v-ref:min></min-component>
    	  <hour-component v-ref:hour></hour-component>
    	  <sec-component v-ref:sec></sec-component>
    	  <time-component :my-message="time"></time-component>
    	</div>
    </template>
    <clock v-ref:clock></clock>
</div>