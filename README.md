# Vue-practice-dec - Section 11.1: Custom Directive Shortcut

### Example
``` javascript
<div id="app">
<p v-test>
{{msg}}
</p><hr />
<button @click='update'>Update</button>
</div>

	<script type='text/javascript'>

Vue.directive('test',function(el, binding){
	console.log('bind and update')
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
