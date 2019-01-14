# Vue-practice-dec - Section 13: Exchanging data between Vue.js and PHP

 Add Created hook, instantiating the xml http object.

``` javascript
created: function(){
  new XMLHttpRequest()
},

  methods: {
    request: function(){},
    response: function(){}
  },
```

Using the Proxy feature we can access the xml http object within the request and response methods.  Within data, we create a new property ajax setting its value to null.  Then we set the xml http request object to the property ajax.

Within the request method we use the onreadystatechange method to trigger the response method.  Then we make a connection to the backend file using the open method, passing POST and second argument is the url of the backend file.  Create a new property url in data and store the path of the backend php file.  If you are sending data via POST, you need to setRequestHeader for content type.  Finally we want to send the data, parameters 'range=all'.

Within the response method, two checks are made readyState (telling user whether the request process is complete) and status (checking that no errors have occurred).  If all ok, then the data is stored in the response text property as a string which needs to be converted to a JSON object.
