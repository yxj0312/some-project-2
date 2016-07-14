import Vue from 'vue';
import VueResource from 'vue-resource';
// window.Vue = Vue;
Vue.use(VueResource);

import Alert from './components/Alert.vue';

// var Vue = require('vue');
// var VueResource = require('vue-resource');
// // window.Vue = Vue;
// Vue.use(VueResource);


// import Profile from './Profile.vue';



// new Vue({
//   el: '#app',
//   // components: { Profile }
//   data:{
//    message:'Hello Vue.js!'
//   }
// });
// new Vue({
//   el: '#app',
//   data: {
//     // message: 'Hello Vue.js!',
//     todos: [
//       { text: 'Learn JavaScript' },
//       { text: 'Learn Vue.js' },
//       { text: 'Build Something Awesome' },
//       { text:'QIBU'}
//     ]
//   }
// });

// new Vue({
//   el: '#app',
//   data: {
//     message: 'Hello Vue.js!'
//   },
//   methods: {
//     reverseMessage: function () {
//       this.message = this.message.split('').reverse().join('')
//     }
//   }
// });


// new Vue({
//     el: '#app2',
//     data: {
//         message: 'Hello'
//     }
// });
// // Vue.component('counter',{
// //   template:'#counter-template',
// //   props:['subject'],
// //   data:function() {
// //     return {
// //       count:0
// //     };
// //   }
// // });
// new Vue({
//     el: '#app3',
//     data: {
//         points: 50,
//         first: 'Xiajun',
//         last: 'Yan',
//         fullname: 'Xiajun Yan',
//     },
//     computed: {
//         skill: function() {
//             if (this.points <= 50) {
//                 return 'B';
//             }
//             return 'A';
//         },
//         fullname: function() {
//             return this.first + ' ' + this.last;
//         },
//     },
//     // watch:{
//     //   first:function(first){
//     //     this.fullname = first + ' ' + this.last;
//     //   },
//     //   last:function(last){
//     //     this.fullname =   this.first + ' ' + last;
//     //   },
//     // },
//     methods: {
//         handleIt: function() {
//             alert('Handled');
//         },
//         minusCount: function() {
//             this.count -= 1;
//         }
//     },
//     components: {
//         counter: {
//             template: '#counter-template',
//             props: ['subject'],
//             data: function() {
//                 return {
//                     count: 0
//                 };
//             }
//         }
//     }
// });
// new Vue({
//     el: '#app',
//     data: {
//         newTodo: '',
//         todos: [{
//             text: 'Add some todos'
//         }]
//     },
//     methods: {
//         addTodo: function() {
//             var text = this.newTodo.trim()
//             if (text) {
//                 this.todos.push({
//                     text: text
//                 })
//                 this.newTodo = ''
//             }
//         },
//         removeTodo: function(index) {
//             this.todos.splice(index, 1)
//         }
//     }
// });

// new Vue({
//     el:'#app4',
//     data: {
//         // store a list of plans
//         plans:[
//             { name:'Enterprise', price:100 },
//             { name:'Pro', price:50 },
//             { name:'Personal', price:10 },
//             { name:'Free', price:0 },
//         ],
//         active: {}
//     },
//     components: {
//         plan: {
//             // template: '#plan-template',

//             props:['plan','active'],

//             computed: {
//                 isUpgrade : function() {
//                     return this.plan.price > this.active.price;
//                     //this.plan.price
//                     //this.active.price
//                 }
//             },

//             methods: {
//                 setActivePlan: function(){
//                     this.active = this.plan;
//                 }
//             }
//         }
//     }
// });

// new Vue({
//     el:"#app5",
//     data: {
//         tasks: [
//            { body: 'Go to the store', completed:false,price:100},
//            { body: 'Go to the bank', completed:false,price:100 },
//            { body: 'Go to the doctor', completed:true,price:100 }
//         ]
//     },
//     components: {
//         taskcomp: {
//             template:'#tasks-template',
//             props:['list'],
//             computed: {
//                 remaining: function() {
//                       // completedTasks = 
//                       // inProgress = !
//                     var vm = this;
//                     //  return this.list.filter(function(task){
//                     //     return !vm.isCompleted(task);
//                     // }).length;
//                     return this.list.filter(this.isInProgress).length;
//                 }
//             },
//             methods: {
//                 setPrice: function(task) {
//                     task.price = 50;
//                 },
//                 isCompleted:function(task) {
//                     return task.completed;
//                 },
//                 isInProgress:function(task) {
//                     return !this.isCompleted(task);
//                 },

//                 deleteTask: function(task) {
//                     this.list.$remove(task);
//                 },

//                 clearCompleted: function(){
//                     this.list = this.list.filter(this.isInProgress);
//                 }
//             }
//         }    
//     }
// });

