<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <meta charset="utf-8"/>
        <title>Jose Crescencio Portfolio Site</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Libre+Barcode+39+Text" rel="stylesheet">
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
            <header>
            <h1>Jose Crescencio</h1>
            <h2>Home</h2>
        </header>
        <nav>
            <hr width="25%"/>
            <a href="index.php" id="currentPage">Home</a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>
        </nav>
        
        <br/><br/>
        
        <main>
            <figure id="me">
                <img src="img/me.jpg"/>
            </figure>
            <div id="welcomeText">
                Hello!<br/>
                <p>
                    Thank you for visiting my professional portfolio website.
                </p>
                <p>
                    I am a Software Engineer and have been recently hired at the
                    Acme Corporation.
                </p>
                <p>
                    Feel free to contact me!
                </p>
                
                <br/><br/>
                
                <em>
                    "With ordinary talent and extraordinary 
                    <strong>perserverance</strong>, all things are attainable"
                </em>
                
                <br/>
                
                - Thomas F. Burton
        </main>
       </div>
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr>
            <p id="footerText">    
                CST-336. 2017&copy; Crescencio<br/>
                <strong>Disclaimer:</strong> The information on this website is
                fictitous.<br/>
                It is used for academic purposes only.
            </p>
            <img src="img/csumbLogo.png"/>
        </footer>
            <!-- closing footer -->
        </div>
    </body>
    <!-- closing body -->

</html>