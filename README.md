# Vue-practice-dec - Section 8.3: Instance Properties


All instance property and method names are prefix with a $.

## Starting point
``` html
<div id="app">
  <p>{{msg1}}</p>
  <p>{{msg2}}</p>
  <p>{{msg3}}</p>
  <hr/>
<comp ref='comp'></comp>
 </div>
<template id='temp'>
<div id="temp_root">
<p>{{msg1}}</p>
<p>{{msg2}}</p>
<p>{{msg3}}</p>
</div>
</template>

<script type='text/javascript'>

Vue.component('comp', {
template:'#temp',
data: function(){
return{
  msg1: 'Comp msg1',
  msg2: 'Comp msg2',
  msg3: 'Comp msg3',
}
},
})

var vm = new Vue({
el: "#app",
data: {
  msg1: 'Vue Data msg1',
 msg2: 'Vue Data msg2',
 msg3: 'Vue Data msg3',
}
})
var comp = vm.$refs.comp
```
vm.$data - The data object that the Vue instance is observing. The Vue instance proxies access to the properties on its data object.

So with the above example you could run in console to get the instance object and the component object respectively:

``` console
vm.$data
comp.$data
```
### $props
add props to the registered component

``` javascript
props: ['prop1', 'prop2', 'prop3'],
```
add the props the the component tag

``` html
<comp ref='comp' prop1='first' prop2='second' prop3='third'></comp>
```
In the console run the below to output all props contained in an object
``` console
comp.$props
comp.$props.prop1
```

### $el
This will return the DOM object of the div that is controlled by the vue instance
The two will yeild the same result

``` console
vm.$el
document.getElementById('app')
```
### $options
Vue allows us to define our own options.  Define the below in the vue instance:
``` javascript
my_option: 'my own option'
```
and in the console run, and it will return the value 'my own option'
``` console
vm.$options.my_option
```
This also can work in self defined components
