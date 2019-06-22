# Vue-practice-dec - Section 3.2: v-model

## A simple example
v-model is a two way binding directive.  Very useful in input values. In the below example the input is bound to the message variable and whatever is input is reflected within <p>{{message}}</p>
``` html
<div id='app'>
<input type="text" v-model='message'>
<p>{{message}}</p>
<input type="text" v-model='new_message'>
<p>{{new_message}}</p>
</div>
```

``` javascript
const vm = new Vue({
  el: '#app',
  data:{
    message: 'initial value set in DATA',
    new_message: 'new message property in data'
  },
})
```

## Modifiers: lazy, number
Without the lazy modifier the message content is in real time sync with the data being inputted into the input field.  However after you type the lazy modifier, the data will only be updated when the input tag is out of focus.  

``` html
<input type="text" v-model.lazy='new_message'>
```
When you enter a number into an input field the data stored is of type string, with the number modifier the type stored is number.

``` html
<input type="text" v-model.number='new_message'>
```
