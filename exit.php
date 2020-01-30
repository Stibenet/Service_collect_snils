<?php
setcookie('user', $value->login, time() - 1800, '/');
header('Location: /login.php');