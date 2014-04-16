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
            <li>download and install Qt (MinGW, OpenGL). For this click "Show Downloads" here <a href="http://qt-project.org/downloads">http://qt-project.org/downloads</a> and select <strong>Qt 5.2.1 for Windows 32-bit (MinGW 4.8, OpenGL, 634 MB)</strong></li>
            <li>run "Qt Creator" from the Start menu. Like in the picture:</li>
            <img src="img/cppMyFirstProject/001.png"/>
            <br />
            <br />
            <li>in the menu select "File" -> "New File or Project..."</li>
            <li>in the "Project" field select "Other Project" -> in second column select "Empty Qt Project". Like in the picture:</li>
            <img src="img/cppMyFirstProject/002.png" />
            <br />
            <br />
            <li>in the "Name" field write: HelloCpp -> click button "Browse..." -> select a location for your project -> click the button "Next". Like on the picture:</li>
            <img src="img/cppMyFirstProject/003.png" />
            <br />
            <br />
            <li>click "Next" -> click "Finish"</li>
            <li>right click on project name -> select "Add New...". Like on the picture:</li>
            <img src="img/cppMyFirstProject/004.png" />
            <br />
            <br />
            <li>in first column select "C++" -> in second column "Source File" -> click the button "Chouse". Like on the picture:</li>
            <img src="img/cppMyFirstProject/005.png" />
            <br />
            <br />
            <li>in the "Name" field write: main.cpp -> click the button "Next" -> click the button "Finish"</li>
            <li>copy and past following code to the file "main.cpp":</li>
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
            <li>for running application click "Green Triangle". Like on the picture:</li>
            <img src="img/cppMyFirstProject/006.png" />
            <br />
            <br />
            <li>or press F5</li>
            <li>you can see the result of working of the application in the "Application Output" window:</li>
            <img src="img/cppMyFirstProject/007.png" />
        </ul>
    </body>
</html>
