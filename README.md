# Vue-practice-dec - Section 12: Mixin

Using the v-for directive and $data property we can immediately show every property value

## Example
``` html
<div id="app">
<!-- <comp></comp> -->
<ul>
	<li v-for='element in $data'>
		{{element}}
	</li>
</ul>
</div>
```
``` javascript
var vm = new Vue({
  el: "#app",
  data: { msg1: 'msg1 defined in Vue data',
					msg2: 'msg2 defined in Vue data',},
	methods: {
		sayhi:function(){
		console.log('sayhi method from Vue method');
		}
	},
})
```
## Mixins

First add your mixin defining the data property.

``` html
var my_mixin = {
	data:{
		mixin_msg: 'msg defined in MIXIN'
	}
}
```
then add the mixins property to the Vue data
``` javascript
mixins: [my_mixin],
```

## Mixin Methods
Add a method to the mixin
``` javascript
methods: {
	saybye:function(){
	console.log('saybye method from MIXIN method');
	}
}
```
Now the method is available at the root, console log vm.saybye() will render 'saybye method from MIXIN method'.

## Mixin Template property
Adding a template to the mixin will replace the #app div with the template content.

## Mixin Conflicts
1. If property name of mixin is the same as Vue Instance property name then the mixin value will override the Instance Value.
2. When mixin method name is the same as instance method name, the instance will override the mixin method.
