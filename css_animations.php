<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="description" content="This section of my portfolio shows examples of my coding experience in my 261 class." >
 <meta  name="viewport" content="width=device-width, initial-scale=1.0"> 
 <title>CSS Animation</title>
 <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
 <link type="text/css" media="screen" href="css/styles.css" rel="stylesheet">
  <style type="text/css">
    h2 {
      -moz-animation-duration: 3s;
      -webkit-animation-duration: 3s;
      -moz-animation-name: slidein;
      -webkit-animation-name: slidein;
      -moz-animation-iteration-count: infinite;
      -webkit-animation-iteration-count: infinite;
      -moz-animation-direction: alternate;
      -webkit-animation-direction: alternate;
    }
    
    @-moz-keyframes slidein {
      from {
        margin-left:100%;
        width:300%
      }
      
      75% {
        font-size:300%;
        margin-left:25%;
        width:150%;
      }
      
      to {
        margin-left:0%;
        width:100%;
      }
    }
    
    @-webkit-keyframes slidein {
      from {
        margin-left:100%;
        width:300%
      }
      
      75% {
        font-size:300%;
        margin-left:25%;
        width:150%;
      }
      
      to {
        margin-left:0%;
        width:100%;
      }
    }
#square {
    width: 200px;
    height: 200px;
    background-color: pink;
    position: relative;
    /* Chrome, Safari, Opera */
    -webkit-animation-name: example;
    -webkit-animation-duration: 5s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-delay: 1s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-direction: alternate;
    /* Standard syntax */
    animation-name: example;
    animation-duration: 5s;
    animation-timing-function: linear;
    animation-delay: 1s;
    animation-iteration-count: infinite;
    animation-direction: alternate;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes example {
    0%   {background-color:blue; left:0px; top:0px;}
    25%  {background-color:red; left:200px; top:0px;}
    50%  {background-color:pink; left:200px; top:200px;}
    75%  {background-color:turquoise; left:0px; top:200px;}
    100% {background-color:brown; left:0px; top:0px;}
}

/* Standard syntax */
@keyframes example {
    0%   {background-color:blue; left:0px; top:0px;}
    25%  {background-color:red; left:200px; top:0px;}
    50%  {background-color:pink; left:200px; top:200px;}
    75%  {background-color:turquoise; left:0px; top:200px;}
    100% {background-color:brown; left:0px; top:0px;}
}
</style>
</head>
 <body>
<div class="container">
    <header>
         <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php';?>
    </header>
    <main>
        <h1>CSS Animations</h1>

    <article>
        <p>CSS3 Animations allows for animation of most html elements. You can change any property you want, as many times as you want. The animation allows the element to gradually change from one style to another.</p>
          </article> 
        <article>
            <h3>Downloaded Code from Tutorial</h3>
            <h3>Example 1</h3>
            <p>This code example takes a h2 header and animates a few things about it. First, it slides in from the right side. It starts small and grows to 300% of its normal size on the center of the page, then goes back to its normal sizeable
            size when it reaches the left side. Then it reverses the animation back to the right side. The animation continues as long as the browser window is open.</p>
            <pre>
                <code>
                    &lt;style type="text/css"&gt;
                      h2 {
                        -moz-animation-duration: 3s;
                        -webkit-animation-duration: 3s;
                        -moz-animation-name: slidein;
                        -webkit-animation-name: slidein;
                        -moz-animation-iteration-count: infinite;
                        -webkit-animation-iteration-count: infinite;
                        -moz-animation-direction: alternate;
                        -webkit-animation-direction: alternate;
                      }

                      @-moz-keyframes slidein {
                        from {
                          margin-left:100%;
                          width:300%
                        }

                        75% {
                          font-size:300%;
                          margin-left:25%;
                          width:150%;
                        }

                        to {
                          margin-left:0%;
                          width:100%;
                        }
                      }

                      @-webkit-keyframes slidein {
                        from {
                          margin-left:100%;
                          width:300%
                        }

                        75% {
                          font-size:300%;
                          margin-left:25%;
                          width:150%;
                        }

                        to {
                          margin-left:0%;
                          width:100%;
                        }
                      }

                    &lt;/style&gt;
                </code>
            </pre>
            <h4>Output:</h4>
  <h2>Watch me move</h2>
  <p>CSS Animations can make text move across the page. </p>
            <hr>
            <h3>My Code</h3>
            <p>For my code example, I took a div that was styled in the css to look like a square. The square starts on the left of the page. Then it goes down, right, up and back to its starting position. During this transition, it changes color four times. Once it reaches the starting position, it reverses back through the 
            animation. Since it is set to infinite on the count, it will repeat the animation as long as the browser window is open.</p>
            <pre>
                <code>
                  &lt;style&gt;
                    #square {
                        width: 200px;
                        height: 200px;
                        background-color: pink;
                        position: relative;
                        /* Chrome, Safari, Opera */
                        -webkit-animation-name: example;
                        -webkit-animation-duration: 5s;
                        -webkit-animation-timing-function: linear;
                        -webkit-animation-delay: 1s;
                        -webkit-animation-iteration-count: infinite;
                        -webkit-animation-direction: alternate;
                        /* Standard syntax */
                        animation-name: example;
                        animation-duration: 5s;
                        animation-timing-function: linear;
                        animation-delay: 1s;
                        animation-iteration-count: infinite;
                        animation-direction: alternate;
                    }

                    /* Chrome, Safari, Opera */
                    @-webkit-keyframes example {
                        0%   {background-color:blue; left:0px; top:0px;}
                        25%  {background-color:red; left:200px; top:0px;}
                        50%  {background-color:pink; left:200px; top:200px;}
                        75%  {background-color:turquoise; left:0px; top:200px;}
                        100% {background-color:brown; left:0px; top:0px;}
                    }

                    /* Standard syntax */
                    @keyframes example {
                        0%   {background-color:blue; left:0px; top:0px;}
                        25%  {background-color:red; left:200px; top:0px;}
                        50%  {background-color:pink; left:200px; top:200px;}
                        75%  {background-color:turquoise; left:0px; top:200px;}
                        100% {background-color:brown; left:0px; top:0px;}
                    }
                    &lt;style&gt;
                </code>
            </pre>

            <h4>Output:</h4>
            <div id="square"></div>
        </article>
        <article>
            <h3>Resources:</h3>
            <ul>
                <li><a href="http://www.w3schools.com/css/css3_animations.asp
                       " target="_blank"> W3schools- CSS Animations</a></li>
                <li><a href="https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Using_CSS_animations" target="_blank">Mozilla Developer Network</a></li>
                <li><a href="http://www.justinaguilar.com/animations/" target="_blank">Justin Aguilar- Animation Cheat Sheet</a></li>
            </ul>
        </article>
     </main>
     <footer>
                  <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php';?>
     </footer>
</div>
 </body>
</html>