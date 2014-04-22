<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>My First Plot in JavaScript</title>
    </head>
    <body>
        <?php
        require 'libs.inc.php';
        require 'menu.inc.php';
        ?>

        <h1>My First Plot in JavaScript</h1>

        <ul>
            <li>You will be able to create such plot:</li>
            <img src="img/myFirstPlotInJavaScript/0002.png" />
            <li>Fulfil this instruction, but write the name of the project: myFirstPlotInJavaScript: <a href="myFirstProjectInPHP.php">My First Program in PHP</a></li>
            <li>Note. You should to have the file: index.php. If you haven't, right click on the node project name "myFirstPlotInJavaScript" -> select "New" -> select "PHP Web Page..." -> in the filed "File Name", write: index -> click the button "Finish"</li>
            <li>In the IDE NetBeans, right click on the node project name "myFirstPlotInJavaScript" -> select "New" -> select "Folder..."</li>
            <li>In the "Folder Name", write: js -> click the button "Finish"</li>
            <li>Right click on the folder "js" -> select "New" -> select "Folder..."</li>
            <li>In the "Folder Name", write: libs -> click the button "Finish"</li>
            <li>Move to <a href="http://jquery.com/download/">http://jquery.com/download/</a></li>
            <li>Click on the link with the name, for example "Download the uncompressed, development jQuery 1.11.0"</li>
            <li>In the IDE NetBeans, right click on the folder "libs" -> select "New" -> select "JavaScript File..." -> in the filed "File Name", write: jquery-1.11.0 (see the version of your jQuery) -> click the button "Finish"</li>
            <li>In the "Folder Name", write: libs -> click the button "Finish"</li>
            <li>From the link "Download the uncompressed, development jQuery 1.11.0", select all (Ctrl+A) -> copy selection to the buffer (Ctrl+C)</li>
            <li>Paste all to the file "jquery-1.11.0.js" -> save by "Ctrl+S"</li>
            <li>Download jqPlot, for example jquery.jqplot.1.0.8r1250.zip, from here: <a href="https://bitbucket.org/cleonello/jqplot/downloads/">https://bitbucket.org/cleonello/jqplot/downloads/</a></li>
            <li>From the folder "jquery.jqplot.1.0.8r1250" copy to your "libs" folder, the following file: "jquery.jqplot.min.js"</li>
            <li>Right click on the node project name "myFirstPlotInJavaScript" -> select "New" -> select "Folder..."</li>
            <li>In the "Folder Name", write: css -> click the button "Finish"</li>
            <li>Right click on the folder "css" -> select "New" -> select "Folder..."</li>
            <li>From the folder "jquery.jqplot.1.0.8r1250" copy to your "css" folder, the following file: "jquery.jqplot.css" </li>
            <li>Note. We will use the first example, from here: <a href="http://www.jqplot.com/tests/line-charts.php">http://www.jqplot.com/tests/line-charts.php</a></li>
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
        &lt;title&gt;My First Plot In JavaScript&lt;/title&gt;
        &lt;script language="javascript" type="text/javascript" src="js/libs/jquery-1.11.0.js"&gt;&lt;/script&gt;
        &lt;script language="javascript" type="text/javascript" src="js/libs/jquery.jqplot.js"&gt;&lt;/script&gt;
        &lt;link rel="stylesheet" type="text/css" href="css/jquery.jqplot.css" /&gt;
        &lt;script language="javascript" type="text/javascript"&gt;
            $( document ).ready( function() {
                var plot1 = $.jqplot( 'chart1', [ [ 3, 7, 9, 1, 4, 6, 8, 2, 5 ] ] );
            } );
        &lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div id="chart1" style="height:300px; width:400px; "&gt;&lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code>
            </pre>

            <li>For running application, click "Green Triangle", like on the picture:</li>
            <img src="img/myFirstPlotInJavaScript/0001.png" />
            <br />
            <br />
            <li>Or press F6</li>
        </ul>

    </body>
</html>
