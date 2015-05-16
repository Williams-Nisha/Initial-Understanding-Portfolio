<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="description" content="This section of my portfolio shows examples of my coding experience in my 261 class." >
 <meta  name="viewport" content="width=device-width, initial-scale=1.0"> 
 <title>Ajax</title>
 <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
 <link type="text/css" media="screen" href="css/styles.css" rel="stylesheet">
 <script>
function loadXMLDoc()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","ajax_info.txt",true);
xmlhttp.send();
}
</script>
 </head>
 <body>
<div class="container">
    <header>
         <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php';?>
    </header>
    <main>
        <h1>Ajax</h1>

    <article>
        <p>Ajax stands for Asynchronous JavaScript and XML. Ajax allows you to exchange data with the server and update the page, without needing to reload the page.  </p>
        
          </article> 
        <article>
            <h2>Downloaded Code from Tutorial</h2>
            <h3>Example 1</h3>
            <p>This code examples uses ajax to change the words in an html file. It uses the get method to pull a text file from the server and create a live edit on the text. </p>
            <pre>
                <code>
                    &lt;!DOCTYPE html&gt;
                    &lt;html&gt;
                    &lt;head&gt;
                    &lt;script&gt;
                    function loadXMLDoc()
                    {
                    var xmlhttp;
                    if (window.XMLHttpRequest)
                      {// code for IE7+, Firefox, Chrome, Opera, Safari
                      xmlhttp=new XMLHttpRequest();
                      }
                    else
                      {// code for IE6, IE5
                      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                      }
                    xmlhttp.onreadystatechange=function()
                      {
                      if (xmlhttp.readyState==4 && xmlhttp.status==200)
                        {
                        document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
                        }
                      }
                    xmlhttp.open("GET","ajax_info.txt",true);
                    xmlhttp.send();
                    }
                    &lt;/script&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                    &lt;div id="myDiv"&gt;&lt;h2&gt;Let AJAX change this text&lt;/h2&gt;&lt;/div&gt;
                    &lt;button type="button" onclick="loadXMLDoc()">Change Content&lt;/button&gt;

                    &lt;/body&gt;
                   &lt;/html&gt;
                </code>
            </pre>
            <h4>Output:</h4>

                <div id="myDiv"><h2>Let AJAX change this text</h2></div>
                <button type="button" onclick="loadXMLDoc()">Change Content</button>
                <br><br>
            <hr>
            <h2>My Code</h2>
            <p>This code example creates a input text field. As the user is typing in a name, ajax checks with the server in real time to see if the name being entered matches name suggestions in a php file. If the letters match, the suggestions show up underneath.</p>
            <pre>
                <code>
                    &lt;html&gt;
                    &lt;head&gt;
                   &lt;script&gt;
                    function showHint(str) {
                        if (str.length == 0) { 
                            document.getElementById("txtHint").innerHTML = "";
                            return;
                        } else {
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.onreadystatechange = function() {
                                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                    document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                                }
                            }
                            xmlhttp.open("GET", "gethint.php?q=" + str, true);
                            xmlhttp.send();
                        }
                    }
                    &lt;/script&gt;
                    &lt;/head&gt;
                    &lt;body&gt;

                   &lt;p&gt;&lt;b&gt;Start typing a name in the input field below:&lt;/b&gt;&lt;/p&gt;
                    &lt;form&gt; 
                    First name: &lt;input type="text" onkeyup="showHint(this.value)"&gt;
                   &lt;/form&gt;
                    &lt;p&gt;Suggestions:&lt;span id="txtHint"&gt;&lt;/span&gt;&lt;/p&gt;
                    &lt;/body&gt;
                   &lt;/html&gt;
                </code>
            </pre>

            <h4>Output:</h4>

                <script>
                function showHint(str) {
                    if (str.length == 0) { 
                        document.getElementById("txtHint").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                            }
                        }
                        xmlhttp.open("GET", "gethint.php?q=" + str, true);
                        xmlhttp.send();
                    }
                }
                </script>

                <p><b>Start typing a name in the input field below:</b></p>
                <form> 
                First name: <input type="text" onkeyup="showHint(this.value)">
                </form>
                <p>Suggestions: <span id="txtHint"></span></p>
            <hr>
        </article>
        <article>
            <h2>Resources:</h2>
            <ul>
                <li><a href="http://www.w3schools.com/ajax/default.asp
                       " target="_blank"> Ajax Tutorial</a></li>
                <li><a href="http://www.w3schools.com/ajax/ajax_php.asp/" target="_blank">Ajax and PHP</a></li>
                <li><a href="http://en.wikipedia.org/wiki/Ajax_%28programming%29" target="_blank">Wikipedia- Explaination of Ajax</a></li>
            </ul>
        </article>
     </main>
     <footer>
                  <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php';?>
     </footer>
</div>
 </body>
</html>