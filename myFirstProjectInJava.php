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
            <li>install NetBeans IDE. See instruction: <a href="installing_netbeans.php">Instulling NetBeans</a></li>
            <li>run NetBeans</li>
            <li>select in the menu "File" -> "New Project..."</li>
            <li>in the "Categories" field select "Java" -> in the "Projects" field select "Java Application" -> click the button "Next". Like on the picture:</li>
            <img src="img/javaMyFirstProject/001.png" />
            <br />
            <br />
            <li>in the "Project Name" field write: HelloWorld -> click button "Browse..." -> select a location for your project -> click the button "Finish". Like on the picture:</li>
            <img src="img/javaMyFirstProject/002.png" />
            <br />
            <br />
            <li>copy and past following code to the file "HelloWorld.java":</li>
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
            <li>for running application click "Green Triangle". Like on the picture:</li>
            <img src="img/javaMyFirstProject/003.png" />
            <br />
            <br />
            <li>or press F6</li>
            <li>you can see the result of working of the application in the "Output" window:</li>
            <img src="img/javaMyFirstProject/004.png" />
        </ul>
    </body>
</html>
