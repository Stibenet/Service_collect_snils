<div align="center" style="margin-top: 250px">
    <?php
        if ($_COOKIE['user'] == ''):
    ?>
    <div>
        <h3>Авторизация</h3>
    </div>
    <div>
        <form action="auth.php" method="post">
            Логин: <input type="text" name="auth_name"><br>

            Пароль: <input type="password" name="auth_pass"><br>

            <input type="submit"><br>
        </form>
    </div>
    <?php else: ?>
        <p>Вы авторизованы <?= $_COOKIE['user'] ?>. Чтобы выйти нажмите <a href="/exit.php">здесь</a> </p>
        <p><a href="/index.php">Перейти на главную</a> </p>
    <?php endif; ?>
</div>