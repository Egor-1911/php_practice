<h2>Справочник администратора</h2>

<div class="directory-page">

    <div class="directory-section">
        <h3>Подразделения</h3>

        <?php if (count($departments)): ?>
            <div class="directory-list">
                <?php foreach ($departments as $department): ?>
                    <div class="directory-card">
                        <p><span>ID:</span> <?= $department->id ?></p>
                        <p><span>Название:</span> <?= $department->name ?></p>
                        <p><span>Тип:</span> <?= $department->department_type ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="empty-message">Подразделения отсутствуют</p>
        <?php endif; ?>
    </div>

    <div class="directory-section">
        <h3>Помещения</h3>

        <?php if (count($rooms)): ?>
            <div class="directory-list">
                <?php foreach ($rooms as $room): ?>
                    <div class="directory-card">
                        <p><span>ID:</span> <?= $room->id ?></p>
                        <p><span>ID подразделения:</span> <?= $room->department_id ?></p>
                        <p><span>Название:</span> <?= $room->name ?></p>
                        <p><span>Тип:</span> <?= $room->room_type ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="empty-message">Помещения отсутствуют</p>
        <?php endif; ?>
    </div>

    <div class="directory-section">
        <h3>Телефоны</h3>

        <?php if (count($phones)): ?>
            <div class="directory-list">
                <?php foreach ($phones as $phone): ?>
                    <div class="directory-card">
                        <p><span>ID:</span> <?= $phone->id ?></p>
                        <p><span>ID пользователя:</span> <?= $phone->user_id ?: '—' ?></p>
                        <p><span>ID помещения:</span> <?= $phone->room_id ?></p>
                        <p><span>Номер:</span> <?= $phone->phone_number ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="empty-message">Телефоны отсутствуют</p>
        <?php endif; ?>
    </div>

</div>