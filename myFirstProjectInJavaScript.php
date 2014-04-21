<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>My First Project in JavaSript</title>
    </head>
    <body>
        <?php
        require 'menu.inc.php';
        require 'libs.inc.php';
        ?>

        <h1>My First Project in JavaSript</h1>

        <ul>
            <li>Fulfil this instruction (but write name of project: jsHelloWorld): <a href="myFirstProjectInPHP.php">My First Program in PHP</a></li>
            <li>Copy and paste this code in index.php</li>

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

            <li>For running application, click "Green Triangle", like on the picture:</li>
            <img src="img/myFirstProjectInJavaScript/0001.png" />
            <br />
            <br />
            <li>Or press F6</li>
        </ul>
    </body>
</html>
