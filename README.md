# Vue-practice-dec - Section 3.1: Conditional Rendering

Buiding on the previous v-on practice I did in the previous section.

## Conditional rendering using v-show

Here whether the p tag will show is determined by the boolean value of the message (either true or false).

``` html
<p v-show='message'>New P tag</p>
```

The same can be done with v-if directive. The difference being with v-show the element is loaded but set to display:none if the value is false, but with v-if the element is not loaded at all.


## V-IF and V-else
``` html
<p v-show='message'>New P tag</p>
<p v-if='message'>V-IF: New P tag</p>
<p v-else-if='message==2'>V-ELSE-IF: New P tag</p>
<p v-else>V-ELSE: New P tag</p>
```
