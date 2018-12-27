# Vue-practice-dec - Section 6.1: Sending out data from a component

The template contains an input message and button

``` html
<template id='temp'>
  <div class='comp_root'>
<h2>Component</h2>
<input v-model='message'/>
<button>Send Data</button>
  </div>
</template>
```
Input data sends data to message in component Data

``` javascript
var vm = Vue.component('comp', {
  template:'#temp',
  data: function(){
    return {
      message: 'I want to go to Vue P tag'
    }
  },
  props:[],
  methods:{}
  },
})
```
Say we want to inject the message into content

``` html
<div id='app'>
  <h1>Parent DIV</h1>
  <comp v-on:relay='content=arguments[0]'></comp>
</p>{{content}}</p>
</div>
<hr/>
```
Global Component
``` javascript
var vm = new Vue({
  el:'#app',
  data: {
    content: "Waiting for data from Component"
  }
})
```
First bind the click event to a method called 'send'

``` html
<button v-on:click='send'>Send Data</button>
```

Add the create method and within the function add the emit method taking two arguments.  The first argument is the name of the self defined event, we will call it 'relay', the second argument is the data we want to emit.  The data we want to send is stored in the message property.

``` javascript
methods:{
  send:function(){
    this.$emit('relay', this.message)
  }
},
```   
Next we bind the relay event to the component and assign it to the content property.  The value set by the emit method is stored in an array, thus arguments[0].

``` html
<comp v-on:relay='content=arguments[0]'></comp>
```
