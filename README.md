# Vue-practice-dec - Section 11: Custom Directive

Creating a custom directive is like creating a component.  A custom directive relies on it hooks to work.

### An Example
``` javascript
<div id="app">
<p v-test:argument.modifier='msg'>
{{msg}}
</p><hr />
<button @click='update'>Update</button>
</div>

	<script type='text/javascript'>

Vue.directive('test',{
update:function(el, binding){
console.log('name: '+binding.name);
console.log('value: '+binding.value);
console.log('oldValue: '+binding.oldValue);
console.log('expression: '+binding.expression);
console.log('arg: '+binding.arg);
console.log('modifiers: '+binding.modifiers);
}
})
var vm = new Vue({
  el: "#app",
  data: { msg: 'msg defined in Vue data'	},
	methods: {
		update:function(){
			this.msg='updated value'
		}
	},
})