Vue.component('tasks',{
    template: '#tasks-template',

    data: function(){
        return {
            list: []
        };
    },

    created: function() {

        this.fetchTaskList();
        // var vm = this;

        // $.getJSON('api/tasks', function(tasks){
        //     console.log(tasks);
        //     // console.log(data);
        //     //assign these data to a list
        //     vm.list = tasks;
        // }.bind(this));
    },

    //with api/tasks, no longer pass props through from our sever side.
    // props:['list'],

    //when this components is initially created, I want to go ahead and make a AJAX request.
    // created() is shorthand
    
    // created() {

    //     // this.list = JSON.parse(this.list);

    // },
    // 
    methods: {
        fetchTaskList: function(){
            var resource = this.$resource('api/tasks{/id}');
            resource.get({}).then((response) => {
               this.list = response.data;
            });
            // resource.update({id:5},{body:'Update task body'}).then((response) =>{
            //     this.list = response.data;
            // });
        },
            


        //       this.$http.get('api/tasks').then((response) => {
        //           console.log(response.);
        //       }, (response) => {
        //           // error callback
        //       });
        // }
            
            // $.getJSON('api/tasks', function(tasks){
            //     this.list = tasks;
            // }.bind(this));    


        deleteTask: function(task){
            this.list.$remove(task);
        },

        getTaskID:function(task) {
            console.log(task.id);
        }
    }
});

new Vue({
    el:'#app6'
});

Vue.filter('jsonIt',function(value){
    return JSON.stringify(value);
});

Vue.filter('role',function(value,role){
    return value.filter(function(item) {
        return item.role == role;
    });
});// people | role 'admin'


Vue.component('message',{
    template:'#message-template',

    data:function() {
        return { message :''};
    },

    methods: {

        storeMessage: function() {
            // console.log('Storing ' + this.message);

            // $dispatch, parent can listen for that event, which is handled 
            this.$dispatch('new-message',this.message);
            // $broadcast
            
            this.message = '';
        }
    }
});
new Vue({

    el:'#app',

    data: {
        people: [
            {name:'Joe',role:'admin'},
            {name:'Susan',role:'admin'},
            {name:'Frank',role:'student'},
            {name:'Jeffrey',role:'admin'},

        ],
        messages: []
    },

    methods:{

        handleNewMessage: function(message)  {
            this.messages.push(message);
            // console.log('Parent is handling ' + message);
        }
    },

    // events: {
    //     "new-message": function(message) {
    //         console.log('Parent is handling ' + message);
    //     }

    // },

    components: { Alert },

    ready() {

        // alert('Ready to go!');
    }
})

//Lesson
// Vue.directive('ajax',{
//     //The way of this work is:
//     //when you attach this ('ajax') directive to html tag,
//     //vue will instantly call this bind() method
//     bind: function() {

//     },
//     //Next, as soon as that finishs, the update() method will
//     //instantly be called, and theway they work is : this will 
//     //repeatly be called, whenever the bind value(value) changes
//     update: function(value) {

//     },
//     //And finally, as you might expect, when the directive is unbind,
//     //will trigger this method, where you can remove any of their listeners or same stuffs like that
//     unbind: function() {

//     }
// }); 
// // keep it simple
// Vue.directive('ajax',function(value){});

// Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('input[name="_token"]').value;

Vue.directive('ajax',{
    params: ['complete'],

    bind: function() {
        // console.log(this.params);
        //First thing we need to do, directive object, which we can fetch.
        //In our situation, we need to add a event listener to the form element
        //if you using jQuery, you could say: $(this.el).on('---')
        
        //Let's listen for when the form is submitted, and then will trigger a method called "onSubmit"
        this.el.addEventListener('submit',this.onSubmit.bind(this));
    },

    update: function(value) {
        // alert('update');
    },


    //when we trigger this, 
    onSubmit:function(e) {
        //"this"-->will no longer refer to which is bund in the bind() method (this.el.---),
        //"this" now refer to the form that will be submitted
        //so if we wanna say: no, within the context of this method, we still wanna this to refer
        //to it did before, JavaScript did it in a very weird stuffs: just make sure we bind the obeject:
        //.bind(this) in the above method
        //
        //We prevent the default action, so we do not submit the form, and instead we use
        //view resource to submit (this.vm in the following)
        e.preventDefault();
        // Vue.http.post
        // 
        // this.vm refers to the viewmodel (new Vue({el:"#app7"}))
        // Quick note on using the array syntax here:
        // a lot people don't know this with javaScript, in this example, we could say:
        // vm.$http.post or your can format it with vm.$http['post']
        // this options is very good when you referencing a variable like [requestType],
        // because obviously when you use the dot-synatax: vm.$http.requestType that's will not going to work
        
        //this.el.action = 'tasks/1'
        this.vm
            .$http[this.getRequestType()](this.el.action)
            .then(this.onComplete.bind(this))
            //change response in app/Exceptions/Handler.php
            //.success or .fail in jQuery
            .catch(this.onError.bind(this));
    },

    onComplete:function () {

        if(this.params.complete) {
            alert(this.params.complete);
        }
    },

    onError: function(response) {
        alert(response.data.message); //flash message in real life
    },

    //We need to figure out what the RequestType should be for this form.
    getRequestType: function() {
        //see the console, and find out the name of the hidden input of DELETE
        var method = this.el.querySelector('input[name="_method"]');

        //if not, we just grab the method attribute of the form
        //that will be a 'DELETE'->'delete' or 'POST'->'post'
        return (method ? method.value : this.el.method).toLowerCase();
    }
}); 
new Vue({
    el:'#app7',

    http: {
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
        }
    }
});