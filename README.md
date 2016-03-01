# Cwalk

the Cwalk is an open source learning project. It is  designed as a fun way to check your knowledge of the C programming language.

If you want to install it on your server, you need to create a mysql DB, containing two tables "users" and "pages". 
(check the DB_schema to see the detail of the tables).

Register your app with Github if you want to be able to authenticate with the OAuth2 Authentification API from Github.
Save your creadentials in the config file from your web server (the initial Cwalk is run on apache for instance).
And save the password of your DB also in the config file of your server so that it could be accessible from the mysql_connect.php file.

Happy C (and PHP! ) programming!


