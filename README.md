# Vue-practice-dec - Section 4: filters

Applying a filter to capitalise the title.  The filter should be applied like a method with the filter name, the property name and the filter value an anonymous function that needs an argument (the value that needs to be filtered).  

``` html
<div id='app'>
  <input v-model='message'>
<hr />
<p v-bind:title='title|capitalise'>Processed value: <span>{{message|capitalise}}</span> </p>
</div>
```

``` javascript
const vm = new Vue({
  el: '#app',
  data:{
    message: 'initial value set in DATA',
    title: 'title set in title'
  },
  filters:{
    capitalise: function(v){
      return v.toUpperCase()
    }
  }
})
```
