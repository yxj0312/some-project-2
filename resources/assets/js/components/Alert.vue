<template>
      <div  transition="fade" >
      <div  class="Alert Alert--{{ type | capitalize }}" v-show="show">
        <slot></slot>
        <span class="Alert__close" v-show="important" @click="show = false"> 
          &times       
        </span>
      </div>
        
      </div>
</template>

<script>
export default  {
  props: {
    type:{ default: 'info' },
    timeout: { default: 3000 },
    important: {
      type:Boolean,
      default:false
    }
  },

    data() {
    //Set the initial state to true
    return { show: true };
  },

  //We can also do it with vue transition!
  ready() {
    if(!this.important) {
       setTimeout(
       () => this.show = false,

       this.timeout
      )
  }

    }
   

}

</script>

<style>
  .Alert {
    padding:10px;
    position: relative;
  }
  .Alert--Info {
      background: #e3e3e3;
  }
  .Alert--Success {
    background:green;
    color:white;
  }

  .Alert__close{
    position:absolute;
    top:10px;
    right:10px;
    cursor:pointer;
  }

  .fade-transition {
    transition:opacity .4s ease;
  }

  .fade-leave {
    opacity:0;
  }
</style>


