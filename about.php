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
            <a href="index.html">Home</a>
            <a href="about.html" class="active">About</a>
            <a href="contact.html">Contact</a>
        </nav>
        
        <br /><br />
        
        <div id="content">
            
            <table>
                <tr id="table-header">
                    <td><strong>Programming Language</strong></td>
                    <td><strong>Years Experience</strong></td>
                </tr>
                <tr class="table-row">
                    <td>Java</td>
                    <td>3</td>
                </tr>
                <tr class="table-row">
                    <td>C++</td>
                    <td>2</td>
                </tr>
                <tr class="table-row">
                    <td>PHP</td>
                    <td>1</td>
                </tr>
            </table>
            
            <ul>
                <li><span class="hobby">Video games</span>: I own four consoles and like all kind of games but my favorite is The Legend of Zelda </li>
                <li><span class="hobby">Soccer</span>: I am part of a team and we play every saturday. I'm the goalie.</li>
                <li><span class="hobby">Music</span>: I love all kind of music but my favorite is R&B and Pop.</li>
                <li><span class="hobby">Programming</span>: I spend at least two hours every day using and learning programming languages.</li>
            </uL>
        </div>
        
        
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr>
            CST336 Internet Programming. 2020&copy; Mello <br />
            <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br />
            It is used for academic purposes only.
            <img src="img/csumb-logo.png">
        </footer>
        <!-- closing footer -->
    </body>
    <!-- closing body -->

</html>