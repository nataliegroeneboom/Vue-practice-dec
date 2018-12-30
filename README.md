# Vue-practice-dec - Section 9: Transition Effects in VUE
Vue has transtion effects.  Transition tag is used with a name attribute.  In CSS there are a few classes they start with the 'transition name' prefix and then there is an options of 6 different css transition suffixes to the css classes.  These classes can be divided into enter and leave. The enter controls the starting point, the enter-to provides the leaving point of the entering transition.  The leave-to provides the leaving point of the leaving transition. Neither enter or enter-to are permanent states.  The enter-active class controls the transition process between the starting and ending point.  The enter-active and leave-active classes are permanent, thus should hold the transition attribute.

### Example
First we wrap the element we want the transition style to effect, settting the name attribute.  
``` html
<div id="app">
	<transition name='fade'>
<p v-if='show'>I am the p tag</p>
	</transition>
	<p v-if='show'>I am the p tag</p>
	<button @click='show=!show'>Show/Hide</button>
</div>
```
Then in style we set the transition classes.  Enter controls the initial status.  The transition attribute is put within the enter-active. Enter can be thought as entering into the original state (opacity 1) and leave is leaving its original state.

``` CSS
.fade-enter{opacity:0;font-size: 0px}
.fade-enter-active{transition:opacity 3s, font-size 3s}
.fade-leave-active{transition:opacity 3s, font-size 3s}
.fade-leave-to{opacity:0; font-size: 0px; font-size: 0px}
```
