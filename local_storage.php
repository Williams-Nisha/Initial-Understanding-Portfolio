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
    </head>
    <body>
        <div class="container">
            <header>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
            </header>
            <main>
                <h1>Local Storage</h1>

                <article>
                    <p>Local storage is a better way to save data on a website. Local storage is like the traditional cookies that is stored when a user visits a website. Local storage stores more data than cookies. It also stores the information on the user's computer versus the website's server. This allows a better user experience for the user when 
                    browsing the website. </p>

                    <p>Syntax:</p>
                    <p>myStorage = localStorage;</p>
                </article> 
                <article>
                    <h2>Downloaded Code from Tutorial</h2>
                    <h3>Session Storage vs. Local Storage</h3>
                    <p>In this example, it shows the difference between local storage and session storage. The button that uses session storage will restart the counter when close the browser(page>. The button that uses local storage below it will remember you and continue counting each time you click on the button. </p>

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
                </article>


                <article>
                    <h2>Resources:</h2>
                    <ul>
                        <li><a href="http://www.w3schools.com/Html/html5_webstorage.asp" target="_blank"> W3schools</a></li>
                        <li><a href="http://sixrevisions.com/html/introduction-web-storage//" target="_blank">Six Revisions- Web Storage</a></li>

                    </ul>
                </article>
            </main>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>