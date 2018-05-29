<html>
<head>
     <style type="text/css">
        body {margin-left: 5% ; margin-right: 5%; margin-top: 0.5in;
             font-family: verdana, arial,"trebuchet ms", helvetica, sans-serif;}
        ul {list-style: disc;}
     </style>
     <title>App Inventor base64 API</title>
</head>

<body>
<h2>App-Inventor-Compliant API: base64 API</h2>
<table border=0>
<tr valign="top">
<td><image src="/images/customLogo.gif" width="200" hspace="10"></td>
<td>
<p>
This web service is a base64 API and is to be used in conjunction with  <a
href="http://appinventor.mit.edu">App Inventor
for Android</a>.<p> 
WP REST API provides OAuth 1.0a and Basic Auth algorithm. Currently it is no way to use OAuth 1.0a on App Inventor, so I use Basic Auth on this app.<p> 
Because App Inventor don't have function for base64 encode, so I create a tinywebdb-base64 program, which use App Inventor Tinywebdb feature to get value = base64_encode (tag). 
App Inventor apps can access this service using the TinyWebDB component and setting the ServiceURL to the URL of this site.<p> 
The service returns a value = base64_encode (tag). 
You can explore how this API works by entering a tag and clicking Get value.</p>
<p><a href="https://github.com/edu2web/tinywebdb-base64">read more...</a></p>
</td> </tr> 
</table>


    <form action="/getvalue" method="post"
          enctype=application/x-www-form-urlencoded>
       <p>Tag:<input type="text" name="tag" /></p>
       <input type="hidden" name="fmt" value="html">
       <input type="submit" value="Get value">
    </form>

   
    Returned as value to TinyWebDB component: <br/>
   
</body></html>
