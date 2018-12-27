# Vue-practice-dec - Section 6.3: using an original event on component tags

All events installed on the component tag are regarded as a self defined event.  For example this would not work:

``` html
<comp v-on:click='alert'></comp>
```
``` javascript
var vm = new Vue({
  el:'#app',
  data: {  },
  methods:{
    alert: function(){
      alert('hello')
    }
  },
})
```

The solution is to add a native modifier, now the click event is regarded as an original event.
``` html
<comp v-on:click.native='alert'></comp>
```
