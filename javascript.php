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
         <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php';?>
     </header>
     <main>
         <h1>Javascript Objects</h1>

        <article>
            <h2>Downloaded Code from Tutorial</h2>
            <h3>Example 1</h3>
            <p>This example adds an alert once the sentence is clicked.</p>
            <pre>
                <code>

                    &lt;!DOCTYPE html&gt;
                   &lt;html&gt;
                   &lt;body&gt;

                   &lt;p&gt;JavaScript Object Creation&lt/p&gt;

                   &lt;p id="show"&gt;&lt;/p&gt;

                   &lt;script&gt;
                   var house = {rooms:"3", bath:"2 1/2", garage:"2 car"};
                   document.getElementById("show").innerHTML = house.garage;
                   &lt;/script&gt;

                   &lt;/body&gt;
                   &lt;/html&gt;
                </code>
            </pre>  

            <h4>Output:</h4>
            <p>Javascript Object Creation</p>
                <p id="show"></p>

                <script>
                  var house = {rooms:"3", bath:"2 1/2", garage:"2 car"};
                  document.getElementById("show").innerHTML = house.garage;
                </script>

            <hr>            
            <h3>Example 2</h3>
            <pre>
                <code>
                    &lt;!DOCTYPE html&gt;
                    &lt;html&gt;
                    &lt;body&gt;

                    &lt;p&gt;Creating a JavaScript Object&lt/p&gt;

                   &lt;p id="demo"&gt;&lt;/p&gt;&lt;p&gt;Garage&lt;/p&gt;

                    &lt;script&gt;
                     var car = {type:"Fiat", model:500, color:"white"};
                    document.getElementById("demo").innerHTML = car.type;

                    &lt;/script&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                </code>
            </pre>
            <h4>Output:</h4>
            <p>Creating a JavaScript Object</p>
            <p id="demo"></p>

            <script>
            var car = {type:"Fiat", model:500, color:"white"};
            document.getElementById("demo").innerHTML = car.type;
            </script>
            <hr>
            <h2>My Code</h2>
            <pre>
                <code>
                    &lt;!DOCTYPE html&gt;
                    &lt;html&gt;
                    &lt;body&gt;
                    &lt;script&gt;
                    var favorites= {food:"italian", restaurant:"Cafe Rio", flower:"Gerberra Daisies", dessert:"cupcakes", vacation:"cruise"};

                    document.getElementById("output").innerHTML= "It's Mother's Day this weekend. I thought I could make it easier for you by telling you a few of my favorites. " + " I love " + favorites.food + ", but my favorite restaurant is actually " + favorites.restaurant + " I love " + favorites.flower + " , but I prefer plants because flowers don't last as long. " + " I love anything with chocolate, but my favorite dessert is actually well made " + favorites.dessert + " . But if you want to get me something really awesome, you can't fail with a " + favorites.vacation +" . See, I am not that hard to please! ";

                    &lt;h4&gt;Output&lt;/h4&gt;
                    &lt;div id="output"&gt;&lt;/div&gt;
                    &lt;/script&gt;
                    &lt;/body&gt;
                    &lt;/html&gt;
                </code>
            </pre>
            <h4>Output:</h4>
            <div id="output" class="featurebox"></div>
            <script>
            var favorites= {food:"italian", restaurant:"Cafe Rio", flower:"Gerberra Daisies", dessert:"cupcakes", vacation:"cruise"};

            document.getElementById("output").innerHTML= "It's Mother's Day this weekend. I thought I could make it easier for you by telling you a few of my favorites. " 
                    + " I love " + favorites.food + ", but my favorite restaurant is actually " + favorites.restaurant + ". I love " + favorites.flower +
                   " , but I prefer plants because flowers don't last as long. " + " I love anything with chocolate, but my favorite dessert is actually well made " + favorites.dessert + 
                   " . But if you want to get me something really awesome, you can't fail with a " + favorites.vacation +" . See, I am not that hard to please! ";
            </script>
        </article>
            <hr>
        <article>
            <h2>Resources:</h2>
            <ul>
                <li><a href="http://www.w3schools.com/js/js_objects.asp" title="W3Schools - JS Objects" target="_blank">
                        Introduction to JS Objects</a></li>
                <li><a href="http://www.w3schools.com/js/js_object_definition.asp" title="W3Schools - JS Object Definition" target="_blank">
                        JS Object Definition</a></li>
                <li><a href="http://www.w3schools.com/js/js_properties.asp" title="W3Schools - JS Object Properties" target="_blank">
                        JS Object Properties</a></li>
                <li><a href="http://www.w3schools.com/js/js_object_methods.asp" title="W3Schools - JS Object Methods" target="_blank">
                        JS Objects Methods</a></li>   
            </ul>
        </article> 
     </main>
     <footer>
                  <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php';?>
     </footer>
</div>
 </body>
</html>