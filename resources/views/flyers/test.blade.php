<div class="container">
    <div id="app">
        <input v-model="newTodo" v-on:keyup.enter="addTodo">
            <ul>
                <li v-for="todo in todos">
                    <span>
                        @{{ todo.text }}
                    </span>
                    <button v-on:click="removeTodo($index)">
                        X
                    </button>
                </li>
            </ul>
        </input>
    </div>
</div>
<div class="container-fluid">
    <div id="app2">
        <h3>
            @{{message}}
        </h3>
        <input v-model="message">
            <pre>
                @{{ $data | json}}
            </pre>
        </input>
    </div>
</div>
<div class="container">
    <div id="app3">
        <button @click="count +=1" class="btn btn-primary" type="submit">
            LIKE: @{{count}}
        </button>
        <button @click="minusCount" class="btn btn-primary" type="submit">
            DISLIKE: @{{count}}
        </button>
        <h1>
            @{{skill}}
        </h1>
        <input class="form-control" id="input" name="" type="text" v-model="points" value="">
            <h1>
                @{{fullname}}
            </h1>
            <input class="form-control" id="input" name="" placeholder="First Name" type="text" v-model="first" value="">
                <input class="form-control" id="input" name="" placeholder="Last Name" type="text" v-model="last" value="">
                    <counter subject="LIKE">
                    </counter>
                    <counter subject="DISLIKE">
                    </counter>
                    <template id="counter-template">
                        <h1>
                            @{{subject}}
                        </h1>
                        <button @click="count +=1">
                            Increment @{{count}}
                        </button>
                    </template>
                    <form @submit.prevent="handleIt" action="" enctype="multipart/form-data" method="POST" role="form">
                        {{ csrf_field() }}
                        <legend>
                            Street
                        </legend>
                        <div class="alert alert-danger" v-show="!street">
                            You must enter a street
                        </div>
                        <textarea class="form-control" id="input" name="street" rows="3" v-model="street">
                        </textarea>
                        <pre>
     @{{ $data | json}}
   </pre>
                        <button class="btn btn-primary" type="submit" v-if="street">
                            Update
                        </button>
                    </form>
                </input>
            </input>
        </input>
    </div>
</div>
<div class="container">
    <div id="app4">
        <pre>@{{ $data | json }}</pre>
        <div v-for="plan in plans">
        {{-- for each one we will use a custome component called "plan", so we will bind the plan property to current plan(:plan = "plan") --}}
            <plan :active.sync="active" :plan="plan" inline-template>
                <div>
                    @{{ $data | json }}
                    <span>
                        @{{ plan.name }}
                    </span>
                    <span>
                        @{{ plan.price }}/month
                    </span>
                    <button @click="setActivePlan" 
                            v-show="plan.name !== active.name"
                    >
                        @{{ isUpgrade ? 'Upgrade' : 'Downgrade'}}
                    </button>
                    <span v-else="">
                        Selected
                    </span>
                </div>
            </plan>
        </div>
    </div>
</div>
{{--
<template id="plan-template">
</template>
--}}







<div id="app5" class="container">
  <pre>@{{$data |json }}</pre>
    <taskcomp :list="tasks"></taskcomp>
    <taskcomp :list="[{ body:'do this', completed:false}]"></taskcomp>
</div>

<template id="tasks-template">
<h1>My Tasks 
<span v-show="remaining">(@{{ remaining }})</span>
</h1>
  <ul class="list-group" v-show="list.length">
    <li :class="{'completed':task.completed}"  
    class="list-group-item completed" 
    v-for="task in list" 
    @click="task.completed = ! task.completed"
    >
    {{-- <button class="btn btn-primary" @click="setPrice(task)">click</button> --}}

    @{{task.body}}

    <button @click="deleteTask(task)">x</button>
    
    </li>

  </ul>

  <p v-else>No tasks yet!</p>
  <button @click="clearCompleted">Clear Completed</button>
</template>