<h2>Панель управления системного администратора</h2>

<?php if (!empty($message)): ?>
    <p style="color: green; font-weight: bold; text-align: center;">
        <?= $message ?>
    </p>
<?php endif; ?>

<div style="display: flex; width: 90%; gap: 100px; align-items: flex-start; justify-content: center;">

    <form class="signup-form" method="post" action="<?= app()->route->getUrl('/admin/department/add') ?>">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <h3 style="font-size: 26px">Подразделение</h3>
        <input type="text" name="name" placeholder="Название" required>
        <input type="text" name="department_type" placeholder="Вид (отдел/кафедра)" required>
        <button type="submit">Добавить</button>
    </form>

    <form class="signup-form" method="post" action="<?= app()->route->getUrl('/admin/room/add') ?>">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <h3 style="font-size: 26px">Помещение</h3>
        <select name="department_id" style="background-color: #f9fff2; border: 1px solid black; width: 70%; height: 60px; border-radius: 15px;" required>
            <option value="">Подразделение</option>
            <?php foreach ($departments as $dep): ?>
                <option value="<?= $dep->id ?>"><?= $dep->name ?></option>
            <?php endforeach; ?>
        </select>
        <input type="text" name="name" placeholder="Номер/Название" required>
        <input type="text" name="room_type" placeholder="Вид (кабинет)" required>
        <button type="submit">Добавить</button>
    </form>

    <form class="signup-form" method="post" action="<?= app()->route->getUrl('/admin/phone/add') ?>">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <h3 style="font-size: 26px">Телефон</h3>
        <input type="text" name="phone_number" placeholder="Номер телефона" required>
        <select name="room_id" style="background-color: #f9fff2; border: 1px solid black; width: 70%; height: 60px; border-radius: 15px;" required>
            <option value="">Помещение</option>
            <?php foreach ($rooms as $room): ?>
                <option value="<?= $room->id ?>"><?= $room->name ?></option>
            <?php endforeach; ?>
        </select>
        <select name="user_id" style="background-color: #f9fff2; border: 1px solid black; width: 70%; height: 60px; border-radius: 15px;">
            <option value="">Абонент</option>
            <?php foreach ($users as $user): ?>
                <option value="<?= $user->id ?>"><?= $user->surname ?> <?= $user->name ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Привязать</button>
    </form>
</div>