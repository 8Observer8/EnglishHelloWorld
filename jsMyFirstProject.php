<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>My First Program in JavaSript</title>
    </head>
    <body>
        <?php
        require 'menu.inc.php';
        require 'libs.inc.php';
        ?>

        <h1>My First Program in JavaSript</h1>

        <ul>
            <li>fulfil this instruction (but write name of project: jsHelloWorld): <a href="phpMyFirstProject.php">My First Program in PHP</a></li>
            <li>copy and past this code in index.php</li>

            <p><strong>index.php</strong></p>
            <pre>
<code class="language-php">
&lt;!DOCTYPE html&gt;
&lt;!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="UTF-8"&gt;
        &lt;title&gt;My First JavaSript Program&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        
        &lt;h1&gt;My First JavaScript Program&lt;/h1&gt;
        
        &lt;script type="text/javascript"&gt;
            for (var i = 0; i &lt;= 10; ++i) {
                document.write("The number is: " + i + "&lt;br&gt;");
            }
            
            document.write("&lt;h3&gt;Hello, World!&lt;/h3&gt;");
        &lt;/script&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code>
            </pre>

            <li>click F6 for running this program</li>
        </ul>
    </body>
</html>
