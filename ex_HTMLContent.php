<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HTMLContent</title>
    </head>
    <body>
        <?php
        require 'libs.inc.php';
        require 'menu.inc.php';
        ?>

        <br />
        <h1 class="content">Get HTML content and write it on the screen</h1>
        
        <br />
        <p class="content">Note. You need to install OpenSSL or put these three file at exe:</p>

        <br />
        <ul class="content">
            <li>libeay32.dll</li>
            <li>msvcr90.dll</li>
            <li>ssleay32.dll</li>
        </ul>

        <br />
        <p class="content">You can download them from here: <a href="https://drive.google.com/folderview?id=0Bx0tUxTiRS9AaHlkZ1RuTTRjOFU&usp=sharing">link</a></p>

        <br />
        <p class="content"><strong>HTMLContent.pro</strong></p>
        <pre class="content">
<code class="language-cpp">
QT       += core network

QT       -= gui

QMAKE_CXXFLAGS += -std=c++11

TARGET = HTMLContent
CONFIG   += console
CONFIG   -= app_bundle

TEMPLATE = app


SOURCES += main.cpp

HEADERS += \
    NetworkManager.h \
    Receiver.h
</code>
        </pre>
        
        <p class="content"><strong>NetworkManager.h</strong></p>
        <pre class="content">
<code class="language-cpp">
#ifndef NETWORKMANAGER_H
#define NETWORKMANAGER_H

#include &lt;memory&gt;
#include &lt;string&gt;
#include &lt;QObject&gt;
#include &lt;QString&gt;
#include &lt;QNetworkAccessManager&gt;
#include &lt;QNetworkReply&gt;
#include &lt;QNetworkRequest&gt;

class NetworkManager : public QObject
{
    Q_OBJECT

public:

    NetworkManager( )
    {
        m_manager = std::unique_ptr<QNetworkAccessManager>( new QNetworkAccessManager( this ) );
    }

    void fetch( const QString &url )
    {
        // Start fetching
        m_reply.reset( m_manager->get( QNetworkRequest( QUrl( url ) ) ) );
        connect( m_reply.get( ), SIGNAL( finished( ) ),
                 this, SLOT( replyFinished( ) ) );
    }

signals:
    void signalWithContent( const QString content );

private slots:
    void replyFinished( )
    {
        QByteArray data = m_reply->readAll( );
        QString content( data );
        signalWithContent( content );
    }

private:
    std::unique_ptr<QNetworkReply> m_reply;
    std::unique_ptr<QNetworkAccessManager> m_manager;
};

#endif // NETWORKMANAGER_H
</code>
        </pre>

        <p class="content"><strong>Receiver.h</strong></p>
        <pre class="content">
<code class="language-cpp">
#ifndef RECEIVER_H
#define RECEIVER_H

#include &lt;QDebug&gt;

class Receiver : public QObject
{
    Q_OBJECT

public slots:
    void showContent( const QString &content )
    {
        qDebug() << content;
    }
};

#endif // RECEIVER_H
</code>
        </pre>

        <p class="content"><strong>main.cpp</strong></p>
        <pre class="content">
<code class="language-cpp">

#include &lt;QCoreApplication&gt;
#include "NetworkManager.h"
#include "Receiver.h"

int main(int argc, char *argv[])
{
    QCoreApplication a(argc, argv);

    NetworkManager manager;
    Receiver receiver;

    QObject::connect( &manager, SIGNAL( signalWithContent( QString ) ),
                      &receiver, SLOT( showContent( QString ) ) );

    manager.fetch( "http://www.gokgs.com" );

    return a.exec();
}
</code>
        </pre>
    </body>
</html>
