# Vue-practice-dec - Section 8.6: Instance Methods - $on and $once

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
