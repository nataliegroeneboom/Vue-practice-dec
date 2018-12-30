# Vue-practice-dec - Section 8.7: Lifecycle Methods: $mount, methods of global vue object: extend

### $mount

If you remove the 'el' property from the Vue instance, your program will stop working.  This can be resolved by using $mount.
the $mount method argument is the id of parent div.
``` javascript
vm.$mount('#app')
```
### Methods of the global vue object: extend Method
The extend method can create a subclass of the base vue constructor.  Its argument value should be an object containing component options.  This subclass created needs to be instantiated first.

In the below example I have three divs serving as mounting points.  
``` html
<div id='mount1'><p>Mount Point 1</p></div>
<div id='mount2'><p>Mount Point 2</p></div>
<div id='mount3'><p>Mount Point 3</p></div>
```

We call the extend method to create a subclass.
``` javascript
const extend = Vue.extend({
  template:"<div style='color:red'><p>{{msg}}</p></div>",
  data: function(){
    return {
      msg: 'message from subclass'
    }
  }
})
```
Then we instantiate the subclass, connecting the $mount method
``` javascript
	 new extend().$mount('#mount3')
```   
