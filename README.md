# Vue-practice-dec - Section 3.4: combining v-for, v-bind and v-model

In a select input, you use the v-model to link the data input from the select options, the v-for to loop through the array to display all options stored in the data array and v-bind to bind the value (stored in the data array) to the option tag.

``` html
<select v-model='message'>
  <option v-for='element in list_info' v-bind:value='element.value'>{{element.text}}</option>
</select>
```
``` javascript
const vm = new Vue({
  el: '#app',
  data:{
    message: 'initial value set in DATA',
    list_info:[
      {value:'apple', text:'fruit 1'},
      {value:'peach', text:'fruit 2'},
      {value:'orange', text:'fruit 3'},
      {value:'pear', text:'fruit 4'},
      {value:'banana', text:'fruit 5'}
    ]
  },

})
```
