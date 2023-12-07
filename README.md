# School-Management-System
FYP Develop using ( PHP. HTML, CSS, JS , BOOTSTRAP).
Cogdeigniter Version Comming Soon........

### New Version
In versions of PHP 7 or greater, mysql_* functions have two alternatives: [MYSQLi](https://www.php.net/manual/en/book.mysqli.php) and [PDO](https://www.php.net/manual/en/book.pdo.php). mysqli_*, are used in this project.

## GETTING STARTED
+ Clone Repo Using Following link.
```cmd
git clone https://github.com/jazib-bashir/School-Management-System.git
````
+ Create Database in PHPmyadmin
+ change connect.php with your credentials and DB name as following:
  - connect.php avaible in connect folder.
```php
  <?php
  	mysql_connect("localhost","your username","your password") or die("No Connection");
  	mysql_select_db("DB-Name") or die("No Database name");
  ?>
```

+ Now open Database.sql file which include scripr run this scipt in your newely created DB
+ Or you can open phpmyadmin create a new database and import the Database.sql in it.

ALL DONE.
