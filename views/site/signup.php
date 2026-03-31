<h2>Регистрация нового пользователя</h2>
<pre><?= $message ?? ''; ?></pre>

<form class="signup-form" method="post">

    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>

    <input type="text" name="surname" placeholder="Фамилия">
    <input type="text" name="name" placeholder="Имя">
    <input type="text" name="patronymic" placeholder="Отчество">
    <input type="date" name="birth">
    <input type="text" name="login" placeholder="Логин">
    <input type="password" name="password" placeholder="Пароль">
    <button>Зарегистрироваться</button>
</form>