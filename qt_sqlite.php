<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Database SQLite in Qt C++</title>
    </head>
    <body>
        <?php
        require 'libs.inc.php';
        require 'menu.inc.php';
        ?>

        <h1>Database SQLite in Qt C++</h1>

        <h3>Tools</h3>
        <ul>
            <li>SDK Qt 5.2.0</li>
            <li>ОС Windows 7</li>
        </ul>

        <p>Note. The instruction is base on video: <a href="http://www.youtube.com/watch?v=cc06D3wuTn4">http://www.youtube.com/watch?v=cc06D3wuTn4</a></p>

        <h3>Instruction</h3>
        <ul>
            <li>open the browser Mozilla Firefox</li>
            <li>in menu of the browser select "Web Developer" -> select "SQLite Manager"</li>
            <li>in menu of "SQLite Manager" select "Database" -> select "New Database"</li>
            <li>in opened window write the name of the database, for example: Accounts</li>

            <p>Note. Path to database must be equal QDir::currentPath()</p>

            <li>in menu select "Table" -> select "Create Table"</li>

            <li>fill the form how in the picture:</li>
            <img src="img/qt_sqlite/001.png" />

            <li>fill the table how in the picture:</li>
            <li>заполняем таблицу, как показано на рисунке:</li>
            <img src="img/qt_sqlite/002.png" />

            <li>run Qt Creator</li>
            <li>in menu of Qt Creator select "File" -> select "New File or Project..." (or Ctrl+N)</li>
            <li>in "Projects" select "Applications" -> in second column select "Qt Widgets Application"</li>
            <li>click the button "Choose"</li>
            <li>in the field "Name" write: DatabaseLoginForm and click the button "Next" (two times)</li>
            <li>in the field "Base Class" select QDialog -> click the button "Next" -> click the button "Finish"</li>
            <li>download the source code of the project (a button "Download ZIP" on the right bottom): <a href="https://github.com/8Observer8/DatabaseLoginForm">https://github.com/8Observer8/DatabaseLoginForm</a></li>
            <li>replace the files of the current project with the downloaded files</li>
            <li>click Ctrl+R for run the project</li>
        </ul>
    </body>
</html>
