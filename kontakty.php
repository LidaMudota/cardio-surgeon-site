<?php
require __DIR__ . '/includes/init.php';
$meta = [
    'title' => 'Контакты — кардиохирург',
    'description' => 'Способы связи, адрес клиники, график и карта проезда. Запись через форму на сайте.'
];
$pageTitle = 'Контакты';
$pageSubtitle = 'Способы связи, адрес клиники, график и карта проезда.';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
?>

    <section class="inner-section"><div class="container inner-grid">
        <article class="info-card"><h2>Телефон</h2><p>+7 (000) 000-00-00</p><p><!-- TODO: Вставить реальный номер телефона --></p></article>
        <article class="info-card"><h2>Email</h2><p>info@example.com</p><p><!-- TODO: Вставить реальный email --></p></article>
        <article class="info-card"><h2>Адрес</h2><p>г. Москва, ул. Примерная, д. 1</p><p><!-- TODO: Вставить реальный адрес --></p></article>
    </div></section>
    <section class="inner-section"><div class="container two-col">
      <div class="info-card"><h2>График и мессенджеры</h2><p>Пн–Сб: 09:00–20:00. <!-- TODO: Вставить реальные ссылки на соцсети/мессенджеры --></p></div>
      <div class="media-placeholder">TODO: Вставить реальные данные для карты</div>
    </div></section>

<?php if (true):
    $formTitle = 'Записаться на консультацию';
    $formSubtitle = 'Оставьте контакты, и администратор свяжется с вами.';
    require __DIR__ . '/includes/form-block.php';
endif; ?>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
