<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>My First Project in C++</title>
    </head>
    <body>
        <?php
        require 'libs.inc.php';
        require 'menu.inc.php';
        ?>

        <h1>My First Project in C++</h1>
        <ul>
            <li>Download and install Qt (MinGW, OpenGL). For this, click "Show Downloads" here <a href="http://qt-project.org/downloads">http://qt-project.org/downloads</a> and select <strong>Qt 5.2.1 for Windows 32-bit (MinGW 4.8, OpenGL, 634 MB)</strong></li>
            <li>Run "Qt Creator" from the Start menu, like in the picture:</li>
            <img src="img/myFirstProjectInCpp/001.png"/>
            <br />
            <br />
            <li>In the menu select "File" -> "New File or Project..."</li>
            <li>In the "Project" field, select "Other Project" -> in second column select "Empty Qt Project", like in the picture:</li>
            <img src="img/myFirstProjectInCpp/002.png" />
            <br />
            <br />
            <li>In the "Name" field, write: HelloCpp -> click button "Browse..." -> select a location for your project -> click the button "Next", like on the picture:</li>
            <img src="img/myFirstProjectInCpp/003.png" />
            <br />
            <br />
            <li>Click "Next" -> click "Finish"</li>
            <li>Right click on project name -> select "Add New...", like on the picture:</li>
            <img src="img/myFirstProjectInCpp/004.png" />
            <br />
            <br />
            <li>In first column, select "C++" -> in second column "Source File" -> click the button "Chouse", like on the picture:</li>
            <img src="img/myFirstProjectInCpp/005.png" />
            <br />
            <br />
            <li>In the "Name" field, write: main.cpp -> click the button "Next" -> click the button "Finish"</li>
            <li>Copy and paste following code to the file "main.cpp":</li>
            <p><strong>main.cpp</strong></p>
            <pre>
<code class="language-cpp">
#include &lt;iostream&gt;

int main() {
    std::cout << "Hello, World!" << std::endl;
    return 0;
}
</code>
            </pre>
            <li>For running application, click "Green Triangle", like on the picture:</li>
            <img src="img/myFirstProjectInCpp/006.png" />
            <br />
            <br />
            <li>Or press F5</li>
            <li>You can see the result of working of the application in the "Application Output" window:</li>
            <img src="img/myFirstProjectInCpp/007.png" />
        </ul>
    </body>
</html>
