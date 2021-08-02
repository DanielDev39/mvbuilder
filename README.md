# MVBuilder - Create applications with PHP using MVC

MVBuilder is a little library that help you to create MVC applications. By following our standard, you can keep code organized and simple. With this library, you will be able to develop APIs or applications with PHP and HTML.

Let's start!

## STEP 1 - Clone the repository
~~~
$ git clone https://github.com/DanielDev39/mvbuilder.git
~~~
## STEP 2 - Run composer dump-autoload
~~~
$ composer dump-autoload
~~~
## STEP 3 - Include autoload file
~~~php
include_once 'vendor/autoload.php';
~~~

## All right! Let's develop

### Using database
To change the environment variables, go to MVBuilder/Core/Dev/Env.php and Change the Abstract Class Constants

- Use class Squil
~~~php
use MVBuilder\Database\Squil;

$db = new Squil;~

// To performe a query use:
$sql = $db->query("SELECT * FROM users");
$data = $sql->fetchAll();
// Execute using SQL Injection defense
$sql = $db->execQuery("SELECT * FROM users WHERE email = ? AND password = ?", ['example@mail.com', '12345']);
echo $sql->rowCount();
~~~

NOTE: We are developing this library little by little. Be patient!