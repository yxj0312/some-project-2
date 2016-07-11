import Vue from 'vue';
import Profile from './Profile.vue';
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
// 
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
// 
// 
new Vue({
    el: '#app2',
    data: {
        message: 'Hello'
    }
});
// Vue.component('counter',{
//   template:'#counter-template',
//   props:['subject'],
//   data:function() {
//     return {
//       count:0
//     };
//   }
// });
new Vue({
    el: '#app3',
    data:{
      points:50,
      first:'Xiajun',
      last:'Yan',
      fullname:'Xiajun Yan',
    },
    computed: {
      skill:function() {
        if(this.points <=50) {
          return 'B';
        }
        return 'A';
      },
      fullname:function() {
        return this.first + ' ' + this.last;
      },
    },
    // watch:{
    //   first:function(first){
    //     this.fullname = first + ' ' + this.last;
    //   },
    //   last:function(last){
    //     this.fullname =   this.first + ' ' + last;
    //   },
    // },
    methods: {
        handleIt: function() {
            alert('Handled');
        },
        minusCount: function() {
            this.count -= 1;
        }
    },
    components: {
        counter: {
            template: '#counter-template',
            props: ['subject'],
            data: function() {
                return {
                    count: 0
                };
            }
        }
    }
});
new Vue({
    el: '#app',
    data: {
        newTodo: '',
        todos: [{
            text: 'Add some todos'
        }]
    },
    methods: {
        addTodo: function() {
            var text = this.newTodo.trim()
            if (text) {
                this.todos.push({
                    text: text
                })
                this.newTodo = ''
            }
        },
        removeTodo: function(index) {
            this.todos.splice(index, 1)
        }
    }
});