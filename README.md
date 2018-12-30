# Vue-practice-dec - Section 8.4: Instance Methods - $set and $delete

### $set

$set can help us create new items.  The $set method requires three arguments, the object name, the new property name (key) and the new value.



### $delete
$delete can help us delete items.  The method requires two arguments, the object name, and the property name to be deleted.

You can't use it on the vue instance or the root data object.

### Example
``` javascript
var vm = new Vue({
  el: "#app",
  data: {
    msg: 'msg defined by Vue data',
 },
})
vm.$set(
  vm.$options,
  'my_option',
  'value of my option'
)
vm.$delete(
  vm.$options,
  'my_option'
)
```
The set method should never be used to create or delete data in root object.  You can't do this:
``` javascript
vm.$set(
  vm.$data,
  'new_msg',
  'never do this....'
)
vm.$delete(
  vm.$data,
  'msg'
)
```
However you can add a new value to an existing property.
``` javascript
vm.$set(
  vm.$data,
  'msg',
  'a new message defined by Vue data'
)
```
