# Vue-practice-dec - Section 3
In this Branch I am practicing v-on.  Work is seen in vue.html file

``` html
<div id='app'>
<button v-on:click="sayhi">Click Me</button>
</div>
```

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

## You can pass arguments
``` html
<div id='app'>
<button v-on:click="sayhi('argument value', 'argument value 2')">Click Me</button>
</div>
```

``` javascript
const vm = new Vue({
  el: '#app',
  data:{},
  methods: {
    sayhi:function(v, v2){
      alert(v+v2)
    }
  }
})
```


## A shortcut @ sign
``` html
<div id='app'>
<button @click="sayhi('argument value', 'argument value 2')">Click Me</button>
</div>
```

## An Inline Method - boolean example

``` html
<button @click="message=!message">Click Me</button>
```

``` javascript
const vm = new Vue({
  el: '#app',
  data:{
    message: true
  },
  methods: {
  }
})
```
