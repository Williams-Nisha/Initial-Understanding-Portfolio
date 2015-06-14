<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This section of my portfolio shows examples of my coding experience in my 261 class." >
        <meta  name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Local Storage</title>
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
        <link type="text/css" media="screen" href="css/styles.css" rel="stylesheet">
        <script type="text/javascript" src="/store.js"></script>
    </head>
    <body>
        <div class="container">
            <header>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
            </header>
            <main>
                <h1>Local Storage vs. Session Storage</h1>

                <article>
                    <p>Session storage and local storage is like cookies that you have on a website. The main difference is that they are able to hold more data than cookies are able to store. Session storage holds information only when the browser is open. Local storage stores data with no storage date. It also stores the information on the user's computer versus the website's server. This allows a better user experience for the user when 
                        browsing the website. </p>

                    <p>Syntax:</p>
                    <p>myStorage = localStorage;</p>

                    <p>Three methods used with local storage are setItem(), getItem(), and removeItem();</p>
                    <p>To create a variable using one of these methods, it looks like this...</p>
                    <pre>
                    <code>
                    &lt;script&gt;
                                // Save data to the current session's store
                                
                                sessionStorage.setItem("username", "John");
                                alert("username = " + sessionStorage.getItem("username"));
                                
                                // Access some stored data
                                sessionStorage.removeItem("username");
                                alert("username = " + sessionStorage.getItem("username"));
                                
                                //Now let's refill the sessionStorage with a new value for username.
                                sessionStorage.setItem("username","John1");
                        alert("We removed the sessionStorage in the previous alert. Now I have refilled the sessionStorage with a new value. Hi, I am " + sessionStorage.getItem("username"));
                        
                    &lt;/script&gt;
                    </code>
                    </pre>
                    <h4>Output:</h4>
                    <p> There are three alerts created from the above code upon the page loading. The first one shoes that the username is John. After we use the removeItem() method, It removes John from the username. The second alert calls the getItem() method again and returns, null because the item has been removed. Then, that is reversed by setting the sessionStorage with a new value for "username". It is then alerted to show the new value. </p> 
                    <script>
                        // Save data to the current session's store
                        sessionStorage.setItem("username", "John");
                        alert("username = " + sessionStorage.getItem("username"));
                        // Access some stored data
                        sessionStorage.removeItem("username");
                        alert("username = " + sessionStorage.getItem("username"));
                        sessionStorage.setItem("username", "John1");
                        alert("We removed the sessionStorage in the previous alert. Now I have refilled the sessionStorage with a new value. Hi, I am " + sessionStorage.getItem("username"));
                    </script>
                </article>
                <article>
                    <h3>Session Storage vs. Local Storage</h3>
                    <p>In this example, it shows the difference between local storage and session storage. The button that uses session storage will restart the counter when close the browser(page). The button that uses local storage below it will remember you and continue counting each time you click on the button. </p>

                    <h3>Click Counter</h3>
                    <p>Session storage reset the counter when the page is refreshed.</p>

                    <pre>
                <code>
                    &lt;script&gt;
                    function clickCounter1() {
                        if(typeof(Storage) !== "undefined") {
                            if (sessionStorage.clickcount) {
                                sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
                            } else {
                                sessionStorage.clickcount = 1;
                            }
                            document.getElementById("result1").innerHTML = "You have clicked the button " + sessionStorage.clickcount + " time(s) in this session.";
                        } else {
                            document.getElementById("result1").innerHTML = "Sorry, your browser does not support web storage...";
                        }
                    } 
                     &lt;/script>
                    &lt;p&gt;Click the button to see the counter increase.&lt;/p&gt;
                   &lt;p&gt;Close the browser tab (or window), and try again, and the counter will not reset.&lt;/p&gt;
                    &lt;p&gt;&lt;button onclick="clickCounter1()" type="button"&gt;Click me!&lt;/button&gt;&lt;/p&gt;
                     &lt;div id="result1"&gt;&lt;/div&gt;
                </code>
                    </pre>
                    <h4>Output:</h4>

                    <h2>Session Storage</h2>
                    <script>
                        function clickCounter1() {
                            if (typeof (Storage) !== "undefined") {
                                if (sessionStorage.clickcount) {
                                    sessionStorage.clickcount = Number(sessionStorage.clickcount) + 1;
                                } else {
                                    sessionStorage.clickcount = 1;
                                }
                                document.getElementById("result1").innerHTML = "You have clicked the button " + sessionStorage.clickcount + " time(s) in this session.";
                            } else {
                                document.getElementById("result1").innerHTML = "Sorry, your browser does not support web storage...";
                            }
                        }
                    </script>
                    <p>Click the button to see the counter increase.</p>
                    <p>Close the browser tab (or window), and try again, and the counter will not reset.</p>
                    <p><button onclick="clickCounter1()" type="button">Click me!</button></p>
                    <div id="result1"></div>

                    <h3>Local Storage in Action</h3>
                    <pre>
            <code>
                &lt;script&gt;
                                function clickCounter() {
                                    if (typeof (Storage) !== "undefined") {
                                        if (localStorage.clickcount) {
                                            localStorage.clickcount = Number(localStorage.clickcount) + 1;
                                        } else {
                                            localStorage.clickcount = 1;
                                        }
                                        document.getElementById("result").innerHTML = "You have clicked the button " + localStorage.clickcount + " time(s) in this session.";
                                    } else {
                                        document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
                                    }
                                }
                                &lt;/script&gt;
                                                   &lt;p>Local storage will not reset the counter, but save the count!&lt;/p&gt;
                    &lt;p&gt;&lt;button onclick="clickCounter()" type="button"&gt;Click me&lt;/button&gt;&lt;/p&gt;
                    &lt;div id="result"&gt;&lt;/div&gt;
                    &lt;p&gt;Click the button to see the counter increase.&lt;/p&gt;
                    &lt;p&gt;Close the browser tab (or window), and try again, and the counter will not reset.&lt;/p&gt;
            </code>
                    </pre>

                    <h4>Output:</h4>

                    <h3>Click Counter</h3>
                    <script>
                        function clickCounter() {
                            if (typeof (Storage) !== "undefined") {
                                if (localStorage.clickcount) {
                                    localStorage.clickcount = Number(localStorage.clickcount) + 1;
                                } else {
                                    localStorage.clickcount = 1;
                                }
                                document.getElementById("result").innerHTML = "You have clicked the button " + localStorage.clickcount + " time(s) in this session.";
                            } else {
                                document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
                            }
                        }
                    </script>
                    <p>Local storage will not reset the counter, but save the count!</p>
                    <p><button onclick="clickCounter()" type="button">Click me!</button></p>
                    <div id="result"></div>
                    <p>Click the button to see the counter increase.</p>
                    <p>Close the browser tab (or window), and try again, and the counter will not reset.</p>
                    <hr>
                </article>
                <article>
                    <h3>Local Storage Objects</h3>
                    <p>Local storage objects remain available to the browser once set and will not be deleted until you remove it. In this example, we are going to use my last name. The code will use localStorage to save my last name to the browser. Then it will retrieve it back and output it in a div. </p>
                    <pre>
            <code>
                &lt;script&gt;
                        if (typeof (Storage) != "undefined") {
                            // Store
                            localStorage.setItem("lastname", "Williams");
                            // Retrieve
                            document.getElementById("result2").innerHTML = localStorage.getItem("lastname");
                        } else {
                            document.getElementById("result2").innerHTML = "Sorry, your browser does not support Web Storage...";
                        }
                                }
                                &lt;/script&gt;
            </code>
                    </pre>

                    <h4>Output:</h4>

                    <h3>Local Storage Objects</h3>
                    <div id="result2"></div>
                    <script>
                        // Check browser support
                        if (typeof (Storage) != "undefined") {
                            // Store
                            localStorage.setItem("lastname", "Williams");
                            // Retrieve
                            document.getElementById("result2").innerHTML = localStorage.getItem("lastname");
                        } else {
                            document.getElementById("result2").innerHTML = "Sorry, your browser does not support Web Storage...";
                        }
                    </script>
                    <hr>
                    <h3>What is an API?</h3>
                    <p>According to Wikipedia, an API stands for Application Programming Interface, i.e. API is the way for an application to interact with certain system/application/library/etc. For example, there are API's for OS (WinAPI), API's for other applications (like databases) and for specific libraries (for example, image processing). </p>
                    <p>Apis are tools or libraries that can be used by developers when writing code that adds assessibility to interfaces of other software. </p>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/B9vPoCOP7oY?rel=0" frameborder="0" allowfullscreen></iframe>
                    <p>In the example below, I use JSON.stringify to turn an array object into a string so it can be passed into local Storage. Then to get the object back to use in a function, it needs to be put through JSON.parse. At this point, if you want to console.log or alert it, it must be put through JSON.stringify.</p>
                    <pre>
                        <code>
                        &lt;script&gt;
                        var car = {};
                        car.wheels = 4;
                        car.doors = 2;
                        car.sound = 'vroom';
                        car.name = 'Lightning McQueen';
                        localStorage.setItem('car', JSON.stringify(car));
                        console.log(car);
                        car = JSON.parse(localStorage.getItem('car'));
                        alert ('car = ' + JSON.stringify(car));
                        &lt;script&gt;
                    </code>
                    </pre>
                    <script>

                        var car = {};
                        car.wheels = 4;
                        car.doors = 2;
                        car.sound = 'vroom';
                        car.name = 'Lightning McQueen';
                        localStorage.setItem('car', JSON.stringify(car));
                        console.log(car);
                        car = JSON.parse(localStorage.getItem('car'));
                        alert('car = ' + JSON.stringify(car));


                    </script>
                    <h4>Output</h4>
                    <p>An alert will show up, with the array object of car. This has been stored in localStorage before being outputted in an alert.</p>
                    <pre>
                        <code>
                        store.set('myage', 24);
                        store.get('myage') === 24;

                        store.set('user', {name: 'marcus', likes: 'javascript'});
                        alert("Hi my name is " + store.get('user').name + "!");

                        store.set('tags', ['javascript', 'localStorage', 'store.js']);
                        alert("We've got " + store.get('tags').length + " tags here");
                    </code>
                    </pre>
                    <script>
                        store.set('myage', 24);
                        store.get('myage') === 24;

                        store.set('user', {name: 'marcus', likes: 'javascript'});
                        alert("Hi my name is " + store.get('user').name + "!");

                        store.set('tags', ['javascript', 'localStorage', 'store.js']);
                        alert("We've got " + store.get('tags').length + " tags here");
                    </script>

                    <h4>Output</h4>
                    
                    <p>This code will give two alerts. The first one uses the key of user and name to display the name in a string. The second one uses the javascript length keyword to pull the number of items in an object that is stored into local storage.</p>
                    <p>A built in function to clear the session storage or local storage is window.localStorage.clear();
                    <hr>
                </article>
                <article>
                    <h2>Resources:</h2>
                    <ul>
                        <li><a href="http://www.w3schools.com/Html/html5_webstorage.asp" target="_blank"> W3schools</a></li>
                        <li><a href="http://sixrevisions.com/html/introduction-web-storage/" target="_blank">Six Revisions- Web Storage</a></li>
                        <li><a href="http://www.makeuseof.com/tag/api-good-technology-explained/" target="_blank">APIS Explained</a></li>
                        <li><a href="http://www.drdobbs.com/web-development/the-localstorage-api/240000682?pgno=1" target="_blank">A great article with example APIS</a></li>
                    </ul>
                </article>
            </main>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>