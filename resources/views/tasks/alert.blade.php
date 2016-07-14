  <div class="container" id="app">
      <alert>
      <strong>@{{'General!' | uppercase }}</strong>
      @{{'5123123' | currency '€'}}
      <pre>
        @{{$data | jsonIt }}
      </pre>
      <ul class="list-group" >
        <li class="list-group-item" v-for="person in people | role 'student '">
          <span class="badge">5</span>
          @{{ person.name}}
        </li>
      </ul>
    </alert>
    
    <alert type="success">
      <strong>Success!</strong>
      Your account has been updated.
    </alert>
    
    <alert type="error">
      <strong>Error!</strong>
      Your account has not been updated.
    </alert>

    <message @new-message ="handleNewMessage"></message>

    <template id="message-template">
        <input type="text" name="" id="input" class="form-control" 
      v-model="message" 
      @keyup.enter="storeMessage">
    </template>
  </div>

  