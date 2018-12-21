# Vue-practice-dec - Section 3.3: v-model in other tags

### Example textarea

``` html
<textarea name="name" rows="5" cols="80" v-model='message'></textarea>
```

### Example radiotags

``` html
<span>Radio Button</span>
<span>Apple</span><input type="radio" value='apple' v-model='radioMessage'>
<span>Peach</span><input type="radio" value='peach' v-model='radioMessage'>
<span>Orange</span><input type="radio" value='orange' v-model='radioMessage'>
<p>You have selected <span>{{radioMessage}}</span></p>
```
Default set to apple:
``` javascript
radioMessage: 'apple'
```
### Example checkbox
``` html
<span>Apple</span><input type="checkbox" value='apple' v-model='checkbox'>
<span>Peach</span><input type="checkbox" value='peach' v-model='checkbox'>
<span>Orange</span><input type="checkbox" value='orange' v-model='checkbox'>
```
``` javascript
data:{
  message: 'initial value set in DATA',
  radioMessage: 'apple',
  checkbox: []
},
```
### Example select

``` html
<select v-model='option'>
  <option value='apple'>option 1</option>
  <option value='pear'>option 2</option>
  <option value='watermelon'>option 3</option>
</select>
<hr/>
<p>You have selected <span>{{option}}</span> </p>
```
