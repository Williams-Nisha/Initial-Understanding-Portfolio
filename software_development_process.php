<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This section of my portfolio shows examples of my coding experience in my 261 class." >
        <meta  name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Software Development Process</title>
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
                <h1>Software Development Process</h1>

                <article>
                    <p>The term Software Development Process is the process of breaking down the complex tasks involved in a large development project into smaller, more manageable steps. It covers a plan to manage the whole lifecycle of the project.</p>

                    <h2>My Training Presentations</h2>
                    <p><a href="software_development_process.pdf" target="blank"><img src="/images/software-development.jpg"><br>CSS Transitions Presentation</a>

                </article> 
                <article>
                    <h2>The Software Development Process</h2>
                    <h3>Requirements Engineering-</h3>
                    <p>The process of establishing the needs of stakeholders that will be solved by software.<p>

                    <ul><li>elicitation- collection of requirements</li>

                        <li>Analysis- study and understanding of requirements</li>

                        <li>Specification- represented, organized and saved</li>

                        <li>Validated- make  sure they are complete and not redundant</li>

                        <li>Management- Changes of requirements during lifecycle</li>
                    </ul>

                    <h3>Design-</h3>
                    <p>The design phase consists of design activities</p>

                    <ul><li>Architectural</li>

                        <li>Abstract specification</li>

                        <li>Interface design</li>

                        <li>Component Design</li>

                        <li>Data Structure</li>

                        <li>Algorithm Design</li>
                    </ul>
                    <h3>Implementation- </h3>
                    <p>Realizing the design of the software. </p>
                    <ul>

                        <li>Reduction of complexity</li>

                        <li>Anticipation of diversity</li>

                        <li>Structuring for validation (testability)</li>

                        <li>Use of (external or internal) standards</li>


                        <li>Verify and Validation: Did we build the right system?</li>
                        <li>Verification: Did we build the system right?</li>
                    </ul>
                    <ul><li>Unit Level Testing</li>

                        <li> Level Testing</li>

                        <li>System Testing</li></ul>

                    <h3>Maintain Code </h3>
                    <p>After the software has been rolled out.</p>

                    <ul><li>Environment change,  feature requests, bug reports</li>

                        <li>Corrective Maintenance- eliminate problems with code</li>

                        <li>Perfective Maintenance- make software better, accommodate requests</li>

                        <li>Adaptive Maintenance-  take care of environment changes</li></ul>

                    <h3>Methodologies for Software Development</h3>
                    <p>These are the most common methodologies used for the software development process.
                    <p>Waterfall – Good for stable product definition where requirements are known. 
                        Software concept, requirements analysis, architectural design, detailed design, coding and debugging, system testing.</p>
                    <p>Spiral- Changes are incremental, less risk
                        Determine objectives, identify and resolve risks, development and tests, plan the next iteration</p>
                    <p>Evolutionary Prototyping- allows for immediate feedback
                        Initial concept, design and implement prototype, refine prototype, complete and release prototype</p>
                    <p>Rational Unified Process- 
                        Inception, elaboration, construction, transition</p>
                    <p>Agile-Test Driven Development
                        Write test phases(fails), make enough code to pass, refactor(modify for readability), start the cycle again</p>
                    <h3>How do we choose which methodology to use?</h3>
                    <ul><li>Requirements (How hard to collect)

                        <li>Expected lifetime (How long)</li>
                        <li>Risk (level of risk)</li>

                        <li>Schedule Constraints (How quickly roll out)</li>

                        <li>Interaction (How much with client)</li>

                        <li>Expertise of People (Know technologies, know process)</li></ul>

                </article>
                <article>
                    <h2>Resources:</h2>
                    <ul>
                        <li><a href="http://en.wikipedia.org/wiki/Software_development_process" target="_blank"> Wikipedia- The Development Process</a></li>
                        <li><a href="https://www.udacity.com/course/software-development-process--ud805" target="_blank">Udacity Free Software Development Process Course</a></li>
                        <li><a href="http://noop.nl/2008/07/the-definitive-list-of-software-development-methodologies.html" target="_blank">Full Methodology List</a></li>

                    </ul>
                </article>
            </main>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>