
                     
                     
   
                                         Common configuration:
        1. Download or make pull from: git@github.com:StanislavRybonka/Guest-Book.git;
        2. Create directory on your local server, put files of project into this directory;
            Tips: - Name of directory should be like this (guest.book.info or guest.book.com)
                 -  Use this name  later, like name of localhost, and call him in browser
                       guest.book.info for example
                                        Server configuration:
       1. Add record: 127.0.0.1 guest.book.info (for example);
             for Linux: /etc/hosts;
             for Windows: C:\Windows\System32\drivers\etc\hosts
       2. Make site accessible in browser:
              for Linux: server LEMP or LAMP
                   - you should create file in site available folder, give name him, guest.book.info;
                    - copy this file into site enabled folder;
                    - reload server;
                    - tips for beginners: http://newwebmaster.ru/2014/07/nginx-mysql-php-lemp-ubuntu-1404.html;
              for Windows: openServer and like that
                   - in interface, give name for domen;
                   - specify path to project;
                   - reload server;
                  - tips for beginners:http://open-server.ru/docs/;
                                        DataBase Configuration:
         1. import database from db folder, file: guest_book_info.sql;
         2. Should pay attention for personal configuration of MySql, check user name and password,
            folder config/db_params.php

  
                                                 Resume
         1. Now You can try call this project in browser like that guest.book.info;
