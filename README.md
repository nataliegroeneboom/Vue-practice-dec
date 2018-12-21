# Vue-practice-dec - Section 4.1: Computed
For more complicated methods, you should choose computed over filter.

``` html
<input v-model='message'>
<hr />
<p >Processed value: <span>{{computed_msg}}</span> </p>
```
```javascript
const vm = new Vue({
  el: '#app',
  data:{
    message: 'initial value set in DATA',
  },
  computed:{
    computed_msg:function(){
      return this.message.split('').reverse().join('')
    }

  }
})
```

### Another Example
``` html
<p>First name</p><input v-model='first_name' />
<p>Last name</p><input v-model='last_name' />
<div class="line"></div>
<p>Full name</p><input v-model='full_name' />
```

``` javascript
const vm = new Vue({
  el: '#app',
  data:{
    message: 'initial value set in DATA',
    first_name: 'Only',
    last_name: 'Kiosk'
  },
  computed:{
    computed_msg:function(){
      return this.message.split('').reverse().join('')
    },
    full_name: function(){
      return this.first_name+ ' '+ this.last_name
    }

  }
})
```

You may be able to alter the input field for first and last name however you can't change the input of the full name, presently only data can be passed down.  To change this you need getters and setters and change the anonymous function to a JSON object. In the setter you pass an argument (value)

``` javascript
full_name:{
  get: function(){
    return this.first_name+ ' '+this.last_name
  },
  set: function(v){
   const array = v.split(' ')
   this.first_name = array[0]
   this.last_name = array[array.length-1]
  }
}
```
