# Vue-practice-dec - Section 10: Render Function

You can use render function to compile a template. The value of render is an anonymous function serving as a callback taking the argument of createElement.  Inside the function we return the createElement function.

### Example
``` javascript
Vue.component('comp', {
	// template:'#temp',
	render: function(createElement){
			return createElement(
				'p',
				'contents we want to put in the P tag...'
			)

	}
})
```

### Create Two HTML tags
``` javascript
Vue.component('comp', {
	// template:'#temp',
	render: function(createElement){
		 const p = createElement(
				'p',
				'contents we want to put in the P tag...'
			)
		return createElement(
				'div',
				[p]
			)

	}
})
```
### Setting Attributes
``` javascript
Vue.component('comp', {
	// template:'#temp',
	render: function(createElement){
		 const p = createElement(
				'p',
				{
					attrs:{
						title:'the first P tag',
					}
				},
				'contents we want to put in the P tag...'
			)
			const p2 = createElement(
 				'p',
				{
					attrs:{
						title:'the second P tag',
					}
				},
 				'the second sentence...'
 			)
		return createElement(
				'div',
				{
					style:{
						fontFamily:'helvetica',
						background:'crimson',
						color:'white'
					}
				},
				[p, p2]
			)

	}
})
```
