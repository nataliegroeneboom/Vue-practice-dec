# Vue-practice-dec - Section 4.2: Controlling CSS with v-bind

``` CSS
span{font-size: 40px;}
p{font-size: 40px}
.red_font{color: red}
.blue_background{background: blue}
.heavy_font{font-weight: bold}
```

``` html
<p v-bind:class={red_font:true}>I am a p tag</p>
```
or for more than one

``` html
<p v-bind:class='classObject'>I am a p tag</p>
```

``` javascript
data:{
  classObject: {
    red_font: true,
    blue_background: true
  }

},
```
### Conditional Rendering in computed
You can't assign the json object directly in a computed method, must be an anonymous function.  
``` javascript
computed:{
  class_object: function(){
        return{
          red_font:true,
          blue_background:true
        }
     }
},
```

### Conditional in data and Rendering in computed
``` javascript
const vm = new Vue({
  el: '#app',
  data:{
    switch_one: true,
    switch_two: false
  },
  computed:{
    class_object: function(){
          return{
            red_font:this.switch_one,
            blue_background:this.switch_two
          }
       }
  },
  methods: {}
})
```
