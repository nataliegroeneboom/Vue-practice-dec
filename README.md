# Vue-practice-dec - Section 8: Vue API - watch

Watch option for monitoring value changes, where msg is the property name and its value is a callback function.  The first argument value is the new value and second is the previous value.

``` html
<input v-model='msg'>
```

``` javascript
var vm = new Vue({
  el: "#app",
  data: {
    msg: 'apple'
  },
  watch: {
    msg: function(newValue, oldValue){
      console.log(newValue, oldValue)
    }
  }
})
``` 
