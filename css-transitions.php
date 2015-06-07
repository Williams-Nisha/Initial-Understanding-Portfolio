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
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
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
                    <hr>            <h3>Example 2</h3>
                    <p>This code creates an 100px red circle with eight blue circles positioned above it. When you hover over it, the blue circles move to the outside edge of an invisible box and the red circle fades. As soon as you move your mouse, everything returns back to the beginning position.</p>
                    <pre>
                <code>
                    &lt;script&gt;
                    #delay_demo {
                        position:relative;
                        width:500px;
                        height:400px;
                        margin:0 auto 10px;
                        border:1px #aaa solid;
                        padding:10px;
                    }
                    #dd_main {
                        width:100px;
                        height:100px;
                        margin: auto;
                        background-color:red;
                        -webkit-border-radius:50px;
                        -moz-border-radius:50px;
                        border-radius:50px;
                        -webkit-transition: all 2s ease-in-out;
                        -moz-transition: all 2s ease-in-out;
                        -o-transition: all 2s ease-in-out;
                        transition: all 2s ease-in-out;}
                    #delay_demo .center {
                        width:500px;
                        position:absolute;
                        bottom:20px;
                    }
                    #dd1, #dd2, #dd3, #dd4, #dd5, #dd6, #dd7, #dd8 {
                        width:20px;
                        height:20px;
                        -webkit-border-radius:10px;
                        -moz-border-radius:10px;
                        border-radius:10px;
                        position:absolute;
                        top:1670px;
                        left:750px;
                        background-color:blue;
                        -webkit-transition: all 2s ease-in-out;
                        -moz-transition: all 2s ease-in-out;
                        -o-transition: all 2s ease-in-out;
                        transition: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        -moz-transform: translate3d(0,0,0);
                        -o-transform: translate3d(0,0,0);
                        -ms-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);}
                    #dd1 {
                        -webkit-transition-delay: 0.1s;
                        -moz-transition-delay: 0.1s;
                        -o-transition-delay: 0.1s;
                        -ms-transition-delay: 0.1s;
                        transition-delay: 0.1s;  }
                    #dd2 {
                        -webkit-transition-delay: 0.2s;
                        -moz-transition-delay: 0.2s;
                        -o-transition-delay: 0.2s;
                        -ms-transition-delay: 0.2s;
                        transition-delay: 0.2s;  }
                    #dd3 {
                        -webkit-transition-delay: 0.3s;
                        -moz-transition-delay: 0.3s;
                        -o-transition-delay: 0.3s;
                        -ms-transition-delay: 0.3s;
                        transition-delay: 0.3s;  }
                    #dd4 {
                        -webkit-transition-delay: 0.4s;
                        -moz-transition-delay: 0.4s;
                        -o-transition-delay: 0.4s;
                        -ms-transition-delay: 0.4s;
                        transition-delay: 0.4s;  }
                    #dd5 {
                        -webkit-transition-delay: 0.5s;
                        -moz-transition-delay: 0.5s;
                        -o-transition-delay: 0.5s;
                        -ms-transition-delay: 0.5s;
                        transition-delay: 0.5s;  }
                    #dd6 {
                        -webkit-transition-delay: 0.6s;
                        -moz-transition-delay: 0.6s;
                        -o-transition-delay: 0.6s;
                        -ms-transition-delay: 0.6s;
                        transition-delay: 0.6s;  }
                    #dd7 {
                        -webkit-transition-delay: 0.7s;
                        -moz-transition-delay: 0.7s;
                        -o-transition-delay: 0.7s;
                        -ms-transition-delay: 0.7s;
                        transition-delay: 0.7s;  }
                    #dd8 {
                        -webkit-transition-delay: 0.8s;
                        -moz-transition-delay: 0.8s;
                        -o-transition-delay: 0.8s;
                        -ms-transition-delay: 0.8s;
                        transition-delay: 0.8s;  }
                    #delay_demo:hover #dd_main {
                        opacity:0;
                    }
                    #delay_demo:hover #dd1, #delay_demo.hover_effect #dd1 {
                        -webkit-transform: translate(-250px,-200px);
                        -moz-transform: translate(-250px,-200px);
                        -o-transform: translate(-250px,-200px);
                        -ms-transform: translate(-250px,-200px);
                        transform: translate(-250px,-200px);}
                    #delay_demo:hover #dd2, #delay_demo.hover_effect #dd2 {
                        -webkit-transform: translate(0,-200px);
                        -moz-transform: translate(0,-200px);
                        -o-transform: translate(0,-200px);
                        -ms-transform: translate(0,-200px);
                        transform: translate(0,-200px);}
                    #delay_demo:hover #dd3, #delay_demo.hover_effect #dd3 {
                        -webkit-transform: translate(250px,-200px);
                        -moz-transform: translate(250px,-200px);
                        -o-transform: translate(250px,-200px);
                        -ms-transform: translate(250px,-200px);
                        transform: translate(250px,-200px);}
                    #delay_demo:hover #dd4, #delay_demo.hover_effect #dd4 {
                        -webkit-transform: translate(250px, 0);
                        -moz-transform: translate(250px, 0);
                        -o-transform: translate(250px, 0);
                        -ms-transform: translate(250px, 0);
                        transform: translate(250px, 0);}
                    #delay_demo:hover #dd5, #delay_demo.hover_effect #dd5 {
                        -webkit-transform: translate(250px,200px);
                        -moz-transform: translate(250px,200px);
                        -o-transform: translate(250px,200px);
                        -ms-transform: translate(250px,200px);
                        transform: translate(250px,200px);}
                    #delay_demo:hover #dd6, #delay_demo.hover_effect #dd6 {
                        -webkit-transform: translate(0,200px);
                        -moz-transform: translate(0,200px);
                        -o-transform: translate(0,200px);
                        -ms-transform: translate(0,200px);
                        transform: translate(0,200px);}
                    #delay_demo:hover #dd7, #delay_demo.hover_effect #dd7 {
                        -webkit-transform: translate(-250px,200px);
                        -moz-transform: translate(-250px,200px);
                        -o-transform: translate(-250px,200px);
                        -ms-transform: translate(-250px,200px);
                        transform: translate(-250px,200px);}
                    #delay_demo:hover #dd8, #delay_demo.hover_effect #dd8 {
                        -webkit-transform: translate(-250px,0);
                        -moz-transform: translate(-250px,0);
                        -o-transform: translate(-250px,0);
                        -ms-transform: translate(-250px,0);
                        transform: translate(-250px,0);}
                        &lt;/script&gt;
                        &lt;div id="delay_demo" class="aligncenter" &gt;
                        &lt;div id="dd_main"&gt&lt;/div&gt;
                        &lt;div id="dd1"&gt;&lt;/div&gt;
                        &lt;div id="dd2"&gt;&lt;/div&gt;
                        &lt;div id="dd3"&gt;&lt;/div&gt;
                        &lt;div id="dd4"&gt;&lt;/div&gt;
                        &lt;div id="dd5"&gt;&lt;/div&gt;
                        &lt;div id="dd6"&gt;&lt;/div&gt;
                        &lt;div id="dd7"&gt;&lt;/div&gt;
                        &lt;div id="dd8"&gt;&lt;/div&gt;
                       &lt;p class="aligncenter"&gt; Hover on me&lt;/p&gt;
                    &lt;/div&gt;

                </code>
                    </pre>
                    <h4>Output:</h4>
                    <div id="delay_demo" class="aligncenter" >
                        <div id="dd_main"></div>
                        <div id="dd1"></div>
                        <div id="dd2"></div>
                        <div id="dd3"></div>
                        <div id="dd4"></div>
                        <div id="dd5"></div>
                        <div id="dd6"></div>
                        <div id="dd7"></div>
                        <div id="dd8"></div>
                        <p class="aligncenter"> Hover on me</p>
                    </div>
                    <hr class="clearfloat">
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
                    <h2>Example 2</h2>
                    <p>This is an example of a slider image. When you hover over it, it slides to the left. The text is positioned beneath the image using z-index and is revealed when the hover activates the image. </p>
                    <pre>
                <code>
                     .container2 {
                         overflow:hidden;    
                         width:200px;
                         height:150px;

                     }
                     .container2 .textbox1 {
                         top:0;
                         left:0;
                         width:200px;
                         height:150px;
                         margin-top: -100px;
                         z-index: 1;
                     }
                     .container2:hover .textbox1 {
                         margin-left:0;
                     }
                     .container2 img {
                         position:relative;
                         margin-left:0;
                         z-index: 5;

                     }
                     .container2:hover img {
                         margin-left:210px;
                     }
                     .text2 {
                         position:absolute;
                         text-align: center;
                         color:#666;
                         font-family:helvetica, arial, sans serif;
                         font-size:15px;
                         font-weight:bold;
                         width: 200px;
                     }
                     .container2 img, .textbox1 {
                         -webkit-transition: all 0.7s ease;
                         transition: all 0.7s ease;
                     }
                    &lt;div class="container2"&gt;
                         &lt;img src="http://www.nishamwilliams.com/images/photodesign.jpg"&gt;
                         &lt;div class="textbox1"&gt;
                            &lt;p class="text2"&gt;A mountain is climbed one step at a time.&lt;/p&gt;
                        &lt;/div&gt;
                     &lt;/div&gt;
                </code>
                    </pre>



                    <div class="container2">
                        <img src="http://www.nishamwilliams.com/images/photodesign.jpg">
                        <div class="textbox1">
                            <p class="text2">A mountain is climbed one step at a time.</p>
                        </div>
                    </div>
                </article>
                <hr>
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
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>