# Vue-practice-dec - Section 6: Components

Component registration starts with creating a template, you need a route div containing the component content.

``` html
<template>
  <div></div>
</template>
```
Then we need to register the component, the component methods takes two arguments, component name and a json object - where the component registration information is stored.  Inside the json object four properties are set.  Template, data, props and methods with template being the one which is compulsory.  Data in a component must use an anonymous function. Props value is an array.

``` javascript
Vue.component('simple_comp', {
  template: '#temp',
  data: function(){
    return {}
  },
  props: [],
  methods: {}
})
```
Then we inject the component into html with the component name
``` html
<simple_comp></simple_comp>
```
Injecting data from Component

``` javascript
Vue.component('simple_comp', {
  template: '#temp',
  data: function(){
    return {
      message: 'Components own data',
      message_1: 'Another of Components own data',
    }
  },
  props: [],
  methods: {}
})
```
And the html
``` html
<template id='temp'>
  <div class='comp_root'>
    <p>this is a component</p>
    <p>{{message}}</p>
    <p>{{message_1}}</p>
  </div>
</template>
```
