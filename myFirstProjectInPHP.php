<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>My First Program in PHP</title>
    </head>
    <body>
        <?php
        require 'menu.inc.php';
        require 'libs.inc.php';
        ?>

        <h1>My First Program in PHP</h1>

        <ul>
            <li>Install NetBeans IDE, for this, see instruction: <a href="installing_netbeans.php">Instulling NetBeans</a></li>
            <li>Download and install XAMPP (to C:/xampp): <a href="http://www.apachefriends.org/download.html">http://www.apachefriends.org/download.html</a></li>
            <li>Run XAMPP and start Apache Server, for this, click on the button "Start", like on the picture:</li>
            <img src="img/myFirstProjectInPHP/0004.png" />
            <li>Run NetBeans</li>
            <li>In the "Menu", select "File" -> select "New Project"</li>
            <li>In the "Categories" field, select "PHP"</li>
            <li>In the "Projects" field, select "PHP Application", like on the picture:</li>
            <img src="img/myFirstProjectInPHP/0001.png" />
            <li>Click the button "Next"</li>
            <li>Type in the fild "Project Name": PhpHelloWorld</li>
            <li>Select a folder in the location: C:\xampp\htdocs\ For example: C:\xampp\htdocs\PhpHelloWorld, like on the picture:</li>
            <img src="img/myFirstProjectInPHP/0002.png" />
            <li>Click the button "Finish"</li>
            <li>Right click on project name node (on the left panel "Projects")</li>
            <li>Note. If you don't see the panel "Projects" go to the "Menu" -> select "Window" -> select "Projects"</li>
            <li>Select "New" -> "PHP Web Page..."</li>
            <li>In "File Name" write: index.php</li>
            <li>Copy and paste following code in index.php:</li>

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
        &lt;title&gt;My First PHP Program&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;

        &lt;h1&gt;My First PHP Program&lt;/h1&gt;

        &lt;?php
        for ($i = 0; $i &lt;= 10; $i++) {
            echo "The number is: $i &lt;br&gt;";
        }

        echo '&lt;h3&gt;Hello, World!&lt;/h3&gt;';
        ?&gt;

    &lt;/body&gt;
&lt;/html&gt;
</code>
            </pre>

            <li>For running application, click "Green Triangle", like on the picture:</li>
            <img src="img/myFirstProjectInPHP/0003.png" />
            <br />
            <br />
            <li>Or press F6</li>
        </ul>
    </body>
</html>
