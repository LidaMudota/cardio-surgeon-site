<?php
http_response_code(404);
require __DIR__ . '/includes/init.php';
$meta = ['title' => '404 — страница не найдена', 'description' => 'Запрашиваемая страница не найдена.'];
$pageTitle = 'Страница не найдена';
$pageSubtitle = 'Проверьте адрес страницы или воспользуйтесь навигацией.';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
?>
<section class="inner-section"><div class="container info-card">
<p>Ошибка 404. Возможно, страница была перемещена или удалена.</p>
<a class="button button--accent" href="index.php">На главную</a>
<a class="button button--ghost" href="kontakty.php">В контакты</a>
</div></section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
