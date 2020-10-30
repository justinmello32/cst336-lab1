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
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php" class="active">Contact</a>
        </nav>
        
        <br /><br />
        
        <div id="content">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSevQFwhz8QuE_0Q9hI43oA6f3TvYA7qwtVecihLgIUjrbamzw/viewform?embedded=true" width="640" height="943" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
        </div>
        
        
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