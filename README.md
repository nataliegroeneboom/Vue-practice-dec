# Vue-practice-dec - Section 5: small example

I created a basic input field where you can input up to 50 characters.  


``` html
<textarea v-bind:class='{warning: !remain}' v-model='message' v-on:input='check'></textarea>
<p>{{remain}}/{{limit}}</p>
```

Here limit is a fixed number, remain is a calculated number based on the number of characters of the input message length.   The check function uses v-on:input as a listener returning the message no greater than the number of characters.  And finally bound styling so when the remain is at 0 thus limit has been reached, 0 is false and so the warning class is applied.  

``` javascript
const vm = new Vue({
  el: '#app',
  data:{
    message: 'user-submitted data stored here',
    limit:50
  },
  computed:{
    remain: function(){
      return this.limit - this.message.length
    }

  },
  methods: {
    check: function(){
      if(this.remain<0){
        this.message = this.message.substr(0,this.limit)
      }
    }
  }
})
```
