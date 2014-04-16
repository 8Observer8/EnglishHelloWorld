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
            <li>download and install Java: <a href="http://java.com/en/">http://java.com/en/</a></li>
            <li>download and install NetBeans for PHP: <a href="https://netbeans.org/downloads/">https://netbeans.org/downloads/</a></li>
            <li>download and install XAMPP: <a href="http://www.apachefriends.org/download.html">http://www.apachefriends.org/download.html</a></li>
            <li>run NetBeans</li>
            <li>select in the menu "File" -> select "New Project"</li>
            <li>select in "Categories"-field -> "PHP"</li>
            <li>select in "Projects"-field -> "PHP Application" (how in the picture below)</li>
            <img src="img/phpMyFirstProject/0001.png" />
            <li>click "Next" button</li>
            <li>type in the fild "Project Name": PhpHelloWorld</li>
            <li>select a folder in the location: C:\xampp\htdocs\ For example: C:\xampp\htdocs\PhpHelloWorld (how in the picture below)</li>
            <img src="img/phpMyFirstProject/0002.png" />
            <li>click "Finish" button</li>
            <li>click on right button on Project node</li>
            <li>select "New" -> "PHP Web Page..."</li>
            <li>type in "File Name": index.php</li>
            <li>copy and past following code in index.php:</li>

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

            <li>click F6 for running this program</li>
        </ul>
    </body>
</html>
