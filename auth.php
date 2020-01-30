<?php
require "config.php";
require "vendor/autoload.php";

use Models\Database;
use Controllers\Users;

$dt = new Database();

$query = Users::getUser();

$login = filter_var(trim($_POST['auth_name']));
$pass = filter_var(trim($_POST['auth_pass']));

$result = 0;
foreach ($query as $value) {
    if ($value->login == $login && $value->password == $pass) {
        setcookie('user', $value->login, time() + 1800, '/');
    }
}
header('Location: /login.php');
?>


