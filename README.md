# Vue-practice-dec - Section 10.1: Render example to send information in/out of component

### Starting point
``` html
<div id="app">
<comp ref='comp' v-model='msg'>
</comp><hr>
<b>{{msg}}</b>
</div>

<template id='temp'>
<div id="temp_root">
	<input v-bind:value='my_prop' v-on:input='send($event.target.value)'/>
</div>
</template>

	<script type='text/javascript'>

Vue.component('comp', {
	template:'#temp',
	props: ['my_prop'],
	model: {
		event:'my_event',
		prop:'my_prop'
	},
	methods:{
		send:function(v){
			this.$emit('my_event',v)
		}
	}
})

var vm = new Vue({
  el: "#app",
  data: { msg: 'msg defined in Vue data'	},
})
const comp = vm.$refs.comp
	</script>
	```
### Create an input with render
``` javascript
render:function(createElement){
	return createElement(
		'input',
			{	attrs:{
					title:'title set in render for input tag',

				}
			}
	)
},
```
### Sending data from msg data
``` javascript
{	attrs:{
				title:'title set in render for input tag',
			},
domProps:{
				value:this.my_prop
			},

}
```
### Sending data to msg data
``` javascript
on: {
		input:function(event){
			self.send(event.target.value)
		}
},
// define this (self) just inside the render function
var self = this
```
You can't use 'this' in event driven functions as the events are handled by the window object
