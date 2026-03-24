<h2>Регистрация нового пользователя</h2>
<h3><?= $message ?? ''; ?></h3>
<form class="signup-form" method="post">
    <input type="text" name="surname" placeholder="Фамилия">
    <input type="text" name="name" placeholder="Имя">
    <input type="text" name="patronymic" placeholder="Отчество">
    <input type="date" name="birth">
    <input type="text" name="login" placeholder="Логин">
    <input type="password" name="password" placeholder="Пароль">
    <button>Зарегистрироваться</button>
</form>
