# Vue-practice-dec - Section 3
In this Branch I am practicing v-on.  Work is seen in vue.html file

``` html
<div id='app'>
<button v-on:click="sayhi">Click Me</button>
</div>
```

## And javascript

``` javascript
const vm = new Vue({
  el: '#app',
  data:{},
  methods: {
   sayhi:function(){
     alert('Hello!!!')
   }
  }
})
```
