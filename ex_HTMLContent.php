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

        <h1 class="content">Get HTML content and write it on the screen</h1>

        <p><strong>HTMLContent.pro</strong></p>
        <pre>
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
        
        <p><strong>NetworkManager.h</strong></p>
        <pre>
<code class="language-cpp">
#ifndef NETWORKMANAGER_H
#define NETWORKMANAGER_H

#include <memory>
#include <string>
#include <QObject>
#include <QString>
#include <QNetworkAccessManager>
#include <QNetworkReply>
#include <QNetworkRequest>

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

        <p><strong>Receiver.h</strong></p>
        <pre>
<code class="language-cpp">
#ifndef RECEIVER_H
#define RECEIVER_H

#include <QDebug>

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

        <p><strong>main.cpp</strong></p>
        <pre>
<code class="language-cpp">

#include <QCoreApplication>
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
