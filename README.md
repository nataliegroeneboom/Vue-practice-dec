# Vue-practice-dec - Section 4.3: v-bind:style

Rather than referencing the classname, you can style the element directly with v-bind:style

``` html
<p v-bind:style='{color:color_choice}'>I am a p tag</p>
```

``` javascript
data:{
      color_choice: 'red',
},
```

### More than one

``` html
<p v-bind:style='style_object'>I am a p tag</p>
```

``` javascript
data:{
  style_object: {
  color: 'red',
  background: 'blue'  
  }

},
```
