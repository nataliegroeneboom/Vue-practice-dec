# Vue-practice-dec - Section 8.4: Instance Methods - $watch

### $watch

``` javascript
var vm = new Vue({
  el: "#app",
  data: {
    msg: 'apple',
 },

})
vm.$watch(
'msg',
function(newValue, oldValue){
  console.log(newValue, oldValue);
}
)
```
watch method requires at least 2 arguments.  The first argument is to tell the watch method what to listen to.  The second argument is an anonymous function serving as a callback taking two arguments the new value and old value.

In the console I change the value triggering the $watch method

``` console
vm.msg = 'orange'
```
The optional third argument is an object where we can set two properties, immediate and deep.  Immediate is set to false by default, if set to true the watch method will be triggered immediately when we refresh the page.
