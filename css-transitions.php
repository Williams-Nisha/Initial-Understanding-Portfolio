<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="description" content="This section of my portfolio shows examples of my coding experience in my 261 class." >
 <meta  name="viewport" content="width=device-width, initial-scale=1.0"> 
 <title>CSS Transitions</title>
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
        <h1>CSS Transitions</h1>

    <article>
        <p>CSS transitions is a CSS3 specification that allows us to control transition speed by targeting the properties.  </p>
        <p>The four properties of transition are: property type, delay, duration and timing function</p>
        
        <h2>My Training Presentations</h2>
        <p><a href="/css-transitions.pdf" target="blank"><img src="/images/css-transitions.jpg"><br>CSS Transitions Presentation</a>
                
          </article> 
        <article>
            <h2>Downloaded Code from Tutorial</h2>
            <h3>Example 1</h3>
            <p>This code creates a 200x200 box. When hovered over, it waits 2 seconds, then rotates, grows by 300 pixels and turns blue. When you stop hovering over it, it transitions back to the starting point.</p>
            <pre>
                <code>
                    &lt;p&gt;Html code:&lt;/p&gt;
                    &lt;div class="box"&gt;
                    &lt;p&gt;CSS code&lt;/p&gt;
                    &lt;p&gt; placed in a separate css styles file&lt;/p&gt;
                    .box { 
                    width: 200px;
                    height: 200px;
                    background-color: pink;
                    margin: 50px auto;
                    transition: all 2s ease 1s;
                    }

                   .box:hover {
                     width:500px;
                    height:500px;
                    background-color: blue;
                    transform: rotate(180deg);
                    }
                </code>
            </pre>
            <h4>Output:</h4>
                <div class="box"></div> 
            <hr>
            <h2>My Code</h2>
            <p>This is a photo design I created for another class. When you hover over it, a text overlay is activated to slide over the top of it. Since it is activated on the hover, as soon as you stop hovering, the slider will return to its original "hidden" position. </p>
            <pre>
                <code>
                    &lt;p&gt;HTML&lt;/p&gt;
                    &lt;div class="container1"&gt;
                   &lt;img src="http://nishamwilliams.com/images/goodmen.jpg" alt=""&gt;
                   &lt;div class="textbox"&gt;
                   &lt;p class="text">Childhood Adventures:&lt;/p&gt;
                   &lt;p class="text1">more precious than gold.&lt;/p&gt;
                   &lt;/div&gt;
                   &lt;/div&gt;
                    &lt;p>CSS&lt;/p&gt;
                    CSS
                    .container1 {
                    position:relative;
                    overflow:hidden;
                    width:650px;
                    }
                    .container .textbox {
                    width:647px;
                    height:500px;
                    position:absolute;
                    top:0;
                    left:0;
                    margin-top:-600px;
                    border-radius:5px;
                    background-color: rgba(0,0,0,0.25);
                    }
                    .container1:hover .textbox {
                    margin-top:0;
                    }
                    .text {
                    text-align: center;
                    color:White;
                    font-family:helvetica, arial, sans serif;
                    font-size:50px;
                    font-weight:bold;
                    }
                    .text1{
                    text-align: center;
                    color:White;
                    font-family:helvetica, arial, sans serif;
                    font-size:36px;
                    }
                    .textbox {
                    -webkit-transition: all 0.7s ease;
                    transition: all 0.7s ease;
                    }
                </code>
            </pre>
            
            <div class="container1">
            <img src="http://nishamwilliams.com/images/goodmen.jpg" alt="cute boy reading a book" height="500" width="647">
            <div class="textbox">
            <p class="text">Childhood Adventures:</p>
            <p class="text1">more precious than gold.</p>
            </div>
            </div>
            <hr>
        </article>
        <article>
            <h2>Resources:</h2>
            <ul>
                <li><a href="https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Using_CSS_transitions
                       " target="_blank"> Mozilla Developer Network-using css transitions</a></li>
                <li><a href="https://css-tricks.com/almanac/properties/t/transition/" target="_blank">CSS-Tricks Transition Property</a></li>
                <li><a href="http://codepen.io/impressivewebs/pen/zohgt
                       " target="_blank">CSS coding sandbox  Codepen Sandbox</a></li>
                <li><a href="http://www.impressivewebs.com/css3-transitions-without-hover/" target="_blank">Transitions Other than Hover impressivewebs.com</a></li>   
                <li><a href="http://www.w3schools.com/cssref/css3_pr_transition.asp" target="_blank">W3schools.com CSS Transition</a></li>
                <li><a href="http://james-star.com/answers/en/css3-hover-effect-transitions-transformations-and-animations/" target="_blank">James Star- Transitions, transformations, and animations</a></li>
            </ul>
        </article>
     </main>
     <footer>
                  <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php';?>
     </footer>
</div>
 </body>
</html>