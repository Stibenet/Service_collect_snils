<?php
require "config.php";
require "vendor/autoload.php";

use Models\Database;
$dt = new Database();

//Users::addUser(2, "College", "1234");

if ($_COOKIE['user'] == '') {
    header('Location: /login.php');
} else {
    ?>
    <div><p>Вы авторизованы <?= $_COOKIE['user'] ?>. Чтобы выйти нажмите <a href="/exit.php">здесь</a></p></div>

    <div align="center" style="margin-top: 250px">
        <div>Добавление файла. Формат файла XLS, CSV</div>
        <div id="messageShow"></div>
        <div>
            <form action="file_processing.php" enctype="multipart/form-data" method="post">
                <p><input type="file" id="uploaded_file" name="file">
                    <input type="submit" id="upload_btn" value="Отправить"></p>
            </form>
        </div>
    </div>
<?php } ?>
