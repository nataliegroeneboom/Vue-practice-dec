# Vue-practice-dec - Section 8.8: Lifecycle hooks and nextTick

Lifecycle hooks can be sub divided into four categories.  Create, mount, update and destroy. Each lifecycle hook is connected to an anonymous function.

### nextTick method
The example below shows a simple update method, the console log result lags a previous value.  

``` html
<p>the value of the msg2 is <b style='color:red'>{{msg2}}</b></p>
<hr/>
<button v-on:click='update'>Update msg2</button>
```   
``` javascript
var vm = new Vue({
  el: "#app",
  data: {
					msg2:0},
	methods: {
		update: function(){
			this.msg2++
			console.log(this.$el.innerText);  //asyc method DOM not updated
		}
	},
  ```
If you want the latest DOM text inside of update method you need to use, you can use the nextTick method.  The argument of the nextTick method is an anonymous function.  Move the console log into the anonymous function.
``` javascript
this.$nextTick(function(){
  console.log(this.$el.innerText)
})
```
the nextTick will postpone the execution of the console log until the DOM has been updated.  This is not the same as the forceUpdate method as it only postpones the execution of its callback function it doesn't force Vue to rerender DOM.
