<?php
require __DIR__ . '/includes/init.php';
$meta = ['title' => 'Согласие на обработку персональных данных', 'description' => 'Согласие пользователя на обработку персональных данных.'];
$pageTitle = 'Согласие на обработку персональных данных';
$pageSubtitle = 'Подтверждение согласия пользователя при отправке формы на сайте.';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
?>
<section class="inner-section"><div class="container info-card">
<p>Отправляя форму на сайте, пользователь подтверждает согласие на обработку персональных данных.</p>
<p>Согласие действует до достижения цели обработки или до момента отзыва.</p>
<p>Пользователь вправе отозвать согласие по письменному обращению. <!-- TODO: Вставить юридические реквизиты --></p>
</div></section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
