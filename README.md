# Vue-practice-dec - Section 8.2: passing down data from parent with $parent

## Starting Point
Two separate messages one from the instance, other from component.
``` html
<div id="app">
<p>{{msg}}</p>
<comp></comp>
 </div>
<template id='temp'>
<div id="temp_root">
{{msg}}
</div>
</template>

<script type='text/javascript'>

Vue.component('comp', {
template:'#temp',
data: function(){
return{
  msg : 'msg set in comp'
}
}
})
```
By created a prop and binding the prop to the msg, we can pass the data from the parent to child

``` html
<comp v-bind:prop='msg'></comp>
	   </div>
<template id='temp'>
<div id="temp_root">
	{{msg}}
</div>
</template>

	<script type='text/javascript'>

Vue.component('comp', {
	template:'#temp',
	data: function(){
		return{
			msg : this.prop
		}
	},
	props: ['prop']
})
```
Using the parent option you can render the same result
``` html
<div id="app">
<p>{{msg}}</p>
<comp></comp>
 </div>
<template id='temp'>
<div id="temp_root">
{{msg}}
</div>
</template>

<script type='text/javascript'>

Vue.component('comp', {
template:'#temp',
parent: '#app',
data: function(){
return{
  msg : this.$parent.msg
  // this.prop
}
},
//	props: ['prop']
})
```
## Provide and Inject
Provide and inject provide another way to send data into a component.
Provide is installed in the vue instance and inject is installed in a component registration.

``` html
<div id="app">
<comp></comp>
 </div>
<template id='temp'>
<div id="temp_root">
<p>{{msg}}</p>
</div>
</template>

<script type='text/javascript'>

Vue.component('comp', {
template:'#temp',
inject:['msg'],
data: function(){
return{
  msg: this.msg
}
},
})

var vm = new Vue({
el: "#app",
provide: {
 msg: 'message from Vue.data'
}
})
``` 
