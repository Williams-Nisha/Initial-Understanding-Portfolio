<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This section of my portfolio shows examples of my coding experience in my 261 class." >
        <meta  name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>JSON</title>
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
        <link type="text/css" media="screen" href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <header>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
            </header>
            <main>
                <h1>JSON</h1>

                <article>
                    <p>JSON stands for Javascript Object Notation. Json is quicker and easier to use than XML. It is primarily used for storing and exchanging data.  </p>


                </article> 
                <article>
                    <h2>Downloaded Code from Tutorial</h2>
                    <h3>Example 1</h3>
                    <p>This code takes a javascript object and parses it to pull the values from the name/value pairs. The result is outputed into a div. </p>
                    <pre>
                <code>
                    &lt;!DOCTYPE html&gt;
                    &lt;html&gt;
                    &lt;body&gt;
                    &lt;h2&gt;JSON Object Creation in JavaScript&lt;h2&gt;

                    &lt;p id="demo"&gt;&lt;/p&gt;

                    &lt;script&gt;
                    var text = '{"name":"John Johnson","street":"Oslo West 16","phone":"555 1234567"}';

                    var obj = JSON.parse(text);

                    document.getElementById("demo").innerHTML =
                    obj.name + "<br>" +
                    obj.street + "<br>" +
                    obj.phone;
                    &lt;/script&gt;

                    &lt;/body&gt;
                    &lt;/html&gt;

                </code>
                    </pre>
                    <h4>Output:</h4>

                    <h2>JSON Object Creation in JavaScript</h2>

                    <p id="demo"></p>

                    <script>
                        var text = '{"name":"John Johnson","street":"Oslo West 16","phone":"555 1234567"}';

                        var obj = JSON.parse(text);

                        document.getElementById("demo").innerHTML =
                                obj.name + "<br>" +
                                obj.street + "<br>" +
                                obj.phone;
                    </script> 
                    <hr>
                    <h2>My Code</h2>
                    <p>This code example creates a navbar using the json parsing function. It pulls a file that has object arrays in it, with both the name of the page and link to it.</p> 
                    <pre>
                <code>
                        &lt;div id="id01"&gt;&lt;/div&gt;

                        &lt;script&gt;
                        var xmlhttp = new XMLHttpRequest();
                        var url = "/navbar.txt";

                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                                var myArr = JSON.parse(xmlhttp.responseText);
                                myFunction(myArr);
                            }
                        }
                        xmlhttp.open("GET", url, true);
                        xmlhttp.send();

                        function myFunction(arr) {
                            var out = "";
                            var i;
                            for(i = 0; i < arr.length; i++) {
                                out += '&lt;a href="' + arr[i].url + '"&gt;' + 
                                arr[i].display + '&lt;/a&gt;&lt;br&gt;';
                            }
                            document.getElementById("id01").innerHTML = out;
                        }
                        &lt;/script&gt;
                </code>
                    </pre>

                    <h4>Output:</h4>


                    <div id="id01"></div>

                    <script>
                        var xmlhttp = new XMLHttpRequest();
                        var url = "/navbar.txt";

                        xmlhttp.onreadystatechange = function () {
                            if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                                var myArr = JSON.parse(xmlhttp.responseText);
                                myFunction(myArr);
                            }
                        }
                        xmlhttp.open("GET", url, true);
                        xmlhttp.send();

                        function myFunction(arr) {
                            var out = "";
                            var i;
                            for (i = 0; i < arr.length; i++) {
                                out += '<a href="' + arr[i].url + '">' +
                                        arr[i].display + '</a><br>';
                            }
                            document.getElementById("id01").innerHTML = out;
                        }
                    </script>
                    <hr>
                    <h2>Example 2</h2>
                    <p>This example starts with an array. Then it uses the JSON.stringify to turn the array into a string. Then it parses the string to turn it back into an array and uses the .pop to pull the last index from the array and output it.</p> 
                    <pre>
                <code>
                    &lt;script&gt;
                    var array = ["Nisha","Marie","Williams"];
 ;                       var str = JSON.stringify(array);
                        document.write(str);
                        document.write ("<br/>");

                        var newArr = JSON.parse(str);

                        while (newArr.length > 0) {
                            document.write(newArr.pop() + "<br/>");
                        }
                  &lt;script&gt;
                </code>
            </pre>

                    <h4>Output:</h4>


                    <script>
                        var array = ["Nisha", "Marie", "Williams"];
                        var str = JSON.stringify(array);
                        document.write(str);
                        document.write("<br/>");

                        var newArr = JSON.parse(str);

                        while (newArr.length > 0) {
                            document.write(newArr.pop() + "<br/>");
                        }

                    </script>
                    <hr>
                </article>
                <article>

                    <h2>Resources:</h2>
                    <ul>
                        <li><a href="http://www.w3schools.com/json/" target="_blank"> W3schools Tutorial- Json</a></li>
                        <li><a href="http://www.w3schools.com/json/json_syntax.asp/" target="_blank">Json Syntax</a></li>
                        <li><a href=" http://json.org/" target="_blank">Json Introdution</a></li>

                    </ul>
                </article>
            </main>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>