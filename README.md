# Vue-practice-dec - Section 8.1: Vue API

Template in a vue instance overrides the content within the component

``` html
<div id="app">
<p>I am a P tag defined in #app DIV</p>
<p>I am a P tag defined in #app DIV</p>
<p>I am a P tag defined in #app DIV</p>
<p>I am a P tag defined in #app DIV</p>
 </div>
<template id='template'>
<i>I am a template</i>
</template>

<script type='text/javascript'>


var vm = new Vue({
el: "#app",
template: '#template'
})
</script>
