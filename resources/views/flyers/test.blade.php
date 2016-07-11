<div class="container">
	<div id="app">
  <input v-model="newTodo" v-on:keyup.enter="addTodo">
  <ul>
    <li v-for="todo in todos">
      <span>@{{ todo.text }}</span>
      <button v-on:click="removeTodo($index)">X</button>
    </li>
  </ul>
</div>
</div>


<div class="container-fluid">
  <div id="app2">
  <h3> @{{message}}</h3>
   <input v-model="message">
   <pre>
     @{{ $data | json}}
   </pre>
  </div>
</div>

<div class="container">

  <div id="app3">
  <button type="submit" class="btn btn-primary" @click="count +=1">LIKE: @{{count}}</button>
  <button type="submit" class="btn btn-primary" @click="minusCount">DISLIKE: @{{count}}</button>
  <h1>@{{skill}}</h1>
  <input type="text" name="" id="input" class="form-control" value="" v-model="points">

  <h1>@{{fullname}}</h1>
  <input type="text" name="" id="input" class="form-control" value="" v-model="first" placeholder="First Name">
  <input type="text" name="" id="input" class="form-control" value="" v-model ="last" placeholder="Last Name">

  <counter subject="LIKE"></counter>
  <counter subject="DISLIKE"></counter>
  
  <template id="counter-template">
    <h1>@{{subject}}</h1>
    <button @click="count +=1">Increment @{{count}}</button> 
  </template>

    <form action="" method="POST" role="form" enctype="multipart/form-data" @submit.prevent="handleIt">
    {{ csrf_field() }}

      <legend>Street</legend>
      <div class="alert alert-danger" v-show="!street">
         You must enter a street
      </div>
      <textarea name="street" id="input" class="form-control" rows="3" v-model="street"></textarea>
    <pre>
     @{{ $data | json}}
   </pre>
      <button type="submit" class="btn btn-primary" v-if="street">Update</button>
    </form>
  </div>
</div>