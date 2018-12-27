# Vue-practice-dec - Section 6.2: Sending out multiple values simultaneously

First we have to create a method to help us allocate the two values.
``` html
<comp v-on:relay='allocate'></comp>
```
Define the method in the vue instance, taking two arguments v1 and v2 and assign content1 and content2 to the arguments

``` javascript
var vm = new Vue({
  el:'#app',
  data: {
    content1: "Controlled by content1",
    content2: "Controlled by content2",
  },
  methods:{
    allocate: function(v1, v2){
      this.content1 = v1
      this.content2 = v2
    }
  },
})
```
