<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This section of my portfolio shows examples of my coding experience in my 261 class." >
        <meta  name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Coding Portfolio</title>
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
                <h1>DOM Manipulation</h1>

                <article>
                    <p>DOM- stands for Document Object Model. The document object model is essentially all the elements that are on the page. Just as the html file shows the hierarchical order through indentation, the browser creates a hierarchy of everything on the page. </p>
                    <p>DOM Manipulation is the ability to manipulate any element on a webpage. </p>
                    <h2>My Training Presentations</h2>
                    <p><a href="/dom_manipulation.pdf" target="blank"><img src="/images/dom_manipulation.jpg"><br>DOM Manipulation Presentation</a>

                    <p><iframe width="560" height="315" src="https://www.youtube.com/embed/g9zN_yH_fy0?rel=0" frameborder="0" allowfullscreen></iframe></p>
                </article> 
                <article>
                    <h2>Downloaded Code from Tutorial</h2>
                    <h3>Example 1</h3>
                    <p>This example adds an alert once the sentence is clicked.</p>
                    <pre>
                <code>
                   &lt;!DOCTYPEl&gt;
                   &lt;html&gt;
                   &lt;head&gt;
                   &lt;/head&gt;
                   &lt;body&gt;
                   &lt;p id="daisies"&gt;I <b>love</b> flowers.&lt;p&gt;

                    &lt;script type="text/javascript"&gt;
                      // define a function that can be called
                      function doSomething() {
                        alert("Especially Daisies!");
                      }

                      // grab the element you want to attach the event to
                      var flowers = document.getElementById("daisies");

                      // attach the function for chosen event
                      flowers.addEventListener("click", doSomething);
                    &lt;/script&gt;
                    &lt;/body&gt;
                    &lt;/html&gt; 
                </code>
                    </pre>
                    <h4>Output:</h4>
                    <p id="daisies">I <b>love</b> flowers.</p>

                    <script type="text/javascript">
                        // define a function that can be called
                        function doSomething() {
                            alert("Especially Daisies!");
                        }

                        // grab the element you want to attach the event to
                        var flowers = document.getElementById("daisies");

                        // attach the function for chosen event
                        flowers.addEventListener("click", doSomething);
                    </script>
                    <hr>
                    <h3>Example 2</h3>
                    <p>This example adds a paragraph, fills it with text and then appends it to the end of the two paragraphs above it.</p>
                    <pre>
                <code>
                  &lt;div id="div1"&gt; 
                  &lt;p id="p1"&gt;This paragraph is the first paragraph in a div.&lt;/p&gt; 
                  &lt;p id="p2"&gt;This is another paragraph.&lt;/p&gt; 
                  &lt;/div&gt; 
                  &lt;script&gt;
                    var para = document.createElement("p");
                    var node = document.createTextNode("This is a new paragraph created with dom manipulation.");
                    para.appendChild(node);
                    var element = document.getElementById("div1");
                        element.appendChild(para);
                    &lt;/script&gt;  
                </code>
                    </pre>

                    <h4>Output:</h4>
                    <div id="div1">
                        <p id="p1">This paragraph is the first paragraph in a div.</p>
                        <p id="p2">This is another paragraph.</p>
                    </div>

                    <script>
                        var para = document.createElement("p");
                        var node = document.createTextNode("This is a new paragraph created with dom manipulation.");
                        para.appendChild(node);

                        var element = document.getElementById("div1");
                        element.appendChild(para);
                    </script>
                    <hr>
                    <h2>My Code</h2>
                    <p>The box starts out blue. It will turn red when you click on it and yellow when you release.</p>
                    <pre>
                <code>
                   &lt;!DOCTYPEl&gt;
                   &lt;html&gt;
                   &lt;head&gt;
                   &lt;/head&gt;
                   &lt;body&gt;
                   &lt;div id="blue" class="bluebox"&gt;
                   &lt;script&gt;
            
                function mouseDown(obj){
                obj.style.backgroundColor="red";
                obj.innerHTML ="How embarrasing!";
                
                }
                function mouseUp(obj){
                obj.style.backgroundColor="yellow";
                obj.innerHTML ="Much Better!";
                
                }
           &lt;/script&gt;
           &lt;html&gt;
                </code>
                    </pre>

                    <div id="blue" class="bluebox" onmousedown="mouseDown(this)" onmouseup="mouseUp(this)">Click me</div>   
                    <script>

                        function mouseDown(obj) {
                            obj.style.backgroundColor = "red";
                            obj.innerHTML = "How embarrasing!";

                        }
                        function mouseUp(obj) {
                            obj.style.backgroundColor = "yellow";
                            obj.innerHTML = "Much Better!";

                        }
                    </script>
                    <hr>
                </article>
                <article>
                    <h3>Example 3</h3>
                    <p>This example adds a paragraph, fills it with text and then appends it to the end of the two paragraphs above it.</p>
                    <pre>
                <code>
                  &lt;div id="div1"&gt; 
                  &lt;p id="p1"&gt;This paragraph is the first paragraph in a div.&lt;/p&gt; 
                  &lt;p id="p2"&gt;This is another paragraph.&lt;/p&gt; 
                  &lt;/div&gt; 
                  &lt;script&gt;
                    var para = document.createElement("p");
                    var node = document.createTextNode("This is a new paragraph created with dom manipulation.");
                    para.appendChild(node);
                    var element = document.getElementById("div1");
                        element.appendChild(para);
                    &lt;/script&gt;  
                </code>
                    </pre>

                    <h4>Output:</h4>
                    <div id="div1">
                        <p id="p1">This paragraph is the first paragraph in a div.</p>
                        <p id="p2">This is another paragraph.</p>
                    </div>

                    <script>
                        var para = document.createElement("p");
                        var node = document.createTextNode("This is a new paragraph created with dom manipulation.");
                        para.appendChild(node);

                        var element = document.getElementById("div1");
                        element.appendChild(para);
                    </script>
                    <hr>
                    <h2>My Code</h2>
                    <p>The box starts out blue. It will turn red when you click on it and yellow when you release.</p>
                    <pre>
                <code>

                    &lt;p&gt;Learning is fun!&lt;/p&gt;
                    &lt;div id="color"&gt;
                    &lt;p id="pink"&gt;Let's have some fun with color!&lt;/p&gt;
                      &lt;p id="yellow"&gt;It is easy to change color with &lt;b&gt;DOM Manipulation&lt;/b&gt;.&lt;/p&gt;
                      &lt;p id="text"&gt;You can stretch the spacing in a sentence.&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;p id="background">You can even change the background color of an element&lt;/p&gt;
                    &lt;p id="p2"&gt;Hello World&lt;/p&gt;
                    &lt;p id="tada"&gt;Tada!!&lt;/p&gt;
                    &lt;script&gt;
                                document.getElementById("color").style.background = "grey";
                                document.getElementById("pink").style.color = "pink";
                                document.getElementById("yellow").style.color = "yellow";
                                document.getElementById("text").style.wordSpacing = "50px";
                                document.getElementById("background").style.background = "yellow";
                                document.getElementById("p2").style.color="blue"; 
                                document.getElementById("tada").style.font = "italic bold 50px Papyrus ,modern";
                           &lt;/script&gt;
                </code>
                    </pre>


                    <p>Learning is fun!</p>
                    <div id="color">
                        <p id="pink">Let's have some fun with color!</p>
                        <p id="yellow">It is easy to change color with <b>DOM Manipulation</b>.</p>
                        <p id="text">You can stretch the spacing in a sentence.</p>
                    </div>
                    <p id="background">You can even change the background color of an element</p>
                    <p id="p2">Hello World!</p>
                    <p id="tada">Tada!!</p>
                    <script>
                        document.getElementById("color").style.background = "grey";
                        document.getElementById("pink").style.color = "pink";
                        document.getElementById("yellow").style.color = "yellow";
                        document.getElementById("text").style.wordSpacing = "50px";
                        document.getElementById("background").style.background = "yellow";
                        document.getElementById("p2").style.color = "blue";
                        document.getElementById("tada").style.font = "italic bold 50px Papyrus ,modern";
                    </script>
                    <hr>   
                    <h2>Ideas on how to apply DOM Manipulation to Mobile app</h2>
                    <h3>Baby Names App</h3>
                    <p id="name"><b>Name: Nisha</b><br>
                        Description: Indian origin with the meaning "night. Closely related to Nissa. Which means "friendly elf."
                    </p>
                    <button type="button" onclick="likeName()">Like</button>
                    <button type="button" onclick="dislikeName()">Dislike</button>
                    <p id="likeDislike"></p>
                    <img id="babyPic" src="" width="250" height="250" border="1">
                    <pre>
                    <code>
                        &lt;script&gt;
                        function likeName() {
                            document.getElementById("likeDislike").innerHTML = "Great choice! Nisha is a beautiful and unique name for your little princess.";
                            var x = document.getElementById("name");
                            x.style.backgroundColor = "pink";
                            x.style.color = "white";
                            document.getElementById("babyPic").src = "/images/baby_with_angel_wings_sleeping.jpg";
                        }
                        function dislikeName() {
                            document.getElementById("likeDislike").innerHTML = "You definitely need to rethink your options! Nisha would be perfect for your little angel. Don't make your baby sad. :(";
                            var x = document.getElementById("name");
                            x.style.backgroundColor = "black";
                            x.style.color = "white";
                            document.getElementById("babyPic").src = "/images/crying.jpg";
                        }
                        document.getElementById("babyPic").style.border = "thin solid #000000 !important";
                    &lt;/script&gt;
                    </code>
                    </pre>
                    <script>
                        function likeName() {
                            document.getElementById("likeDislike").innerHTML = "Great choice! Nisha is a beautiful and unique name for your little princess.";
                            var x = document.getElementById("name");
                            x.style.backgroundColor = "pink";
                            x.style.color = "white";
                            document.getElementById("babyPic").src = "/images/baby_with_angel_wings_sleeping.jpg";
                        }
                        function dislikeName() {
                            document.getElementById("likeDislike").innerHTML = "You definitely need to rethink your options! Nisha would be perfect for your little angel. Don't make your baby sad. :(";
                            var x = document.getElementById("name");
                            x.style.backgroundColor = "black";
                            x.style.color = "white";
                            document.getElementById("babyPic").src = "/images/crying.jpg";
                        }
                        document.getElementById("babyPic").style.border = "thin solid #000000 !important";
                    </script>
                    <hr>

                    <hr>
                    <script>
                        function addFields() {
                            var number = document.getElementById("member").value;
                            var container = document.getElementById("container1");
                            for (i = 0; i < number; i++) {
                                container.appendChild(document.createTextNode("Chore " + (i + 1) + " "));
                                var input = document.createElement("input");
                                input.type = "text";
                                input.id = "Chore " + (i + 1);
                                container.appendChild(input);
                                container.appendChild(document.createElement("br"));
                            }
                            var container = document.getElementById("container1");
                            var btn = document.createElement("BUTTON");        // Create a <button> element
                            var t = document.createTextNode("Submit");       // Create a text node
                            btn.appendChild(t);                                // Append the text to <button>
                            btn.onclick = submitValue();
                            btn.id = "submit";
                            container.appendChild(btn);                    // Append <button> to container1
                        }
                        //reset buttons
                        function resetElements() {
                            document.getElementById('myform').innerHTML = '';
                        }
                        //Submit onclick
                        function submitValue() {
                            alert("This really works!");
                            
                        }
                    </script>
                    <h3>Chore List</h3>
                    <p> This was created with dom manipulation as an example of what can be done in an app. When a person puts a number in the input box, it tells the code to create that number of input boxes. It also numbers them. I created a submit button and attached an id and onclick function to it. This is
                        just for an example, so I created an alert to be ran on onclick. It is not a perfect solution because the onclick function actually runs on creation and not after. Also, if the top button is clicked over and over, the input fields continue to be added and the number loops over and over. So there is work that needs to be done if this idea is used.</p>
                    <input type="text" id="member" name="member" value="">Number of chores: (max. 10)<br />
                    <button type="button" id="filldetails" onclick="addFields()">Add Chores</button><br><br>
                    <div id="container1"></div><br><br>


                    <button onclick="resetElements()">Reset</button>
                    <pre>
                        <code>
                            &lt;script&gt;
                            function addFields() {
                                var number = document.getElementById("member").value;
                                var container = document.getElementById("container1");
                                for (i = 0; i < number; i++) {
                                    container.appendChild(document.createTextNode("Chore " + (i + 1) + " "));
                                    var input = document.createElement("input");
                                    input.type = "text";
                                    input.id = "Chore " + (i + 1);
                                    container.appendChild(input);
                                    container.appendChild(document.createElement("br"));
                                }
                                var container = document.getElementById("container1");
                                var btn = document.createElement("BUTTON");    
                                var t = document.createTextNode("Submit");  
                                btn.appendChild(t);                     
                                btn.onclick = submitValue();
                                btn.id = "submit";
                                container.appendChild(btn);                 
                            }
                            //reset buttons
                            function resetElements() {
                                document.getElementById('myform').innerHTML = '';
                            }
                            //Submit onclick
                            function submitValue() {
                                alert("This really works!");
                            }
                        &lt;/script&gt;
                        </code>
                    </pre>
                    <hr>
                </article>
                <article>
                    <h2>Resources:</h2>
                    <ul>
                        <li><a href="http://www.w3schools.com/js/js_htmldom.asp
                               " target="_blank"> W3schools.com</a></li>
                        <li><a href="http://callmenick.com/post/basics-javascript-dom-manipulation
                               " target="_blank">CallmeNick.com</a></li>
                        <li><a href=" https://github.com/processing/p5.js/wiki/Intro-to-DOM-manipulation-and-events
                               " target="_blank">Github</a></li>
                        <li><a href="https://developer.mozilla.org/en-US/docs/Web/API/Document_Object_Model
                               " target="_blank">Mozilla Developer Network</a></li>    
                    </ul>
                </article>
            </main>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>