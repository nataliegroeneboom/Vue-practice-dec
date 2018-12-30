# Vue-practice-dec - Section 8.6: Event Methods - $on and $once

Both $on and $once are used to monitor events. $on will keep monitoring the named event, while $once will only monitor it once.

v-on takes two arguments, the event name and a callback function.  The callback argument will automatically be set the the value of the emit method.

### Example: $on, $once
an example of $on, the 'event' is listened to every time and the value of the message is logged to the console.  

``` html
<div id="app">
<p>the value of the MSG: {{msg}}</p>
<hr>
<button v-on:click='trigger'>TRIGGER</button>
</div>

<script type='text/javascript'>

var vm = new Vue({
  el: "#app",
  data: {
    msg: 1,
 },
 methods: {
   trigger: function(){
     this.msg++
     this.$emit(
       'event',
       this.msg
     )
   }
 }
})
vm.$on(
  'event',
  function(arg){
    console.log(arg);
  }
)
```
if vm.$on is replaced with vm.$once, we will only see the console log of the first 'event'.  

### $off
this method removes listeners.

### Example
``` html
<div id="app">
<button v-on:click='trigger_a'>Trigger Event A</button>
<button v-on:click='trigger_b'>Trigger Event B</button>
 </div>
 ```
 if no arguments are called then all listeners are unbound.
 ``` javascript
 var vm = new Vue({
   el: "#app",
   data: {},
  methods: {
    trigger_a: function(){
      this.$emit('event_a')
    },
    trigger_b:function(){
      this.$emit('event_b')
    },
    sayhi:function(){console.log('Hi!');},
 	  saybuy:function(){console.log('Buy!');},
  }
 })
 	vm.$on('event_a',vm.sayhi)
 	vm.$on('event_a',vm.saybuy)

 	vm.$on('event_b',vm.sayhi)
 	vm.$on('event_b',vm.saybuy)

 vm.$off('event_b', vm.saybuy)
 	vm.$off() // will unbind everything
  ```
  If you want to unbind event_b and the callback saybuy:
  ``` javascript
  vm.$off('event_b', vm.saybuy)
  ```
