<h2>Мои номера телефона</h2>

<div class="directory-page">

    <div class="directory-section">
        <h3> <?= ($user->name ?? '') ?> <?=($user->surname ?? '') ?></h3>

        <?php if (count($phones)): ?>
            <div class="directory-list">
                <?php foreach ($phones as $phone): ?>
                    <div class="directory-card">
                        <p><span>Номер:</span> <?= htmlspecialchars($phone->phone_number) ?></p>

                        <?php if ($phone->room): ?>
                            <p><span>Помещение:</span> <?= htmlspecialchars($phone->room->name ?? '—') ?></p>

                            <?php if ($phone->room->department): ?>
                                <p><span>Подразделение:</span> <?= htmlspecialchars($phone->room->department->name ?? '—') ?></p>
                            <?php endif; ?>
                        <?php else: ?>
                            <p><span>Помещение:</span> <span>Не указано</span></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="empty-message">У вас пока нет закреплённых номеров телефона</p>
        <?php endif; ?>
    </div>

</div>