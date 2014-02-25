<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Git</title>
    </head>
    <body>
        <?php
        require 'libs.inc.php';
        require 'menu.inc.php';
        ?>

        <h1>Git</h1>

        <h3>How to save files of a project to remote server (github.com)</h3>
        <ul>
            <li>register on <a href="https://github.com/">https://github.com/</a></li>
            <li>create a new repository for save a project, for this: in top-right corner click on "+" -> select "New repository"</li>
            <li>in the text field "Repository name" write a name for a project, for example: HelloGit</li>
            <li>in the text field "Description" write a desription of a project, for example: My first project</li>
            <li>click the button "Create repository"</li>
            <li>download and install Git: <a href="http://msysgit.github.io/">http://msysgit.github.io/</a></li>
            <li>write a name and an email, for this run a terminal and write commands:</li>
            <ul>
                <li>git config --global user.name "Your Name"</li>
                <li>git config --global user.email "your_email@whatever.com"</li>
            </ul>
            <li>write ends for lines, for this write commmands:</li>
            <ul>
                <li>git config --global core.autocrlf true</li>
                <li>git config --global core.safecrlf true</li>
            </ul>
            <p>Note. Your name and ends for lines are written one time before installing Git</p>
            
            <p>For working with terminal I recommend to download and install Far Manager: <a href="http://www.farmanager.com/download.php">http://www.farmanager.com/download.php</a></p>

            <li>run Far Manager</li>
            <li>go to the project folder by Far Manager</li>
            
            <p>Let us suppose that we have three files in our project folder: main.cpp, person.h, person.cpp</p>
            
            <p>Note. For switching between "file navigation" and "terminal output" you need to use Ctrl+O</p>

            <li>click Ctrl+O</li>
            <li>create file .gitignore in the project folder</li>
            <li>open .gitignore and write:</li>
            <p>
                *.user.pro<br />
                *.txt
            </p>
            
            <li>run commands:</li>
            <ul>
                <li>git init</li>
                <li>git add .gitignore</li>
                <li>git add .</li>
            </ul>
            
            <p>Note. We can see current status of our files in any time. For this you need to run: git status</p>

            <li>save the project files on a remote repository, for this run commands:</li>
            <ul>
                <li>git commit -am "First Commit"</li>
                <li>git branch</li>
                <li>git remote -v</li>
            </ul>

            <p>Note. For next command you need to write your repository link</p>
            <ul>
                <li>git push https://github.com/8Observer8/HelloGit.git refs/heads/master:refs/heads/master</li>
            </ul>

            <li>write a login and a password</li>

            <p>The project was saved on: <a href="https://github.com/">https://github.com/</a></p>

            <p>Change project files and save them on <a href="https://github.com/">https://github.com/</a></p>

            <li>git commit -m "Добавил строку для вывода \"Hello, World!\" на экран" main.cpp</li>
            <li>git branch</li>
            <li>git remote -v</li>
            <li>git push https://github.com/8Observer8/HelloGit.git refs/heads/master:refs/heads/master</li>

            <p>Add a new branch of the project:</p>
            <li>git checkout -b MyStyle</li>

            <p>Note. If in Qt Creator you don't see a branch name (after a project name) you need to restart Qt Creator</p>

            <p>Notes</p>
            <ol>
                <li>Instead of the previous command you can to write next:</li>
                <ul>
                    <li>git branch <branchname></li>
                    <li>git checkout <branchname></li>
                    <p>see also: <a href="http://githowto.com/ru/creating_a_branch">http://githowto.com/ru/creating_a_branch</a></p>
                </ul>

                <li>We can switch between branches:</li>
                <ul>
                    <li>git checkout master</li>
                    <li>git checkout MyStyle</li>
                </ul>

                <li>We can know a list of branches:</li>
                <ul>
                    <li>git branch</li>
                </ul>

                <li>We can remove a file from git:</li>
                <ul>
                    <li>git rm file1.txt</li>
                    <li>git commit -am "remove file1.txt"</li>
                </ul>

                <li>We can see file names of a branch (master is a name of a branch):</li>
                <ul>
                    <li>git ls-tree -r master --name-only</li>
                </ul>
            </ol>

            <p>Let us suppose that we remoted some files, added some one's, and changed some one's.</p>
            <li>git rm shape.cpp circle.cpp</li>
            <li>git add rectangle.h</li>

            <p>
                Removed: shape.cpp, circle.cpp<br />
                Added: rectangle.h<br />
                Changed: main.cpp, shape.h, circle.h, rectangle.h<br />
            </p>

            <li>git commit -am "Removed: shape.cpp circle.cpp. Added: rectangle.h. Changed: main.cpp, shape.h, circle.h, rectangle.h"</li>

            <p>Save the new branch on the remote repository</p>

            <ul>
                <li>git branch</li>
                <li>git remote -v</li>
                <li>git push https://github.com/8Observer8/HelloGit.git refs/heads/MyStyle:refs/heads/MyStyle</li>
            </ul>

            <p>Note. In previous command you need to write a name of a branch: refs/heads/MyStyle:refs/heads/MyStyle</p>

            <li>write a login and a password</li>
            <p>New branch was saved on <a href="https://github.com/">https://github.com/</a></p>
        </ul>

        <p>About Git: <a href="http://githowto.com/">http://githowto.com/</a></p>

        <p>Обратная связь: 8observer8@gmail.com</p>
    </body>
</html>
