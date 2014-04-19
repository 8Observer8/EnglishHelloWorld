<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'menu.inc.php';
        require 'libs.inc.php';
        ?>

        <h1>My First Project in Java</h1>

        <h3>Instruction</h3>
        <ul>
            <li>Install NetBeans IDE. See instruction: <a href="installing_netbeans.php">Instulling NetBeans</a></li>
            <li>Run NetBeans</li>
            <li>In the "Menu", select "File" -> "New Project..."</li>
            <li>In the "Categories" field, select "Java" -> in the "Projects" field, select "Java Application" -> click the button "Next". Like on the picture:</li>
            <img src="img/myFirstProjectInJava/001.png" />
            <br />
            <br />
            <li>In the "Project Name" field, write: HelloWorld -> click the button "Browse..." -> select a location for your project -> click the button "Finish", like on the picture:</li>
            <img src="img/myFirstProjectInJava/002.png" />
            <br />
            <br />
            <li>Copy and paste following code to the file "HelloWorld.java":</li>
            <p><strong>HelloWorld.java</strong></p>
            <pre>
<code class="language-java">
package helloworld;

public class HelloWorld {

    public static void main(String[] args) {
        System.out.println("Hello World");
    }

}</code>
            </pre>
            <li>For running application, click "Green Triangle", like on the picture:</li>
            <img src="img/myFirstProjectInJava/003.png" />
            <br />
            <br />
            <li>Or press F6</li>
            <li>You can view the result of working of the application in the "Output" window:</li>
            <img src="img/myFirstProjectInJava/004.png" />
        </ul>
    </body>
</html>
