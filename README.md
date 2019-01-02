# Vue-practice-dec - Section 9.2: Transition with JavaScript Hooks and Velocity.js

There are 8 javascript hooks you can have for transition effects, using the v-on directive and a self defined event.  Using the v-on directive we bind these corresponding methods.

``` html
<transition
  v-on:before-enter="beforeEnter"
  v-on:enter="enter"
  v-on:after-enter="afterEnter"
  v-on:enter-cancelled="enterCancelled"

  v-on:before-leave="beforeLeave"
  v-on:leave="leave"
  v-on:after-leave="afterLeave"
  v-on:leave-cancelled="leaveCancelled"
>
</transition>
```
To make sure the css transition do not conflict with js, we set it to false.

### Velocity.js
Velocity needs three arguments, DOM object of the animated element (el), object to define keyframe, object to define duration.

### Example:
Add the javascript Hooks to transition tag
``` html
<transition name='fade' v-bind:css='false'
v-on:before-enter="beforeEnter"
v-on:enter="enter"
v-on:leave="leave"
>
<p v-if='show'>I am the p tag</p>
</transition>
```
Add the events to methods and because there are two stages there are two Velocity functions and on top of that we need to tell the program the event is complete for both enter and leave.
``` javascript
methods: {
	beforeEnter: function(el){
		el.style.opacity=0
		el.style.fontSize=0
	},
	enter: function(el, done){
		Velocity(el,{opacity:1, fontSize: '2em'},{duration:1000})
		Velocity(el,{fontSize: '1em'},{duration:1000})
		Velocity(el,{fontSize: '1em'},{complete:done})
	},
	leave: function(el, done){
		Velocity(el,{fontSize: '2em'},{duration:1000})
		Velocity(el,{opacity:0,fontSize: '0em'},{duration:1000})
		Velocity(el,{opacity:0,fontSize: '0em'},{complete:done})
	}
},
```
### Add transition to a component
``` html
<div id="app">
	<fade>
<p v-if='show'>I am the p tag</p>
</fade>
	<button @click='show=!show'>Show/Hide</button>
</div>

<template id='temp'>
<transition v-bind:css='false'
v-on:before-enter="beforeEnter"
v-on:enter="enter"
v-on:leave="leave"
>
<slot></slot>
</transition>
</template>

	<script type='text/javascript'>

Vue.component('fade', {
	template:'#temp',
	methods: {
		beforeEnter: function(el){
			el.style.opacity=0
			el.style.fontSize=0
		},
		enter: function(el, done){
			Velocity(el,{opacity:1, fontSize: '2em'},{duration:1000})
			Velocity(el,{fontSize: '1em'},{duration:1000})
			Velocity(el,{fontSize: '1em'},{complete:done})
		},
		leave: function(el, done){
			Velocity(el,{fontSize: '2em'},{duration:1000})
			Velocity(el,{opacity:0,fontSize: '0em'},{duration:1000})
			Velocity(el,{opacity:0,fontSize: '0em'},{complete:done})
		}
	}

})

var vm = new Vue({
  el: "#app",
  data: { show: true,	},
	methods: {},
})
```
