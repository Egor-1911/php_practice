<h2>Панель управления системного администратора</h2>

<div style="display: flex; gap: 30px; flex-wrap: wrap; align-items: flex-start; justify-content: center;">

    <!-- Подразделения -->
    <div class="signup-form" style="width: 300px; padding: 20px;">
        <h3>Подразделение</h3>
        <form method="post" action="/admin/add_department">
            <input type="text" name="name" placeholder="Название" required>
            <input type="text" name="department_type" placeholder="Вид (отдел/кафедра)" required>
            <button>Добавить</button>
        </form>
    </div>

    <!-- Помещения -->
    <div class="signup-form">
        <h3>Помещение</h3>
        <form method="post" action="/admin/add_room">
            <select name="department_id" style="width: 70%; height: 60px; border-radius: 15px;">
                <?php foreach ($departments as $dep): ?>
                    <option value="<?= $dep->id ?>"><?= $dep->name ?></option>
                <?php endforeach; ?>
            </select>
            <input type="text" name="name" placeholder="Номер/Название" required>
            <input type="text" name="room_type" placeholder="Вид (кабинет)" required>
            <button>Добавить</button>
        </form>
    </div>

    <!-- Телефоны -->
    <div class="signup-form">
        <h3>Телефон</h3>
        <form method="post" action="/admin/add_phone">
            <input type="text" name="phone_number" placeholder="Номер телефона" required>
            <select name="room_id" style="width: 70%; height: 60px; border-radius: 15px;">
                <?php foreach ($rooms as $room): ?>
                    <option value="<?= $room->id ?>"><?= $room->name ?></option>
                <?php endforeach; ?>
            </select>
            <select name="user_id" style="width: 70%; height: 60px; border-radius: 15px;">
                <option value="">Без абонента</option>
                <?php foreach ($users as $user): ?>
                    <option value="<?= $user->id ?>"><?= $user->surname ?> <?= $user->name ?></option>
                <?php endforeach; ?>
            </select>
            <button>Привязать</button>
        </form>
    </div>
</div>
