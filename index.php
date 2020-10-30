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
        <meta charset="utf-8">
        <title> Juan Doe: Personal Website</title>
        
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        <header>
            <h1> Juan Doe </h1>
        </header>
        <hr />
        <nav>
            <a href="index.php" class="active">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </nav>
        
        <br /><br />
        
        <main>
            
            <figure>
                <img src="img/juan_doe.png" alt="Picture of Juan Doe" />
            </figure>
            
            <div>
                Hello! <br />
                <p>Thank you for visting my professional portfolio website.</p>
                <p>I am a Software Engineer and have been recently hired at the Acme Corporation</p>
                <p>Feel free to contact me!</p>
                
                <br /><br />
                
                <em>"With ordinary talent and extraordinary <strong>perseverance</strong>, all things are attainable"</em><br />
                - Thomas F. Buxton
                
            </div>
            
        </main>
        
        
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr>
            CST336 Internet Programming. 2020&copy; Mello <br />
            <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br />
            It is used for academic purposes only.
            <img src="img/csumb-round.png">
        </footer>
        <!-- closing footer -->
    </body>
    <!-- closing body -->

</html>